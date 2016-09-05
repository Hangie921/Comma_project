<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?php
$int=$_REQUEST["int"];

function sum1toN($i){
	$total=0;
	for($j=1;$j<=$i;$j++){
		$total+=$j;
		}
	return $total;
	};

echo "總和為 : ",sum1toN($int);

?>
</body>
</html>