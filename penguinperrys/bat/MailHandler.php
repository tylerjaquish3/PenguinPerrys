<?php
	$success = false;
	$headers = 'From:' . $_POST["email"] . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	
	if($_POST['msg-type'] == 'generic') {
		$subject = 'Message from site visitor ' . $_POST["name"];
	} else if ($_POST['msg-type'] == 'catering') {
		$subject = 'Catering request from site visitor ' . $_POST["name"];
	} else {
		$subject = "";
	}
	
	$messageBody = "";
	
	if($_POST['name']!='nope'){
		$messageBody .= '<p>Visitor: ' . $_POST["name"] . '</p>' . "\n";
	}
	if($_POST['email']!='nope'){
		$messageBody .= '<p>Email Address: ' . $_POST['email'] . '</p>' . "\n";
	}
	if($_POST['phone']!='nope'){		
		$messageBody .= '<p>Phone Number: ' . $_POST['phone'] . '</p>' . "\n";
	}	
	if($_POST['message']!='nope'){
		$messageBody .= '<p>Message: ' . $_POST['message'] . '</p>' . "\n";
	}
	
	//if the form was really posted, send the email
	if($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$to = 'info@penguinperrys.com';

		mail($to, $subject, $messageBody, $headers);
		$success = true;
	}
?>