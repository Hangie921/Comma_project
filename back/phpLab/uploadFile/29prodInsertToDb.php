<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
	
	<?php 
	try{
		require_once("connectBooks.php");
		if(require_once("connectBooks.php")){
			echo "connected!";
		}else{echo "connection failed!";}//end of require if
		$sql="select * from products";
		
		$count=$pdo->prepare($sql);
		$count->execute();
		$lastNo=$count->rowCount();
		$lastNo++;
		$lastNo.=".gif";
		//先RowCount回傳資料筆數，就可以為圖檔命名
		
		$sqlUpload = "insert into products values(null,:pname,:price,:author,:pages,:image)";
		$insert = $pdo->prepare($sqlUpload);
		$insert->bindParam(':pname',$_REQUEST['pname']);
		$insert->bindParam(':price',$_REQUEST['price']);
		$insert->bindParam(':author',$_REQUEST['author']);
		$insert->bindParam(':pages',$_REQUEST['pages']);
		$insert->bindParam(':image',$lastNo);
		$insert->execute();
		//將資料上傳到DB
		

		$from = $_FILES['pic']['tmp_name'];
		$to = "/Applications/MAMP/htdocs/phpLab/uploadFile/image//".mb_convert_encoding($lastNo,mb_internal_encoding(),'utf-8') ;
		copy($from,$to);
		
			if(copy($from,$to)){
				echo "上傳成功";
			}else{
				echo "error";
			}//end of copy if

	}catch(PDOException $e){
			echo $e->getMessage(),"<br>";
			echo $e->getLine();
	}

	?>
</body>
</html>