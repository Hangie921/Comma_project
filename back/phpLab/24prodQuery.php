<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		
	</title>
</head>
<body>
<table align="center" border="1">
<tr><th>書號：</th><th>書名：</th>	<th>價格</th><th>作者</th><th>頁數</th><th>圖檔</th></tr>
	<?php
		$psn = $_REQUEST["prodNum"];
		try{
			require_once ("connectBooks.php");
			echo "Success!<br>";
			$sql = "select psn,pname,price,author,pages,image from products;";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1,$psn);
			$statement->execute();
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			?>
		
	<tr>
		<td><?php echo $row["psn"];    ?></td>
		<td><?php echo $row["pname"];    ?></td>
		<td><?php echo $row["price"];    ?></td>
		<td><?php echo $row["author"];    ?></td>
		<td><?php echo $row["pages"];    ?></td>
		<td><?php echo $row["image"];    ?></td>
	</tr>
	
	
	<?php
			}
		}catch(PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
		}





	?>
	</table>
</body>
</html>