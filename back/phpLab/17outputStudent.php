<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<table border="1">
<?php
$counter = $_POST["counter"];
echo $counter;

for($i=1;$i<=$counter;$i++){
	echo "<tr><td>",$_POST["stuName$i"],"</td><td>",$_POST["stuNum$i"],"</td><td>",$_POST["stuPhone$i"],"</td><td>",$_POST["stuAddress$i"],"</td></tr><br>";
}

?>
</table>
</body>
</html>