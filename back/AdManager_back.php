<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/AdManager_back.css">
	<title>廣告管理</title>
	<script>
	function uploadBanner(){
		var picNo = document.querySelector('input[name="pic"]:checked').value;
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange=stateChanged;
		var url = 'updateSitePic.php?picNo='+picNo;
		xhr.open('Get',url,true);
		xhr.send(null);
	}
	function stateChanged(){
			if(xhr.readyState == 4){
				if(xhr.status == 200){
					if(xhr.responseText == "success"){
						location.href='AdManager_back.php'
					}else{
						alert(xhr.responseText);
					}//end of the responseText
				}else {
					alert(xhr.status);
				}//end of the status if

			}//end of readyState if 
		}

	</script>
</head>

<?php
	require_once('sideBarTop.php');
?>
	
	<div class="list">
		<div class="ad">廣告管理</div>
			<table class="top">
				<tr class="title">
					<th>場地名稱</th>
					<th>照片路徑</th>
					<th>放入banner</th>
				</tr>
<?php
	try {
		require_once('../connectComma_PDO.php');
		$sql="select s.siteName, p.url, p.inBanner,p.no from site s join sitepic p on s.siteno=p.siteno group by p.url";
		$statement = $pdo->query($sql);
		while($pic = $statement->fetch(PDO::FETCH_ASSOC)){
?>
				<tr class="content">
					<td><?php echo $pic['siteName']; ?></td>
					<td><?php echo $pic['url']; ?></td>
					<td>
						<?php if($pic['inBanner']==1){
							echo "<input type=radio name='pic' value='",$pic['no'],"' checked>
								  ";
							}else{
							echo "<input type=radio name='pic' value='",$pic['no'],"'>";
							}
						 ?>
					</td>
				</tr>			

<?php
		};
	} catch (PDOException $e){
		echo $e->getMessage(),"<br>";
		echo $e->getLine();
	}
?>
		</table>
			<button class="submit" id="bannerChange" onclick="uploadBanner()">送出修改</button>


	</div>
	
	<?php
	require_once('sideBarBottom.php');
?>

