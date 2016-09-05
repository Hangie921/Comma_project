<?php 
ob_start();
session_start();
$mem = json_decode($_REQUEST["mem"]);
try {
	require_once('connectComma_PDO.php');
	$sql='select * from member where memEmail=:account and password=:psw';
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':account',$mem->memEmail);
	$statement->bindParam(':psw',$mem->memPsw);
	$statement->execute();
	
	if($statement->rowCount() == 0){
		echo "error";
	}else{
		
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		echo  json_encode($row);
		$_SESSION['memName']=$row['memName'];
		$_SESSION['memNo']=$row['memNo'];
		$_SESSION['memEmail']=$row['memEmail'];
		$_SESSION['phone']=$row['phone'];
		$_SESSION['memPic']=$row['memPic'];
		
	}
} catch (PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
}
 ?>