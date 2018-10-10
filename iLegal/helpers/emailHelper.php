<?php 
	$subject = $_POST["emailSubject"];
	$content = $_POST["emailContent"];
	$adminEmail = "isumi.e.lan@gmail.com";
	$email = "saberstarks@gmail.com";
	mail($adminEmail, $subject, $content, "From:" . $email);
	echo "sent";
?>