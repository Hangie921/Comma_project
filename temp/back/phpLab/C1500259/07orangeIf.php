<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
$a= $_GET["price"] ;
$b= $_GET["amount"] ;
$c=$a*$b;

echo
 "<table align='center' border='1'>
<tr><td>小計：</td><td>", $c ,"</td></tr>
<tr><td>打折後金額為：</td><td>" ; 

	if( $c>=500 ){
		$price = $c * 0.9 ;
		}
		elseif ( $c >=1000 ){
			$price = $c * 0.7 ;
		}
	echo $price , "</td></tr></table>" ;


?>
</body>
</html>