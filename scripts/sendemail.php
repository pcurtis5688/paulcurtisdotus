<?php
// TODO: Send Email then Redirect (& Show Message, if possible)...z
$visitor_first_name = $_POST ['first_name'];
$visitor_last_name = $_POST ['last_name'];
$visitor_email_re_address = $_POST ['email_re'];
$visitor_message = $_POST ['visitor_msg'];

$to = 'paul@paulcurtis.us';
$subject = 'Message Sent Via PaulCurtis.us Contact Form';
$message = 'Email: ' . $visitor_email_re_address . ' (' . $visitor_first_name . ' ' . $visitor_last_name . ') - Message: ' . $visitor_message;
$headers = 'From: ' . $visitor_email_re_address . '\r\n' . 'Reply-To: ' . $visitor_email_re_address . '\r\n' . 'X-Mailer: PHP/' . phpversion ();
mail ( $to, $subject, $message, $headers );
$message_sent_alert = 'Message Sent Successfully. Have a wonderful day.';
echo "<script type='text/javascript'>alert('$message_sent_alert');</script>";
header('Location: https://www.paulcurtis.us/');
?>