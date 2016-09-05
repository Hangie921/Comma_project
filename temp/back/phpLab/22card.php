<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php

for($i=1;$i<=52;$i++){
	$ary[$i-1]=$i;	
	}
shuffle($ary);

echo "<table border='1'>";
for($j=0;$j<=3;$j++){
	echo "<tr><td>玩家",$j+1,"</td>";
	for($k=0;$k<=12;$k++){
		echo "<td>",$ary[$k+($j*13)],"</td>";
		}
	echo "</tr>";
	}
echo "</table>";
?>
<br /><br />
<br />

<?php
$count=0;
for($s=1;$s<=4;$s++){
	$x=$s;
	switch($x){
	case '1':
		$x="<span style='color:black;'>♠";
		break;
	case '2':
		$x="<span style='color:red;'>♥";
		break;
	case '3':
		$x="<span style='color:red;'>♦";
		break;
	case '4':
		$x="<span style='color:black;'>♣";
		break;}//end of switch
		
	for($i=1;$i<=13;$i++){
		$string="$x".$i."</span>";
		$ary[$count]=$string;	
		$count+=1;
	}

}
shuffle($ary);

echo "<table border='1'>";
for($j=0;$j<=3;$j++){
	echo "<tr><td>玩家",$j+1,"</td>";
	for($k=0;$k<=12;$k++){
		echo "<td>",$ary[$k+($j*13)],"</td>";
		}
	echo "</tr>";
	}
echo "</table>";
?>
</body>
</html>