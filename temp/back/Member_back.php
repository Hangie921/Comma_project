<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/Member_back.css">
	<title>會員管理</title>
</head>
<?php require_once('sideBarTop.php'); ?>


	<div class="list">
		<div class="ad">會員查詢</div>
			<div class="searchBar">
				<ul>
					<li>會員編號 <input type="text" id="memNo"> </li><li>會員名字 <input type="text" id="memName"> </li><li><button id="submit" onclick="search()">搜尋</button> </li>
				</ul>
			</div>
			<table class="top">
				<tr class="title">
					<th class="number">會員編號</th>
					<th>會員名稱</th>
					<th>會員帳號</th>
					<th>會員密碼</th>
					<th>聯絡電話</th>
					<th>頭像路徑</th>
				</tr>
<?php 
	try {
		require_once('../connectComma_PDO.php');
		if(isset($_REQUEST['memNo'])&& $_REQUEST['memNo']!=null||isset($_REQUEST['memName'])&&$_REQUEST['memName']!=null){
			$sql='select * from member where memNo=:memNo or memName=:memName';
			$statement=$pdo->prepare($sql);
			$statement->bindParam(':memNo',$_REQUEST['memNo']);
			$statement->bindParam(':memName',$_REQUEST['memName']);
			$statement->execute();
		}else{
			$sql='select * from member';
			$statement=$pdo->query($sql);
		}
		while($detail=$statement->fetch(PDO::FETCH_ASSOC)){

?>
				<tr class="content">
					<td><?php echo $detail['memNo']; ?></td>
					<td><?php echo $detail['memName']; ?></td>
					<td><?php echo $detail['memEmail']; ?></td>
					<td><?php echo $detail['password']; ?></td>
					<td><?php echo $detail['phone']; ?></td>
					<td><?php echo $detail['memPic']; ?></td>
				</tr>
<?php
		}

	} catch (PDOException $e) {
		$e->getLine();
		$e->getMessage();
	}
 ?>
			</table>
			
	</div>

	<div style="clear:both"></div>
	<script>
	function search(){
		var memName = document.getElementById('memName').value;
		var memNo = document.getElementById('memNo').value;
		location.href='Member_back.php?memNo='+memNo+'&memName='+memName;
	}
	</script>
<?php require_once('sideBarBottom.php'); ?>