<?php
$to = "ypaypa282@gmail.com";
$tema = "Заказ";
$message = "Ваше имя: ".$_POST['name']."<br>";
	$massage .= "E-mail: ".$_POST['email']."<br>";
$message .= "Номер телефона: ".$_POST['phone']."<br>";
$massage .= "Сообщение: ".$_POST['message']."<br>";
$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers);
