<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table align="center" border="1">
	<tr><th>會員編號</th><th>會員姓名</th><th>會員帳號</th><th>會員密碼</th><th>email</th><th>會員性別</th><th>會員生日</th><th>會員電話</th></tr>
	<?php
	$sqlShowTables = "select * from member";
	$input = array("memName"=>$_POST['memName'],"memId"=>$_POST['memId'],"memPsw"=>$_POST['memPsw'],"memEmail"=>$_POST['memEmail'],"memSex"=>$_POST['memSex'],"memBday"=>$_POST['memBday'],"memTel"=>$_POST['memTel']);
	try{
	require_once("connectBooks.php");
	$show = $pdo->prepare($sqlShowTables);
	$show->execute();
	$lastNo = $show->rowCount();
	$lastNo++;
	$sql = "insert into member(no,memName,memId,memPsw,email,sex,birthday,tel)Values(".$lastNo.",?,?,?,?,?,?,?);"; 
	$statement = $pdo->prepare($sql);
	
	$statement->bindParam(1,$input['memName']);
	$statement->bindParam(2,$input['memId']);
	$statement->bindParam(3,$input['memPsw']);
	$statement->bindParam(4,$input['memEmail']);
	$statement->bindParam(5,$input['memSex']);
	$statement->bindParam(6,$input['memBday']);
	$statement->bindParam(7,$input['memTel']);
	$statement->execute();
	// 將所有的值給問號
	$show = $pdo->query($sqlShowTables);
	$allMembers = $show->fetchAll();

	foreach($allMembers as $pRow){
		list($no,$memName,$memId,$memPsw,$email,$sex,$birthday,$tel)=$pRow;
		echo "<tr><td>$no</td><td>$memName</td><td>$memId</td><td>$memPsw</td><td>$email</td><td>$sex</td><td>$birthday</td><td>$tel</td></tr>";
		}

	

	}catch(PDOException $e){
		echo $e->getMessage();
		echo $e->getLine();
	}


	?>
	</table>
</body>
</html>