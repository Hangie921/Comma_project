<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
try{
	
	require_once("connectBooks_PDO.php");
	$memName = $_POST['memName'];
	$memId = $_POST['memId'];
	$memPsw = $_POST['memPsw'];
	$email = $_POST['email'];
	$sex = $_POST['sex'];
	$birthday = $_POST['birthday'];
	$tel = $_POST['tel'];
	$sql = "insert into member (no, memName, memId, memPsw, email, sex, birthday, tel)
		    values (null, $memName, $memId, $memPsw, $email, $sex, $birthday, $tel)";//新增資料進資料庫語法
	$member = $pdo -> fetch(PDO::FETCH_ASSOC);
	$member -> bindParam(1,$memName);
	$member -> bindParam(2,$memId);
	$member -> bindParam(3,$memPsw);
	$member -> bindParam(4,$email);
	$member -> bindParam(5,$sex);
	$member -> bindParam(6,$birthday);
	$member -> bindParam(7,$tel);
	$member -> execute();
	
?>

<?php
	}catch(PDOException $e){
		echo "錯誤行:",$e->getline();
		}
?>
</body>
</html>