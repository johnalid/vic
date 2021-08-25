<?php
include 'database.php';


$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$email =$_POST['email'];
$number =$_POST['number'];
$textArea =$_POST['textArea'];


$enter = "INSERT INTO vino (firstName, lastName, email, number, textArea) VALUE('$firstName', '$lastName', '$email', '$number', '$textArea' )";
$enter2 = mysqli_query($config, $enter) or die (mysqli_error($config));
 echo 'Success';
// redirect
header("location: index.html");

?>