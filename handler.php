<?php
if (isset($_REQUEST['submit'])) {
  $name = $_REQUEST['name'];
  $subject = $_REQUEST['subject'];
  $mailFrom = $_REQUEST['mail'];
  $message = $_REQUEST['message'];


  $mailTo = "jahah_kamal@network.lilly.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
  mail($mailTo,$subject, $txt, $headers);
  header("Location: index.html?mailsend");
}


?>
