<?php

   $to = "andrew@nowwerecooking.io"; // <– replace with your address here
   $subject = "test mail";
   $message = "Hello! This is a simple test email message.";
   $from = "andrew@nowwerecooking.io";
   $headers = "From: " . $from;
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";

   header('Location: http://www.nowwerecooking.io/');
   exit;
?>