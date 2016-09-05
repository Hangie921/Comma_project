<?php
ob_start();
session_start();
$_SESSION["tel"] = "02839";
echo $_SESSION['tel'];
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$startDate = $_SESSION["startTime"];
$endDate = $_SESSION["endTime"];

?>
	<script>
	var tel = "<?php echo isset($_SESSION['tel'])?$_SESSION['tel']:'' ?>";
	document.write("tel : " , tel);
	</script>
</body>
</html>