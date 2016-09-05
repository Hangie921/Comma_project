<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Q&A</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/alluse/allheader.css">
	<link rel="stylesheet" href="css/alluse/allfooter.css">
	<link rel="stylesheet" href="css/allheader2.css">
	<link rel="stylesheet" href="css/header-phone.css"  media="screen and (max-width: 480px)">

	<link rel="stylesheet" href="css/membersing992.css">
	<link rel="stylesheet" href="css/membersing767.css">
	<link rel="stylesheet" href="css/q&a.css">
	<link rel="stylesheet" href="css/q&a_mobile.css" media="screen and (max-width: 480px)">
	<link rel="stylesheet" type="text/css" href="css/alluse/header-phone.css" media="screen and (max-width: 480px)">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/lightbox02.js"></script> 
	<script src="js/Ease_Pack.js"></script>
	<script src="js/TweenLite.min.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>
<div class="container">
	<div id="bg_animation">
		<canvas id="myCanvas"></canvas>
	</div>
	
	<!-- <div class="header">
		<div class="logo"><a href="index_front.html"><img src="img/logo_white.png" width="90" height="75"></a></div>
		<div class="menu-container">
			<div class="menu"><span class="m" id="exhibition"><a href="Exhibitions.html">展覽資訊</a></span></div>
			<div class="menu"><span class="m" id="place"><a href="SiteCategory.html">場地種類</a></span></div>
			<div class="menu"><span class="m" id="order"><a href="calendar.html" id="ordera">預約檔期</a></span></div>
		</div>
	 	<div class="login"><img src="img/singup.jpg" height="50" width="50"><br/><span class="signup"><a href="memberArea.html">登入 / 註冊</a></span></div>
	 	<div class="burger-cover">
			<ul>
				<li class="bur top"></li>
				<li class="bur middle"></li>
				<li class="bur bottom"></li>
			</ul>
		</div>

	</div> -->

	<?php require_once('insideHeader.php'); ?>
	<section id="content">
		<header id="title">
			<div id="h2_bg">
				<h2>問答集</h2>
			</div>
			<div id="hr"></div>
		</header>
		<section class="block" id="block1">
			<div class="question" id="q1">
				<div class="q_pic">
					<img src="img/q.png" alt="">
				</div>
				<div class="text">
						<p>想請問租用現場是否有無線網路可使用？</p>
					</div>
				<div class="clear"></div>
			</div>
			<div class="answer" id="a1">
			<div class="text">
						<p>現場有提供WiFi可供使用，帳號密碼請於簽約時向工作人員洽詢。</p>
					</div>
				<div class="a_pic">
					<img src="img/a_big.png"  alt="">
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<section class="block" id="block2">
			<div class="question" id="q2">
				<div class="q_pic">
					<img src="img/q.png" alt="">
				</div>
				<div class="text">
						<p>是否有停車位可停?</p>
					</div>
				<div class="clear"></div>
			</div>
			<div class="answer" id="a2">
			<div class="text">
						<p>各個場地都有兩個停車位，其餘請自行尋找</p>
					</div>
				<div class="a_pic">
					<img src="img/a_big.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<section class="block" id="block3">
			<div class="question" id="q3">
				<div class="q_pic">
					<img src="img/q.png" alt="">
				</div>
				<div class="text">
						<p>出租方式可以以半天計算嗎？</p>
					</div>
				<div class="clear"></div>
			</div>
			<div class="answer" id="a3">
			<div class="text">
						<p>我們只有整天計算的方式。</p>
					</div>
				<div class="a_pic">
					<img src="img/a_big.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<section class="block" id="block4">
			<div class="question" id="q4">
				<div class="q_pic">
					<img src="img/q.png" alt="">
				</div>
				<div class="text">
						<p>請問有哪些付款方式?</p>
					</div>
				<div class="clear"></div>
			</div>
			<div class="answer" id="a4">
			<div class="text">
						<p>我們採取信用卡及線上匯款，匯款帳號『戶名：逗點工作室
						匯款帳號：123齊天大聖孫悟空分行 3456-3456-1234』
						匯款或轉帳完成請來電或來信告知逗點工作室
						並提供匯款帳號末五碼，以便完成預約手續。</p>
					</div>
				<div class="a_pic">
					<img src="img/a_big.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
		</section>

	</section>



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
<script>

function revealOnScroll() {
  var scrolled = $(window).scrollTop();
  // 视窗，即viewport，页面可视范围的窗口
  $('.block').each(function() {
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度

    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height - 200 > offsetTop) {
      current.addClass("blockAni");
    } else {
      current.removeClass("blockAni");
    }
  });
}
$(window).on("scroll", revealOnScroll);
$(window).on("load", revealOnScroll);
$(".burger-cover").click(function(){
  		$(this).toggleClass("on");
  		$(".phone-content").slideToggle();
  	});//burger-toggle
</script>

<script src="js/bg_animation.js"></script>

</body>
</html>