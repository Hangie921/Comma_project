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
$level=$_REQUEST["level"];
$price=$_REQUEST["price"];
$kg=$_REQUEST["kg"];
$total=$_REQUEST["price"]*$_REQUEST["kg"];

 if($level=="1" && $kg<40)
   {$total=$price*$kg;}
 if($level=="1" && $kg>40)
   {$total=$price*$kg;}
 if($level=="1" && $kg>100)
   {$total=$price*$kg;}
 if($level=="2" && $kg<40)
   {$total=$price*$kg;}
 if($level=="2" && $kg>40)
   {$total=$price*$kg;}
 if($level=="2" && $kg>100)
   {$total=$price*$kg;}  
 if($level=="3" && $kg<40)
   {$total=$price*$kg;}
 if($level=="3" && $kg>40)
   {$total=$price*$kg;}
 if($level=="3" && $kg>100)
   {$total=$price*$kg;}
   

echo "<tr>","<td>","等級","</td>","<td>",$level,"</td>","</tr>";
echo "<tr>","<td>","公斤","</td>","<td>",$kg,"</td>","</tr>";
echo "<tr>","<td>","單價","</td>","<td>",$price,"</td>","</tr>";
echo "<tr>","<td>","小計","</td>","<td>",$price*$kg,"</td>","</tr>";

?>
</table>
</center>

</body>
</html>