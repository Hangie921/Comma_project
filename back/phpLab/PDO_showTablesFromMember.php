<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>select member</title>
</head>

<body>
<table border="1" align="center">
<tr>
	<th>會員編號</th>
    <th>會員姓名</th>
    <th>會員帳號</th>
    <th>會員密碼</th>
    <th>email</th>
    <th>會員性別</th>
    <th>會員生日</th>
    <th>會員電話</th>
</tr>
<?php 
	try{
		require_once('connectBooks.php');
		echo "Log in Success!<br>";
		$sql = "select * from member";
		$status = $pdo->query($sql);
		while($row = $status->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
	<td><?php	echo $row["no"];?></td>
	<td><?php	echo $row["memName"];?></td>
	<td><?php	echo $row["memId"];?></td>
	<td><?php	echo $row["memPsw"];?></td>
	<td><?php	echo $row["email"];?></td>
	<td><?php	echo $row["sex"];?></td>
	<td><?php	echo $row["birthday"];?></td>
	<td><?php	echo $row["tel"];?></td>
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