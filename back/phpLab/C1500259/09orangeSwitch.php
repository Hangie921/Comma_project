<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$a = $_GET["kg"] ;
$l = $_GET["level"] ;

echo "<table align='center' border='1'>
<tr><td>小計</td><td>" ;

	switch ( $l ){
		case "1" :
			$price = $a * 30 ;
			if( $a >= 100 ){
				$price = $a * 20 ;}
			elseif( $a >= 40 ){
				$price = $a * 25 ;}
			break ;
			
		case "2" :
			$price = $a * 25 ;
			if( $a >= 100 ){
				$price = $a * 15 ;}
			elseif( $a >= 40 ){
				$price = $a * 20 ;}
			break ;
				
		case "3" :
			$price = $a * 20 ;
			if( $a >= 100 ){
				$price = $a * 10 ;}
			elseif( $a >= 40 ){
				$price = $a * 15 ;}
			break ;
				
			}
echo $price , "</td></tr></table>" ;





?>


</body>
</html>