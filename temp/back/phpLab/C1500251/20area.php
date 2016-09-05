<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="100" style="text-align:center">
<?php
function circle($a)
  {$b=$a*$a*3.14159;
  return $b;
  }
 echo "<tr><td>","圓面積","</td></tr>","<br />";
 echo "<tr><td>",circle($_REQUEST["number"]),"</td></tr>";
 
 circle($_REQUEST["number"])
?>
</table>
</body>
</html>