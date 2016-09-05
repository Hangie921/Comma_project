

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/site_back.css">
    <title>場地管理</title>
</head>

<?php require_once('sideBarTop.php'); ?>

        <div class="list">
            <div class="ad">場地管理</div>
                
                <div class="btnContainer">
                    <ul>
                    <?php 
                    $ary=array('荒野屋','紅磨坊','天龍國','影知森','木心坊','金澤寧','洞庭湖','目黑場','易牙居','任意門');
                     for($i=0;$i<10;$i++){
                        echo "<a href='space01_back.php?siteNo=",$i+1,"'><li class='siteBtn'>",$ary[$i],"</li></a>";
                     }
                     ?>
                        

                    </ul>
                </div>
            <h3 class="pick">請選擇場地</h3>
            </div>
            
        <div style="clear:both"></div>
    <?php require_once('sideBarBottom.php'); ?>
