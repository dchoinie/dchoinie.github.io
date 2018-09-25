<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$message = $_GET['message'];

	$email_from = "dchoinie.github.io";
	$email_subject = "Website Form Submission";
	$email_body = "New message from $name.\n". "Message: \n $message".

	$to = "dchoinie@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>

