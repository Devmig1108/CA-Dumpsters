<?php
declare(strict_types=1);

// process-quote.php

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
| IMPORTANT:
| 1. Use your Turnstile SECRET key here, not the public site key.
| 2. Generate a new ZeptoMail token because the previous one was exposed.
*/

$turnstileSecret = '0x4AAAAAAEqguL4EKw2qkYpgeKBnOlBfexY';
$zeptoMailToken  = 'Zoho-enczapikey wSsVR60l/hTwXP11nTb7drw/n1kDBlqgQ0502ASovyCvG6iT9sdoxEzHUQ/0SvdKFDVpFjcQ9bgtnRcG1TsGidoumwkDASiF9mqRe1U4J3x17qnvhDzOWGVdkRqLJIwLwQtqmGBgEMEr+g==';

$verifiedSenderEmail  = 'info@ca-dumpsters.com';
$clientRecipientEmail = 'ca.dumpsters.ep@gmail.com';

$allowedTurnstileHostnames = [
    'ca-dumpsters.com',
    'www.ca-dumpsters.com',
];

/*
|--------------------------------------------------------------------------
| Helper functions
|--------------------------------------------------------------------------
*/

function stopRequest(string $message, int $statusCode = 422): void
{
    http_response_code($statusCode);
    header('Content-Type: text/plain; charset=UTF-8');
    exit($message);
}

function getPostValue(string $field, int $maxLength = 500): string
{
    if (!isset($_POST[$field]) || !is_string($_POST[$field])) {
        return '';
    }

    $value = trim($_POST[$field]);

    // Remove null bytes and other unexpected control characters.
    $value = str_replace("\0", '', $value);

    if (strlen($value) > $maxLength) {
        $value = substr($value, 0, $maxLength);
    }

    return $value;
}

function escapeHtml(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

/*
|--------------------------------------------------------------------------
| Require a POST request
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

/*
|--------------------------------------------------------------------------
| Honeypot check
|--------------------------------------------------------------------------
| Humans should never fill this field.
*/

if (getPostValue('company_website', 255) !== '') {
    // Silently treat the bot submission as successful.
    header('Location: /thank-you.html');
    exit;
}

/*
|--------------------------------------------------------------------------
| Cloudflare Turnstile verification
|--------------------------------------------------------------------------
*/

$turnstileToken = getPostValue('cf-turnstile-response', 2048);

if ($turnstileToken === '') {
    stopRequest(
        'Please complete the security verification and try again.'
    );
}

$turnstilePostData = [
    'secret'   => $turnstileSecret,
    'response' => $turnstileToken,
];

if (!empty($_SERVER['REMOTE_ADDR'])) {
    $turnstilePostData['remoteip'] = $_SERVER['REMOTE_ADDR'];
}

$turnstileCurl = curl_init(
    'https://challenges.cloudflare.com/turnstile/v0/siteverify'
);

if ($turnstileCurl === false) {
    error_log('Unable to initialize Turnstile cURL request.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

curl_setopt_array($turnstileCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($turnstilePostData),
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded',
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 10,
]);

$turnstileResponse  = curl_exec($turnstileCurl);
$turnstileHttpCode  = (int) curl_getinfo(
    $turnstileCurl,
    CURLINFO_HTTP_CODE
);
$turnstileCurlError = curl_error($turnstileCurl);

curl_close($turnstileCurl);

if ($turnstileResponse === false || $turnstileHttpCode !== 200) {
    error_log(
        'Turnstile connection error: ' .
        ($turnstileCurlError !== ''
            ? $turnstileCurlError
            : 'HTTP status ' . $turnstileHttpCode)
    );

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileResult = json_decode($turnstileResponse, true);

if (!is_array($turnstileResult)) {
    error_log('Turnstile returned an invalid JSON response.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileSuccess  = ($turnstileResult['success'] ?? false) === true;
$turnstileAction   = (string) ($turnstileResult['action'] ?? '');
$turnstileHostname = strtolower(
    (string) ($turnstileResult['hostname'] ?? '')
);

$turnstilePassed =
    $turnstileSuccess &&
    $turnstileAction === 'quote_form' &&
    in_array(
        $turnstileHostname,
        $allowedTurnstileHostnames,
        true
    );

if (!$turnstilePassed) {
    $turnstileErrors = $turnstileResult['error-codes'] ?? [];

    if (!is_array($turnstileErrors)) {
        $turnstileErrors = ['unknown'];
    }

    error_log(
        'Turnstile verification failed. Hostname: ' .
        $turnstileHostname .
        '; action: ' .
        $turnstileAction .
        '; errors: ' .
        implode(', ', $turnstileErrors)
    );

    stopRequest(
        'Security verification failed. Please refresh the page and try again.'
    );
}

/*
|--------------------------------------------------------------------------
| Capture and validate form fields
|--------------------------------------------------------------------------
*/

$name        = getPostValue('name', 100);
$email       = getPostValue('email', 254);
$phone       = getPostValue('phone', 40);
$projectType = getPostValue('project_type', 100);
$message     = getPostValue('message', 3000);
$leadSource  = getPostValue('lead_source', 100);

if ($message === '') {
    $message = 'No additional details provided.';
}

if ($leadSource === '') {
    $leadSource = 'Organic Website Lead';
}

if (
    $name === '' ||
    $email === '' ||
    $phone === '' ||
    $projectType === ''
) {
    stopRequest('Please fill out all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    stopRequest('Please enter a valid email address.');
}

// Only accept project types that exist in the form.
$allowedProjectTypes = [
    'Residential Cleanout',
    'Roofing',
    'Construction',
    'Other',
];

if (!in_array($projectType, $allowedProjectTypes, true)) {
    stopRequest('Please select a valid project type.');
}

/*
|--------------------------------------------------------------------------
| Escape values for the HTML email
|--------------------------------------------------------------------------
*/

$safeName        = escapeHtml($name);
$safeEmail       = escapeHtml($email);
$safePhone       = escapeHtml($phone);
$safeProjectType = escapeHtml($projectType);
$safeMessage     = nl2br(escapeHtml($message));
$safeLeadSource  = escapeHtml($leadSource);

/*
|--------------------------------------------------------------------------
| Construct the email
|--------------------------------------------------------------------------
*/

$htmlBody = <<<HTML
<h2>New Website Inquiry</h2>

<p>A new lead has requested a quote or information from CA Dumpsters.</p>

<table style="width:100%; border-collapse:collapse; max-width:600px;">
    <tr style="background-color:#f8fafc;">
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee; color:#16a34a;">
            Lead Source:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee; font-weight:bold; color:#16a34a;">
            {$safeLeadSource}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Name:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safeName}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Email:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safeEmail}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Phone:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safePhone}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Project Type:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safeProjectType}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; vertical-align:top;">
            Message:
        </th>
        <td style="padding:10px;">
            {$safeMessage}
        </td>
    </tr>
</table>

<p style="margin-top:20px; font-size:0.9em; color:#666;">
    <em>
        You can respond to {$safeName} using the email address or phone
        number provided above.
    </em>
</p>
HTML;

$textBody =
    "Source: {$leadSource}\n" .
    "New Website Inquiry\n" .
    "Name: {$name}\n" .
    "Phone: {$phone}\n" .
    "Email: {$email}\n" .
    "Project Type: {$projectType}\n" .
    "Message: {$message}";

/*
|--------------------------------------------------------------------------
| Prepare the ZeptoMail request
|--------------------------------------------------------------------------
*/

$postData = [
    'from' => [
        'address' => $verifiedSenderEmail,
        'name'    => 'CA Dumpsters Website',
    ],
    'to' => [
        [
            'email_address' => [
                'address' => $clientRecipientEmail,
                'name'    => 'CA Dumpsters Sales',
            ],
        ],
    ],
    'reply_to' => [
        [
            'address' => $email,
            'name'    => $name,
        ],
    ],
    'subject'  => "New Lead ({$leadSource}): {$name}",
    'htmlbody' => $htmlBody,
    'textbody' => $textBody,
];

$encodedPostData = json_encode(
    $postData,
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
);

if ($encodedPostData === false) {
    error_log('Unable to encode the ZeptoMail request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

/*
|--------------------------------------------------------------------------
| Send through ZeptoMail
|--------------------------------------------------------------------------
*/

$zeptoCurl = curl_init('https://api.zeptomail.com/v1.1/email');

if ($zeptoCurl === false) {
    error_log('Unable to initialize ZeptoMail cURL request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

curl_setopt_array($zeptoCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $encodedPostData,
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: ' . $zeptoMailToken,
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 20,
]);

$zeptoResponse  = curl_exec($zeptoCurl);
$zeptoHttpCode  = (int) curl_getinfo(
    $zeptoCurl,
    CURLINFO_HTTP_CODE
);
$zeptoCurlError = curl_error($zeptoCurl);

curl_close($zeptoCurl);

/*
|--------------------------------------------------------------------------
| Handle the ZeptoMail response
|--------------------------------------------------------------------------
*/

if (
    $zeptoResponse !== false &&
    ($zeptoHttpCode === 200 || $zeptoHttpCode === 201)
) {
    header('Location: /thank-you.html');
    exit;
}

error_log(
    'ZeptoMail submission failed. HTTP status: ' .
    $zeptoHttpCode .
    '; cURL error: ' .
    ($zeptoCurlError !== '' ? $zeptoCurlError : 'none') .
    '; response: ' .
    ($zeptoResponse !== false ? $zeptoResponse : 'no response')
);

stopRequest(
    'There was an error submitting your request. Please try again or call us directly.',
    500
);