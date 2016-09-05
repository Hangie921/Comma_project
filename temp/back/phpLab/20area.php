<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$r=$_REQUEST["radius"];

function getArea($r){
	$area = $r*$r*3.14159;
	return $area; 	
	};

echo "圓面積為 : " ,getArea($r);

?>

</body>
</html>