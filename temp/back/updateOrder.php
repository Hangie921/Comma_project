<?php 
	require_once('../connectComma_PDO.php');
	$sql='update commaorder set status=:status where orderNo = :orderNo';
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':status',$_REQUEST['orderStatus']);
	$statement->bindParam(':orderNo',$_REQUEST['orderNo']);
	$statement->execute();
	header('Location:Order_back.php');
 ?>
