<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>荒野屋</title>
</head>
<body>
<?php
try{


	require_once("connectBooks_pdo.php");
	//寫主檔
	$sql = "insert into commaorder (orderNo, siteNo, member, orderTime, totalDays, totalPrice, startDate, endDate) values(null, :siteNo, 2, :orderTime, :totalDays, :totalPrice,:startTime, :endTime)";
	// echo  $_SESSION["siteNo"], $_SESSION["discount"], $_SESSION["price"],$_SESSION["startTime"],$_SESSION["endTime"],"<br>";
	$commaorder = $pdo -> prepare($sql);
	$commaorder -> bindValue(":siteNo", $_SESSION["siteNo"]);
	$commaorder -> bindValue(":orderTime", date("y-m-d-h-i"));
	$commaorder -> bindValue(":totalDays", 5);
	$commaorder -> bindValue(":totalPrice", $_SESSION["totalamount"]);
	$commaorder -> bindValue(":startTime", $_SESSION["startTime"]);
	$commaorder -> bindValue(":endTime", $_SESSION["endTime"]);
	$commaorder -> execute();

	header("Location:space_success.php");
}catch(PDOException $e){
	echo $e -> getLine(), "<br/>";
	echo $e -> getMessage();
}
?>
</body>
</html>