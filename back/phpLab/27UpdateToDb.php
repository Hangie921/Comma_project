<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
	<?php
		$memPsw = $_REQUEST['memPsw'];
		$email = $_REQUEST['email'];
		$memName = $_REQUEST['memName'];
		$no = $_REQUEST['no'];
		try{
			require_once('connectBooks.php');
			$sql="update member set memPsw = ?,email = ?, memName = ? where no =?";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1,$memPsw);
			$statement->bindParam(2,$email);
			$statement->bindParam(3,$memName);
			$statement->bindParam(4,$no);
			$statement->execute();
			echo "Modify Success<br>";

		}catch(PDOException $e){
			$e->getLine();
			$e->getMessage();
		}

	?>
</body>
</html>