<?php

// Get values from form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$to = "kamalxjahah@hotmail.co.uk";
$subject = "Future Tutorials Contact Form Test";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email;


$from = "FutureTutorials";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='enquiries.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
