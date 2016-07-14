<?php	
	if(empty($_POST['name']) || empty($_POST['input_1425']) || empty($_POST['email']) || empty($_POST['message']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$input_1425 = $_POST['input_1425'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from rjm.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nInput_1425: $input_1425 \nEmail: $email \nMessage: $message \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>