<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>18array.php</title>
</head>

<body>
<?php 
$arr = array();
$max = 0;
$min = 100;
$total = 0;
for($i=0; $i < 10; $i ++){
	$ran = rand (1, 100);
	$arr[$i] = $ran;
	echo $arr[$i], "<br/>";
	if($arr[$i] < $max)
		$max = $max;
	else
		$max = $arr[$i];
	if($arr[$i] < $min)
		$min = $arr[$i];
	else
		$min = $min;
	$total = $total + $arr[$i];
}
echo "最大值", $max, "<br/>";
echo "最小值", $min, "<br/>";
echo "總和", $total, "<br/>";

//step1 define an empty array
//loop(2 pick a number randomly form 1- 100
//3 put into array)*10
//4 echo 10 numbers
//5 echo max and min
//6 echo total
?>
</body>
</html>
