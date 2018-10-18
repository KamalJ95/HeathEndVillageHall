<?php
if (isset($_POST['submit'])) {
  echo "ham";
  $name = $_POST['name'];
  echo "hamroll";
  $subject = $_POST['subject'];
  echo "hyena";
  $mailFrom = $_POST['mail'];
  echo "cute hyena";
  $message = $_POST['message'];
  echo "doggo goes woof";


  $mailTo = "jahah_kamal@network.lilly.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
  mail($mailTo,$subject, $txt, $headers);
  echo $message;
  header("Location: index.html?mailsend");
}


?>
