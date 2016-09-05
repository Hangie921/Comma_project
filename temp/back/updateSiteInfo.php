<?php 
	try {
		require_once('../connectComma_PDO.php');
		$sql='update site set address=:address , size=:size,price=:price,instro=:instro,status=:status where siteNo=:siteNo';
		$statement=$pdo->prepare($sql);
		$statement->bindParam(':address',$_REQUEST['address']);
		$statement->bindParam(':size',$_REQUEST['size']);
		$statement->bindParam(':price',$_REQUEST['price']);
		$statement->bindParam(':instro',$_REQUEST['instro']);
		$statement->bindParam(':status',$_REQUEST['status']);
		$statement->bindParam(':siteNo',$_REQUEST['siteNo']);
		$statement->execute();
		$url='Location:space01_back.php?siteNo='.$_REQUEST['siteNo'];
		header($url);
		
	} catch (PDOExeception $e) {
		$e->getLine();
		$e->getMessage();
	}

 ?>