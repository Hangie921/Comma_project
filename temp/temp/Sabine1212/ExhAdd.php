<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php

try{
  require_once("connectComma_PDO.php");
  $sql = "INSERT INTO exhibition(orderNo, memNo, startDate, endDate, exhiName, instro) 
  			VALUES(:orderNo,:memNo, :startDate, :endDate, :exhiName, :instro)";
  $exh = $pdo->prepare( $sql );
  $exh->bindValue(":orderNo", $_REQUEST["orderNo"]);
  $exh->bindValue(":memNo", $_REQUEST["memNo"]);
  $exh->bindValue(":startDate", $_REQUEST["startDate"]);
  $exh->bindValue(":endDate", $_REQUEST["endDate"]);
  $exh->bindValue(":exhiName", $_REQUEST["exhiName"]);
  $exh->bindValue(":instro", $_REQUEST["instro"]);
  $exh->execute();
  echo "成功";
}
catch(PDDException $e){echo "錯誤行:",$e->getLine();}

?>
</body>
</html>