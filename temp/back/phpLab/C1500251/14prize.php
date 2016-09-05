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
$total=0;
$i=1;
  do
    {$i++;
     echo "<tr>","<td>",$number=(rand(0,10)),"</td>"; 
	 echo "<td>",$number*=100,"</td>","</tr>";
    $total+=$number;}
	
	while($i<=10 && $number != 0);
	
	echo "<tr>","<td>","總金額:","</td>","<td>",$total,"</td>","</tr>";
?>
</table>

</body>
</html>