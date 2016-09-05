<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>你的銷價金額為</title>
</head>

<body>
<?php 

$a=$_GET["price"];
$b=$_GET["amount"];
$c=$a*$b;

echo"<table width='400' height='200' border='1' cellpadding='0 'cellspacing='0'>
   <caption>計價</caption>
  <tr>
    <td>單價:</td>
    <td>$a</td>
  </tr>
  <tr>
    <td>數量:</td>
    <td>$b</td>
  </tr>
  <tr>
    <td>小計:</td>
    <td>$c</td>
  </tr>
</table>";


?>
</body>
</html>