<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UpdateToDb</title>
</head>
<body>
<?php
if(isset($_SESSION['id'])===false){  //未登入
	$_SESSION['where']="updateToDb.php";
	echo "尚未登入,<a href='Login.html'>請登入</a>";

}else{
	try{
	// <!-- 連線 -->
		require_once("connectBooks.php");
	// <!-- 寫入訂單主檔 -->
		$sql = "insert into bookorder values(null, :orderMemNo, :orderTime,  :email,'0')";
		$orderMemNo = 3;
		$email = "hangie921@gmail.com";
		$bookOrder = $pdo->prepare($sql);
		$bookOrder->bindValue(":orderMemNo",$orderMemNo);
		$bookOrder->bindValue(":orderTime",date('Y-m-d H:i:s'));
		$bookOrder->bindValue(":email",$email);
		$bookOrder->execute();
		// <!-- 寫入訂單明細 -->

		$orderNo = $pdo->LastInsertId();//找尋最後一個插入的ID
		$sql = "insert into orderitems values(:orderNo,:productNo,:quantity)";
		$orderItem = $pdo->prepare($sql);
		$orderItem->bindParam(':orderNo',$orderNo);

		foreach($_SESSION['psn'] as $i =>$data){			
			$orderItem->bindParam(':productNo',$_SESSION['psn'][$i]);
			$orderItem->bindParam(':quantity',$_SESSION['qty'][$i]);
			$orderItem->execute();
		}

		echo "下單成功<br>訂單編號為：",$orderNo,"<br>";
		//清除session
		unset($_SESSION['psn']);
		unset($_SESSION['pname']);
		unset($_SESSION['author']);
		unset($_SESSION['price']);
		unset($_SESSION['qty']);

		echo "<a href='login.php?id=",$_SESSION['id'],"&psw=",$_SESSION['psw'],"'>回首頁</a> ";
	}catch(PDOExeception $e){
		echo $e->getLine(),"<br>";
		echo $e->getMessage();
	}
	}
?>
</body>
</html>