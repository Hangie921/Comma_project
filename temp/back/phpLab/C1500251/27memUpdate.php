<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<p>
<h3 style="text-align:center;color:deepPink">會員基本資料</h3>
</p>
<?php
$memId=$_REQUEST["memId"];
$memPsw=$_REQUEST["memPsw"];

	require_once("connectBooks_PDO.php");
	$sql = "select * from member where memId = :memId";
	$member = $pdo->prepare($sql);
	$member -> bindValue(":memId", $memId);
	$member -> execute();
	$rowCount = $member->rowCount();
	if( $rowCount != null){
		$memRow = $member->fetch();
	
?>
<table border="1" align="center" width="300">
<form action="27memUpdateToDb.php">

  <tr><td>姓名</td><td><input type="text" name="memName" value="<?php echo $memRow["memName"] ?>" /></td></tr>

  <input type="hidden" name="memId" value="<?php echo $memRow["memId"]?>" /> <!--不使用的話資料庫會找錯資料-->
  <tr><td>帳號</td><td><?php echo $memRow["memId"] ?></td></tr>  
  
  <tr><td>密碼</td><td><input type="text" name="memPsw" value="<?php echo $memRow["memPsw"] ?>" /></td></tr>
  <tr><td>e-mail</td><td><input type="text" name="email" value="<?php echo $memRow["email"] ?>" /></td></tr>
  <tr><td>性別</td><td><input type="text" name="sex" value="<?php echo $memRow["sex"] ?>" /></td></tr>
  <tr><td>生日</td><td><input type="text" name="birthday" value="<?php echo $memRow["birthday"] ?>" /></td></tr>
  <tr><td>電話</td><td><input type="text" name="tel" value="<?php echo $memRow["tel"] ?>" /></td></tr>
  <tr><td colspan="2" align="center"><input type="submit" value="確定修改"/></td></tr>
  
</form>
</table>
<?php
  }else{
    echo "<div style='color:steelblue;text-align:center'>查無此資料</div>";
  }
?>


</body>
</html>