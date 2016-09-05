<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		
	</title>
</head>
<body>
<table align="center" border="1">
<tr><th>書號：</th>
	<th>書名：</th>
	<th>價格</th>
	<th>作者</th>
	<th>頁數</th>
	<th>圖檔</th>
	<th>買啦</th>
</tr>
	<?php
		try{
			require_once ("connectBooks.php");
			echo "Success!<br>";
			echo $_SESSION["id"],"你好!!今天想買什麼呢？";
			$sql = "select psn,pname,price,author,pages,image from products;";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1,$psn);
			$statement->execute();
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			?>
		
	<tr><form action="addToCart.php" method="post">
		<td><?php echo $row["psn"];    ?></td>
		<!-- 下面那行是在書名加上連結，點書名也可以加入購物車 -->
		<td><?php echo "<a href='addToCart.php?psn=",$row["psn"],"&pname=",$row['pname'],"&price=",$row['price'],"&author=",$row['author'],"'>",$row["pname"],"</a>";    ?></td>
		<td><?php echo $row["price"];    ?></td>
		<td><?php echo $row["author"];    ?></td>
		<td><?php echo $row["pages"];    ?></td>
		<td><?php echo $row["image"];    ?></td>
		<?php echo "<input type='hidden' name='psn' value='",$row["psn"],"'>";?>
		<?php echo "<input type='hidden' name='pname' value='",$row["pname"],"'>";?>
		<?php echo "<input type='hidden' name='price' value='",$row["price"],"'>";?>
		<?php echo "<input type='hidden' name='author' value='",$row["author"],"'>";?>
		<td><input type="submit" value="買啦"></td>
		</form>
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