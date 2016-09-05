<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
</head>
<body>
	<?php 
		if($fp=fopen('text.txt', 'r')){
			$data = fread($fp, filesize('text.txt'));
			if ($data) {
				echo "讀到資料",nl2br($data),"</br>";
			} else {
				echo "讀檔失敗";
			}
			

		}else{
			echo "開檔失敗";
		}
	 ?>
</body>
</html>