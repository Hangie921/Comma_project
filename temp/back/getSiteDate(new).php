<?php 
ob_start();
session_start();
	try {
		require_once('connectComma_PDO.php');
		$sql='select orderNo , startDate , endDate from commaorder where siteNo=:siteNo';
		$statement=$pdo->prepare($sql);
		$statement->bindParam(':siteNo',$_REQUEST['siteNo']);
		$statement->execute();
		$GLOBALS['date']=array();
		$counter=$statement->rowCount();
		
		while($detail=$statement->fetch(PDO::FETCH_ASSOC)){
			$GLOBALS['date'][]=array($detail['orderNo'],$detail['startDate'],$detail['endDate']);
		}
		$_SESSION['detail']=$GLOBALS['date'][];
		header('location:space_01_date.php?siteNo='.$_REQUEST['siteNo']);

	} catch (PDOExeception $e) {
		$e->getLine();
		$e->getMessage();
	}

 ?>