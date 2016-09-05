<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/Order_back.css">
	<title>訂單管理</title>
</head>
<?php require_once('sideBarTop.php'); ?>

	

	<div class="list">
		<div class="ad">訂單管理</div>
			
			<div class="signback">
                <div class="tableContainer">
                <h2>進行中訂單</h2>
                	<table class="top">
                		<tr>
                            <th class="number">訂單編號</th>
                			<th>場地名稱</th>
                			<th>會員名稱</th>
                			<th>處理員工</th>
                			<th>下訂時間</th>
                			<th>總天數</th>
                			<th>成交價</th>
                            <th>租約日期</th>
                            <th>結束日期</th>
                            <th>取消原因</th>
                			<th>訂單狀態</td>
                            <th>評論</th>
                		</tr>
                    <?php 
                     $a = array('未付款','已付款','使用中','未退款','已退款','未評論','已取消');
                            try {
                                require_once('../connectComma_PDO.php');
                                $sql="select o.orderNo, s.siteName,m.memName,e.name ,o.orderTime ,o.comment,o.totalDays ,o.totalPrice,o.startDate,o.endDate,o.cancelReason,o.status from commaorder o join site s on o.siteNo=s.siteNo JOIN member m on o.member=m.memNo JOIN employee e on o.empNo = e.empNo where o.status=3 or o.status=2 or o.status=1 order by o.orderNo";
                                $statement= $pdo->query($sql);
                                while($detail = $statement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                         
                		<tr class="content">
                			<td><?php echo $detail['orderNo']; ?></td>
                			<td><?php echo $detail['siteName']; ?></td>
                			<td><?php echo $detail['memName']; ?></td>
                			<td><?php echo $detail['name']; ?></td>
                			<td><?php echo $detail['orderTime']; ?></td>
                			<td><?php echo $detail['totalDays']; ?></td>
                			<td><?php echo $detail['totalPrice']; ?></td>
                            <td><?php echo $detail['startDate']; ?></td>
                            <td><?php echo $detail['endDate']; ?></td>
                            <td><?php echo $detail['cancelReason']; ?></td>
                            <td><form action='updateOrder.php' >
                                <select name='orderStatus' class='currentOrderStatus' ><?php 
                                    for($i=0;$i<=6;$i++){
                                        if($i+1!=$detail['status']){
                                            echo "<option value='",$i+1,"'>",$a[$i],"</option>";
                                        }else{
                                            echo "<option value='",$i+1,"' selected>",$a[$i],"</option>";
                                        }//end of the if
                                    }
                                ?></select>
                                <input type="hidden" name='orderNo' value="<?php echo $detail['orderNo']; ?>">
                                <input type="submit" value='送出' class="update submit">
                                </form>
                                </td>
                            <td><?php echo $detail['comment']; ?></td>
                		</tr>
                    <?php           
                                }//end of the while
                    ?>

                	</table>
                    <h2>歷史訂單</h2>
                    <table class="top" id="historyOrder">
                        <tr>
                            <th class="number">訂單編號</th>
                            <th>場地名稱</th>
                            <th>會員名稱</th>
                            <th>處理員工</th>
                            <th>下訂時間</th>
                            <th>總天數</th>
                            <th>成交價</th>
                            <th>租約日期</th>
                            <th>結束日期</th>
                            <th>取消原因</th>
                            <th>訂單狀態</th>
                            <th>評論</th>
                        </tr>
                    <?php 
                       $sql="select o.orderNo, s.siteName,m.memName,e.name ,o.orderTime ,o.comment,o.totalDays ,o.totalPrice,o.startDate,o.endDate,o.cancelReason,o.status from commaorder o join site s on o.siteNo=s.siteNo JOIN member m on o.member=m.memNo JOIN employee e on o.empNo = e.empNo where o.status=4 or o.status=5 or o.status=6 or o.status=7 order by o.orderNo";
                                $statement= $pdo->query($sql);
                                while($detail = $statement->fetch(PDO::FETCH_ASSOC)){
                     ?>
                        <tr class="content">
                            <td><?php echo $detail['orderNo']; ?></td>
                            <td><?php echo $detail['siteName']; ?></td>
                            <td><?php echo $detail['memName']; ?></td>
                            <td><?php echo $detail['name']; ?></td>
                            <td><?php echo $detail['orderTime']; ?></td>
                            <td><?php echo $detail['totalDays']; ?></td>
                            <td><?php echo $detail['totalPrice']; ?></td>
                            <td><?php echo $detail['startDate']; ?></td>
                            <td><?php echo $detail['endDate']; ?></td>
                            <td><?php echo $detail['cancelReason']; ?></td>
                            <td>
                                <form action='updateOrder.php'>
                                    <select name='orderStatus' class='historyOrderStatus'><?php  
                                        for($i=0;$i<=6;$i++){
                                            if($i+1!=$detail['status']){
                                                echo "<option value='",$i+1,"'>",$a[$i],"</option>";
                                            }else{
                                                echo "<option value='",$i+1,"' selected>",$a[$i],"</option>";
                                            }//end of the if
                                        }//end of the for
                                    ?></select>
                                    <input type="hidden" name='orderNo' value="<?php echo $detail['orderNo']; ?>">
                                    <input type="submit" value='送出' class="update submit">
                                </form>
                            </td>
                            <td><?php echo $detail['comment']; ?></td>
                        </tr>

                    <?php 
                    }//end of the second while           
                            } catch (PDOException $e) {
                                $e->getLine();
                                $e->getMessage();
                            }
                         ?>
                    </table>
                </div>
            </div>

	</div>
	<div style="clear:both"></div>
    <script>
        var select = document.getElementsByTagName('select');
        var cur = document.getElementsByClassName('currentOrderStatus');
        var old = document.getElementsByClassName('historyOrderStatus');
        var update= document.getElementsByClassName('update');
        // update.addEventListener('click',checkVal,false);
        for(var i =0;i<select.length;i++){
            select[i].addEventListener('change',function(){
                this.style.backgroundColor='#f00';
                for(var i= 0;i<old.length;i++){
                if(old[i].value<4){
                    alert('歷史訂單不能再改成使用中,未付款,已付款');
                    return;
                }
            }
            },false);
        }
        //if option changed, turn the bg into red
       
    </script>
<?php require_once('sideBarBottom.php'); ?>






