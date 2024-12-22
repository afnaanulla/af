<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$issue = $_POST['issue'];
$message = $_POST['message'];

$email_from = 'info@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
              "User Email: $visitor_email.\n".
               "Issue: $issue.\n".
                "User Message: $message.\n".

$to = 'avins@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply_to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>