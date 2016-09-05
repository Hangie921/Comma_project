<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="600">
<?php
$flower = array("♠", "<span style='color:red'>♥</span>", "<span style='color:red'>♦</span>", "♣");
$card = array();
$x=0;



for($i=0; $i<4; $i++){
	for($a=1; $a<14; $a++){
		$card[] = $flower[$i].$a;
	}
}

shuffle($card);
for($p=1;$p<=4;$p++){
 	echo "<tr><td>","玩家",$p,"</td>";
	for($j=0;$j<13;$j++){
 	   echo "<td>$card[$x]</td>";
 	  $x++;}
 	echo "</tr>";
	}


//echo '<pre>';
//print_r($card_arr);
//echo '</pre>';



?>
</table>
</body>
</html>

