<?php
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'Info@amw-veranda.nl';
    $headers = 'From: ' . $email . "\r\n" .
        'CC: Info@amw-veranda.nl' . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    $body = "Name: $name\n" .
        "Phone: $phone\n" .
        "Subject: $subject\n" .
        "Message: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Your message was sent successfully.';
    } else {
        echo 'Failed to send message, please try again later.';
    }
}
?>