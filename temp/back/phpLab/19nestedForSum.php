<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<h2>for for if</h2>
<?php
for($i=1;$i<11;$i++){
	$total=0;
	for($j=1;$j<=$i;$j++){
		echo $j;
		$total+=$j;
		if($j==$i){
			echo "=";
		}else{
			echo "+";
			}//end of if
		}//end of inner for
		echo $total,"<br>";

	}//換行

?>
<br>
<h2>for for</h2>
<?php
for($i=1;$i<11;$i++){
	$total=1;
	echo 1;
	for($j=2;$j<=$i;$j++){
		echo "+",$j;
		$total+=$j;
		}//end of inner for
		echo "=",$total,"<br>";
	}//換行

?>
</body>
</html>