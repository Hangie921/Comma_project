<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
		</title>
	</head>
	<body>
		123
		<?php
		$psn = $_REQUEST["prodNum"];
		try{
			require_once ("connectBooks.php");
			echo "Success!<br>";
			$sql = "select psn,pname,price,author,pages,image from products where psn= ? ;";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1,$psn);
			$statement->execute();
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					}
		}catch(PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
		}
			?>
	</body>
	</html>	