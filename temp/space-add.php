<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<title></title>
	<link rel="shortcut icon" href="img/LOGO-gray.png">
</head>
<body>
<?php
	$agree = $_POST["agree"];
	$pos = false;
	$_SESSION["siteNo"] = $_REQUEST["siteNo"];
	$_SESSION["siteName"] = $_REQUEST["siteName"];
	$_SESSION["price"] = $_REQUEST["price"];
	$_SESSION["address"] = $_REQUEST["address"];
	$_SESSION["size"] = $_REQUEST["size"];
	$_SESSION["instro"] = $_REQUEST["instro"];
	$_SESSION["memberName"] = $_POST["memName"];
	$_SESSION["telphone"] = $_POST["tel"];
	$_SESSION["startDate"] = $_POST["startDate"];
	$_SESSION["endDate"] = $_POST["endDate"];
	$_SESSION["totalamount"] = $_POST["totalamount"];
	$_SESSION["totaldays"] = $_POST["totaldays"];
	$_SESSION["companyName"] = $_POST["companyName"];
	$_SESSION["schoolName"] = $_POST["schoolName"];
	$_SESSION["cdNum"] = $_POST["cdNum"];
	$_SESSION["cdDue"] = $_POST["cdDue"];
	$_SESSION["cdcheck"] = $_POST["cdcheck"];
	$_SESSION["uniNum"] = $_POST["uniNum"];	
	header("Location:space-order.php");
?>
</body>
</html>