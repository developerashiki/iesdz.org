<?php
if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Subject: {$subject}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: iffatesd@gmail.com';

    $mail = mail($to, $subject, $message, $headers);

    if ($mail) {
        echo "<script>alert('Mail Send.');</script>";
    } else {
        echo "<script>alert('Mail Not Send.');</script>";
    }
}
