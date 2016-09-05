<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center">
<tr>
	<th>書號</th>
    <th>書名</th>
    <th>價格</th>
    <th>作者</th>
</tr>
<?php 
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=urf8";
	$user = "root";
	$password = "victeaia9";
	$options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	try{
		$pdo= new PDO($dsn, $user,$password,$options);
		echo "Log in Success!<br>";
		$sql = "select * from products";
		$status = $pdo->query($sql);
		$rows = $status->fetchAll(PDO::FETCH_ASSOC);
		foreach($rows as $i=>$rows){
		
?>
<tr>
	<td><?php	echo $rows["psn"];?></td>
	<td><?php	echo $rows["pname"];?></td>
	<td><?php	echo $rows["price"];?></td>
	<td><?php	echo $rows["author"];?></td>
</tr>	
<?php			
		}
		}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
			}

?>
</table>

</body>
</html>