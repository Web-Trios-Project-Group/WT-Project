<?php
$to = $_POST['email'];
$from = 'nhimanshujain@gmail.com';

$subject = 'Hello from E-PRAKRUTHI!';

$headers = "From: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
$message = '<html><body>';
$message .= '<h1 style="color:rgb(38, 6, 99)">Mail From E-PRAKRUTHI - <br> Thanks for Subscribing</h1>'; 
$message .= '<p align="center"  style="color:rgb(58, 70, 110);font-size:130%;"><b>We will keep you updated!!</b></p>';
$message .= "</body></html>";

if (mail($to, $subject, $message, $headers)) {
   echo "E-MAIL SENT SUCCESSFULLY - PLEASE CHECK YOUR MAIL";
} else {
   echo "ERROR IN SENDING THE MAIL";
}
?>