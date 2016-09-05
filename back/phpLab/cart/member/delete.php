<?php
	require_once("connectBooks.php");
	$sql="delete from member where memId = :memId";
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':memId',$_GET['memId']);
	$statement->execute();
	header("Location: data.php");
?>