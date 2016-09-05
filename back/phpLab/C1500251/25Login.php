<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php

	require_once("connectBooks_PDO.php");
	$memId = $_POST["memId"];
	$memPsw = $_POST["memPsw"];
	$sql = "select * from member where memId = ? and memPsw = ? ";
	$member = $pdo ->prepare( $sql );
	$member -> bindParam(1,$memId);
	$member -> bindParam(2,$memPsw);
	$member -> execute();
	$row = $member -> fetch(PDO::FETCH_ASSOC);
	if($row == null){
		echo "帳密錯誤";
	}else{
		echo $row["memName"],"您好", "<br />";
		echo "<a href='#'>進入會員專區</a><br />";
		echo "<a href='#'>進入商品區</a><br />";
		}

?>




</body>
</html>