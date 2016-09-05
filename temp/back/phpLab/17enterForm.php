<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center">
<form action="17outputStudent.php" method="post">
<?php
$num = $_POST["num"];
$amount = 0;
echo "<tr><th>姓名</th><th>學號</th><th>電話</th><th>地址</th></tr>";

for($i=1;$i<=$num;$i++){
	echo "<tr><td><input type='text' name='stuName$i'></td><td><input type='text' name='stuNum$i'></td><td><input type='text' name='stuPhone$i'></td><td><input type='text' name='stuAddress$i'></td></tr>";
	$amount++;
}

echo "<input type='hidden' name='counter' value='$amount '>";
echo "<input type='submit' value='送出'>";

?>

</form>
</table>


</body>
</html>