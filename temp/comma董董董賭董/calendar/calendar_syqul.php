<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
<?php
	try{
		require_once("connectBooks_pdo.php");
		$theDate= $_POST["theDate"];
		alert($theDate);
		$sql = "select s.siteNo, c.siteNo, c.startDate, c.endDate
				from site s JOIN commaorder c ON s.siteNo = c.siteNo
				where  s.siteNo = :siteNo and (:date between c.startDate and c.endDate)
				orderby c.startDate";
		$statement = $pdo -> prepare($sql);
		$statement -> bindValue(":siteNo", 1);
		$statement -> bindValue(":date", $theDate);
		$statement -> execute();
		$rowCount = $statement -> rowCount();
		if( $rowCount != 0){
			($row = $statement -> fetch(PDO::FETCH_ASSOC))
?>		
    <tr><th>書號</th><td><?php echo $row["siteNo"]?></td></tr>
<?php
}
else{
	echo "此日期無資料";
}
	}catch(PDOException $e){
		echo "錯誤行 : " $e -> getLine(), "<br/>";
		echo $e -> getMessage();
	}
?>
</table>
</body>
</html>
