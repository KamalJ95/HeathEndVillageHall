<?php
if(isset($_POST['submit'])){
$to = "kamalxjahah@hotmail.co.uk";
$from = $_POST['Mail'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = "Mail subject";
$message = $first_name . " " . $last_name . " Yes: " . "\n\n" .
$_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
echo "Mail Sent. Thank you " . $first_name . ", we will contact you
shortly.";

}
?>
