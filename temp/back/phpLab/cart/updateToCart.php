<?php
ob_start();
session_start();



$pos = array_search($_REQUEST['psn'],$_SESSION['psn']);

if(isset($_REQUEST['btnUpdate'])=== true ){//如果是修改，就修改數量
	$qty = $_REQUEST['qty'];
	$_SESSION['qty'][$pos]=$qty;
}else{//delete the data if btnDelete is clicked
	unset($_SESSION["psn"][$pos]);
	unset($_SESSION["pname"][$pos]);
	unset($_SESSION["price"][$pos]);
	unset($_SESSION["author"][$pos]);
	unset($_SESSION["qty"][$pos]);
}


header("Location:showCart.php");
?>