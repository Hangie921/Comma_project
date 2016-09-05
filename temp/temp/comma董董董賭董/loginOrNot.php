<?php
	session_start();
	if( isset($_SESSION["memName"]) == false){
		echo "false";
	}else{
		echo "true";
	}
?>