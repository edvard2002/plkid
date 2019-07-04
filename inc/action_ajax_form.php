<?php
include("conf.php");

	$order_name = $_POST["name"];
	$order_phone = $_POST["phone"];
	$order_date = date("Y-m-d");
	$sql = "INSERT INTO `uc_order_people`(`order_name`, `order_phone`, `order_date`) VALUES ('".$order_name."', '".$order_phone."', '".$order_date."');";
	$result = mysql_query($sql);

	$message = '
		У Вас новая запись на консультацию с сайта: '.$_SERVER["HTTP_REFERER"].'.
		
		Пользователь: '.$order_name.'
		Номер телефона: '.$order_phone.'';

	
	mail('eduardprogramist@gmail.com', 'Новый запрос на консультацию', $message);
?>
