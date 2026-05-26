<?php
// process-quote.php

// 1. HONEYPOT CHECK (Anti-spam)
if (!empty($_POST['company_website'])) {
    // Bot detected. Silently terminate and redirect to trick the bot.
    header("Location: /thank-you.html");
    exit;
}

// 2. Set ZeptoMail Credentials
$zeptoMailToken = "Zoho-enczapikey wSsVR60l/hTwXP11nTb7drw/n1kDBlqgQ0502ASovyCvG6iT9sdoxEzHUQ/0SvdKFDVpFjcQ9bgtnRcG1TsGidoumwkDASiF9mqRe1U4J3x17qnvhDzOWGVdkRqLJIwLwQtqmGBgEMEr+g==";
$verifiedSenderEmail = "info@ca-dumpsters.com"; 
$clientRecipientEmail = "miguel@ervotechep.com"; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Sanitize inputs
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST["phone"])));
    $projectType = htmlspecialchars(strip_tags(trim($_POST["project_type"])));
    $message = isset($_POST["message"]) ? htmlspecialchars(strip_tags(trim($_POST["message"]))) : "No additional details provided.";

    // NEW: Capture the Lead Source (Fallback to Organic if missing)
    $leadSource = isset($_POST['lead_source']) ? htmlspecialchars(strip_tags(trim($_POST['lead_source']))) : 'Organic Website Lead';

    if (empty($name) || empty($email) || empty($phone) || empty($projectType)) {
        die("Please fill out all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // 4. Construct the HTML Email Body
    $htmlBody = "
    <h2>New Website Inquiry</h2>
    <p>A new lead has requested a quote or information from CA Dumpsters.</p>
    <table style='width: 100%; border-collapse: collapse; max-width: 600px;'>
        <tr style='background-color: #f8fafc;'><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee; color: #16a34a;'>Lead Source:</th><td style='padding: 10px; border-bottom: 1px solid #eee; font-weight: bold; color: #16a34a;'>{$leadSource}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Name:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$name}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Email:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$email}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Phone:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$phone}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Project Type:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$projectType}</td></tr>
        <tr><th style='text-align: left; padding: 10px;'>Message:</th><td style='padding: 10px;'>{$message}</td></tr>
    </table>
    <p style='margin-top: 20px; font-size: 0.9em; color: #666;'><em>You can reply directly to the email listed above to respond to {$name}, or call them at {$phone}.</em></p>
    ";

    // 5. Prepare ZeptoMail JSON Payload (Added Lead Source to Subject)
    $postData = [
        "from" => [
            "address" => $verifiedSenderEmail,
            "name" => "CA Dumpsters Website"
        ],
        "to" => [
            [
                "email_address" => [
                    "address" => $clientRecipientEmail,
                    "name" => "CA Dumpsters Sales"
                ]
            ]
        ],
        "subject" => "New Lead ({$leadSource}): " . $name,
        "htmlbody" => $htmlBody,
        "textbody" => "Source: {$leadSource}. New Website Inquiry from {$name}. Phone: {$phone}. Email: {$email}. Project Type: {$projectType}. Message: {$message}"
    ];

    // 6. Execute cURL Request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.zeptomail.com/v1.1/email");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    
    $headers = [
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: " . $zeptoMailToken
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // 7. Handle Response
    if ($httpCode == 200 || $httpCode == 201) {
        header("Location: /thank-you.html"); 
        exit;
    } else {
        error_log("ZeptoMail Error: " . $response);
        echo "There was an error submitting your request. Please try calling us directly.";
    }

} else {
    header("Location: /");
    exit;
}
?>