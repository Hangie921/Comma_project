<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/Assess_back.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>評論管理</title>
      <style>
            #showComment{
                  width: 20px;
                  height: 20px;
            }
            .submit{
              width: 100px;
            }
            .list th{
              letter-spacing:3px;
            }
      </style>
</head>
<?php 
      require_once('sideBarTop.php');
 ?>

	

	<div class="list">
		<div class="ad">評論管理</div>
			
			<div class="btnContainer">
                    <ul>
                        <?php 
                        $ary=array('荒野屋','紅磨坊','天龍國','影知森','木心坊','金澤寧','洞庭湖','目黑場','易牙居','任意門');
                            for($i=0;$i<10;$i++){
                                echo "<a href='Assess_back_single.php?siteNo=",$i+1,"'><li class='siteBtn' id='btn",$i+1,"'>",$ary[$i],"</li></a>";
                            }
                     ?>
                    </ul>
                </div>	<div style="clear:both"></div>
            <div class="content">
            	<table>
            		<tr>
            			<th class="number">會員編號</th>
            			<th>會員名稱</th>
            			<th>租約開始日期</th>
                  <th>租約結束日期</th>
            			<th>好感星星</th>
            			<th>評論內容</th>
            			<th>顯示/隱藏</th>
            		</tr>
                        <?php 
                        try {
                              $sql="select o.orderNo, o.member,m.memName,o.startDate,o.endDate,o.stars,o.comment,o.showComment from commaorder o join member m on o.member=m.memNo where o.siteNo = ".$_REQUEST['siteNo'];
                              $statement=$pdo->query($sql);
                                    while($detail=$statement->fetch(PDO::FETCH_ASSOC)){
                        ?>
                              <tr><form action="updateComment.php">
                                    <td><?php echo $detail['member']; ?></td>
                                    <td><?php echo $detail['memName']; ?></td>
                                    <td><?php echo $detail['startDate']; ?></td>
                                    <td><?php echo $detail['endDate']; ?></td>
                                    <td><?php echo $detail['stars']!=null ? $detail['stars']:'無'; ?></td>
                                    <td><?php echo $detail['comment']!=null ? $detail['comment']:'無'; ?></td>
                                    <td>
                                          <?php if ($detail['showComment']){
                                                      echo "<input type='checkbox' id='showComment' name='showComment' value='1' checked>";
                                                }else{
                                                      echo "<input type='checkbox' id='showComment' name='showComment' value='1' >";
                                                      } ?>
                                          
                                          <input type="hidden" name="orderNo" value=" <?php echo $detail['orderNo']; ?>">
                                          <input type="hidden" name="siteNo" value="<?php echo $_REQUEST['siteNo']; ?>">        
                                          <input type="submit" class="submit" value="修改">
                                    </td>
                                    </form>
                              </tr>               
                        <?php  
                                    }//end of the while
                        } catch (PDOExection $e) {
                              $e->getLine();
                              $e->getMessage();                        
                        }
                         ?>
            		

            	</table>
            	<div class="btnContainer">
            	</div>
            <?php 
                echo "<script>$('#btn".$_REQUEST['siteNo']."').css({'backgroundColor':'#000','color':'#fff'});</script>"
             ?>
            </div>

<?php 
      require_once('sideBarBottom.php');
 ?>