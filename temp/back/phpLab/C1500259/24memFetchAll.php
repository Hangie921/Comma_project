<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>24memFetchAll</title>
</head>

<body>
<table align="center" border="1">
<tr>
	<td>編號</td>
    <td>姓名</td>
    <td>帳號</td>
    <td>密碼</td>
    <td>e-mail</td>
    <td>性別</td>
    <td>生日</td>
    <td>電話</td>
</tr>
<?php
try{
	$dsn="mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user="root";
	$password="tkuthu7188";
	$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo=new PDO($dsn,$user,$password,$options);
	echo "連線成功<br>";
	$sql="select * from member";
	$statement = $pdo->query($sql);
	$rows=$statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($rows as $i=>$row){
?>
<tr>
	<td><?php echo $row["no"]?></td>
    <td><?php echo $row["memName"]?></td>
    <td><?php echo $row["memId"]?></td>
    <td><?php echo $row["memPsw"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["sex"]?></td>
    <td><?php echo $row["birthday"]?></td>
    <td><?php echo $row["tel"]?></td>
</tr>
<?php	
	}
}
catch(PDOException $e){
	echo $e->getLine(),"<br>";	
}
?>
</table>
</body>
</html>