<?php 
ob_start();
session_start();
$mem = json_decode($_REQUEST["mem"]);
try {
	require_once('connectComma_PDO.php');
	$sql='insert into member value(null,:memName,:memEmail,:password,:phone,null) ';
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':memName',$mem->memName);
	$statement->bindParam(':memEmail',$mem->memEmail);
	$statement->bindParam(':password',$mem->memPsw);
	$statement->bindParam(':phone',$mem->memPhone);
	$statement->execute();
	// $row = $statement->fetch(PDO::FETCH_ASSOC);
	$_SESSION['memName']=$mem->memName;
	$_SESSION['memNo']=$mem->memEmail;
	$_SESSION['memEmail']=$mem->memPsw;
	$_SESSION['Phone']=$mem->memPhone;
	$_SESSION['memPic']='img/profile/handsomewu.jpg';
} catch (PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
}
 ?>