<?php
ob_start();
session_start();
try{
  require_once("../connectComma_PDO.php");
  $sql = "select name from employee where account=:account and password=:password";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":account", $_REQUEST["account"]);
  $member->bindValue(":password",$_REQUEST["password"]);
  $member->execute();
  if( $member->rowCount() == 0 ){
    echo "fail"; //帳號密碼不正確
  }else{
    echo "success";//帳號密碼正確 
    $name = $member->fetch(PDO::FETCH_ASSOC);
    $_SESSION['name']=$name['name'];
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>