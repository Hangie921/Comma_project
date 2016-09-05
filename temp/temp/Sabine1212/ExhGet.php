<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	$pos = false;
	$_SESSION["orderNo"] = $_REQUEST["orderNo"];
	$_SESSION["memNo"] = $_REQUEST["memNo"];
	$_SESSION["startDate"] = $_REQUEST["startDate"];
	$_SESSION["endDate"] = $_REQUEST["endDate"];
	$_SESSION["exhiName"] = $_REQUEST["exhiName"];
	$_SESSION["instro"] = $_REQUEST["instro"];
	
	/*echo $_SESSION["orderNo"];*/
	
	header("Location : exhLightbox.php");
?>
</body>
</html>