<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['mailid'];
$number= $_POST['Mobile'];
$country= $_POST['country'];
$subject= $_POST['Subject'];
$message= $_POST['text'];
$to = "kavinkumarkumar32@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n number =" . $number ."\r\n country =" . $country . "\r\n subject =" . $subject ."\r\n Message =" . $message;
$headers = "From: noreply@kavinkumarkumar32@.netlify.app" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>