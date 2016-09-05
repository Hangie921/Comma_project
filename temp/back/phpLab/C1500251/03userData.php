<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style>
table, td{
	border: 1px solid black;
}
td{
	margin:3px;
	padding:3px;
}
</style>
</head>

<body>

<h2>個人小檔案</h2>
<?
	echo "<table>";
	$name="楊培英";
	echo "<tr><td bgcolor=pink>姓名 :</td><td>$name</td></tr>";
	$age="22";
	echo "<tr><td bgcolor=pink>年齡 :</td><td>$age</td></tr>";
	$address="台中市";
	echo "<tr><td bgcolor=pink>地址 :</td><td>$address</td></tr>";
	echo "</table>";
?>
</body>
</html>