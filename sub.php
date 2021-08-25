<?php


$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$email =$_POST['email'];
$number =$_POST['number'];
$textArea =$_POST['textArea'];

$to = "info@vinoeducationconsulting.com";

$subject = "mail from Vino Education Consulting";
$txt = "Name =".$firstName . "\r\nLastName = ".$lastName  . "\r\nEmail = ".$email . "\r\nNumber = ".$number ."\r\nMessage =".$textArea;
$headers  = "info@vinoeducationconsulting.com" ."\r\n" .
"CC : johnalidy05@gmail.com";

if($email!=NULL){
    mail($to, $subject, $txt, $headers);

}
// redirect
header("location: index.html");
