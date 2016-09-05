<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
<?php 
	require_once("connectBooks.php");
	try{
		$sql= "select * from member where memId = :memId ";
		$statement = $pdo->prepare($sql);
		$statement->bindParam(':memId',$_GET['id']);
		$statement->execute();
		$detail = $statement->fetch(PDO::FETCH_ASSOC);
	?>
	<h2 align="center">會員資料管理系統-刪除會員</h2>
	<h3 align="center">你確定要刪除此筆資料？</h3>
	<table align="center" border="1">
		<tr>
			<th>會員名稱</th>
			<th>會員帳號</th>
			<th>會員密碼</th>
			<th>Email</th>
			<th>性別</th>
			<th>生日</th>
			<th>電話</th>
		</tr>
		<tr>
			<td><?php echo $detail["memName"]; ?></td>
			<td><?php echo $detail["memId"]; ?></td>
			<td><?php echo $detail["memPsw"]; ?></td>
			<td><?php echo $detail["email"]; ?></td>
			<td><?php echo $detail["sex"]; ?></td>
			<td><?php echo $detail["birthday"]; ?></td>
			<td><?php echo $detail["tel"]; ?></td>
		</tr>
	</table>
	<h3 align="center"><?php echo  "<a href='delete.php?memId=",$_GET["id"],"'>確定</a> <a href='data.php'>取消</a>" ;
	}catch(PDOException $e){
		$e->getLine();
		$e->getMessahe();
	}
	?></h3>
</body>
</html>