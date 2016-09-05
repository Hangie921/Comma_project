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
<tr>
	<th>書號：</th>
	<th>書名：</th>
	<th>單價</th>
	<th>作者</th>
	<th>數量</th>
	<th>小計</th>
	<th>修改</th>
</tr>
	<?php
		$total = 0;
		try{
			foreach($_SESSION['psn'] as $i=>$data){
			?>
	<tr><form action="updateToCart.php">
		<td><?php echo $_SESSION["psn"][$i];    ?></td>
		<td><?php echo $_SESSION["pname"][$i];    ?></td>
		<td><?php echo $_SESSION["price"][$i];    ?></td>
		<td><?php echo $_SESSION["author"][$i];    ?></td>
		<td><?php echo "<input type='text' name='qty' value='",$_SESSION["qty"][$i],"'>";    ?></td>
		<td><?php echo $_SESSION["qty"][$i] * $_SESSION["price"][$i]; 
		$total = $total + $_SESSION["qty"][$i] * $_SESSION["price"][$i];   ?></td>
		
		<?php echo "<input type='hidden' name='psn' value='",$_SESSION["psn"][$i],"'>";?>
		<td style="text-align:center"><input type="submit" name="btnUpdate" value="修改"><input type="submit" name="btnDelete" value="刪除"></td>
		</form>
	</tr>

	
	<?php
			}
	?>
	<tr><td colspan="8" align="right"> 你今天要花  <?php echo number_format($total); ?>  元</td></tr><!-- number＿format用特定格式輸出字串 -->
	<?php
		}catch(PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
		}

	?>
	</table>
	<p align="center"><a href="prodQuery.php">繼續選購</a></p>
	<p align="center"><a href="updateToDb.php">結帳</a>	 </p>
</body>
</html>