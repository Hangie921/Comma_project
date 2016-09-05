<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
	try{
		require_once('connectBooks.php');
		echo "Success!<br>";
		$sql = "update emp set sal= sal +100 where empno=7654";
		$pdo->exec($sql);
		echo "Modified successfully!";
		}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
			}

?>
</body>
</html>