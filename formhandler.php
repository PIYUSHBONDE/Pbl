<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@pictmedicare.com';

$email_subject = 'New Form Sumbition';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n".

$to = 'piyushbonde06@gmail.com' ;

$headers = "From: $email_from \r\n";

$headers1. = "Reply-to: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
