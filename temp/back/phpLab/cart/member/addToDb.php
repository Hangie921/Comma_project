<?php
	require_once("connectBooks.php");
	$sql="insert into member (no,memName,memId,memPsw,email,sex,birthday,tel)values(null,:memName,:memId,:memPsw,:email,:sex,:birthday,:tel) ";
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':memName',$_REQUEST['memName']);
	$statement->bindParam(':memId',$_REQUEST['memId']);
	$statement->bindParam(':memPsw',$_REQUEST['memPsw']);
	$statement->bindParam(':email',$_REQUEST['email']);
	$statement->bindParam(':sex',$_REQUEST['sex']);
	$statement->bindParam(':birthday',$_REQUEST['birthday']);
	$statement->bindParam(':tel',$_REQUEST['tel']);
	$statement->execute();
	header("Location: data.php");
?>