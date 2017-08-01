<?php
  
//require 'PHPMailerAutoload.php';
//require ("class.phpmailer.php");
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.exclusivehosting.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noreply@justtrip.in';                 // SMTP username
$mail->Password = 'Walk@123';                           // SMTP password 
$mail->Port = 2525;
$mail->SMTPDebug = 2;
$mail->Mailer = "smtp";
$mail->SMTPSecure = 'none';
//$mail->From = $email_from;
$mail->setFrom('noreply@justtrip.in', 'Zenia');

$mail->addAddress('baddala.venugopalreddy@gmail.com', 'Joe User');  

// Define some constants
define( "RECIPIENT_NAME", "John Doe" );
define( "RECIPIENT_EMAIL", "baddala.venugopalreddy@gmail.com" );


// Read the form values
$success = false;
$senderName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $subject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " Subject: " . $subject ." Message: " . $message . "";
 // $success = mail( $recipient, $headers, $msgBody );

  
  
  $mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
  
  
  
  //Set Location After Successsfull Submission
 // header('Location: contact.html');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.html');	
}

?>