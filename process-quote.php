<?php
// process-quote.php

// 1. Set ZeptoMail Credentials
$zeptoMailToken = "Zoho-enczapikey wSsVR60l/hTwXP11nTb7drw/n1kDBlqgQ0502ASovyCvG6iT9sdoxEzHUQ/0SvdKFDVpFjcQ9bgtnRcG1TsGidoumwkDASiF9mqRe1U4J3x17qnvhDzOWGVdkRqLJIwLwQtqmGBgEMEr+g=="; // Starts with Zoho-enczapikey
$verifiedSenderEmail = "noreply@ca-dumpsters.com"; // The domain you verified in ZeptoMail
$clientRecipientEmail = "miguel@ervotechep.com"; // Where your client wants to receive the leads

// 2. Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize input data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST["phone"])));
    $date = htmlspecialchars(strip_tags(trim($_POST["date"])));
    $size = htmlspecialchars(strip_tags(trim($_POST["size"])));
    $address = htmlspecialchars(strip_tags(trim($_POST["address"])));
    $details = htmlspecialchars(strip_tags(trim($_POST["details"])));

    // Validate essential fields
    if (empty($name) || empty($email) || empty($phone)) {
        die("Please fill out all required fields.");
    }

    // 3. Construct the HTML Email Body
    $htmlBody = "
    <h2>New Dumpster Quote Request</h2>
    <p>A new lead has submitted a request from the CA Dumpsters website.</p>
    <table style='width: 100%; border-collapse: collapse;'>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Name:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$name}</td></tr>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Email:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$email}</td></tr>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Phone:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$phone}</td></tr>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Delivery Date:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$date}</td></tr>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Dumpster Size:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$size}</td></tr>
        <tr><th style='text-align: left; padding: 8px; border-bottom: 1px solid #ddd;'>Address:</th><td style='padding: 8px; border-bottom: 1px solid #ddd;'>{$address}</td></tr>
        <tr><th style='text-align: left; padding: 8px;'>Details/Debris:</th><td style='padding: 8px;'>{$details}</td></tr>
    </table>
    ";

    // 4. Prepare ZeptoMail JSON Payload
    $postData = [
        "bounce_address" => "bounce@ca-dumpsters.com", // Optional, based on your Zepto settings
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
                "address" => $email, // Allows client to hit "Reply" and email the lead directly
                "name" => $name
            ]
        ],
        "subject" => "New Website Lead: " . $name . " - " . $size,
        "htmlbody" => $htmlBody
    ];

    // 5. Execute cURL Request to ZeptoMail API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.zeptomail.com/v1.1/email");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    
    // Set ZeptoMail specific headers
    $headers = [
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: " . $zeptoMailToken
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // 6. Handle Response / Redirection
    if ($httpCode == 200 || $httpCode == 201) {
        // Success! Redirect to a thank you page.
        header("Location: thank-you.html");
        exit;
    } else {
        // Log error for debugging if needed
        error_log("ZeptoMail Error: " . $response);
        echo "There was an error submitting your request. Please try again or call us directly.";
    }

} else {
    // If not a POST request, redirect to home
    header("Location: index.html");
    exit;
}
?>