<?php
	session_start();
	if( isset($_SESSION["memEmail"]) == false){
		echo "false";
	}else{
		echo "true";
	}
?>