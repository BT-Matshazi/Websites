<?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$subjects = $_POST['phonenumber'];
$message= $_POST['message'];
$to = "bekithembamatshazi@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone Number=" . $subjects. "\r\n Message =" . $message;
$headers = "From: noreply@CityMag.co.za" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL)
{
    mail($to,$subject,$txt,$headers);
}

 header("Location:index.html");
?>