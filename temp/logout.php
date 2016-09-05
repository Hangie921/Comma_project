<?php
ob_start();
session_start();

session_unset(void);
header('Location:index_front.php');
?>