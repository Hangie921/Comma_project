<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php
$number = $_GET["number"] ;
$total = 0 ;
echo "<table border='1' align='center'><tr><td>整數總和: </td>" ;

for( $a = 1 ; $a <= $number ; $a++ ){
	$total += $a ;
	}
echo "<td>" , $total , "</td></tr>" ;

$number = $_GET["number"] ;
$total = 0 ;
echo "<tr><td>奇數和: </td>" ;
for( $a = 1 ; $a <= $number ; $a += 2 ){
	$total += $a ;
	}
echo "<td>" , $total , "</td></tr>" ;

$number = $_GET["number"] ;
$total = 0 ;
echo "<tr><td>偶數和: </td>" ;
for( $a = 2 ; $a <= $number ; $a += 2){
	$total += $a ;
	}
echo "<td>" , $total , "</td></tr></table>";

?>


</body>
</html>