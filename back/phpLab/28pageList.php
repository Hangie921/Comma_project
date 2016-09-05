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
		if(isset($_REQUEST["pageNo"])&& $_REQUEST["pageNo"] !=1){
			$currentPage = $_REQUEST["pageNo"];
		}else{
			$currentPage =1; //預設為顯示第一頁	
		}
		$totalPages=0;
		$totalRows = 0;
		$rowsPerPage = 2;
		$currentRow = 0;

		try{
			require_once ("connectBooks.php");
			echo "Success!<br>";
			$sql = "select count(*) total from products ";
			$statement=$pdo->query($sql);
			$detail = $statement->fetch(PDO::FETCH_ASSOC);
			$totalRows=$detail["total"];
			$totalPages = ceil($totalRows/$rowsPerPage);
			//以上為變數設定
			$currentRow = ($currentPage-1)* $rowsPerPage;

			$sql = "select * from products";
			$sql = $sql." limit ".$currentRow.",".$rowsPerPage;
			$statement1=$pdo->query($sql);
			while($detail = $statement1->fetch(PDO::FETCH_ASSOC)){
	?>
		
	<tr>
		<td><?php echo $detail["psn"];    ?></td>
		<td><?php echo $detail["pname"];    ?></td>
		<td><?php echo $detail["price"];    ?></td>
		<td><?php echo $detail["author"];    ?></td>
		<td><?php echo $detail["pages"];    ?></td>
		<td><?php echo $detail["image"];    ?></td>
	</tr>
	
	
	<?php
			}
		}catch(PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
		}

	?>
	</table>
	<?php 


	echo "<p align='center'><a href='28pageList.php?pageNo=1'>第一頁</a> ";
		for($i=2;$i<=$totalPages-1;$i++){
			echo "<a href='28pageList.php?pageNo=$i'>$i</a> ";
		}
	echo "<a href='28pageList.php?pageNo=",$totalPages,"'>最末頁</a></p>" 
	
	?>
</body>
</html>








