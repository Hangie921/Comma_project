<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<center>
<table border="1" width="200">
<caption>您的消費資料為</caption>
<?php
$price=$_REQUEST["price"];
$amount=$_REQUEST["amount"];
$total=$_REQUEST["price"]*$_REQUEST["amount"];

echo "<tr>","<td>","單價","</td>","<td>",$price,"</td>","</tr>";
echo "<tr>","<td>","數量","</td>","<td>",$amount,"</td>","</tr>";
echo "<tr>","<td>","小計","</td>","<td>",$total,"</td>","</tr>";

?>
</table>
</center>

</body>
</html>