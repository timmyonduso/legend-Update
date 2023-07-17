<?php

// get email from the config file
$config = require_once __DIR__ . '/../config/app.php';
$recipient_email = $config['mail']['to_email'];

// contact information
$contact_name = $inputs['name'];
$contact_email = $inputs['email'];
$message = $inputs['message'];
$subject = $inputs['subject'];



// Email header
// send email using PHP's mail function
$to = "director@chaspotinternational.org";
$subject = "Contact Form Submission from $contact_name\r\n" ;
$headers = "Subject: $subject ";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$body = "<p>Name: $name</p><p>Email: $email</p><p>Message: $message</p>";

mail($to, $subject, $body, $headers);