<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Space01荒野屋</title>
</head>
<body>
<?php
	$agree = $_POST["agree"];
	$pos = false;
	$_SESSION["startTime"] = $_POST["startTime"];
	$_SESSION["endTime"] = $_POST["endTime"];
	$_SESSION["coda"] = $_POST["coda"];
	$_SESSION["totalamount"] = $_POST["totalamount"];
	$_SESSION["companyName"] = $_POST["companyName"];
	$_SESSION["schoolName"] = $_POST["schoolName"];
	$_SESSION["cdNum"] = $_POST["cdNum"];
	$_SESSION["cdDue"] = $_POST["cdDue"];
	$_SESSION["cdcheck"] = $_POST["cdcheck"];
	$_SESSION["uniNum"] = $_POST["uniNum"];	

	header("Location : space-order.php");
?>
</body>
</html>