<?php
	$to      = 'prathmeshgujar@gmail.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: haribol.com' . "\r\n" .
	    'Reply-To: haribol.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
?> 