<?php 
ob_start();
session_start();
$mem = json_decode($_REQUEST["mem"]);
try {
	require_once('connectComma_PDO.php');
	$sql='select * from member where memEmail=:email';
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':email',$mem->memEmail);
	$statement->execute();
	
	if($statement->rowCount() == 0){
		echo "Unused Email!";
	}else{
		// $_SESSION['userName']=$row['memName'];
		// $_SESSION['userNo']=$row['memNo'];
		// $_SESSION['userEmail']=$row['memEmail'];
		// $_SESSION['userPhone']=$row['memPhone'];
		// $_SESSION['userPic']=$row['memPic'];
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		echo  json_encode($row);
		
	}
} catch (PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
}
 ?>