<?php

include 'views/contact.php';

$action = array_key_exists('action', $_POST)?$_POST['action']:'';

if($action == 'contact'){
	//the message
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	//in case any of lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);
	
	$headers = 'From: webmaster@example.com' . "\r\n" .
			'Reply-To: ' . $_POST['email'] . "\r\n" .
			'X-mailer: PHP/' . phpversion(); //not necessary
	
	//send
	if(mail('greyhaze@gmail.com', $subject, $message)){
		echo "mail sent";
	}else{
		echo "mail failed";
	}
	
	
	
}

?>
