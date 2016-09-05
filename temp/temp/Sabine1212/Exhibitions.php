<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/Exhibitions1206.css">
	<link rel="stylesheet" href="css/Exhibitions_mobile.css" type="text/css" media="only screen and (min-width:0px) and (max-width:480px)">
	<link rel="stylesheet" href="css/Exhibitions_tablet.css" type="text/css" media="only screen and (min-width:768px) and (max-width:991px)">
	<link href='css/flipping_gallery.css' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.flipping_gallery.js"></script>
	<script src="js/Exhibitions1206.js"></script>
	
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300|Questrial' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700|Anton' rel='stylesheet' type='text/css'>

	<title>展覽資訊</title>
</head>


<body>



<div class="container">
	<div class="header">
		<div class="logo"><a href="#"><img src="img/LOGO-white.png"></a></div>

		<div class="burger-cover">
			<ul>
				<li class="bur top"></li>
				<li class="bur middle"></li>
				<li class="bur bottom"></li>
			</ul>
		</div>
		
		<div class="burgerCont">
			<div class="box" id="index">首頁</div>
			<div class="box" id="exhibition">展覽資訊</div>
			<div class="box" id="place">場地種類</div>
			<div class="box" id="calendar">瀏覽檔期</div>
			<div class="box"id="login">登入 / 註冊</div>
		</div>

		<div class="menu-container">
			<div class="menu">
				<span class="m" id="exhibition"><a href="#">展覽資訊</a></span>
			</div>
			<div class="menu">
				<span class="m" id="place"><a href="#">場地種類</a></span>
			</div>
			<div class="menu">
				<span class="m" id="order"><a href="#" id="ordera">預約檔期</a></span>
			</div>
		</div>
		
	 	<div class="login"><img src="img/singup.jpg" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div>
	 	<div style="clear:both"></div>
	</div>	


		
<!-- 以上是header,不可動 -->

	<div class="topLine">
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div class="circle"></div>
		<div class="Line">	</div>
		<div style="clear:both"></div>
	</div>

		
		

		<div class="content">

		<?php
			require_once("connectComma_PDO.php");
			$sql = "select  e.exhiNo,e.orderNo,e.memNo,e.exhiName,e.startDate,e.endDate,
					e.instro,e.url,o.orderNo,o.siteNo,s.siteNo,s.siteName 
					from exhibition e JOIN commaorder o ON e.orderNo=o.orderNo JOIN site s ON o.siteNo=s.siteNo";
			$exh = $pdo->query( $sql );
			$number = $exh->rowCount();
			echo "<input type='hidden' id='number' value='",$number,"'>";
			while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){ ?>

			<div class="leftSide">

		
									
           <?php echo "<div class='dateTextContainer' id ='dateTextCont",$exhRow['exhiNo'],"'>";   ?> 

              
             
                  		<div class='dateText'>
							<span>YEAR</span>
							<span>MON</span>
							<span>DATE</span>
						</div> <!-- dateText -->
	

			<?php echo "<div id='dateStart'>",$exhRow["startDate"],"</div>" ?>

						<div class='time'>09 : 00</div>

						<div id='whiteLine'></div>

						<div class='dateText'>
							<span>YEAR</span>
							<span>MON</span>
							<span>DATE</span>
						</div> <!-- dateText -->

			<?php echo "<div id='dateFinish'>",$exhRow["endDate"],"</div>"?>
			
						<div class='time'>17 : 00</div>
					</div> <!-- dateTextContainer -->	
                </div> <!-- leftSide -->
			<?php } ?>
					

			 

					<div class="page-container">
						<div class="gallery">                      
                   <?php
						require_once("connectComma_PDO.php");
						$sql = "select  e.exhiNo,e.orderNo,e.memNo,e.exhiName,e.startDate,e.endDate,
								e.instro,e.url,o.orderNo,o.siteNo,s.siteNo,s.siteName 
								from exhibition e JOIN commaorder o ON e.orderNo=o.orderNo JOIN site s ON o.siteNo=s.siteNo";
						$exh = $pdo->query( $sql );
						while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){ ?>	
                    <?php echo "<p><img src='img/",$exhRow["url"], "'></p>"; ?>				
				<?php } ?>
						</div>
					</div>	<!-- page-container -->

					
			 
<?php
						require_once("connectComma_PDO.php");
						$sql = "select  e.exhiNo,e.orderNo,e.memNo,e.exhiName,e.startDate,e.endDate,
								e.instro,e.url,o.orderNo,o.siteNo,s.siteNo,s.siteName 
								from exhibition e JOIN commaorder o ON e.orderNo=o.orderNo JOIN site s ON o.siteNo=s.siteNo";
						$exh = $pdo->query( $sql );
						while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){ ?>


				
		<?php echo "<div class='rightSide' id ='rightCont",$exhRow['exhiNo'],"'>";?>		
         				
						
						<div id="exbName"><?php echo $exhRow["exhiName"];?></div>
						
						<div id="exbContent"><?php echo $exhRow["instro"];?></div>			
					
						<div id="siteName"><?php echo $exhRow["siteName"]; ?></div>
					
				</div > <!-- rightSide -->
<?php } ?>


			
		</div> <!-- content -->

	

		<div class="rightLine">
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
			<div class="circle"></div>
			<div class="Line">	</div>
		</div> <!-- rightLine -->
		



	</div>	<!-- container -->	


</body>
</html>