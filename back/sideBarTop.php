<?php
ob_start();
session_start();
?>
<?php 
	require_once('../connectComma_PDO.php');
?>
<body>
<div class="container">
	<div class="menu">
		<div class="logo">
			<a href="AdManager_back.php"><img src="img/LOGO-gray.png" ></a>
		</div>
		<span>
			<?php echo $_SESSION['name']; ?>
		</span>
		<ul class="menuText">
			<li> <a href="AdManager_back.php"><img src="img/tr.png">廣告管理</a> </li>
			<li> <a href="exhibition_back.php"><img src="img/tr.png">展覽管理</a></li>
			<li> <a href="site_back.php"><img src="img/tr.png">場地管理</a></li>
			<li> <a href="Order_back.php"><img src="img/tr.png">訂單管理</a></li>
			<li> <a href="Assess_back.php"><img src="img/tr.png">評論管理</a></li>
			<li> <a href="Member_back.php"><img src="img/tr.png">會員查詢</a></li>
			<li> <a href="Date_back.php"><img src="img/tr.png">檔期瀏覽</a></li>
			<li> <a href="logout.php"><img src="img/tr.png">登出</a></li>
		</ul>
	</div>
