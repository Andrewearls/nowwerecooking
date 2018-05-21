<?php

   // the message
	$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: andrew@nowwerecooking.io' . "\r\n";
	$headers .= 'To: andrew@nowwerecooking.io'."\r\n";

	// send email
	echo mail("andrew@nowwerecooking.io","My subject",$msg, $headers);
   exit("made it here");
?>