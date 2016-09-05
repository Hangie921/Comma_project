<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>

</head>

<body>
<p> <br>
<?php
$memId = $_REQUEST["memId"];

$_REQUEST["memId"];
//連線資料庫
try{
  require_once("connectBooks_PDO.php");
  $sql = "update member set memName = :memName, memId = :memId, memPsw = :memPsw,
  							 email = :email, birthday = :birthday, tel = :tel where memId = :memId";
  $member = $pdo->prepare($sql);  //準備
  $member -> bindValue(":memName", $_REQUEST["memName"]);
  $member -> bindValue(":memId", $_REQUEST["memId"]);
  $member -> bindValue(":memPsw", $_REQUEST["memPsw"]);
  $member -> bindValue(":email", $_REQUEST["email"]);
  $member -> bindValue(":birthday", $_REQUEST["birthday"]);
  $member -> bindValue(":tel", $_REQUEST["tel"]);
  $member -> execute();  //執行
   
   echo "異動成功<br />";

}catch(PDOException $e){
  echo $e->getLine() , "<br>";
  echo $e->getMessage() , "<br>";
}


?>	
	

</body>
</html>
