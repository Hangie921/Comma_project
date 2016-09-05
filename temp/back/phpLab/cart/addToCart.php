<?php
ob_start();
session_start();




// 下面的if在判斷session的psn是否有被建立過，如果沒有才會去搜尋index
if(isset($_SESSION['psn'])===false or array_search($_REQUEST['psn'],$_SESSION['psn'])===false){  //注意索引值有 0 的問題，所以要完全等於

	
	$_SESSION['psn'][] = $_REQUEST['psn'];
	$_SESSION['pname'][] = $_REQUEST['pname'];
	$_SESSION['price'][] = $_REQUEST['price'];
	$_SESSION['author'][] = $_REQUEST['author'];
	$_SESSION['qty'][] = 1;
}else{
	$_SESSION['qty'][array_search($_REQUEST['psn'],$_SESSION['psn'])]++;
}



header("Location:showCart.php");

?>