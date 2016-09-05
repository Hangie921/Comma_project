<?php
				
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update the Member details!</title>
</head>
<body>

<form action="updateToDb.php" method="post">
<?php echo "<h2 align= 'center'>會員管理系統-修改會員資料 </h2>" ;?>
<?php echo "<h4 align= 'center'> <a href='data.php'>回主畫面</a> </h2>" ;?>
	<table border="1" align="center">
				
		<?php
			try{
				require_once("connectBooks.php");
				$memId = $_GET['id'];
				$sql = "select memName,memPsw ,email,tel from member where memId = ?";
				$state = $pdo->prepare($sql);
			 	$state->bindParam(1,$memId);
				$state->execute();
				$array = $state->fetch(PDO::FETCH_ASSOC);
				echo "<tr><td>會員名稱</td><td><input type='text' name='memName' value='",$array['memName'],"'></td></tr>";
				echo "<tr><td>會員密碼</td><td><input type='text' name='memPsw' value='",$array['memPsw'],"'></td></tr>";
				echo "<tr><td>Email</td><td><input type='text' name='email' value='",$array['email'],"'></td></tr>";
				echo "<tr><td>會員電話</td><td><input type='text' name='tel' value='",$array['tel'],"'></td></tr>";
				echo "<input name='memId' type='hidden' value='$memId '>";
				echo "<tr><td colspan='2'><input type='reset' value='重新修改'><input type='submit' value='確認送出'></td></tr>";

		}catch(PDOException $e){
				$e->getLine();
				$e->getMessage();
			}
		?>


	</table>
</form>

</body>
</html>