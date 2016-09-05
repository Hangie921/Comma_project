<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/site_back.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>場地管理</title>
    <style>
    #address{
        width: 100%;
        height: 90%;
        font-size: 18px;
    }
    #size{
        width: 30%;
        font-size: 18px;
    }
    #price{
        width: 30%;
        font-size: 18px;
    }
    td{
        vertical-align:middle;
    }
    .equipSubmitBtn{
        width: 100px;
        font-size: 16px;
    }
    </style>
</head>

<?php require_once('sideBarTop.php'); ?>
        <div class="list">
            <div class="ad">場地管理</div>
                
                <div class="btnContainer">
                    <ul>
                    <?php 
                        $ary=array('荒野屋','紅磨坊','天龍國','影知森','木心坊','金澤寧','洞庭湖','目黑場','易牙居','任意門');
                            for($i=0;$i<10;$i++){
                                echo "<a href='space01_back.php?siteNo=",$i+1,"'><li class='siteBtn' id='btn",$i+1,"'>",$ary[$i],"</li></a>";
                            }
                     ?>
                    </ul>
                </div>
                <div class="content">
                    <form action="updateSiteInfo.php" id="siteManage">
                        <h3 class="pick">場地資料</h3>
                    <?php 
                        try {
                            require_once('../connectComma_PDO.php');
                            $sql='select * from site where siteNo= :siteNo';
                            $statement=$pdo->prepare($sql);
                            $statement->bindParam(':siteNo',$_REQUEST['siteNo']);
                            $statement->execute();
                            while($detail=$statement->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <table border="1" id="equipTable">
                            <tr>
                                <th>場地名稱</th>
                                <th>地址</th>
                            </tr>
                            <tr>
                               <td><?php echo $detail['siteName']; ?></td>
                               <td><input type="text" name="address" id="address" value="<?php echo $detail['address']; ?>"></td> 
                            </tr>
                        </table>

                        <table border="1" id="sizeTable">
                            <tr>
                                <th>坪數</th>
                                <th>上架/下架</th>
                            </tr>
                            <tr>
                                <td><input type="text" name='size' id="size" value="<?php echo $detail['size']; ?> ">   </td>
                                <td>
                                    <?php if($detail['status']==1){
                                        echo "上架<input name='status' type='radio' checked value='1'> 下架<input name='status' type='radio' value='0'>";
                                        }else{
                                        echo "上架<input name='status' type='radio' value='1'> 下架<input name='status' type='radio' value='0' checked>";    
                                        }
                                     ?>
                                </td>
                            </tr>
                        </table>
                        <table border="1" id="priceTable">
                            <tr>
                                <th>定價</th>
                                <th>介紹</th>
                            </tr>
                            <tr>
                                <td><input name="price" type="text" id="price" value="<?php echo $detail['price']; ?>">元</td>
                                <td><textarea form='siteManage' name="instro" id="instro" cols="30" rows="5"><?php echo $detail['instro']; ?></textarea></td>
                            </tr>
                            <input type="hidden" name="siteNo" value="<?php echo $_REQUEST['siteNo'];?>">
                        </table>
                        <input type="submit" class="submit" value="送出提交" id="siteSubmitBtn">
                        
                    </form>
                    <h3 class="pick">場地設備</h3>
                    
                        <table id="siteEquip">
                        <th>設備名稱</th>
                        <th>設備數量</th>
                        <th>操作</th>
                        <?php 

                               }//end of the while
                        $sqlEquip='select * from equipment where siteNo=:siteNo order by equipNo';
                        $statement=$pdo->prepare($sqlEquip);
                        $statement->bindParam(':siteNo',$_REQUEST['siteNo']);
                        $statement->execute();
                        while($equip=$statement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <tr>
                        <form action="updateEquip.php" id="equipManage">
                            <td>
                                <?php echo $equip['equipName']; ?>   
                            </td>
                            <td>
                               <input type="text" name="amount" value='<?php echo $equip['amount']; ?>'>
                            </td>
                            <input type="hidden" name="siteNo" value='<?php echo $_REQUEST['siteNo']; ?>'>
                            <input type="hidden" name="equipNo" value='<?php echo $equip['equipNo']; ?>'>
                            <td>  <input type="submit" class="submit equipSubmitBtn" value="送出提交" >
                        </td>
                        </form>
                        </tr>
                    <?php
                        }//end of the equipWhile

                        } catch (PDOException $e) {
                            $e->getLine();
                            $e->getMessage();
                        }
                         ?>
                        </table>
                      
                </div>
        </div>
            <?php 
                echo "<script>$('#btn".$_REQUEST['siteNo']."').css({'backgroundColor':'#000','color':'#fff'});</script>"
             ?>
        </div>
        <div style="clear:both"></div>
<?php require_once('sideBarBottom.php'); ?>

