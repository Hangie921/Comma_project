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
			echo "<a href=''>進入會員專區</a><br><a href=''>進入商品區</a>";
		}

	}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
		echo $e->getLine();
	}

	?>
</body>
</html>