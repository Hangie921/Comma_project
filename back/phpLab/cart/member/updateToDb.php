<?php
	require_once("connectBooks.php");

	$sql="update member set ";
	$sql .="memName=?,";
	$sql .="memPsw=?,";
	$sql .="email=?,";
	$sql .="tel=? where memId= ?";
	$statement=$pdo->prepare($sql);
	$statement->bindParam(1,$_POST['memName']);
	$statement->bindParam(2,$_POST['memPsw']);
	$statement->bindParam(3,$_POST['email']);
	$statement->bindParam(4,$_POST['tel']);
	$statement->bindParam(5,$_POST['memId']);
	$statement->execute();
	header("Location: data.php");
?>