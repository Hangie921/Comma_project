<?php
ob_start();
session_start();
?>
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
	$_SESSION['id'] = $id;
	$_SESSION['psw'] = $psw;
	
		unset($_SESSION['psn']);
		unset($_SESSION['pname']);
		unset($_SESSION['author']);
		unset($_SESSION['price']);
		unset($_SESSION['qty']);
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
			if(isset($_SESSION['where'])=== true){
				header("Location:".$_SESSION['where']);
				unset($_SESSION['where']);
			}//end of 'where' if
			
			echo $detail["memName"],"你好！<br>";
			echo "<a href=''>進入會員專區</a><br><a href='prodQuery.php'>進入商品區</a>";
		}

	}catch(PDOException $e){
		echo $e->getMessage(),"<br>";
		echo $e->getLine();
	}

	?>
</body>
</html>