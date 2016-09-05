<?php 
	try {
		require_once('../connectComma_PDO.php');
		$sql='update equipment set amount=:amount where siteNo=:siteNo and equipNo = :equipNo';
		$statement=$pdo->prepare($sql);
		$statement->bindParam(':amount',$_REQUEST['amount']);
		$statement->bindParam(':equipNo',$_REQUEST['equipNo']);
		$statement->bindParam(':siteNo',$_REQUEST['siteNo']);
		$statement->execute();
		$url='Location:space01_back.php?siteNo='.$_REQUEST['siteNo'];
		header($url);
		
	} catch (PDOExeception $e) {
		$e->getLine();
		$e->getMessage();
	}

 ?>