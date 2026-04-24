<?php
// quote.php

// 1. HONEYPOT CHECK (Anti-spam)
if (!empty($_POST['company_website'])) {
    // Bot detected. Silently terminate and redirect to trick the bot.
    header("Location: /thank-you.html");
    exit;
}

// 2. Set ZeptoMail Credentials
$zeptoMailToken = "Zoho-enczapikey wSsVR60l/hTwXP11nTb7drw/n1kDBlqgQ0502ASovyCvG6iT9sdoxEzHUQ/0SvdKFDVpFjcQ9bgtnRcG1TsGidoumwkDASiF9mqRe1U4J3x17qnvhDzOWGVdkRqLJIwLwQtqmGBgEMEr+g=="; // Starts with Zoho-enczapikey
$verifiedSenderEmail = "info@ca-dumpsters.com"; // The domain you verified in ZeptoMail
$clientRecipientEmail = "test-11lykv9nk@srv1.mail-tester.com"; // Where your client wants to receive the leads


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Sanitize inputs
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST["phone"])));
    $service = htmlspecialchars(strip_tags(trim($_POST["service"])));
    $message = isset($_POST["message"]) ? htmlspecialchars(strip_tags(trim($_POST["message"]))) : "No additional details provided.";

    if (empty($name) || empty($email) || empty($phone) || empty($service)) {
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
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Name:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$name}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Email:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$email}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Phone:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$phone}</td></tr>
        <tr><th style='text-align: left; padding: 10px; border-bottom: 1px solid #eee;'>Service/Size:</th><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$service}</td></tr>
        <tr><th style='text-align: left; padding: 10px;'>Message:</th><td style='padding: 10px;'>{$message}</td></tr>
    </table>
    <p style='margin-top: 20px; font-size: 0.9em; color: #666;'><em>You can reply directly to this email to respond to {$name}, or call them at {$phone}.</em></p>
    ";

    // 5. Prepare ZeptoMail JSON Payload
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
        "reply_to" => [
            [
                "address" => $email,
                "name" => $name
            ]
        ],
        "subject" => "New Lead: " . $name . " - " . $service,
        "htmlbody" => $htmlBody,
        // ADD THIS LINE BELOW:
        "textbody" => "New Website Inquiry from {$name}. Phone: {$phone}. Email: {$email}. Service: {$service}. Message: {$message}"
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

    // 7. Handle Response (Production)
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