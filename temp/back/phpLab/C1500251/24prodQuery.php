<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style>
table th{
	color:#96F;
	}
caption{
	font-size:24px;
	color:deeppink;
	}
</style>
</head>

<body>
<table border="1" align="center" width="300">
<caption>書籍基本資料</caption>
<?php
try{
  require_once("connectBooks_PDO.php");
  $sql = "select * from products where psn = :psn";
  $psn = $_POST["bookNum"];
  $products = $pdo->prepare( $sql );
  $products -> bindValue("psn",$psn);
  $products -> execute();
  while($row = $products->fetch(PDO::FETCH_ASSOC)){
?>

<tr><th>書號</th><td><?php echo $row["psn"] ?></td></tr>
<tr><th>書名</th><td><?php echo $row["pname"] ?></td></tr>
<tr><th>價格</th><td><?php echo $row["price"] ?></td></tr>
<tr><th>作者</th><td><?php echo $row["author"] ?></td></tr>
<tr><th>頁數</th><td><?php echo $row["pages"] ?></td></tr>
<tr><th>圖檔</th><td><?php echo $row["image"] ?></td></tr>


<?php
}
	}catch(PDOException $e){
		echo $e->getMessage();
		}
	
?>
</table>
</body>
</html>