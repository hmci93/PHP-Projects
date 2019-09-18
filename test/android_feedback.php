<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'assamese.dictionary@jecuba.in';
$subject = 'ASSAMESE DICTIONARY APP';
$message1 = "Name : " .$name."\n"."Email :" .$email."\n"."Message"."\n".$message;
$headers = "From : ".$email;
if(mail($to, $subject, $message1, $headers)){
  echo "Mail Sent";
}
else {
  echo "Error";
}
?>
