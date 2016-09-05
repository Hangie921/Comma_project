<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	try{
		$pdo= new PDO($dsn, $user,$password,$options);
		echo "Success!<br>";
		$sql = "select * from products";
		$pdo->exec($sql);
		echo "Modified successfully!";
		}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
			}

?>
</body>
</html>