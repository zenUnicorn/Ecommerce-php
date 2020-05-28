<?php
	require_once("connections/phpmailer/src/src/PHPMailer.php");
	require_once("connections/phpmailer/src/SMTP.php");
	
// 	require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';
	$to_name = "olu"; 
	 $to = "iamholumeedey007@gmail.com";

	 // $to = "olumide <iamholumeedey007@gmail.com>" ;
	 // multiple user
	 // $to = "iamholumeedey007@gmail.com, iamholumeedey007@gmail.com";
	 // $to = "olumide <iamholumeedey007@gmail.com>, iamholumeedey007@gmail.com";

$subjest = "Mail Test at ".strftime("%T", time());
$message = "this is a test.";
// wrap at 70/72/75/78
$message = wordwrap($message, 70);

$from_name = "Olumide";
$from = "iamholumeedey007@gmail.com";


$result = mail($to, $subject, $message, $headers);

echo $result ? 'Sent' : 'Error';

 ?>
 Or text/html,attachment,email
 $result = mail($to, $subject, $message, $headers);

echo $result ? 'Sent' : 'Error';