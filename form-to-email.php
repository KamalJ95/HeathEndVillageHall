<?php
$first_name = $last_name = $to = $from = $email = $message = $subject = $subject2
= $message = $message2 = $headers = $headers2 = "";
if(isset($_POST['submit'])){
    $to = "jahah_kamal@network.lilly.com"; // this is your Email address
    $from = $_POST['jahah_kamal@network.lilly.com']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['textarea1'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['textarea1'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>
