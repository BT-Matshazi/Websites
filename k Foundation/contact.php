<?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$subjects = $_POST['phonenumber'];
$message= $_POST['message'];
$to = "bekithembamatshazi@gmail.com";
$subject = "Mail From website Kuwane Foundation";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone Number=" . $subjects. "\r\n Message =" . $message;
$headers = "From: noreply@KuwaneFoundation.com" . "\r\n" .
"CC: bulelani.kuwane@gmail.com";

if($email!=NULL)
{
    mail($to,$subject,$txt,$headers);
}

 header("Location:index.html");
?>