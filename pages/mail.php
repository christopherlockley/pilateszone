<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust based on your installation method

$mail = new PHPMailer(true); // Enable exceptions

$name = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST("message"); 

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'lockleychristopher@gmail.com'; // Your Mailtrap username
$mail->Password = 'Aalokvora123'; // Your Mailtrap password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender and recipient settings
$mail->setFrom($name, $email);
$mail->addAddress('lockleychristopher@gmail.com', 'Chris');

// Sending plain text email
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = $subject;
$mail->Body    = $message;

// Send the email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}?>