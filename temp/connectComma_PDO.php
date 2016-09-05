<?php
  $dsn="mysql:host=localhost;dbname=zd702g2;charset=utf8;";
  $user="zd702g2";
  $password="zd702g2";
  $options=array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  $pdo=new PDO( $dsn, $user, $password, $options);  
?>