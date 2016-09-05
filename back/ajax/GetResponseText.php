<?php
try{
  require_once("connectComma_PDO.php");
  $sql = "select memName from member where memId=:memId and memPsw=:memPsw";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->bindValue(":memPsw",$_REQUEST["memPsw"]);
  $member->execute();
  if( $member->rowCount() == 0 ){
    echo "fail"; //可用
  }else{
    echo "success";//不可用 
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>