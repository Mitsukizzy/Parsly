<?php
  //Email information
  $admin_email = "hello@parsly.rocks";
  $emailSubject = "Screenshot";
  $mailto = "4017827413@tmomail.net";
  $body = "hey whats up, testing my php server";
  $headers = "From: $admin_email\r\n"; // This takes the email and displays it as who this email is from.
  $headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
   
  //send email
  if(mail( '4017827413@tmomail.net', '', 'Testing' ))//mail($mailto, $emailSubject, $body, $headers))
  {
  	echo 'mail sent success';
  }
  else
  {
  	echo 'failed to send mail';
  }
  
?>

