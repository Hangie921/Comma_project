<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="400">
<?php
$arr=range(1,52);
$x=0;
shuffle($arr);


for($i=1;$i<=4;$i++){
	echo "<tr><td>","玩家",$i,"</td>";
	for($j=0;$j<13;$j++){
	   echo "<td>$arr[$x]</td>";
	  $x++;}echo "</tr>";
	}

?>
</table>
</body>
</html>

