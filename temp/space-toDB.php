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
try{
	require_once("connectComma_PDO.php");
	//寫主檔
	$sql = "insert into commaorder (orderNo, siteNo, member, orderTime, totalDays, totalPrice, startDate, endDate) values(null, :siteNo, :member, :orderTime, :totalDays, :totalPrice,:startDate, :endDate)";
	// echo  $_SESSION["siteNo"], $_SESSION["discount"], $_SESSION["price"],$_SESSION["startTime"],$_SESSION["endTime"],"<br>";
	$commaorder = $pdo -> prepare($sql);
	$commaorder -> bindValue(":siteNo", $_SESSION["siteNo"]);
	$commaorder -> bindValue(":member", $_SESSION["memNo"]);
	$commaorder -> bindValue(":orderTime", date("y-m-d-h-i"));
	$commaorder -> bindValue(":totalDays", $_SESSION["totaldays"]);
	$commaorder -> bindValue(":totalPrice", $_SESSION["totalamount"]);
	$commaorder -> bindValue(":startDate", $_SESSION["startDate"]);
	$commaorder -> bindValue(":endDate", $_SESSION["endDate"]);
	$commaorder -> execute();

	header("Location:space_success.php");
}catch(PDOException $e){
	echo $e -> getLine(), "<br/>";
	echo $e -> getMessage();
}
?>
</body>
</html>