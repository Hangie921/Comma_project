<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="100" style="text-align:center">
<?php
function sum1toN()
  {$total=0;
 for($i=1;$i<=$_REQUEST["number"];$i++)
   $total+=$i;
  return $total;}
  
$total=sum1toN();
  
 echo "<tr><td>","總和","</td></tr>";
 echo "<tr><td>",$total,"</td></tr>";
 
 sum1toN($_REQUEST["number"])
?>
</table>

</body>
</html>