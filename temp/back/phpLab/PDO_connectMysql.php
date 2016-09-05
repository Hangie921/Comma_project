<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
	
<?php
$host = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
$username = "root";
$password = "root";
$options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($host,$username,$password,$options);
?>

</body>
</html>