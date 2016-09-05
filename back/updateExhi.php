<?php 
try {
	require_once('../connectComma_PDO.php');
	$from=$_FILES['ePic']['tmp_name'];
	$to='../img/exhibition/exb-'.$_REQUEST['exhiNo'].'.jpg';
	if(copy($from,$to)){
		echo 'success';
	}else{
		echo 'fail';
	}
	$sql='update exhibition set exhiName=:exhiName,startDate=:startDate,endDate=:endDate,instro=:instro where exhiNo=:exhiNo';
	$statement=$pdo->prepare($sql);
	$statement->bindParam(':exhiName',$_REQUEST['exhiName']);
	$statement->bindParam(':startDate',$_REQUEST['startDate']);
	$statement->bindParam(':endDate',$_REQUEST['endDate']);
	$statement->bindParam(':instro',$_REQUEST['instro']);
	$statement->bindParam(':exhiNo',$_REQUEST['exhiNo']);
	$statement->execute();
	header('Location:exhibition_back.php');
} catch (PDOException $e) {
	$e->getLine();
	$e->getMessage();
}

 ?>