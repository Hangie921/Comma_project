<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>學生資料管理系統</title>
</head>
<body>
<?php
try{
	require_once("connectBooks.php");
	$sql = "select * from member";
	$statement = $pdo->query($sql);
	$rows = $statement->rowCount();

}catch(PDOExecption $e){
	$e->getLine();
	$e->getMessage();
}
?>
	<h1 align="center">會員資料管理系統</h1>
	<p align="center">目前資料筆數：<?php echo $rows; ?></p>
	<p align="center"><a href="add.php">新增會員資料</a></p>

	<table border="1" align="center">
		<tr>
			<th>編號</th>
			<th>會員名稱</th>
			<th>會員帳號</th>
			<th>會員密碼</th>
			<th>Email</th>
			<th>性別</th>
			<th>生日</th>
			<th>電話</th>
			<th>功能</th>
		</tr>
		<?php
			$num =1;
			while ($detail = $statement->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr><td>".$num."</td>";
				echo "<td>".$detail['memName']."</td>";
				echo "<td>".$detail['memId']."</td>";
				echo "<td>".$detail['memPsw']."</td>";
				echo "<td>".$detail['email']."</td>";
				echo "<td>".$detail['sex']."</td>";
				echo "<td>".$detail['birthday']."</td>";
				echo "<td>".$detail['tel']."</td>";
				echo "<td><a href='update.php?id=",$detail['memId'],"''>修改</a>";
				echo "<a href ='confirm.php?id=",$detail['memId'],"''>刪除</a></td></tr>";
				$num ++;
			}
		?>

	</table>




</body>
</html>