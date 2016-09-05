
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/space_01_date.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>檔期管理</title>
    <style>
        .booked{
            color:#aaa;
        }
        .today{
            background-color:yellow;
        }
    </style>
    
</head>

<?php require_once('sideBarTop.php'); ?>
<script>
    var detailStr = '<?php echo  $_SESSION['detail']; ?>';
    var detail = JSON.parse(detailStr);
    //for( var i =0; i< detail.length; i++){
        
    //}
    </script>
        <div class="list">
            <div class="ad">檔期瀏覽</div>
                
                <div class="btnContainer">
                    <ul>
                         <?php 
                        $ary=array('荒野屋','紅磨坊','天龍國','影知森','木心坊','金澤寧','洞庭湖','目黑場','易牙居','任意門');
                            for($i=0;$i<10;$i++){
                                echo "<a href='getSiteDate.php?siteNo=",$i+1,"'><li class='siteBtn' id='btn",$i+1,"'>",$ary[$i],"</li></a>";
                            }
                     ?>
                    </ul>
                </div>
                <div class="content">
                    <div id="calender">
                    <button id="prevMonth">上個月</button>
                    <button id="nextMonth">下個月</button>
                        <script src="js/calender.js">
                        </script>

                    </div>
                
                </div>
            
        </div>
        <div style="clear:both"></div>

<?php 
    echo "<script>$('#btn'+",$_REQUEST['siteNo'],").css({'backgroundColor':'#000','color':'#fff'});</script>";
require_once('sideBarBottom.php'); 
?>