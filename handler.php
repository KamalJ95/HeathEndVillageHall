<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'jahah_kamal@network.lilly.com';
  $subject = 'Message from Contact Form : '.$name;

  $body = "From: $name\n E-mail: $email\n Message: \n $message";

  mail($to, $subject, $message);
  header("Location: index.html?mailsend");
?>
