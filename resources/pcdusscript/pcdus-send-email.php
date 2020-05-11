<?php
/* RETRIEVE MESSAGE DETAILS FROM POST */
$visitor_first_name = $_POST ["first_name"];
$visitor_last_name = $_POST ["last_name"];
$visitor_email_re_address = $_POST ["email_re"];
$visitor_message = $_POST ["visitor_msg"];

/* SET UP PSUEDO-HEADERS & OTHER PARAMS FOR EMAIL */
$to = "pcurtis5688@gmail.com";
$headers = "From: Paul Curtis <paul@paulcurtis.us>>\r\n";
$headers .= "Sender: PC.US NOTIFICATION SYSTEM <notifications@paulcurtis.us>\r\n";
$headers .= "Reply-To: " . $visitor_email_re_address . "\r\n";
$headers .= "Return-Path: " . $visitor_email_re_address . "\r\n";
$subject = "INQUIRY NOTIFICATION: CONTACT FORM INQUIRY FROM PAULCURTIS.US.";
$message = "Inquirer Email: " . $visitor_email_re_address . "\r\nInquirer Full Name: " . $visitor_last_name . ", " . $visitor_first_name . "\r\nMessage: " . $visitor_message . "\r\n";

/* EXECUTE MAIL FUNCTION WITH VARS, HANDLE SUCCESS/FAIL */
if (mail ( $to, $subject, $message, $headers )) {
	header ( "Location: https://www.paulcurtis.us/index.php\r\nInquirerEmail: " . $visitor_email_re_address . "\r\n" );
} else // TODO: EXTREMELY RARE FAILURE, BUT THIS IS SLOPPY CLOSE
	echo "<!DOCTYPE html><html><head><title>Email Server Error</title></head><body>A Server Error Occured while attempting to send your email! We apologize! Save your work if it's still on-hand and try again at a later time. Or contact your site development team.</body></html>";
?>