<?php

if($_POST && isset($_POST['toSend_email'])){
	$valid = true;
	foreach($_POST as $item => $value){
		if($value==='' || $value===null){
			$valid = false;
		}
	}
	if($valid){
		$text = $_POST['message'];
		$text = str_replace("\n.", "\n..", $text);
		$isSent = mail(
			"lavieville.felix@gmail.com",
			"[PORTFOLIO : ".$_POST['type']."] ".$_POST['subject'],
			$text,
			'From: '.$_POST['sender']
		);
		if($isSent){
			header('Location: /index.php?Success#contact');
		}else{
			header('Location: /index.php?Error#contact');
		}
	}else{
		header('Location: /index.php?TextError#contact');
	}
}