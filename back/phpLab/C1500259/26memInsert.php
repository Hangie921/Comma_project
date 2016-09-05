<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php
$a=$_GET["memName"];
$b=$_GET["memId"];
$c=$_GET["memPsw"];
$d=$_GET["email"];
$e=$_GET["sex"];
$f=$_GET["birthday"];
$g=$_GET["tel"];

try{
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "tkuthu7188";
	$options = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo=new PDO($dsn,$user,$password,$options);
	echo "連線成功<br/>";
	$sql="insert into member(memName,memId,memPsw,email,sex,birthday,tel)values(?,?,?,?,?,?,?)";
		$member=$pdo->prepare($sql);
$member->bindValue(1,$a);
$member->bindValue(2,$b);
$member->bindValue(3,$c);
$member->bindValue(4,$d);
$member->bindValue(5,$e);
$member->bindValue(6,$f);
$member->bindValue(7,$g);

$member->execute();
	
}catch(PDOException $z){
	echo "錯誤行:",$z->getLine();
}//catch	
	
	
	
	

?>
</body>
</html>