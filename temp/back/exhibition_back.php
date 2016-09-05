<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/exhibition_back.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>展覽管理</title>
</head>
<?php 
	require_once('sideBarTop.php');
 ?>

	

	<div class="list">
		<div class="ad">展覽管理</div>
			<table class="top">
				<tr class="title">
					<th class="number">展覽編號</th>
					<th class="number">訂單編號</th>
					<th>策展會員</th>
					<th>展覽名稱</th>
					<th>開始日期</th>
					<th>結束日期</th>
					<th>展覽內容</th>
					<th>圖片</th>
					<th>上傳圖片</th>
				</tr>
	<?php 
		try{
		require_once('../connectComma_PDO.php');
		$sql='select e.exhiNo ,e.orderNo,e.memNo,e.exhiName,e.startDate,e.endDate,e.instro,e.url,m.memName from exhibition e join member m on e.memNo= m.memNo order by e.orderNo';
		$statement=$pdo->query($sql);
		while($detail=$statement->fetch(PDO::FETCH_ASSOC)){
	?>

	
				<tr class="content">
					<form method="post" enctype="multipart/form-data"  action="updateExhi.php"  class="exhiDetail" id="exhiDetail<?php echo $detail['exhiNo']; ?>" >
						<td><?php echo $detail['exhiNo']; ?></td>
						<td><?php echo $detail['orderNo']; ?></td>
						<td><?php echo $detail['memName']; ?></td>
						<td>
							<input type="text" id="exhiName" name="exhiName" value="<?php echo $detail['exhiName']; ?>">
						</td>
						<td>
							<input type="date" id="startDate" name="startDate" value="<?php echo $detail['startDate']; ?>">
						</td>
						<td>
							<input type="date" id="endDate" name="endDate" value="<?php echo $detail['endDate']; ?>">
						</td>
						<td>
							<textarea id="instro" name="instro" form='exhiDetail<?php echo $detail['exhiNo']; ?>' cols="20" rows="10"><?php echo $detail['instro']; ?></textarea>
						</td>
						<td>
							<img src="../img/exhibition/<?php echo $detail['url'];?>" alt="">
						</td>
						<td>
							<input name="exhiNo" type="hidden" value="<?php echo $detail['exhiNo']; ?>">
							<input name="ePic" type="file" id="Browse" >
							<input type="submit" value="送出" class="submit">
						</td>
					</form>
				</tr>
			
	<?php
		}
		}catch(PDOExeception $e){
			$e->getLine();
			$e->getMessage();
		}
	 ?>
				
			</table>



			<!-- <table class="second">
				<tr class="title">
					<td>照片名稱</td>
					<td>上傳照片</td>
				</tr>

				<tr class="content">
					<td> <input type="text"> </td>
					<td > <input multiple="multiple" type="file"
					id="Browse" /></td>
				</tr>
			</table>
			<button id="submit" onclick="">送出修改</button> -->

	</div>
	<div style="clear:both"></div>
	<script>
			// $(document).ready(function(){
			// 	$('.exhiDetail').on('submit',checkEmpty);
			// });
			function checkEmpty(e){
				e.preventDefault();
				thisId = $(this).attr('id');
				var detail=$(this).serializeArray();
				// alert(detail[0]['name']);
				// alert(detail[0]['value']);

				for(var i=0;i<4;i++){
					if(detail[i]['value']==null||detail[i]['value']==""){
						alert('展覽名稱，開始日期，結束日期不能為空值喔');
						return;
					}
				}//end of the checking null for
				var url='updateExhi.php?';
				for(var i=0;i<5;i++){
					url+=detail[i]['name']+'='+detail[i]['value']+'&';
				}//end of the enter url for;
				var pos = url.lastIndexOf('&');
				url=url.substring(0,pos);
				location.href=url;
			}
	</script>
<?php 
	require_once('sideBarBottom.php');
 ?>




