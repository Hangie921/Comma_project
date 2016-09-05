<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="200">
<?php
echo "<tr>","<td>","彩球面額","</td>","<td>","金額","</td>","</tr>";
$number=0;
for($i=1;$i<=10;$i++)
    {
     echo "<tr>","<td>",$number=(rand(0,10)),"</td>"; 
	 echo "<td>",$number*=100,"</td>","</tr>";    
    } 
	echo "<tr>","<td>","總金額:","</td>","<td>",$number,"</td>","</tr>";
?>
</table>
</body>
</html>