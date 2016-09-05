<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$a=$_GET["memId"];
$b=$_GET["memPsw"];
try{
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "tkuthu7188";
	$options = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo=new PDO($dsn,$user,$password,$options);
	echo "連線成功<br/>";
	$sql="select * from member where memId = ? and memPsw = ?";
$member=$pdo->prepare($sql);
$member->bindValue(1,$a);
$member->bindValue(2,$b);
$member->bindColumn("memName",$name);
$member->execute();
	if ($row=$member->fetch(PDO::FETCH_ASSOC)==false){
		echo"帳號及密碼輸入錯誤!";
	}
	else{
		echo $name,"您好:<br/>";
		echo "<a href='#'>進入會員專區</a><br/>";
		echo "<a href='#'>進入商品區</a>";
		
	}

}catch(PDOException $e){
	echo "錯誤行:",$e->getLine();
}//catch


?>


</body>
</html>