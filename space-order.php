<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<title><?php $_SESSION["siteName"]?></title>
	<link rel="shortcut icon" href="img/LOGO-gray.png">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/allheader2.css">
	<link rel="stylesheet" href="css/space-order.css">
	<link rel="stylesheet" href="css/allfooter.css">
	<link rel="stylesheet" href="css/membersing767.css">
	<link rel="stylesheet" href="css/membersing992.css">
	<link rel="stylesheet" type="text/css" href="css/header-phone.css" media="screen and (max-width: 480px)">
	<link rel="stylesheet" type="text/css" href="css/space01_480.css" media="screen and (max-width: 480px)">	
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700|Anton' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet'>

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
<!--<?php
//require_once("connectComma_PDO.php");
//$sql = "select siteName, address, size, price, instro from site where siteNo=:siteNo";
//$site = $pdo->prepare($sql);
//$site -> bindValue(":siteNo", $_SESSION["siteNo"]);
//$site -> execute();
//$row = $site->fetch(PDO::FETCH_ASSOC);
?>-->


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
				<button class="left-btn ordernow" id="orderbtn">馬上預約</button>
			</div>			
		</div>
	</div>
	
	<div class="orderbox2-container">
		<div class="close"><a href="space01.php?siteNo=<?php echo $_SESSION['siteNo']?>"><img src="img/close.png" height="36"></a></div>
		<h3 id="order2-roomname"><?php echo $_SESSION["siteName"]?></h3>
		<input type="hidden" name="totaldays" value="<?php echo $_SESSION['totaldays'];?>">
		<div class="orderbox2">
			<h3 id="memberName"><?php echo $_SESSION["memberName"]?></h3>
			<div class="info firstinfo">
				<ul>
					<li><span>聯絡電話 : </span><span id="tel"><?php echo $_SESSION["telphone"]?></span></li>
					<li><span>電子信箱 : </span><span class="fillin" id="email"><?php echo $_SESSION["memEmail"]?></span></li>
					<li><span>*出租時間 : </span><span class="fillin"><?php echo $_SESSION["startDate"] ?></span></li>				
					<li><span>*結束時間 : </span><span class="fillin"><?php echo $_SESSION["endDate"] ?></span></li>
					<li><span>價格 : </span><span id="subtotal" ><?php echo $_SESSION["price"] ?>NT</span></li>
				</ul>
			</div>
			<div class="midtotal">結算價格 : <span class="total" id="totalamount"><?php echo $_SESSION["totalamount"]?></span><span style="color:#ffc600">NT</span></div>
			<div class="info secondinfo">
				<ul>
					<li><span>公司單位 : </span><span  class="fillin" id="F-department"><?php echo $_SESSION["companyName"] ?></span></li>				
					<li><span>學校科系 : </span><span class="fillin" id="F-school"><?php echo $_SESSION["schoolName"] ?></span></li>
					<li><span>*信用卡卡號 : </span><span class="fillin" id="F-cdNum"><?php echo $_SESSION["cdNum"] ?></span></li>	
					<li><span>*信用卡到期日 : </span><span class="fillin" id="F-cdDue"><?php echo $_SESSION["cdDue"] ?></span></li>
					<li><span>*檢查碼 : </span><span class="fillin" id="F-cdcheck"><?php echo $_SESSION["cdcheck"] ?></span></li>
					<li><span>統一編號 : </span><span class="fillin" id="F-vat"><?php echo $_SESSION["uniNum"] ?></span></li>
					<li>(信用卡後三碼)</li>
				</ul>
			</div>
			<div class="btns" style="margin-top:20px;">
				<button id="laststep"><a href="space01.php?siteNo=<?php echo $_SESSION['siteNo']?>">上一步</a></button>
				<a href="space-toDB.php"><input type="submit" value="送出"></a>
			</div>		
		</div>
	</div>
	<div class="lightbox_bg"></div>

<!-- 	<div class="result r-success">
		<div class="success">送出成功</div>
	</div> -->

<!-- 	<div class="result r-fail">
		<div class="fail">送出失敗</div>
	</div> -->


	<div class="contact-information">
		<div class="close"><img src="img/close.png" height="36"></div>
		<div class="contactBody">
			<p class="contact">Contact Information</p>
			<div class="con-container">
			<p><span class="footer_comma"><img src="../footer_comma.jpg" height="10" width="10"></span><span class="con1">電話</span>──────<span class="con2">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="../footer_comma.jpg" height="10" width="10"></span><span class="con1">傳真</span>──────<span class="con2">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="../footer_comma.jpg" height="10" width="10"></span><span class="con1">信箱</span>──────<span class="con2">couldbedon@gmail.com</span></p>
			<p><span class="footer_comma"><img src="../footer_comma.jpg" height="10" width="10"></span><span class="con1" id="optime">營業時間</span>──────<span class="con2">每日09 : 00 ~ 17 : 00</span></p>
		</div>
		</div>
	</div>

	<div class="rightcalendar" id="calendar">
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
		
<!-- 	<div class="guideline">
			
		<span>場地</span>
	</div> -->


	<div class="feedback-container">
		<div class="comment-cover">
			<h3>Comment評價</h3>
		</div>
		<div class="feedback-border">
			<div class="bdTop"></div>
			<div class="bdLeft"></div>
			<div class="bdRight"></div>
			<div class="bdBottom"></div>
			<div class="comment-container comment comL">
				<div class="cm-profile">
					<span class="commenter">吳明清</span>
					<span class="comment-pic"><img src="img/commentpic3.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.11.28&nbsp;11:00:50</div>
						<div class="cm-body" id="cm-body">好喜歡這個場地，這半年來的辛苦都值得了</div>
						<div class="stars">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star.png" width="25">
						</div>
					</div>
				</div>
			</div>
			<div class="comment-container comment2 comR">
				<div class="cm-profile">
					<span class="commenter">張舒涵</span>
					<span class="comment-pic"><img src="img/commentpic2.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.10.08&nbsp;12:10:22</div>
						<div class="cm-body" id="cm-body">推薦逗點！來參展的朋友們都說空間很友善呢：）</div>
						<div class="stars">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star.png" width="25">
						</div>
					</div>
				</div>
			</div>
			<div class="comment-container comment3 comL">
				<div class="cm-profile">
					<span class="commenter">楊琇雯</span>
					<span class="comment-pic"><img src="img/commentpic4.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.09.28&nbsp;22:00:02</div>
						<div class="cm-body" id="cm-body">畢業展選在這裡真是太好了</div>
						<div class="stars">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star.png" width="25">
							<img src="img/star.png" width="25">
							<img src="img/star.png" width="25">
						</div>
					</div>
				</div>
			</div>
			<div class="comment-container comment4 comR">
				<div class="cm-profile">
					<span class="commenter">董庭羽</span>
					<span class="comment-pic"><img src="img/commentpic5.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.09.04&nbsp;10:01:29</div>
						<div class="cm-body" id="cm-body">好的作品果然就是需要一個絕佳場地配合:)</div>
						<div class="stars">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star(y).png" width="25">
							<img src="img/star.png" width="25">
							<img src="img/star.png" width="25">
						</div>
					</div>
				</div>
			</div>
			<div class="comment-container comment5 comL">
				<div class="cm-profile">
					<span class="commenter">章書函</span>
					<span class="comment-pic"><img src="img/commentpic1.png"></span>		
				</div>
				<div class="cm-bg">
					<div class="cm-content">
						<div class="cm-date" id="cm-date">2015.04.19&nbsp;21:30:09</div>
						<div class="cm-body" id="cm-body">哎呀哎呀！老闆人好好，還幫我們展覽打廣告！</div>
						<div class="stars">
							<img src="img/star(y).png" width="25">
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
</body>
</html>