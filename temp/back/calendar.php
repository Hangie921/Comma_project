<?php
ob_start();
session_start();
$memEmail = $_SESSION["memEmail"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>瀏覽檔期</title>
	<link rel="stylesheet" href="css/allheader2.css">
	<link rel="stylesheet" href="css/calendar.css">
	<link rel="stylesheet" href="css/allfooter.css">
	<link rel="stylesheet" type="text/css" href="css/header-phone.css" media="screen and (max-width: 481px)">
	<link rel="stylesheet" type="text/css" href="css/calendar_480.css" media="screen and (max-width: 481px)">
	<link rel="stylesheet" href="css/membersing767.css">
	<link rel="stylesheet" href="css/membersing992.css">
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet'>


	<script src ="js/jquery-2.1.4.min.js"></script>
	<script src="js/calendar-try.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/lightbox02.js"></script>

</head>
<body>
<div id="canvas" class="gradient"></div>
<div class="container">
 	<?php require_once("insideHeader.php");?>
<!-- 	<div class="header">
		<div class="logo"><a href="#"><img src="img/logo_white.png" width="90" height="75"></a></div>
		<div class="menu-container">
			<div class="menu"><span class="m" id="exhibition"><a href="#">展覽資訊</a></span></div>
			<div class="menu"><span class="m" id="place"><a href="#">場地種類</a></span></div>
			<div class="menu selected"><span class="m" id="order"><a href="#" id="ordera">瀏覽	檔期</a></span></div>
			<div class="menu"><span class="m" id="order"><a href="qa.php">Q & A</a></span></div>
		</div>
	 	<div class="login"><img src="img/singup.jpg" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div>
	 	<div class="burger-cover">
			<ul>
				<li class="bur top"></li>
				<li class="bur middle"></li>
				<li class="bur bottom"></li>
			</ul>
		</div>
	</div>

	<div class="phone-content">
		<div class="box" id="index"><a href="index_fromt.php">首頁</a></div>
		<div class="box" id="exhibition"><a href="exhibitions.php">展覽資訊</a></div>
		<div class="box" id="place"><a href="SiteCategory.php">場地種類</a></div>
		<div class="box" id="calendar"><a href="calendar.php">瀏覽檔期</a></div>
		<div class="box" id="login">登入 / 註冊</div>
		<div class="box" id="logout">登出</div>
	</div> -->

	<div class="mainarea">
		<div class="leftnav">
			<div class="block">
				<div class="block1"></div>
				<div class="block2"></div>
			</div>
			<div class="year" id="calendar-year"></div>
			<div class="month" id="calendar-month"></div>
			<div class="before" id="month_before"></div>
			<div class="after" id="month_after"></div>
		</div>
		<div id="calendar-container">
            <div id="calendar-dates"></div>
        </div>
        <div class="EPcontainer">
			<div class="empty-place">
				<div class="date" id="date">1</div>
				<div class="where">
					<ul class="row1">
						<a href="space01.php?siteNo=7"><li class="order-place site1">洞庭湖</li></a>
						<a href="space01.php?siteNo=8"><li class="order-place site2">目黑場</li></a>
						<a href="space01.php?siteNo=3"><li class="order-place site3">天龍國</li></a>
						<a href="space01.php?siteNo=2"><li class="order-place site4">紅磨坊</li></a>
						<a href="space01.php?siteNo=5"><li class="order-place site5">木心坊</li></a>
					</ul>
					<ul class="row2">
						<a href="space01.php?siteNo=10"><li class="order-place site6">任意門</li></a>
						<a href="space01.php?siteNo=1"><li class="order-place site7">荒野屋</li></a>
						<a href="space01.php?siteNo=4"><li class="order-place site8">影知森</li></a>
						<a href="space01.php?siteNo=9"><li class="order-place site9">易牙居</li></a>
						<a href="space01.php?siteNo=6"><li class="order-place site10">金澤寧</li></a>
					</ul>
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="gotop">
		<a href="#"><img src="img/top.png" height="51"></a>
	</div>

	<footer>
		<p class="contact">Contact Information</p>
		<div class="con-container">
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="tel">電話</span><span class="footer_line">──────</span><span class="con2" id="telnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="fax">傳真</span><span class="footer_line">──────</span><span class="con2" id="faxnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="mail">信箱</span><span class="footer_line">──────</span><span class="con2" id="emailnum">couldbedon@gmail.com</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="optime">營業時間</span><span class="footer_line">──────</span><span class="con2">每日09 : 00 ~ 17 : 00</span></p>
		</div>
		<p class="authority">&copy;comma Popside.comma design.wendy Yang</p>
	</footer>

</div>

	<script src="js/three.min.js"></script>
    <script src="js/projector.js"></script>
    <script src="js/canvas-renderer.js"></script>	
	<script src="js/3d-lines-animation.js"></script>
</body>
</html>