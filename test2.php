<?php
   if(mail("izzy7b@gmail.com", "Hello", "This is Parsly", "From: hello@parsly.rocks"))
   {
	echo "Success!";
   }
   else 
   {
	echo "Failed to send email";
   }
?>
