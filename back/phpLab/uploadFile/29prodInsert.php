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
	<style>
		img{
			width: auto;
			height: 40%;
		}
	</style>
</head>
<body>
上傳產品：<br>
	<form action="uploadFileToDb.php" method="post" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<th>書名</th>
			<th>價格</th>
			<th>作者</th>
			<th>頁數</th>
			<th>上傳圖檔</th>
		</tr>
		<tr>
			<td><input type="text" maxlength="10" name="pname"></td>
			<td><input type="text" name="price">元</td>
			<td><input type="text" name="author"></td>
			<td><input type="text" name="pages">頁</td>
			<td><input type="file" name="pic" ></td>
		</tr>
		<tr>
			<td colspan="6"><input type="submit" value="上傳"></td>
		</tr>
	</table>
	</form><br><br>

<table align="center" border="1">
<tr><th>書號</th>
	<th>書名</th>
	<th>價格</th>
	<th>作者</th>
	<th>頁數</th>
	<th>圖檔</th>
	<th>買啦</th>
</tr>
	<?php
		try{
			require_once ("connectBooks.php");
			echo "DB connected!<br>";
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
		<td><?php echo "<img src='image/", $row['image'], "' width='' height=''>";    ?></td>
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
	</table><br>
		



</body>
</html>