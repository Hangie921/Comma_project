<?php 
ob_start();
session_start();
$_SESSION['where']='index_front.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<title>Welcome to Comma!</title>
	<link rel="shortcut icon" href="img/LOGO-gray.png">
	<link rel="stylesheet" href="css/reset.css">
	
	<link rel="stylesheet" href="css/allheader.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/index_mobile.css" media="screen and (min-width:0px) and (max-width:480px)">
	<link rel="stylesheet" href="css/alluse/header-phone.css" media="screen and (min-width:0px) and (max-width:480px)">
	<link rel="stylesheet" href="css/membersing992.css"> 
	<link rel="stylesheet" media="screen and (max-width: 767px)" href="css/membersing767.css" />

	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300|Quicksand' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700|Anton' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
	
	<script src="js/jq2.1.4.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="js/Ease_Pack.js"></script>

	<script src="js/TweenLite.min.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/lightbox02.js"></script> 

</head>
<body>
	<div id="bg_animation">
		<canvas id="myCanvas"></canvas>
	</div>
	<div class="body_container">

    	<?php require_once("insideHeader.php"); ?> 
   
	<div id="show">
    

    <div class="bg">
	    	<img src="img/1.jpg" class="bgImg" alt="">
	    	<img src="img/2.jpg" class="bgImg" alt="">
	    	<img src="img/3.jpg" class="bgImg" alt="">
	    	<img src="img/4.jpg" class="bgImg" alt="">
    		<div class="bg_text_svg">
			<svg version="1.1" id="bigComma" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 841.89" enable-background="new 0 0 1000 841.89" xml:space="preserve">
			<g>	
				<g>
					<path class="bigComm" stroke-miterlimit="10" d="M97.832,345.89
						c-10.12,0-19.364-1.774-27.712-5.325c-8.346-3.545-15.511-8.738-21.493-15.575c-5.98-6.836-10.602-15.249-13.888-25.237
						c-3.288-9.989-4.93-21.432-4.93-34.314c0-12.618,1.602-23.924,4.821-33.913c3.219-9.993,7.819-18.403,13.8-25.239
						c5.98-6.834,13.143-12.061,21.492-15.674c8.346-3.615,17.658-5.423,27.909-5.423c7.362,0,14.22,0.986,20.595,2.96
						c6.376,1.97,12.026,4.861,16.958,8.674c4.927,3.811,9.069,8.543,12.421,14.196c3.353,5.651,5.696,12.091,7.009,19.322h-15.379
						c-0.657-4.73-2.147-8.938-4.445-12.618c-2.302-3.683-5.279-6.77-8.962-9.267c-3.681-2.499-7.932-4.37-12.729-5.617
						c-4.798-1.251-9.942-1.875-15.466-1.875c-7.755,0-14.853,1.347-21.294,4.042c-6.439,2.693-11.958,6.738-16.559,12.125
						c-4.602,5.39-8.15,12.126-10.651,20.21c-2.495,8.083-3.744,17.448-3.744,28.096c0,10.781,1.25,20.203,3.744,28.287
						c2.501,8.085,6.049,14.833,10.651,20.224c4.601,5.389,10.12,9.42,16.559,12.114c6.442,2.697,13.54,4.055,21.294,4.055
						c5.129,0,10.056-0.636,14.789-1.885c4.732-1.252,8.958-3.089,12.707-5.521c3.745-2.433,6.879-5.455,9.374-9.07
						c2.501-3.617,4.077-7.844,4.733-12.709h15.379c-1.446,7.364-3.854,13.827-7.208,19.413c-3.352,5.586-7.493,10.295-12.422,14.106
						c-4.929,3.813-10.579,6.663-16.957,8.568C111.856,344.925,105.063,345.89,97.832,345.89z"/>
					<path class="bigComm" stroke-miterlimit="10" d="M554.795,341.947h-15.777v-99.773
						c0-14.59-2.273-25.106-6.81-31.547c-4.539-6.442-12.511-9.662-23.944-9.662c-8.419,0-16.607,2.596-24.562,7.788
						c-7.953,5.192-15.666,12.521-23.155,21.982v111.212H444.77v-99.773c0-7.229-0.5-13.472-1.487-18.73
						c-0.986-5.257-2.652-9.531-5.016-12.816c-2.368-3.286-5.5-5.717-9.377-7.296c-3.877-1.575-8.635-2.366-14.28-2.366
						c-8.287,0-16.172,2.596-23.665,7.788c-7.493,5.192-15.05,12.521-22.674,21.982v111.212h-15.773V189.135h15.773v22.674
						c5.257-5.917,10.209-10.616,14.875-14.099c4.667-3.483,9.065-6.144,13.209-7.984c4.14-1.84,8.084-3.055,11.829-3.649
						c3.748-0.59,7.338-0.885,10.754-0.885c9.864,0,18.276,2.299,25.241,6.901c6.97,4.6,12.029,11.633,15.181,21.095
						c3.944-5.518,8.105-10.088,12.511-13.702c4.406-3.613,8.874-6.473,13.408-8.577c4.535-2.102,9.112-3.58,13.709-4.436
						c4.604-0.854,9.075-1.281,13.414-1.281c28.261,0,42.392,18.534,42.392,55.602V341.947z"/>
					<path class="bigComm" stroke-miterlimit="10" d="M799.141,341.947h-15.768v-99.773
						c0-14.59-2.281-25.106-6.815-31.547c-4.537-6.442-12.509-9.662-23.95-9.662c-8.41,0-16.604,2.596-24.554,7.788
						c-7.952,5.192-15.668,12.521-23.158,21.982v111.212h-15.774v-99.773c0-7.229-0.505-13.472-1.491-18.73
						c-0.979-5.257-2.65-9.531-5.017-12.816c-2.364-3.286-5.498-5.717-9.369-7.296c-3.881-1.575-8.636-2.366-14.291-2.366
						c-8.279,0-16.166,2.596-23.66,7.788c-7.495,5.192-15.049,12.521-22.671,21.982v111.212h-15.774V189.135h15.774v22.674
						c5.256-5.917,10.211-10.616,14.872-14.099c4.669-3.483,9.071-6.144,13.213-7.984c4.139-1.84,8.081-3.055,11.83-3.649
						c3.747-0.59,7.337-0.885,10.755-0.885c9.857,0,18.271,2.299,25.24,6.901c6.965,4.6,12.023,11.633,15.181,21.095
						c3.941-5.518,8.103-10.088,12.512-13.702c4.402-3.613,8.868-6.473,13.404-8.577c4.533-2.102,9.109-3.58,13.714-4.436
						c4.599-0.854,9.068-1.281,13.403-1.281c28.264,0,42.395,18.534,42.395,55.602V341.947z"/>
					<path class="bigComm"  stroke-miterlimit="10" d="M944.227,322.228
						c-5.387,4.735-10.65,8.632-15.778,11.721c-5.125,3.088-10.164,5.522-15.091,7.297c-4.932,1.775-9.816,3.002-14.681,3.661
						c-4.856,0.656-9.791,0.983-14.787,0.983c-6.704,0-12.946-1.031-18.728-3.065c-5.789-2.039-10.78-4.933-14.991-8.679
						c-4.204-3.743-7.533-8.277-9.965-13.603c-2.436-5.324-3.638-11.194-3.638-17.633c0-17.485,7.452-31.095,22.364-40.819
						c14.927-9.731,37.313-14.592,67.149-14.592h18.145c0-6.705-0.397-12.885-1.184-18.533c-0.789-5.652-2.629-10.55-5.523-14.689
						c-2.894-4.143-7.163-7.396-12.812-9.762c-5.654-2.365-13.346-3.549-23.071-3.549c-14.33,0-25.089,2.233-32.25,6.705
						c-7.16,4.469-11.392,11.238-12.708,20.309h-15.572c1.575-14.461,7.227-25.206,16.958-32.24
						c9.724-7.03,24.184-10.546,43.376-10.546c10.644,0,19.674,1.313,27.096,3.943c7.432,2.628,13.479,6.41,18.14,11.337
						c4.668,4.93,8.063,10.911,10.169,17.943c2.104,7.032,3.155,14.954,3.155,23.758v99.773h-15.773V322.228z M944.227,263.27h-23.858
						c-22.87,0-39.938,3.286-51.177,9.86c-11.238,6.57-16.849,15.977-16.849,28.203c0,9.067,3.552,16.122,10.649,21.184
						c7.096,5.06,16.824,7.603,29.18,7.603c5.391,0,10.604-0.834,15.664-2.479c5.062-1.641,9.832-3.766,14.307-6.397
						c4.471-2.628,8.563-5.562,12.313-8.783c3.746-3.222,7.007-6.331,9.771-9.354V263.27z"/>
					<g>
						<path class="bigComm" d="M234.708,339.523c-0.003,0-0.003,0-0.006,0c-9.748,0-20.136-0.964-31.757-2.944l1.269-13.69
							c0,0,0,0,0.002,0c0.811,0,14.65-0.09,24.067-6.179c-22.296-10.88-37.122-33.909-37.122-59.264
							c0-36.332,29.559-65.889,65.89-65.889c36.333,0,65.89,29.557,65.89,65.889c0,29.447-16.544,58.778-40.232,71.338
							C269.272,335.91,253.121,339.523,234.708,339.523z M257.051,205.345c-28.727,0-52.101,23.372-52.101,52.102
							c0,22.971,15.383,43.524,37.413,49.987l8.58,2.519l-4.617,7.657c-1.917,3.181-4.298,5.833-6.948,8.043
							c14.306-0.523,26.407-3.498,36.872-9.05c19.375-10.27,32.906-34.595,32.906-59.156
							C309.155,228.716,285.78,205.345,257.051,205.345z"/>
						<path class="bigComm" d="M195.212,329.844c0,3.676,5.416,6.688,9.027,6.954c3.977,0.289,7.22-3.571,7.22-7.252
							c0-3.676-2.785-6.898-7.22-6.656C200.255,323.109,195.212,326.166,195.212,329.844z"/>
					</g>
				</g>
			</g>
			</svg>
    		</div>
    		<div class="bg_text">
	    		<img src="img/header2.png" alt="">
	    		<img src="img/header3.png" alt="">
    		</div>
    	</div>

    	<footer id="show_menu_container">
				<div id="pic_menu_container">
					<a href="#" id="menu_btna"><div id="menu_btn">
						<div class="bar"><span></span></div><div class="bar"><span></span></div><div class="bar"><span></span></div><div class="bar"><span></span></div><div class="bar"><span></span></div><div class="bar"><span></span></div><span style="clear:both;"></span>
					</div></a>
					<ul id="menu_ul">
						<li class="menu_li" id="menu_pic1">
						<a href="space01.php?siteNo=1" title="荒野屋"><img src="img/site/1_001.jpg" alt="荒野屋"></a>
						</li>
						<li class="menu_li" id="menu_pic2">
						<a href="space01.php?siteNo=2" title="紅磨坊"><img src="img/site/2_001.jpg" alt="紅磨坊"></a>
						</li>
						<li class="menu_li" id="menu_pic3">
						<a href="space01.php?siteNo=3" title="天龍國"><img src="img/site/3_001.jpg" alt="天龍國"></a>
						</li>
						<li class="menu_li" id="menu_pic4">
						<a href="space01.php?siteNo=4" title="影之森"><img src="img/site/4_001.jpg" alt="影之森"></a>
						</li>
						<li class="menu_li" id="menu_pic5">
						<a href="space01.php?siteNo=5" title="木心坊"><img src="img/site/5_001.jpg" alt="木心坊"></a>
						</li>
						<li class="menu_li" id="menu_pic6">
						<a href="space01.php?siteNo=6" title="金澤寧"><img src="img/site/6_001.jpg" alt="金澤寧"></a>
						</li>
						<li class="menu_li" id="menu_pic7">
						<a href="space01.php?siteNo=7" title="洞庭湖"><img src="img/site/7_001.jpg" alt="洞庭湖"></a>
						</li>
						<li class="menu_li" id="menu_pic8">
						<a href="space01.php?siteNo=8" title="目黑場"><img src="img/site/8_001.jpg" alt="目黑場"></a>
						</li>
						<li class="menu_li" id="menu_pic9">
						<a href="space01.php?siteNo=9" title="易牙居"><img src="img/site/9_001.jpg" alt="易牙居"></a>
						</li>
						<li class="menu_li" id="menu_pic10">
						<a href="space01.php?siteNo=10" title="任意門"><img src="img/site/10_001.jpg" alt="任意門"></a>
						</li>
					</ul>
				</div>
				<div id="show_menu_text">場&nbsp;地</div>
		</footer>
		<div class="arrowDown"></div>
</div>

		<!-- header above -->
		<!-- site down	 -->
		<span id="anchor"></span>
		<section id="site_container">

			<div id="site_title">
				<h2>SITE</h2>
				<p>展覽場地</p>
				<div class="svg_wrapper">
						
					<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		   xml:space="preserve">
		<rect id="site_title_svg" x="0" y="0"  stroke-miterlimit="10" /></svg>	
					</div>
			</div>
			
			<div class="site_box" id="site1">
				<div class="siteImgs" id="siteImg1">
				<div class="siteImgMask">
					
					<a href="SiteCategory.php"><div class="maskTitle">
						<div class="maskAim" id="aimTop"></div>
						<div class="maskAim" id="aimRight"></div>
						<div class="maskAim" id="aimBottom"></div>
						<div class="maskAim" id="aimLeft"></div>
						<p>更多內容</p></div></a>
				</div>
				<div class="svg_wrapper">
					<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="600px" height="405px" viewBox="0 0 600 405"  xml:space="preserve">
		<rect id="site_img_svg1" x="1" y="1"  stroke-miterlimit="10" /></svg>	
				</div>
					<a href="space01.php?siteNo=2"><img src="img/site/photo006.jpg" alt=""></a>
				</div>
		
				<div class="site_week" id="site_week11">
					<h2>紅磨坊</h2>
					<h2 class="siteEng">Wooden Heart</h2>
					<h3>2015</h3>
					<p><span class="tens">1<br>0<br>0<br>1<br>0</span><span class="ones">2<br>4<br>6<br>5<br>4</span></p><span style="clear:both;"></span>
					<div class="svg_wrapper">
						
					<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="500px" height="100px" viewBox="0 0 500 100"  xml:space="preserve">
		<rect id="week_svg1" x="3" y="3"  stroke-miterlimit="10" width="494" height="94"/></svg>	
					</div>
					<div class="week_container">
					
						<ul>
						<li>
							<ul>
								<li class="week">Sun</li><li class="week">Mon</li><li class="week">Tue</li><li class="week">Wed</li><li class="week">Thr</li><li class="week">Fri</li><li class="week">Sat</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="day delete">13</li><li class="day delete">14</li><li class="day yellow">15</li><li class="day yellow">16</li><li class="day yellow">17</li><li class="day delete">18</li><li class="day yellow">19</li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
			</div>
		
			<div class="site_box" id="site2">
				<div class="siteImgs" id="siteImg2">
					<div class="top border"></div>
					<div class="right border"></div>
					<div class="bottom border"></div>
					<div class="left border"></div>
					
					<div class="siteImgMask">
					
					<a href="SiteCategory.php"><div class="maskTitle">
						<div class="maskAim" id="aimTop"></div>
						<div class="maskAim" id="aimRight"></div>
						<div class="maskAim" id="aimBottom"></div>
						<div class="maskAim" id="aimLeft"></div>
						<p>更多內容</p></div></a>
				</div>

					<a href="space01.php?siteNo=4"><img src="img/site/stringio5(smaill.jpg"  alt=""></a>
				</div>
			
				<div class="site_week" id="site_week12">
					<h2>影知森</h2>
					<h2 class="siteEng">Shadow Forest</h2>
					<h3>2016</h3>
					<p><span class="tens">0<br>0<br>1<br>0<br>1</span><span class="ones">1<br>4<br>6<br>5<br>4</span></p><span style="clear:both;"></span>
					<div class="svg_wrapper">
						
					<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="500px" height="100px" viewBox="0 0 500 100"  xml:space="preserve">
		<rect id="week_svg1" x="3" y="3"  stroke-miterlimit="10" width="494" height="94"/></svg>	
					</div>
					<div class="week_container">
						<ul>
						<li>
							<ul>
								<li class="week">Sun</li><li class="week">Mon</li><li class="week">Tue</li><li class="week">Wed</li><li class="week">Thr</li><li class="week">Fri</li><li class="week">Sat</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="day delete">10</li><li class="day delete">11</li><li class="day yellow">12</li><li class="day yellow">13</li><li class="day yellow">14</li><li class="day yellow">15</li><li class="day yellow">16</li>
							</ul>	
						</li>
					</ul>
					
					</div>
				</div>
			</div>
		
		</section>
		<!-- end of site -->
		<!-- start of exhibition -->
		<section id="exhibition_container">
			<span id="ex_hr"><hr size="1"></span>
			<h2>EXHIBITIONS</h2>
			<p>展覽資訊</p>
			<div id="ex_content">
				<div class="border_wrapper">
					<div class="top"></div>
					<div class="right"></div>
					<div class="bottom"></div>
					<div class="left"></div>
					</div>
				<div id="ex_show">
					<div class="arrow" id="arrowL"></div>
					<div class="arrow" id="arrowR"></div>
					<div id="timeBar">
							<div class="date">2015 . 12 . 16</div>
							<div class="date">2015 . 12 . 17</div>
							<div class="date">2015 . 12 . 23</div>
							<div class="date">2015 . 12 . 24</div>
							<div class="date">2015 . 12 . 25</div>	
					</div>
					<div id="ex_box">
						<div class="ex_single_box">
							<a href="Exhibitions.php"><img src="img/exhibition/ex1.jpg" height="420" width="300" alt=""></a>
							<div class="top"></div>
							<div class="right"></div>
							<div class="bottom"></div>
							<div class="left"></div>
						</div>
						<div class="ex_single_box">
							<a href="Exhibitions.php"><img src="img/exhibition/ex2.jpg" height="420" width="300" alt=""></a>
							<div class="top"></div>
							<div class="right"></div>
							<div class="bottom"></div>
							<div class="left"></div>
						</div>
						<div class="ex_single_box">
							<a href="Exhibitions.php"><img src="img/exhibition/ex3.jpg" height="420" width="300" alt=""></a>
							<div class="top"></div>
							<div class="right"></div>
							<div class="bottom"></div>
							<div class="left"></div>
						</div>
						<div class="ex_single_box">
							<a href="Exhibitions.php"><img src="img/exhibition/ex4.png" height="420" width="300" alt=""></a>
							<div class="top"></div>
							<div class="right"></div>
							<div class="bottom"></div>
							<div class="left"></div>
						</div>
						<div class="ex_single_box">
							<a href="Exhibitions.php"><img src="img/exhibition/ex5.png" height="420" width="300" alt=""></a>
							<div class="top"></div>
							<div class="right"></div>
							<div class="bottom"></div>
							<div class="left"></div>
						</div>
					</div>
				</div>
		
			</div>	
		
		
		
		</section>
		<!-- end of the exhibition -->
		
		<!-- start of the comma -->
		<section id="comma_full_container">
			<section id="comma_container">
				<h2>COMMA</h2>
				<p>逗 點</p>
				<header id="comma_header">
					<div class="top"></div>
					<div class="right"></div>
					<div class="bottom"></div>
					<div class="left"></div>
						
				</header>
				<p id="comma_small_title">TO ENJOY THE ARTS</p>
				<section id="comma_img">
					<img src="img/person-woman.jpg"  alt="">
				</section>
				<section id="comma_text">
					<div class="top border"></div>
					<div class="right border"></div>
					<div class="bottom border"></div>
					<div class="left border"></div>
					<!-- <div class="ball" id="ball1"></div>
					<div class="ball" id="ball2"></div> -->
					
					<div id="bigC">
						<div class="svg_wrapper">
						<svg version="1.1" id="layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="841.89px" height="595.28px" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve"   >
						<g>
						<path id="bigC"  d="M246.137,206.197l40.707,12.305c-2.734,11.416-7.041,20.953-12.92,28.607
				c-5.879,7.657-13.176,13.434-21.891,17.33c-8.717,3.896-19.809,5.844-33.275,5.844c-16.338,0-29.684-2.374-40.042-7.121
				c-10.355-4.748-19.295-13.098-26.813-25.053c-7.521-11.956-11.279-27.258-11.279-45.909c0-24.866,6.614-43.977,19.841-57.332
				c13.229-13.356,31.941-20.034,56.141-20.034c18.934,0,33.82,3.829,44.656,11.484c10.832,7.657,18.883,19.415,24.146,35.273
				l-41.016,9.126c-1.436-4.579-2.939-7.929-4.512-10.049c-2.598-3.554-5.777-6.289-9.535-8.203
				c-3.762-1.913-7.965-2.871-12.613-2.871c-10.528,0-18.594,4.234-24.199,12.7c-4.239,6.282-6.357,16.148-6.357,29.597
				c0,16.661,2.528,28.081,7.588,34.26c5.058,6.18,12.167,9.268,21.328,9.268c8.887,0,15.602-2.494,20.15-7.484
				C240.787,222.945,244.086,215.699,246.137,206.197z"/>
						</g>
						</div>
					</div>
					<p>Our office is something we are proud of. <br>We call it the little magnet, it is desired to come here and then impossible to leave. After winning the first place in "Interior of the Year 2014" competition it became known worldwide.</p>
				</section>
						</section>
			</section>
	</div>

	<!-- footer start -->
	<footer id="footer">
    <p class="contact">Contact Information</p>
		<div class="con-container">
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="tel">電話</span><span class="footer_line">──────</span><span class="con2" id="telnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="fax">傳真</span><span class="footer_line">──────</span><span class="con2" id="faxnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="mail">信箱</span><span class="footer_line">──────</span><span class="con2" id="emailnum">couldbedon@gmail.com</span></p>
			<p><span class="footer_comma"><img src="img/footer_comma.jpg" height="10" width="10"></span><span class="con1" id="optime">營業時間</span><span class="footer_line">──────</span><span class="con2">每日09 : 00 ~ 17 : 00</span></p>
		</div><p class="authority">&copy;comma Popside.comma design.wendy Yang</p>
</footer>
<script src="js/bg_animation.js"></script>
<script>
	var headerCounter= 1;
	$(document).ready(function(){

	// ==以下為展覽的左右移動==	
	if($(window).width()<=480){

	}else{
		$('#arrowL').click(function(){
			$('#timeBar').animate({'left':'16px'},1000);
			$('#ex_box').animate({'left':'16px'},1000);
		});

		$('#arrowR').click(function(){
			$('#timeBar').animate({'left':'-784px'},1000);
			$('#ex_box').animate({'left':'-784px'},1000);
		});
	}

//以下為視窗判斷		
function revealOnScroll() {
  var scrolled = $(window).scrollTop();
  // 视窗，即viewport，页面可视范围的窗口
  $('.svg_wrapper').each(function() {
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度

    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height - 100 > offsetTop) {
      current.addClass("svgAni");
    } else {
      current.removeClass("svgAni");
    }
  });

//boder的動畫
   $('.border_wrapper,.ex_single_box,#comma_header,#comma_text,.tens,.ones,#comma_container').each(function() {
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度

    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height - 100 > offsetTop) {
      current.addClass("borderAni");
    } else {
      current.removeClass("borderAni");
    }
  });

}
$(window).on("scroll", revealOnScroll);
	
	
$('#menu_btna').click(function(){
	$('#menu_ul').slideToggle(1500);
});
$('#menu_btna').blur(function(){
	$('#menu_ul').slideToggle(1500);
});





	});//end of ready
$('.arrowDown').click(function(){
	if($(window).width()>=480){
		var target_offset=$('#site_container').offset();
		var target_top=target_offset.top-180;
		$('html,body').animate({scrollTop:target_top},2000);
	}
});
$(window).on("scroll", moveDownHeader);
var lastScroll =0;
function moveDownHeader(){

	if($(window).width()>=480 && headerCounter==1 ){
		event.preventDefault();
		
		var target_offset=$('#site_container').offset();
		var target_top=target_offset.top-180;
		// $('.header').animate({'margin-top':target_top},2000); //49%
		$('.header').css({'backgroundColor':'rgba(0,0,0,.5)'});
		$('html,body').animate({scrollTop:target_top},2000);
		// $('.header').delay(2000).css({'position':'fixed'});
		headerCounter++;
	}

}//end of the MoveTheHeader

$(window).on('scroll',moveUpHeader)

function moveUpHeader (){
	event.preventDefault();
	if(headerCounter==2 && $(window).scrollTop()<lastScroll && lastScroll!=0){
		// $('.header').animate({'margin-top':'0'},2000);
		$('.header').css({'backgroundColor':'rgba(0,0,0,.5)'});
	}
	lastScroll=$(window).scrollTop();
}

var bgCounter=2;
if($(window).width()>480){
	setInterval(changeBg,6000);
}
function changeBg(){
	switch(bgCounter){
		case 1:
		$('.bgImg:nth-child(4)').animate({'opacity':'0'},6000);
		$('.bgImg:nth-child(1)').animate({'opacity':'1'},6000).addClass('zoom');
		$('.bgImg:nth-child(3)').removeClass('zoom');
		bgCounter++;
		break;

		case 2:
		$('.bgImg:nth-child(1)').animate({'opacity':'0'},6000);
		$('.bgImg:nth-child(2)').animate({'opacity':'1'},6000).addClass('zoom');
		$('.bgImg:nth-child(4)').removeClass('zoom');
		bgCounter++;
		break;

		case 3:
		$('.bgImg:nth-child(2)').animate({'opacity':'0'},6000);
		$('.bgImg:nth-child(3)').animate({'opacity':'1'},6000).addClass('zoom');
		$('.bgImg:nth-child(1)').removeClass('zoom');
		bgCounter++;
		break;

		case 4:
		$('.bgImg:nth-child(3)').animate({'opacity':'0'},7000);
		$('.bgImg:nth-child(4)').animate({'opacity':'1'},6000).addClass('zoom');
		$('.bgImg:nth-child(2)').removeClass('zoom');
		bgCounter=1;
		break;
	}
	
}//end of changeBG()

// mobile menu
$(".burger-cover").click(function(){
  		$(this).toggleClass("on");
  		$(".phone-content").slideToggle();
  	});//burger-toggle

</script>

</body>






</html>