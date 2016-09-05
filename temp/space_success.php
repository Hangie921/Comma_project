<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<title><?php echo $_SESSION["siteName"]?></title>
	<link rel="shortcut icon" href="img/LOGO-gray.png">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/allheader2.css">
	<link rel="stylesheet" href="css/space01.css">
	<link rel="stylesheet" href="css/allfooter.css">
	<link rel="stylesheet" href="css/space-success.css">
	<link rel="stylesheet" type="text/css" href="css/header-phone.css" media="screen and (max-width: 480px)">
	<link rel="stylesheet" type="text/css" href="css/space01_480.css" media="screen and (max-width: 480px)">	
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700|Anton' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet'>

	<style>
	body{
		overflow:hidden;
	}
	</style>
	<script src ="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/space01.js"></script>
	<script src="js/bpopup-0.11.0.min.js"></script>
</head>
<body>
 	<?php require_once("insideHeader.php");?>
<!-- 	<div class="header">
		<div class="logo"><a href="#"><img src="img/logo_white.png" width="90" height="75"></a></div>
		<div class="menu-container">
			<div class="menu"><span class="m" id="exhibition"><a href="#">展覽資訊</a></span></div>
			<div class="menu  selected"><span class="m" id="place"><a href="#" id="ordera">場地種類</a></span></div>
			<div class="menu"><span class="m" id="order"><a href="#">瀏覽檔期</a></span></div>
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
		<div class="box" id="index">首頁</div>
		<div class="box" id="exhibition">展覽資訊</div>
		<div class="box" id="place">場地種類</div>
		<div class="box" id="calendar">瀏覽檔期</div>
		<div class="box" id="login">登入 / 註冊</div>
		<div class="box" id="logout">登出</div>
	</div> -->

	<div class="outer">
		<div class="imgcontainer">
			<div class="sImg">
				<img src="img/1.jpg">
			</div>
		</div>
		<div class="control_menu">
			
			<nav class="nav-circleslide">
				<a class="prev" href="javascript:void(0);">
					<span class="icon-wrap"><img src="img/prev01-01-01.png" height="40" width="40" class="icon"><path id="arrow-left-1" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" /><use xlink:href="#arrow-left-1"></span>
					<div><img src="img/site4.jpg" alt="Previous thumb"/></div>
				</a>
				<a class="next" href="javascript:void(0);">
					<span class="icon-wrap"><img src="img/next01-01.png" height="40" width="40" class="icon"><path id="arrow-right-1" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" /><use xlink:href="#arrow-right-1"></span>
					<div><img src="img/site2.jpg" alt="Next thumb"/></div>
				</a>
			</nav>		
		</div>		
	</div>


	<div class="leftbox">
		<h3 id="roomname"><?php echo $_SESSION["siteName"]?></h3>
		<div class="infobox">
			<svg version="1.1" id="layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="2326.7 -1090.1 1754.3 2955.3" style="enable-background:new 2326.7 -1090.1 1754.3 2955.3;" xml:space="preserve">
				<polygon opacity="0.65" points="4051.8,1825 2355.9,1825 2355.9,-724.9 2705.9,-1049.9 4051.8,-1049.9 "/>
				<polygon style="fill:none;stroke:#F7F8F8;stroke-width:10;stroke-miterlimit:10" points="4051.8,1825 2355.9,1825 2355.9,-724.9 2705.9,-1049.9 4051.8,-1049.9 "/>
			</svg>
			<div class="content">				
				<span class="price">
				一日<span style="color:#DA9C0C;display:inline-block;font-family: 'Muli', sans-serif;"><?php echo $_SESSION["price"] ?></span><span class="pricetag">NT</span>
				</span><br/>

				<p class="desc">
				<?php echo $_SESSION["instro"]?>
				</p><br/>
				<span class="facility">設施：
					<span class="f1">
						<img src="img/sound.png" width="12">&nbsp;&nbsp;1</span> 
					<span class="f2"><img src="img/Bulb.png" width="12">&nbsp;&nbsp;15</span><br/>
					<span class="f3"><img src="img/Microphone.png" width="12">&nbsp;&nbsp;5</span> 
					<span class="f4"><img src="img/chair.png" width="12">&nbsp;&nbsp;3</span>
				</span><br/>
				<span class="maxmen">坪數 : <?php echo $_SESSION["size"]?></span>
				<span class="address">地點：<?php echo $_SESSION["address"]?></span><br/>
				<span class="showmap"><img src="img/Location.png"><a href="#">顯示地圖</a></span><br/>
				<button class="left-btn service" id="service">諮詢服務</button>
				<button class="left-btn clickorder" id="orderbtn">馬上預約</button>
			</div>			
		</div>
	</div>

	<div class="lightbox_bg" style="display:block;overflow:hidden;"></div>
	<div class="result-wrapper">
		<div class="close" onclick="headTo();"><img src="img/close.png" height="36"></div>	
		<div class="result r-success">
			<div class="success">送出成功</div>
		</div>		
	</div>
	<div class="rightcalendar" id="rightcalendar">
		<div class="rightcontent">
			<span class="available">可預約</span>
			<span class="year" id="year">2015</span>
			<span class="month" id="month">12月</span>
			<span id="before"></span>
			<span id="after"></span>
			<div class="calendar_table">
				<table class="calendar_body">
				<tr class="weekname">
					<td>Sun</td>
					<td>Mon</td>
					<td>Tue</td>
					<td>Wed</td>
					<td>Thu</td>
					<td>Fri</td>
					<td>Sat</td>
				</tr>
				<tr class="week">
					<td>01</td>
					<td style="color:#a3a3a3">02</td>
					<td>03</td>
					<td>04</td>
					<td>05</td>
					<td style="color:#a3a3a3">06</td>
					<td>07</td>
				</tr>
				<tr class="week">
					<td>08</td>
					<td>09</td>
					<td>10</td>
					<td>11</td>
					<td>12</td>
					<td>13</td>
					<td>14</td>
				</tr>
				<tr class="week">
					<td>15</td>
					<td>16</td>
					<td style="color:#a3a3a3">17</td>
					<td>18</td>
					<td>19</td>
					<td>20</td>
					<td>21</td>
				</tr>
				<tr class="week">
					<td>22</td>
					<td>23</td>
					<td>24</td>
					<td style="color:#a3a3a3">25</td>
					<td style="color:#a3a3a3">26</td>
					<td>27</td>
					<td>28</td>
				</tr>
				<tr class="week">
					<td>29</td>
					<td>30</td>
					<td>31</td>
				</tr>
				</table>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>
	<div class="feedback-container">
		<div class="comment-cover">
			<h3>Comment評價</h3>
		</div>
		<div class="feedback-border">
			<div class="bdTop"></div>
			<div class="bdLeft"></div>
			<div class="bdRight"></div>
			<div class="bdBottom"></div>
			<div class="comment">
				<div class="cm-profile">
					<span class="commenter">明清</span>
					<span class="comment-pic"><img src="img/SNOOPY1.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.11.28&nbsp;11:00</div>
						<div class="cm-body" id="cm-body">我覺得荒野屋實在太棒了!!!有逆境求生的感覺~~~<br/>
														歐歐歐歐歐歐歐歐歐</div>
						<div class="stars"><img src="img/star(y).png" width="25">
											<img src="img/star(y).png" width="25">
											<img src="img/star(y).png" width="25">
											<img src="img/star.png" width="25">
											<img src="img/star.png" width="25">
						</div>
					</div>
				</div>
			</div>
			<div class="comment2">
				<div class="cm-profile">
					<span class="commenter">明清</span>
					<span class="comment-pic"><img src="img/SNOOPY1.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.11.28&nbsp;11:00</div>
						<div class="cm-body" id="cm-body">我覺得荒野屋實在太棒了!!!有逆境求生的感覺~~~<br/>
														歐歐歐歐歐歐歐歐歐</div>
						<div class="stars"><img src="img/star(y).png" width="25">
											<img src="img/star(y).png" width="25">
											<img src="img/star(y).png" width="25">
											<img src="img/star.png" width="25">
											<img src="img/star.png" width="25">
						</div>
					</div>
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
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1">電話</span>──────<span class="con2">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1">傳真</span>──────<span class="con2">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1">信箱</span>──────<span class="con2">couldbedon@gmail.com</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="optime">營業時間</span>──────<span class="con2">每日09 : 00 ~ 17 : 00</span></p>
		</div>
		<p class="authority">&copy;comma Popside.comma design.wendy Yang</p>
	</footer>


<script>
function headTo(){
	location.href="space01.php?siteNo=<?php echo $_SESSION['siteNo']?>";
}

</script>
</body>
</html>