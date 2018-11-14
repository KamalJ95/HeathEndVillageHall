<?php

if(!empty($_POST['first_name']) and !empty($_POST['email']) and !empty($_POST['textarea1'])) {

$email_to = "jahah_kamal@network.lilly.com";

$email_subject = "Customer Message";

$sender = $_POST['first_name']; // required

$email_from = $_POST['email']; // required

$comments = $_POST['textarea1']; // required

$email_message = "Form Details:\n\n";



function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}



$email_message .= "Name: ".clean_string($sender)."\n";

$email_message .= "Email: ".clean_string($email_from)."\n";

$email_message .= "Message: ".clean_string($comments)."\n";

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);
echo "<script type='text/javascript'>$('#modal1').openModal();</script>";
?>

<?php

}
