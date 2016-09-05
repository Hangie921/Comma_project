<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$num = $_GET['num'];

for($i=1;$i<=$num;$i++){
	for($j=1;$j<=$i;$j++){
		echo "*";	
	}
		echo "<br>";
}//end of outer for 



for($x=1;$x<=$num;$x++){
	
	for($y=$num-$x;$y>0;$y--){
		echo "&nbsp&nbsp";}
		
		for($z=1;$z<=$x;$z++){
			echo "*";	
		}
	
	
	echo"<br>";
}
	
?>

</body>
</html>