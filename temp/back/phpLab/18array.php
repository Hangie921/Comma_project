<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?php
$arr=array();
$total=0;
$num=0;
for($i=0;$i<10;$i++){
	$arr[$i]=rand(1,100);
	$total+=$arr[$i];
	$num=$i+1;
	echo "第 $num&nbsp;個數為 ",$arr[$i],"<br>";
	}//enter the element of the array 
	
echo "<br>","總和等於 ",$total,"<br>";
echo "平均等於 ",$total/10,"<br>";
echo "最大值為 ",max($arr);
echo "最小值為 ",min($arr);


?>
</body>
</html>