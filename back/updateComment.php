<?php 
	try {
		require_once('../connectComma_PDO.php');
		$sql='update commaorder set showComment=:showComment where orderNo = :orderNo';
		$statement=$pdo->prepare($sql);
		$statement->bindParam(':showComment',$_REQUEST['showComment']);
		$statement->bindParam(':orderNo',$_REQUEST['orderNo']);
		$statement->execute();
		
		$url='location:Assess_back_single.php?siteNo='.$_REQUEST['siteNo'];
		header($url);	
	} catch (PDOException $e) {
		$e->getLine();
		$e->getMessage();
	}
	// header('location:Assess_back.php');
 ?>