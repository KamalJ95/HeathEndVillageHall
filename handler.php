<?php
if (isset($_POST['name']) || isset($_POST['subject']) || isset($_POST['mail']) || isset($_POST['message'])) {
  $name = $_POST['name'];
  echo $name;
  $subject = $_POST['subject'];
  echo $subject;
  $mailFrom = $_POST['mail'];
  echo $mailFrom;
  $message = $_POST['message'];
  echo $message;


  $mailTo = "jahah_kamal@network.lilly.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
  mail($mailTo,$subject, $txt, $headers);
  header("Location: index.html?mailsend");
} else {
  echo "error in post";
}


?>
