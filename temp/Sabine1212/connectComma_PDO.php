<?php
	$dsn="mysql:host=localhost;port=3306;dbname=comma;charset=utf8";
	$user="root";
	$password="khun7706";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo=new PDO($dsn,$user,$password,$options);
?>