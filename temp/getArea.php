<?php
try{
  require_once("connectComma_PDO.php");
  $sql = "select * from site where 1";
  if( $_REQUEST["price"] != 0 ){
    $sql = $sql . " and price between {$_REQUEST["price"]} "; 
  }
  
  if( $_REQUEST["area"] != "0" ){
    $sql = $sql . " and area like '%{$_REQUEST["area"]}%' "; 
  }   
  
  if( $_REQUEST["size"] != 0 ){
    $sql = $sql . " and size between {$_REQUEST["size"]} "; 
  }

  $site = $pdo->query( $sql );
  
  if( $site->rowCount() == 0 ){
    echo "not found~";
  }else{
	  $count=0;
    while($row = $site->fetch(PDO::FETCH_ASSOC)) {
		$picSql = "select url from sitepic where siteNo = {$row["siteNo"]}";
		$pic = $pdo->query( $picSql );
		$picRow = $pic->fetch(PDO::FETCH_ASSOC);
		?>
        <div class="space <?php echo $count%2==0? "spaceA" : "spaceB";?>">
            <div class="site<?php echo $count%2==0? "site1" : "site2";?>">
            <h2><?php echo $row["siteName"]?></h2>
            <div class="pic<?php echo $count%2==0? "pic1" : "pic2";?>"><img src="<?php echo $picRow["url"]?>"></div>
            <div class="headinfo<?php echo $count%2==0? "headinfo1" : "headinfo2";?>"><?php echo $row["siteEgName"]?></div>
	        </div>
            <div class="siteinfo<?php echo $count%2==0? "siteinfo1" : "siteinfo2";?>">
               <div class="desw<?php echo $count%2==0? "desw1" : "desw2";?>"><?php echo $row["instro"]?></div>
            </div>
		</div>
      
<?php
    $count++;
    }
       }	
}catch(PDOException $e){

  echo 'Message:'.$e->getMessage();
}
?>