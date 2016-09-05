<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendar</title>
	<link rel="stylesheet" href="css/allheader (2).css">
	<link rel="stylesheet" href="css/calendar.css">
	<link rel="stylesheet" href="css/allfooter.css">
	<link rel="stylesheet" type="text/css" href="css/header-phone.css" media="screen and (max-width: 480px)">
	<link rel="stylesheet" type="text/css" href="css/calendar_480.css" media="screen and (max-width: 480px)">
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet'>


	<script src ="../jquery-2.1.4.min.js"></script>
	<script src="calendar-try.js"></script>
</head>
<body>
<div id="canvas" class="gradient"></div>
<div class="container">
	<div class="header">
		<div class="logo"><a href="#"><img src="img/logo_white.png" width="90" height="75"></a></div>
		<div class="menu-container">
			<div class="menu"><span class="m" id="exhibition"><a href="#">展覽資訊</a></span></div>
			<div class="menu"><span class="m" id="place"><a href="#">場地種類</a></span></div>
			<div class="menu selected"><span class="m" id="order"><a href="#" id="ordera">預約檔期</a></span></div>
		</div>
	 	<div class="login"><img src="../singup.jpg" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div>
	 	<div class="burger-cover">
			<ul>
				<li class="bur top"></li>
				<li class="bur middle"></li>
				<li class="bur bottom"></li>
			</ul>
		</div>

	</div>
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
						<li class="order-place site1"><a href="#">洞庭湖</a></li>
						<li class="order-place site2"><a href="#">目黑場</a></li>
						<li class="order-place site3"><a href="#">天龍國</a></li>
						<li class="order-place site4"><a href="#">紅磨坊</a></li>
						<li class="order-place site5"><a href="#">木心坊</a></li>
					</ul>
					<ul class="row2">
						<li class="order-place site6"><a href="#">任意門</a></li>
						<li class="order-place site7"><a href="#">荒野屋</a></li>
						<li class="order-place site8"><a href="#">影知森</a></li>
						<li class="order-place site9"><a href="#">易牙居</a></li>
						<li class="order-place site10"><a href="#">金澤寧</a></li>
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
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="tel">電話</span>──────<span class="con2" id="telnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="fax">傳真</span>──────<span class="con2" id="faxnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="mail">信箱</span>──────<span class="con2" id="emailnum">couldbedon@gmail.com</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="optime">營業時間</span>──────<span class="con2">每日09 : 00 ~ 17 : 00</span></p>
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