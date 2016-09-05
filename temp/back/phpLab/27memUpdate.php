<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$id = $_REQUEST["id"];
	$psw = $_REQUEST["psw"];
	try{
		require_once("connectBooks.php");
		echo "Success!<br>";
		$sql ="select memName, memId,memPsw from member where memId = ? and memPsw = ?";
		$statement = $pdo->prepare($sql);
		$statement->bindParam(1,$id);
		$statement->bindParam(2,$psw);
		$statement->execute();
		$detail = $statement->fetch(PDO::FETCH_ASSOC);  
		if($detail== Null){
			echo "帳號密碼錯誤";
		}
		else{
			echo $detail["memName"],"你好！<br>";
			$sqlGetData = "select no, memId,memPsw,email,tel,memName from member where memId = ?";
			$state = $pdo->prepare($sqlGetData);
			$state->bindParam(1,$detail["memId"]);
			$state->execute();
			$detailToModify = $state->fetch(PDO::FETCH_ASSOC);
			echo "請選擇你想修改的資料！";
			echo "<form action='27UpdateToDb.php' method='get'>
					<table border='1' align='center'>
						<tr><td>暱稱：</td><td><input type='text' value='",$detailToModify['memName'],"' name='memName'></td></tr>
						<tr><td>密碼：</td><td><input type='text' value='",$detailToModify['memPsw'],"' name='memPsw'></td></tr>
						<tr><td>email：</td><td><input type='text' value='",$detailToModify['email'],"' name='email'></td></tr>
						
						<input type='hidden' value='",$detailToModify['no'],"' name ='no'>
						<tr><td colspan='2'><input type='submit' value='修改送出''></td></tr>
						</table>
					
				</form>";

		}

	}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
		echo $e->getLine();
	}

	?>
</body>
</html>