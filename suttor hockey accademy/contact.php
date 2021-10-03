<?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$subjects = $_POST['subject'];
$message= $_POST['message'];
$to = "bekithembamatshazi@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Subject =" . $subjects. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL)
{
    mail($to,$subject,$txt,$headers);
}

 header("Location:index.html");
?>