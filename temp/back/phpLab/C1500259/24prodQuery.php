<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<table border='1' align='center'>
<?php
$psn=$_REQUEST["Number"];
try{
  require_once("connectBooks_PDO.php");
  $sql = "select * from products where psn = ?";
  $products = $pdo->prepare( $sql );
  $products->bindValue(1,$psn);
  $products->execute();
  while($row=$products->fetch(PDO::FETCH_ASSOC)){
?>
<tr><th >書號</th><td ><?php echo $row["psn"]?></td></tr>

<tr><th>書名</th><td><?php echo $row["pname"]?></td></tr>

<tr><th>價格</th><td><?php echo $row["price"]?></td></tr>

<tr><th>作者</th><td><?php echo $row["author"]?></td></tr>

<tr><th>頁數</th><td><?php echo $row["pages"]?></td></tr>

<tr><th>圖檔</th><td><?php echo $row["image"]?></td></tr>
<?php  

  }
}catch(PDOException $e){
  echo "行號: ", $e->getLine();	
}
?>
</table>
</body>
</html>