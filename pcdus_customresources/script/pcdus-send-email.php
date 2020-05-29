<?php
/* RETRIEVE MESSAGE DETAILS FROM POST */
$visitor_first_name = $_POST ["first_name"];
$visitor_last_name = $_POST ["last_name"];
$visitor_email_re_address = $_POST ["email_re"];
$visitor_message = $_POST ["visitor_msg"];

/* SET UP PSUEDO-HEADERS & OTHER PARAMS FOR EMAIL */
$to = "paul@paulcurtis.us";
$headers = "From: " . $visitor_first_name . " " . $visitor_last_name . " <" . $visitor_email_re_address . "\r\n";
$headers .= "Sender: PaulCurtis(dot)US NOTIFIER <notifier@paulcurtis.us>\r\n";
$headers .= "Reply-To: " . $visitor_first_name . " " . $visitor_last_name . " <" . $visitor_email_re_address . ">\r\n";
$headers .= "Return-Path: " . $visitor_first_name . " " . $visitor_last_name . " <" . $visitor_email_re_address . ">\r\n";
$subject = "MESSAGE RECEIVED: Contact Form Message From PAULCURTIS.US Site User.";
$message = "Message: " . $visitor_message . "\r\n";

/* EXECUTE MAIL FUNCTION WITH VARS, HANDLE SUCCESS/FAIL */
if (mail($to, $subject, $message, $headers)) {
    // TODO: THIS IS WAY TOO LAZY TO DO THIS...?
    echo "<script type='text/javascript'>alert('Your Message has been sent successfully!');</script>";
    header("Location: https://www.paulcurtis.us/contact.php");
} else
    echo "<!DOCTYPE html><html><head><title>Email Server Error</title></head><body>A Server Error Occured while attempting to send your email! We apologize! Save your work if it's still on-hand and try again at a later time. Or contact your site development team.</body></html>";
