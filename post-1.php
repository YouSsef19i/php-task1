<?php  
$name = $_POST['name'];
$email =  $_POST['email'];
$message = $_POST['message'];



$email_from = ''
$email_subject = "form data"
$email_body = "user name : $name.\n".
                "user email: $visitor_email.\n ".
                "user message: $message.\n";

?>