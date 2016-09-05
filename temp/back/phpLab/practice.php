<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style>
td {
	width:80px;
	text-align:center;
	color:blue
	}
</style>
</head>

<body>

<h2>2D array</h2>
<table border="1">
<tr><td>國</td><td>英</td><td>數</td><td>自</td><td>平均</td></tr>
<?php
$a2d= array(array(1,11,111,1111),array(2,22,222,2222),array(3,33,333,3333),array(4,44,444,4444));
$total=0;
for($i=0;$i<4;$i++){
	echo "<tr>";
	$total=0;
	for($j=0;$j<4;$j++){
		$total += $a2d[$i][$j];
		echo "<td>",$a2d[$i][$j],"</td>";
		}
	echo "<td>",$total/$j,"</td>";
	echo "</tr>";
	}
?>
</table>

<h2>print_r,array_search,shuffle</h2>
<?php
$arr= array(11,22,33,44,55,66,77);

print_r ($arr);
echo "<br>";
array_search(33,$arr);
echo "<br>";
shuffle($arr);
print_r($arr);
echo "<br>";

?>



<h2>foreach</h2>
<?php
$arr =  array(123,456,79,83,35,37,67,137,3);
foreach ($arr as $i => $data){
	echo "index =", $i,"&nbsp","data = ",$data,"<br/>";
	}

?>


<table border="1" align="center">
<?php
for($i=9;$i>=1;$i--){
	echo "<tr>";
	for($j=9;$j>=1;$j--){
		echo "<td>$i * $j =",$i*$j,"</td>";
		}
	echo "</tr>";
	}
?>

</table>
</body>
</html>