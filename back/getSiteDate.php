<?php 
ob_start();
session_start();
	try {
		require_once('../connectComma_PDO.php');
		$sql='select orderNo , startDate , endDate from commaorder where siteNo=:siteNo and status in(1,2,3,4,5,6)';
		$statement=$pdo->prepare($sql);
		$statement->bindParam(':siteNo',$_REQUEST['siteNo']);
		$statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["detail"] = json_encode($rows);
		header('location:space_01_date.php?siteNo='.$_REQUEST['siteNo']);

	} catch (PDOExeception $e) {
		$e->getLine();
		$e->getMessage();
	}

 ?>