<?php 
	 $to = "iamholumeedey007@gmail.com";

	 // $to = "olumide <iamholumeedey007@gmail.com>" ;
	 // multiple user
	 // $to = "iamholumeedey007@gmail.com, iamholumeedey007@gmail.com";
	 // $to = "olumide <iamholumeedey007@gmail.com>, iamholumeedey007@gmail.com";

			$subjest = "Mail Test at ".strftime("%T", time());
			$message = "this is a test.";
			// wrap at 70/72/75/78
			$message = wordwrap($message, 70);

			$from = "Olumide <iamholumeedey007@gmail.com>";
			$headers = "From: {$from}\n";
			$headers = "Reply-To: {$from}\n";
			// $headers .= "Cc: {$to}\n";
			// $headers .= "Bcc: {$to}\n";
			$headers .= "X-Mailer: PHP/". phpversion(). "\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-Type: text/plain; charset = iso-8859-1\n;

			$result = mail($to, $subject, $message, $headers);

			echo $result ? 'Sent' : 'Error';

 ?>