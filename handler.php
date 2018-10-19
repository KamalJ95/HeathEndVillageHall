<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'kamalxjahah@hotmail.co.uk';
  $subject = 'Message from Contact Form : '.$name;

  $headers = "From: $name\n E-mail: $email\n Message: \n $messages";

  mail($to, $subject, $message, $headers);
  echo "Mail has been sent";
?>
