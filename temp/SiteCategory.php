<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/allheader2.css">
    <link rel="stylesheet" type="text/css" href="css/header-phone.css"  media="screen and (max-width:360px)">
	<link rel="stylesheet" type="text/css" href="css/rwd.css"  media="screen and (max-width:360px)">
    <link rel="stylesheet" href="css/membersing992.css">
    <link rel="stylesheet" href="css/membersing767.css">
    <title>場地種類</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/site01.js"></script>
    <script src="js/lightbox.js"></script> 
    <script src="js/lightbox02.js"></script> 
    <script src="js/Ease_Pack.js"></script>
    <script src="js/TweenLite.min.js"></script>
</head>
<body>
  <div id="bg_animation">
    <canvas id="myCanvas"></canvas>
  </div>
   <?php require_once('insideHeader.php'); ?>
	<div class="container">
        <div class="nav">
            <div id="submenu">
            <ul>
                <li onclick="location.href='space01.php?siteNo=1';">荒野屋</li>
                <li onclick="location.href='space01.php?siteNo=2';">紅磨坊</li>
                <li onclick="location.href='space01.php?siteNo=3';">天龍國</li>
                <li onclick="location.href='space01.php?siteNo=4';">影知森</li>
                <li onclick="location.href='space01.php?siteNo=5';">木心坊</li>
                <li onclick="location.href='space01.php?siteNo=6';">金澤寧</li>
                <li onclick="location.href='space01.php?siteNo=7';">洞庭湖</li>
                <li onclick="location.href='space01.php?siteNo=8';">目黑場</li>
                <li onclick="location.href='space01.php?siteNo=9';">易牙居</li>
                <li onclick="location.href='space01.php?siteNo=10';">任意門</li>
            </ul>
            </div>		   
        </div>
           <div class="select">
            <form name="myForm" action="getArea.php" method="get">
                   <div class="sp">價格 /
					<select name="price" id="price">
					    <option value="0">請選擇...</option>
						<option value="5500 and 15000">5500~15000</option>
						<option value="15100 and 25000">15100~25000</option>
                        <option value="25100 and 36500">25100~36500</option>
			            </select></div>					
					<div class="sa">地點 /
                     <select name="area" id="area">
					<option value="0">請選擇...</option>
                    <option value="北投區">北投區</option>
                    <option value="中正區">中正區</option>
                    <option value="大同區">大同區</option>
                    <option value="士林區">士林區</option>
                    <option value="信義區">信義區</option>
                    <option value="文山區">文山區</option>
                     </select></div>				
				<div class="ss">坪數 /
                <select name="size" id="size">
				    <option value="0">請選擇...</option>
                    <option value="8 and 15">8~15</option>
                    <option value="20 and 50">20~50</option>
                    <option value="55 and 100">55~100</option>
                </select></div>               
            <input type="button" value="搜尋" onclick="showInfo()"> 
            </form></div>
<script>
function showInfo(){
  var xhr = new XMLHttpRequest();
  var price = document.getElementById("price").value;
  var area = document.getElementById("area").value;
  var size = document.getElementById("size").value;
  //var url = "getArea.php?price=" + encodeURIComponent(price) + "&area=" + encodeURIComponent(area) + "&size=" + encodeURIComponent(size);
  var url = "getArea.php?price=" + (price) + "&area=" + (area) + "&size=" + (size);
  xhr.onreadystatechange = function (){
    if( xhr.readyState == 4 ){
	  if( xhr.status == 200 ){
	    document.getElementById("showPanel").innerHTML = xhr.responseText;
	  }
	}
  }//onreadystatechange
  xhr.open( "get" , url ,true);
  xhr.send(null);
}
</script>
       
<div id="showPanel">            
<?php
try{
  require_once("connectComma_PDO.php");
  $sql = "select * from site";
  $site = $pdo->prepare( $sql );
  $site->execute();
  
  if( $site->rowCount() == 0 ){
    echo "not found~";
  }else{
	  $count=0;
    while($row = $site->fetch(PDO::FETCH_ASSOC)) {
		$picSql = "select url from sitepic where siteNo = {$row["siteNo"]}";
		$pic = $pdo->query( $picSql );
		$picRow = $pic->fetch(PDO::FETCH_ASSOC);		
		?>
        <div class="space <?php echo $count%2==0? "spaceA" : "spaceB";?>">
            <div class="site<?php echo $count%2==0? "site1" : "site2";?>">
            <h2><?php echo $row["siteName"]?></h2>
            <div class="pic<?php echo $count%2==0? "pic1" : "pic2";?>"><a href="space01.php?siteNo=<?php echo $row['siteNo'];?>"><img src="<?php echo $picRow["url"]?>"></a></div>
            <div class="headinfo<?php echo $count%2==0? "headinfo1" : "headinfo2";?>"><?php echo $row["siteEgName"]?></div>
	        </div>
            <div class="siteinfo<?php echo $count%2==0? "siteinfo1" : "siteinfo2";?>">
               <div class="desw<?php echo $count%2==0? "desw1" : "desw2";?>"><?php echo $row["instro"]?></div>
            </div>
		</div>
       
<?php
      $count++;
	}
       }	
}catch(PDOException $e){

  echo 'Message:'.$e->getMessage();
}
?>     
     <p align="center"><a href="#" id="goTop">Top</a></p>
    </div> <!-- ========================== -->    
   </div><!--container-->
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
	<script>
    $(".burger-cover").click(function(){
      $(this).toggleClass("on");
      $(".phone-content").slideToggle();
    });//burger-toggle
  </script>
  <script src="js/bg_animation.js"></script>
</body>
</html>
