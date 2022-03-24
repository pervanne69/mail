<?php
$message = ""; // Your message
$to = "";  // to whom the message
$from = ""; // from whom the message
$subject = ""; // Message subject
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\n" . "Reply-to: $from\r\n" . "X-Mailer: PHP/". phpversion() . "\r\n";  // headlines
try {
    mail($to, $subject, $message, $headers);
} catch (Exception $e) {
    echo "[Error] " . $e;
}