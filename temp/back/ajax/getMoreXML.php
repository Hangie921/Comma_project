<?php
try{
  require_once("connectBooks_PDO.php");
  $sql = "select * from member where memId=:memId";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();

}catch(PDOException $e){
  echo $e->getMessage();
}
?>