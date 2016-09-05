<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		if($fp=fopen("text.txt", 'w')){
			$data = '1234567890abc';
			
			if(fwrite($fp,$data,13)){
				echo "寫入成功";
			}else{
				echo "寫入失敗";
			}

		}else{
			echo "開檔失敗";
		}
	?>
</body>
</html>