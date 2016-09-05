<?php 
require_once('../connectComma_PDO.php');
$sql="update sitepic set inBanner = 0 where inBanner = 1 ";
$pdo->query($sql);
$sql="update sitepic set inBanner = 1 where no=:no";
$statement=$pdo->prepare($sql);
$statement->bindParam(':no',$_REQUEST['picNo']);
$statement->execute();
echo 'success';
// header('Location:AdManager_back.php');
 ?>