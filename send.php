<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "trendingtiktok455@gmail.com";
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);

    $subject = "New Contact Form Submission";
    $message = "Name: $name\nAddress: $address\nPhone: $phone";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Details sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>