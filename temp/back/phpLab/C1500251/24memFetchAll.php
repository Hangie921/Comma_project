<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center">
<tr style="background-color:#FCF">
	<th>編號</th>
	<th>姓名</th>
	<th>帳號</th>
	<th>密碼</th>
	<th>E-mail</th>
	<th>性別</th>
	<th>生日</th>
	<th>電話</th>
</tr>
<?php
try{
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charest=utf8";
	$user = "root";
	$password = "84732";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
	$sql = "select * from member";
	$statement=$pdo->query( $sql );
	$member = $statement -> fetchAll(PDO::FETCH_ASSOC);
	foreach ($member as $i => $memRow){
?>

<tr>
    <td><?php echo $memRow["no"] ?></td>
    <td><?php echo $memRow["memName"] ?></td>
    <td><?php echo $memRow["memId"] ?></td>
    <td><?php echo $memRow["memPsw"] ?></td>
    <td><?php echo $memRow["email"] ?></td>
    <td><?php echo $memRow["sex"] ?></td>
    <td><?php echo $memRow["birthday"] ?></td>
    <td><?php echo $memRow["tel"] ?></td>
</tr>

<?php
}
	}catch(PDOException $e){
	echo $e -> getMessage();
	}
?>

</table>
</body>
</html>