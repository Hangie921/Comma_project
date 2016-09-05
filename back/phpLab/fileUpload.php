<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
	
	<?php 
		$from = $_FILES['pic']['tmp_name'];
		$to = "/Applications/MAMP/tmp/php/fileTest//".mb_convert_encoding($_FILES['pic']['name'],mb_internal_encoding(),'utf-8') ;
		copy($from,$to);
		if(copy($from,$to)){
			echo $_FILES['pic']['name'],"<br>";
			echo $_FILES['pic']['tmp_name'],"<br>";
			echo $_FILES['pic']['size'],"<br>";
			echo $_FILES['pic']['type'],"<br>";
			echo "上傳成功";
		}else{
			echo "error";
		}

	 ?>
</body>
</html>