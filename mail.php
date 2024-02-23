<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$sub = $_POST['sub'];
$message= $_POST['message'];

$to = "mixurrymr@mail.com";
$subject = "Mail From Portfolio Website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Sub =" . $sub . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>