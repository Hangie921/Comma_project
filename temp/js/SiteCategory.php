<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header-phone.css"  media="screen and (max-width:360px)">
	<link rel="stylesheet" type="text/css" href="css/rwd.css"  media="screen and (max-width:360px)">
<title>瀏覽場地</title>
    <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/001.js"></script>
</head>
<body>
    <div class="header">
		<div class="logo"><a href="#"><img src="LOGO.png" width="90" height="70"></a></div>
		<div class="menu-container">
			<div class="menu"><span class="m" id="exhibition"><a href="#">展覽資訊</a></span></div>
			<div class="menu"><span class="m" id="place"><a href="#" id="sitea">場地種類</a></span></div>
			<div class="menu"><span class="m" id="order"><a href="#" id="ordera">瀏覽檔期</a></span></div>
		</div>
		<div class="burger-cover">
			<ul>
				<li class="bur top"></li>
				<li class="bur middle"></li>
				<li class="bur bottom"></li>
			</ul>
		</div>
	 	<div class="login"><img src="" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div>
	</div>
	
    <div class="container">
        <div class="nav">
            <div id="submenu">
            <ul>
                <li><a herf="">陶淵明</a></li>
                <li><a herf="">目黑場</a></li>
                <li><a herf="">影知森</a></li>
                <li><a herf="">天龍國</a></li>
                <li><a herf="">金澤寧</a></li>
                <li><a herf="">洞庭湖</a></li>
                <li><a herf="">紅磨坊</a></li>
                <li><a herf="">荒野屋</a></li>
                <li><a herf="">易居牙</a></li>
                <li><a herf="">任意門</a></li>
            </ul>
            </div>			   
        </div>
           <div class="select">
            <form name="myForm" action="getArea.php" method="get">
                   <div class="sp">價格 /
					<select name="price" id="price">
					    <option value="0">請選擇...</option>
						<option value="5000 and 10000">5000~10000</option>
						<option value="15000 and 28000">15000~28000</option>
			            </select></div>					
					<div class="sa">地點 /
                     <select name="area" id="area">
					<option value="0">請選擇...</option>
                    <option value="萬華區">萬華區</option>
                    <option value="中正區">中正區</option>
                     </select></div>				
				<div class="ss">坪數 /
                <select name="size" id="size">
				    <option value="0">請選擇...</option>
                    <option value="20 and 50">20~50</option>
                    <option value="60 and 100">60~100</option>
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
  require_once("Comma_PDO.php");
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
            <div class="pic<?php echo $count%2==0? "pic1" : "pic2";?>"><img src="<?php echo $picRow["url"]?>"></div>
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
			<p><span class="footer_comma"><img src="coninfo.jpg" height="10" width="10"></span><span class="con1" id="tel">電話</span>──────<span class="con2" id="telnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="coninfo.jpg" height="10" width="10"></span><span class="con1" id="fax">傳真</span>──────<span class="con2" id="faxnum">(03)3478-189</span></p>
			<p><span class="footer_comma"><img src="coninfo.jpg" height="10" width="10"></span><span class="con1" id="mail">信箱</span>──────<span class="con2" id="emailnum">couldbedon@gmail.com</span></p>
		</div>
		<p class="authority">&copy;comma Popside.comma design.wendy Yang</p>
	</footer>   
	
</body>
</html>
