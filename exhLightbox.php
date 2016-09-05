<?php
ob_start();
session_start();
$_SESSION["member"]=3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="allUse/reset.css">
	<link rel="stylesheet" href="css/memberArea1206.css">
	<link rel="stylesheet" href="css/memberArea_mobile.css" type="text/css" media="only screen and (min-width:0px) and (max-width:480px)">

	<link rel="stylesheet" href="css/onepage-scroll.css">
	<link rel="stylesheet" href="css/exhLightbox.css">
	<link rel="stylesheet" href="css/exhLightbox_mobile.css" type="text/css" media="only screen and (min-width:0px) and (max-width:480px)">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.onepage-scroll.min.js"></script>
	<script src="js/jquery.lightbox_me.js"></script>
	<script src="js/memberArea1201-2.js"></script>

	

	
	<title>會員專區</title>
</head>


<body>
	
	<div class="header">
		<div class="logo"><a href="#"><img src="allUse/LOGO-white.png"></a></div>

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
		
	 	<div class="login"><img src="allUse/singup.jpg" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div>
	 	<div style="clear:both"></div>
	</div>	<!-- .header -->

	<div class="rightLine">
		<ul>
			<li id="circle1">會員資料修改</li>
			<li id="circle2">展覽資訊上傳</li>
			<li id="circle3">訂單查詢</li>
			<li id="circle4">評價</li>
		</ul>
	</div>
	

<!-- memMod開始 -->

<div class="sectionBox">

<section id="memMod" data-section-name="memMod">
	<div class="content memCon">
		<div class="mbox memBox">
			<span class="exbTitle">會員資料修改</span>

			<div class="forms">
				<form>					
				<div><div class="exbText memText">連絡電話 /</div> <input type="text" name="" value="">
				</div>
				
				<div><div class="exbText memText">電子信箱 /</div> 
					<input type="email" name="" value="">
				</div>
				
				<div><div class="exbText memText">原始密碼 /</div> <input type="password">
				</div>
								
				<div><div class="exbText memText">修改新密碼 /</div> <input type="password">
				</div>

				<div><div class="exbText memText">再輸入新密碼 /</div> <input type="password">
				</div>

				<div><div class="exbText memText">上傳圖像 /</div> <input type="file">
				</div>
					
				<div class="buttons">
					<input type="reset" class="reset" id="reset1"name="reset" value="重新輸入">
					<input type="submit" class="submit"id="submitMod"name="submit"  value="送出">
				</div>

				</form>

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

	
		<div class="result r-success" id="success1">
			<div class="x x1"><img src="images/X.png" alt=""></div>
			<div class="success">送出成功</div>
		</div>

<!-- extUpload開始 -->
	<section id="extUpload" data-section-name="extUpload">

		<div class="content">
		<div class="mbox">
			<span class="exbTitle">展覽資訊上傳</span>

			<div class="forms">
            
				<form action="ExhGet.php">
				<div><div class="exbText">訂單選擇 /</div> 
                		<select name="orderNo">
					
						<option><?php echo $_SESSION["orderNo"] ?></option>";
			                        
						</select>					
				</div>
				
				<div><div class="exbText">展覽開始日期 /</div> <input type="date" name="startDate" value="">
				</div>
				
				<div><div class="exbText">展覽結束日期 /</div> 
					<input type="date" name="endDate" value="">
				</div>
				
				<div><div class="exbText">上傳展覽圖片 /</div> <input type="file">
				</div>
				
				<div class="picText">圖片尺寸500x700上限15MB</div>
				
				<div><div class="exbText">展覽名稱 /</div> <input type="text" name="exhiName">
				</div>

				<div><div class="exbText exbText1">展覽說明 / </div></div>
				
				<div class="exbTextCon">
					<textarea name="instro" id="" cols="32" rows="12"></textarea>
				</div>
				
				<div class="buttons">
					<input type="reset" id="reset2" name="reset" class="reset" value="重新輸入">
                    <input type="hidden" name="memNo" value=" <?php echo $_SESSION["member"];?>">
					<input type="submit" id="submitUp" name="submit" class="submit" value="下一步"><!-- 待改 -->
				</div>

				</form>

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->	

	</section>

	<div id="lightboxExtUpload">
		<div class="x"><img src="images/X.png" alt=""></div>
		<div class="mbox boxLB">
			<span class="exbTitle">展覽資訊上傳</span>


				
				<div class="exbConLB"><div class="exbTexta">展覽開始日期 /</div><div class="exbTextLB"><?php echo $_SESSION["startDate"] ?></div> 
				</div>
				
				<div class="exbConLB"><div class="exbTexta">展覽結束日期 /</div><div class="exbTextLB"><?php echo $_SESSION["endDate"] ?></div>				
				</div>

				<div class="imgLB"><img src="images/exb-5.jpg" ></div>
				
				<div class="exbConLB"><div class="exbTexta">展覽名稱 /</div><div class="exbTextLB"><?php echo $_SESSION["exhiName"] ?></div>
				</div>
								
				
				<div class="bb">
					<div class="exbTexta">展覽說明 / </div>
					<div class="exbTextLB aa">
					<?php echo $_SESSION["instro"]?>
					</div>
				</div>
				
								
				<div class="buttons cc">
					<input type="reset" id="reset4"name="reset" class="reset" value="上一步">
					<input type="submit" id="submitUp2"name="submit" class="submit" value="送出"><!-- 待改 -->
				</div>


		</div> <!-- .mbox -->
	</div><!-- #lightboxExtUpload -->


<!-- order開始 -->


<section id="order" data-section-name="order">
	<div class="content orCon">
		<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd">
				<div class="ordTitle">目前訂單</div>
<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.discount,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member and (o.status=1 or o.status=2 or o.status=3)
					order by orderTime desc
					limit 1";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["member"]);
			$mem -> execute();
			/*$number = $mem->rowCount();*/
/*			echo "<input type='hidden' id='number' value='",$number,"'>";*/
		if( $mem->rowCount()==0){
			echo"無目前訂單資料";
  		}
		else{
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>

				<table class="curOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td><!-- orderTime -->
						<td><?php echo $memRow["orderNo"]?></td><!-- orderNo -->
						<td><?php echo $memRow["siteName"]?></td><!-- s.siteName -->
						<td>
							<div id="startDate"><?php echo $memRow["startDate"]?></div><!-- startDate-->
							<div>|</div>
							<div id="finishDate"><?php echo $memRow["endDate"]?></div><!-- endDate --> 							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td><!-- s.price -->
						<td><?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
                        </td><!-- o.discount -->
                        
						<td><?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
                        </td><!-- o.totalPrice 有折扣*0.9,無不用乘-->
					</tr>
				</table><!-- curOrdAll -->

				<table class="curOrdMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>

					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td colspan="2"><?php echo $memRow["siteName"]?></td>
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div id="startDate"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="finishDate"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo $memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo $memRow["totalPrice"]*0.9;
								}
								else{
									echo $memRow["totalPrice"];  
								}
							?>
						</td>
					</tr>
				</table><!-- curOrdMobile -->
				<div class="cancel">取消訂單</div>
<?php  }}?>
			</div><!-- .curOrd -->	
			

			<div id="ordCurButton">其他目前訂單</div>

			<div class="curOrd hisOrd">
				<div class="ordTitle">歷史訂單</div>

<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.discount,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=4 or o.status=5 or o.status=6 or o.status=7)
					order by orderTime desc
					limit 1";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["member"]);
			$mem -> execute();
		if( $mem->rowCount()==0){
			echo"無歷史訂單資料";
  		}
		else{			
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>            

				<table class="hisOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td><?php echo $memRow["siteName"]?></td>
						<td>
							<div id="hisStartDate"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="hisFinishDate"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
						</td>
					</tr>
				</table> <!-- hisOrdAll -->

				<table class="hisOrdMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td colspan="2"><?php echo $memRow["siteName"]?></td>				
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div id="hisStartDate"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="hisFinishDate"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
						</td>
					</tr>
				</table> <!-- hisOrdMobile -->
			</div><!-- .curOrd -->			
<?php } }?>
			<div id="ordHisButton">其他歷史訂單</div>

		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

<div id="lightCurOrder">
	<div class="x"><img src="images/X.png" alt=""></div>
	<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd">
				<div class="ordTitle">目前訂單</div>

           
<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.discount,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=1 or o.status=2 or o.status=3)
					order by orderTime desc
					limit 1,10";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["member"]);
			$mem -> execute();
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>            				
				<table class="curOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td><?php echo $memRow["siteName"]?></td>
						<td>
							<div id="startDateLB1"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="finishDateLB1"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
						</td>
					</tr>
				</table>

				<table class="curOrdMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>

					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td colspan="2"><?php echo $memRow["siteName"]?></td>
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div id="startDate"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="finishDate"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}					
							?>
						</td>
					</tr>
				</table> <!-- curOrdMobile -->

				<div class="cancel">取消訂單</div>
<?php } ?>				
			</div><!-- .curOrd -->	
			



			
			<div id="closeCurButton">關閉目前訂單</div>	
	</div>
	
</div><!-- #lightCurOrder -->


<div id="lightboxHisOrder">
	<div class="x"><img src="images/X.png" alt=""></div>
	<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd hisOrd">
				<div class="ordTitle">歷史訂單</div>

<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.discount,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=4 or o.status=5 or o.status=6 or o.status=7)
					order by orderTime desc
					limit 1,10";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["member"]);
			$mem -> execute();
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>             

				<table class="hisOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td><?php echo $memRow["siteName"]?></td>
						<td>
							<div id="startDateLB"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="finishDateLB"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
						</td>
					</tr>
				</table>

	 				<table class="hisOrdMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>
					<tr>
						<td><?php echo $memRow["orderTime"]?></td>
						<td><?php echo $memRow["orderNo"]?></td>
						<td colspan="2"><?php echo $memRow["siteName"]?></td>				
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div id="hisStartDate"><?php echo $memRow["startDate"]?></div>
							<div>|</div>
							<div id="hisFinishDate"><?php echo $memRow["endDate"]?></div>							
						</td>
						<td><?php echo "NT",$memRow["price"]?></td>
						<td>
							<?php 
								if ($memRow["discount"]==1){
									echo "有";
								}
								else{
									echo "無";  
								}						
                        	?>
						</td>
						<td>
							<?php if ($memRow["discount"]==1){
									echo "NT",$memRow["totalPrice"]*0.9;
								}
								else{
									echo "NT",$memRow["totalPrice"];  
								}
								
							?>
						</td>
					</tr>
				</table> <!-- hisOrdMobile -->
<?php } ?>				
			</div><!-- .curOrd.hisOrd -->	
			
			<div id="closeHisButton">關閉歷史訂單</div>	
	</div>
</div><!-- #lightboxHisOrder -->


<div id="lightboxCancel">
	<div class="x"><img src="images/X.png" alt=""></div>
	<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd">
				<div class="ordTitle">目前訂單</div>
				<table class="cancelAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>
					<tr>
						<td>2015-10-26</td>
						<td>ZD7026</td>
						<td>影知森</td>
						<td>
							<div id="startDateLB1">2015-11-15</div>
							<div>|</div>
							<div id="finishDateLB1">2015-11-20</div>							
						</td>
						<td>NT 3000</td>
						<td>有</td>
						<td>NT 2700</td>
					</tr>
				</table>

				<table class="cancelMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>

					<tr>
						<td>2015-10-26</td>
						<td>ZD7026</td>
						<td colspan="2">影知森</td>
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>折扣</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div id="startDate">2015-11-15</div>
							<div>|</div>
							<div id="finishDate">2015-11-20</div>							
						</td>
						<td>NT 3000</td>
						<td>有</td>
						<td>NT 2700</td>
					</tr>
				</table> <!-- cancelMobile -->				
			</div><!-- .curOrd -->

			<div class="exbText dd">取消原因 / </div>
				
				<!-- <div> -->
					<textarea name="" class="cancelText" id="cancelConAll"cols="80" rows="8"></textarea>

					<textarea name="" class="cancelText" id="cancelConMobile"cols="45" rows="8"></textarea>
				<!-- </div> -->

			<div><div class="exbText dd">同意書 / </div></div>
				
				<div class="exbText ee">
					<!-- <textarea name="" id="#cancelAgg" cols="80" rows="8"></textarea> -->
					申請單位以任何其他理由取消合約，需於「租用首日之三天前」告知場地方辦理退租。若未在規定期限之內通知，預約押金恕無法退還。若有退款情況時，匯款轉帳手續費需由申請方自行吸收，本單位將於退回款項中直接扣除手續費用。
				</div>

			<div class="agg"><input type="radio" name="agg" value="agg">我同意</div>
			
			<div class="canButtons">
				<div id="closeCancelButton">不取消訂單</div>
				<div id="CancelButton">取消訂單送出</div>
			</div>	
	</div>
	
</div><!-- #lightboxCancel -->



<!-- assess開始 -->
<section id="assess" data-section-name="assess">
	<div class="content asCon">
		<div class="mbox asBox">
			<span class="exbTitle">填寫評價</span>

		<div class="forms">
				<form>

			<div><div class="exbText asText">訂單選擇 /</div> <select name="ordno">
　						<option value="1">1</option>
　						<option value="2">2</option>
　						<option value="3">3</option>
						</select>					
				</div>
				
				<div><div class="exbText asText asText1">好感星星 / </div></div>
				
				<div class="stars">

					<ul>
						<li><img src="images/star-w.png" alt=""></li>
						<li><img src="images/star-w.png" alt=""></li>
						<li><img src="images/star-w.png" alt=""></li>
						<li><img src="images/star-w.png" alt=""></li>
						<li><img src="images/star-w.png" alt=""></li>
					</ul>
					
				</div>

				<div><div class="exbText asText asText2">評價 / </div></div>
				
				<div class="assessText">
					<textarea name="" id="" cols="32" rows="12"></textarea>
				</div>
					
				<div class="buttons">
					<input type="reset" id="reset3"name="reset"  class="reset" value="重新輸入">
					<input type="submit" id="submitAs"name="submit" class="submit" value="下一步">
				</div>

				</form>

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

<div id="lightboxAssess">
	<div class="x"><img src="images/X.png" alt=""></div>
	<div class="mbox asLiBox">
			<span class="exbTitle">填寫評價</span>

				<div>
					<div class="AsLB">訂單選擇 /</div>
					<div id="asOrdchoice">木心坊 2015-11-03~2015-11-11</div> 

				</div>
				
				<div class="AsLB">好感星星 / </div>
				
				<div class="stars">

					<ul>
						<li><img src="images/star.png" alt=""></li>
						<li><img src="images/star.png" alt=""></li>
						<li><img src="images/star.png" alt=""></li>
						<li><img src="images/star.png" alt=""></li>
						<li><img src="images/star-w.png" alt=""></li>
					</ul>
					
				</div>

				<div>
					<div class="AsLB">填寫評價 / </div>
					
					<div id="asOrdText">					
					覺得非常非常棒,場地合宜,服務人員也很親切
					</div>

				</div>
				
	
					
				<div class="buttons">
					<input type="reset" id="reset5"name="reset"  class="reset" value="取消">
					<input type="submit" id="submit5"name="submit" class="submit" value="送出">
				</div>

		</div> <!-- .mbox -->

</div><!-- #lightboxAssess -->

</div><!-- sectionBox -->

<!-- section結束 -->


</body>
</html>