<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $messange = $_POST['messange'];

//   Composing the email message
  $email_from = 'spr.pro142@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $messange".

    // Sending the email
    $to = "spr.pro142@gmail.com";

    $headers = "From: $email_from \r\n";
  
    $headers .= "Reply-To: $visitor_email \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
?>
