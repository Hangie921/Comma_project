<?php 
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		cookieLogin
	</title>
</head>
<body>
	<?php 
		setcookie("memName","Walter");
	?>
	<a href="cookieMember.php">會員專區</a>
</body>
</html>