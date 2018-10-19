<?php

  $name = $_POST['name'];
  echo "Name" + $name;
  $email = $_POST['email'];
  echo "Email" + $email;
  $message = $_POST['message'];
  echo "Message" + $message;

  $to = "joneilstarkie@hotmail.co.uk";
  $subject = "Message from Contact Form : ".$name;

  $headers = "From: $name\n E-mail: $email\n Message: \n $message";

  mail($to, $subject, $message, $headers);
  echo "Mail has been sent";
?>
