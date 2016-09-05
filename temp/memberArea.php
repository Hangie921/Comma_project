<?php
ob_start();
session_start();
$_SESSION['where']='index_front.php';
// $_SESSION["memNo"]=3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1 minimum-scale=0.5 maximum-scale=1.5 user-scalable=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header-phone.css"  media="only screen and (min-width:0px) and (max-width:480px)">
	<link rel="stylesheet" href="css/allheader2.css">
	<link rel="stylesheet" href="css/memberArea.css">
	<link rel="stylesheet" href="css/memberArea_mobile.css" type="text/css" media="only screen and (min-width:0px) and (max-width:480px)">
	<link rel="stylesheet" href="css/membersing992.css" type="text/css">
	<link rel="stylesheet" href="css/membersing767.css" type="text/css">
	
	

	<link rel="stylesheet" href="css/onepage-scroll.css">
	<link rel="stylesheet" href="css/memberAreaLightbox.css">
	<link rel="stylesheet" href="css/memberAreaLightbox_mobile.css" type="text/css" media="only screen and (min-width:0px) and (max-width:480px)">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.onepage-scroll.min.js"></script>
	<script src="js/jquery.lightbox_me.js"></script>
	<script src="js/memberArea.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/lightbox02.js"></script> 

	
	<title>會員專區</title>
</head>


<body>
<span id="ttt"></span>

	<?php require_once 'insideHeader.php'; ?>
	
	
	<div class="rightLine" id="rightL1">
		<ul>
			<li  class="circle" id="circle1"><div class="cir"></div>會員資料修改</li>
			<li  class="circle" id="circle2"><div class="cir"></div>展覽資訊上傳</li>
			<li  class="circle" id="circle3"><div class="cir"></div>訂單查詢</li>
			<li  class="circle" id="circle4"><div class="cir"></div>評價</li>
		</ul>
	</div>

	<div class="rightLine" id="rightL2">
		<ul>
			<a href="#mmm"><li  class="circle" id="circle1-1"><div class="cir"></div>會員資料修改</li></a>
			<a href="#eee"><li  class="circle" id="circle2"><div class="cir"></div>展覽資訊上傳</li></a>
			<a href="#ooo"><li  class="circle" id="circle3"><div class="cir"></div>訂單查詢</li></a>
			<a href="#ccc"><li  class="circle" id="circle4"><div class="cir"></div>評價</li></a>
		</ul>
	</div>		

<!-- memMod開始 -->

<span id="mmm"></span>
<div class="sectionBox">
<section data-index='1' id="memMod" data-section-name="memMod">
	<div class="content memCon">
		<div class="mbox memBox">
			<span class="exbTitle">會員資料修改</span>

			<div class="forms">
            
            <form action="">
				
				<?php
			require_once("connectComma_PDO.php");
			$sql = "select*					 
					from member
					where memNo=:member";
					
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["memNo"]);
			$mem -> execute();
			
			$memRow = $mem->fetch(PDO::FETCH_ASSOC); ?>		
 
							
				<div><div class="exbText memText">連絡電話：</div> <input type="text" name="" value="<?php echo $memRow['phone']?>" id="phone">
				</div>
				
				<div><div class="exbText memText">電子信箱：</div> 
					<input type="email" name="" value="<?php echo $memRow['memEmail']?>" id="memEmail">
				</div>
				
				<!-- 不顯示原始密碼 -->
								
				<div><div class="exbText memText">修改新密碼：</div> <input type="password" value="" id="password2">
				</div>

				<div><div class="exbText memText">再輸入新密碼：</div> <input type="password" value="" id="password3">
				</div>

				
				
				<div class="buttons">
					<!-- <input type="reset" class="reset" id="reset1"name="reset" value="重新輸入"> -->
					<input type="submit" class="submit"id="submitMod"name="submit"  value="送出">
				</div>
			
         
				</form>
                

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

	
		<div class="result r-success" id="success1">
			<div class="x x1"><img src="img/X.png" alt=""></div>
			<div class="success">送出成功</div>
		</div>

<!-- extUpload開始 -->
<span id="eee"></span>
<section data-index='2' id="extUpload" data-section-name="extUpload">

		<div class="content">
		<div class="mbox">
			<span class="exbTitle">展覽資訊上傳</span>

			<div class="forms">
            
				<form action="javascript:exhiToLightBox();" id='ExhGet'>
				<div><div class="exbText">訂單選擇：</div> 
                		<select name="orderNo">
			<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.status,o.member,s.siteNo,s.siteName					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where member=:member and o.status=2
					order by orderNo desc";
					
			$exh = $pdo->prepare( $sql );
			$exh -> bindParam(":member",$_SESSION["memNo"]);
			$exh -> execute();
			
				while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){

						echo "<option>".$exhRow['startDate']."~".$exhRow['endDate']."：".$exhRow['siteName']."</option>";
						// echo "<option>".$exhRow['orderNo']."：".$exhRow['siteName']."／".$exhRow['startDate']."~".$exhRow['endDate']."</option>";
			}?> 
			

			<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.status,o.member,s.siteNo,s.siteName					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where member=:member and o.status=2
					order by orderNo desc";
					
			$exh = $pdo->prepare( $sql );
			$exh -> bindParam(":member",$_SESSION["memNo"]);
			$exh -> execute();
			
				while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){
			echo "<input type='hidden'"."name='siteName'"."id='siteName'"."value=".$exhRow['siteName'].">";
			
			}?>            
						</select>					
				</div>
				
				<!-- <input type="hidden" name="siteName" id="siteName" value="<?php echo $exhRow['siteName'] ?>"> -->
						
				<div><div class="exbText">展覽開始日期：</div> 
					<input type="date" name="startDate" id="startDate">
				</div>
				
				<div><div class="exbText">展覽結束日期：</div> 
					<input type="date" name="endDate" id="endDate" value="">
				</div>
				
				<div><div class="exbText">上傳展覽圖片：</div> <input type="file" id="picFile">
				</div>
				
				<div class="picText">圖片尺寸500x700上限15MB</div>
				
				<div><div class="exbText">展覽名稱：</div> <input type="text" name="exhiName" id="exhiName" value="">
				</div>

				<div><div class="exbText exbText1">展覽說明：</div></div>
				
				<div class="exbTextCon">
					<textarea name="instro" id="instro" cols="32" rows="12"></textarea>
				</div>
				
				<div class="buttons">
					<!-- <input type="reset" id="reset2" name="reset" class="reset" value="重新輸入"> -->
                    <input type="hidden" name="memNo" value=" <?php echo $_SESSION["memNo"];?>">
					<input type="submit" id="submitUp" name="submit" class="submit" value="下一步"><!-- 待改 -->
				</div>

				</form>

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->	

	</section>

	<div id="lightboxExtUpload">
    <form action="">
		<div class="x"><img src="img/X.png" alt=""></div>
		<div class="mbox boxLB">
			<span class="exbTitle">展覽資訊上傳</span>

				<div id="exhSiteName"></div>
				
				<div class="exbConLB"><div class="exbTexta">展覽開始日期：</div><div class="exbTextLB" id="exhStartDate"></div> 
				</div>
				
				<div class="exbConLB"><div class="exbTexta">展覽結束日期：</div><div class="exbTextLB"  id="exhEndDate"></div>				
				</div>

				<div class="imgLB"><img src="img/exhibition/exb-6.jpg" ></div>
				
				<div class="exbConLB">
				<div class="exbTexta">展覽名稱：</div>
                <div class="exbTextLB"  id="exhExhiName"></div>
				</div>
								
				<div class="bb">
					<div class="exbTexta">展覽說明：</div>
					<div class="exbTextLB aa" id="exhInstro"><p>
					</p>
					</div>
				</div>
				
								
				<div class="buttons cc">
					<!-- <input type="reset" id="reset4"name="reset" class="reset" value="上一步"> -->
					<input type="submit" id="submitUp2"name="submit" class="submit" value="送出"><!-- 待改 -->
				</div>


		</div> <!-- .mbox -->
    </form>    
	</div><!-- #lightboxExtUpload -->


<!-- order開始 -->
<span id="ooo"></span>
<section data-index='3' id="order" data-section-name="order">
<!-- <a id="check"><section id="order" data-section-name="order"></a> -->
	<div class="content orCon">
		<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd">
				<div class="ordTitle">目前訂單</div>
<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member and (o.status=1 or o.status=2 or o.status=3)
					order by orderTime desc
					limit 1";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["memNo"]);
			$mem -> execute();
			
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
						<!--<td>折扣</td>-->
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
						<td><?php echo "NT",$memRow["totalPrice"]?></td><!-- o.totalPrice-->	
							
                        
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
							<?php echo $memRow["totalPrice"]?></td>
					</tr>
				</table><!-- curOrdMobile -->
				<div class="cancel1">取消訂單</div>
<?php  }}?>
			</div><!-- .curOrd -->	
			

			<div id="ordCurButton">其他目前訂單</div>

			<div class="curOrd hisOrd">
				<div class="ordTitle">歷史訂單</div>

<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=4 or o.status=5 or o.status=6 or o.status=7)
					order by orderTime desc
					limit 1";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["memNo"]);
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
							<?php echo "NT",$memRow["totalPrice"]?></td>				
							
						
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
							<?php echo "NT",$memRow["totalPrice"]?></td>
					</tr>
				</table> <!-- hisOrdMobile -->
			</div><!-- .curOrd -->			
<?php } }?>
			<div id="ordHisButton">其他歷史訂單</div>

		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

<div id="lightCurOrder">
	<div class="x"><img src="img/X.png" alt=""></div>
	<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd">
				<div class="ordTitle">目前訂單</div>

           
<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=1 or o.status=2 or o.status=3)
					order by orderTime desc
					limit 1,10";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["memNo"]);
			$mem -> execute();
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>            				
				<table class="curOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
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
						
						<td><?php echo "NT",$memRow["totalPrice"]?></td>						
						
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
						<!--<td>折扣</td>-->
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
							<?php echo "NT",$memRow["totalPrice"]?></td>
					</tr>
				</table> <!-- curOrdMobile -->

				<div class="cancel1">取消訂單</div>
<?php } ?>				
			</div><!-- .curOrd -->	
			



			
			<div id="closeCurButton">關閉目前訂單</div>	
	</div>
	
</div><!-- #lightCurOrder -->


<div id="lightboxHisOrder">
	<div class="x"><img src="img/X.png" alt=""></div>
	<div class="mbox orBox">
			<span class="exbTitle">訂單查詢</span>
			
			<div class="curOrd hisOrd">
				<div class="ordTitle">歷史訂單</div>

<?php
			require_once("connectComma_PDO.php");
			$sql = "select  o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.totalPrice,o.status,o.member,s.siteNo,s.siteName,s.price					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member AND (o.status=4 or o.status=5 or o.status=6 or o.status=7)
					order by orderTime desc
					limit 1,10";
			$mem = $pdo->prepare( $sql );
			$mem -> bindParam(":member",$_SESSION["memNo"]);
			$mem -> execute();
			while( $memRow = $mem->fetch(PDO::FETCH_ASSOC)){  ?>             

				<table class="hisOrdAll">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td>場地名稱</td>
						<td>租借日期</td>
						<td>單價</td>
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
						
						<td><?php echo "NT",$memRow["totalPrice"]?></td>
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
						<!--<td>折扣</td>-->
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
							<?php echo "NT",$memRow["totalPrice"]?></td>
					</tr>
				</table> <!-- hisOrdMobile -->
<?php } ?>				
			</div><!-- .curOrd.hisOrd -->	
			
			<div id="closeHisButton">關閉歷史訂單</div>	
	</div>
</div><!-- #lightboxHisOrder -->


<div id="lightboxCancel">
	<div class="x"><img src="img/X.png" alt=""></div>
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
						<!--<td>折扣</td>-->
						<td>總價</td>
					</tr>
					<tr>
						<td class="canorDate">2015-10-26</td>
						<td class="canNo">ZD7026</td>
						<td class="canSite">影知森</td>
						<td>
							<div clss="startDatecan">2015-11-15</div>
							<div>|</div>
							<div clss="finishDatecan">2015-11-20</div>							
						</td>
						<td class="canPrice">NT 3000</td>
						<!--<td>有</td>-->
						<td class="cantoPrice">NT 2700</td>
					</tr>
				</table>

				<table class="cancelMobile">
					<tr>
						<td>日期</td>
						<td>訂單編號</td>
						<td colspan="2">場地名稱</td>
					</tr>

					<tr>
						<td class="canorDate">2015-10-26</td>
						<td  class="canNo">ZD7026</td>
						<td class="canSite" colspan="2">影知森</td>
					</tr>

					<tr>
						<td>租借日期</td>
						<td>單價</td>
						<td>總價</td>
					</tr>

					<tr>
						<td>
							<div clss="startDatecan">2015-11-15</div>
							<div>|</div>
							<div clss="finishDatecan">2015-11-20</div>							
						</td>
						<td  class="canPrice">NT 3000</td>
						
						<td  class="cantoPrice">NT 2700</td>
					</tr>
				</table> <!-- cancelMobile -->

			</div><!-- .curOrd -->

			<div class="exbText dd">取消原因：</div>
				
				<!-- <div> -->
					<textarea name="" class="cancelText" id="cancelConAll"cols="80" rows="8"></textarea>

					<textarea name="" class="cancelText" id="cancelConMobile"cols="45" rows="8"></textarea>
				<!-- </div> -->

			<div><div class="exbText dd">同意書：</div></div>
				
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
<span id="ccc"></span>
<section data-index='4' id="assess" data-section-name="assess">
<!-- <a href="#say"><section id="assess" data-section-name="assess"></a> -->
	<div class="content asCon">
		<div class="mbox asBox">
			<span class="exbTitle">填寫評價</span>

		<div class="forms">
				<form>

			<div><div class="exbText asText">訂單選擇：</div> 
					<select name="ordno">
		<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.status,o.member,s.siteNo,s.siteName					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where o.member=:member and o.status=6
					order by orderNo desc";
					
			$exh = $pdo->prepare( $sql );
			$exh -> bindParam(":member",$_SESSION["memNo"]);
			$exh -> execute();
			while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){  
				// echo "<option>",$exhRow['orderNo'],"</option>"; 
				echo "<option id='coo'>".$exhRow['startDate']."~".$exhRow['endDate']."：".$exhRow['siteName']."</option>"; }
　			 ?>
			
			<?php
			require_once("connectComma_PDO.php");
			$sql = "select o.siteNo,o.orderTime,o.orderNo,o.startDate,o.endDate,o.status,o.member,s.siteNo,s.siteName					 
					from commaorder o JOIN site s ON o.siteNo=s.siteNo
					where member=:member and o.status=2
					order by orderNo desc";
					
			$exh = $pdo->prepare( $sql );
			$exh -> bindParam(":member",$_SESSION["memNo"]);
			$exh -> execute();
			
			while( $exhRow = $exh->fetch(PDO::FETCH_ASSOC)){
			echo "<input type='hidden'"."name='siteName'"."id='siteName2'"."value=".$exhRow['siteName'].">";
			
			}?>					
					</select>					
				</div>
				
				<div><div class="exbText asText asText1">好感星星：</div></div>
				
				<div class="stars">

					<ul>
						<li class="starCh"><img src="img/star-w.png" alt="" id="starCh1"></li>
						<li class="starCh"><img src="img/star-w.png" alt="" id="starCh2"></li>
						<li class="starCh"><img src="img/star-w.png" alt="" id="starCh3"></li>
						<li class="starCh"><img src="img/star-w.png" alt="" id="starCh4"></li>
						<li class="starCh"><img src="img/star-w.png" alt="" id="starCh5"></li>
					</ul>
					
				</div>

				<div><div class="exbText asText asText2">評價：</div></div>
				
				<div class="assessText">
					<textarea name="" id="comment" cols="32" rows="12"></textarea>
				</div>
					
				<div class="buttons">
					<!-- <input type="reset" id="reset3"name="reset"  class="reset" value="重新輸入"> -->
					<input type="submit" id="submitAs"name="submit" class="submit" value="下一步">
				</div>
			
				</form>

			</div><!-- #form -->
		</div> <!-- .mbox -->
	</div> <!-- .content -->		
</section>

<div id="lightboxAssess">
	<div class="x"><img src="img/X.png" alt=""></div>
	<div class="mbox asLiBox">
			<span class="exbTitle">填寫評價</span>

				<div>
					<div class="AsLB">訂單選擇：</div>
					<div id="asOrdchoice"></div> 

				</div>
				
				<div class="AsLB">好感星星：</div>
				
				<div class="stars">

					<ul>
						<li><img src="img/star(2).png" alt=""></li>
						<li><img src="img/star(2).png" alt=""></li>
						<li><img src="img/star(2).png" alt=""></li>
						<li><img src="img/star(2).png" alt=""></li>
						<li><img src="img/star-w.png" alt=""></li>
					</ul>
					
				</div>

				<div>
					<div class="AsLB">填寫評價：</div>
					
					<div id="asOrdText"></div>

				</div>
				
	
					
				<div class="buttons">
					<!-- <input type="reset" id="reset5"name="reset"  class="reset" value="取消"> -->
					<input type="submit" id="submit5"name="submit" class="submit" value="送出">
				</div>

		</div> <!-- .mbox -->

</div><!-- #lightboxAssess -->

</div><!-- sectionBox -->

<!-- section結束 -->

		<a href="#ttt" id="toUp"><img src="img/top.png" alt=""></div></a>

<script>
	//var exhExhiName;
	$(document).ready(function(){
		//exhExhiName = document.getElementById("exhExhiName");
		$('#circle1').click(function(){
			$(".sectionBox").moveTo(1);
		});
		
		$('#circle2').click(function(){
			$(".sectionBox").moveTo(2);
		});

		$('#circle3').click(function(){
			$(".sectionBox").moveTo(3);
		});

		$('#circle4').click(function(){
			$(".sectionBox").moveTo(4);
		});

		// mobile menu
	$(".burger-cover").click(function(){
  		$(this).toggleClass("on");
  		$(".phone-content").slideToggle();
  	});//burger-toggle

	});

	
</script>
</body>
</html>