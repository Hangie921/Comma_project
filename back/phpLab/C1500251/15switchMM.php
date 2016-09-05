<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center">
<?php
$number=$_REQUEST["number"];
$day="0";
$a="0";
if($number == 1 || $number == 3 || $number == 5 ||$number == 7 || $number == 8 ||$number == 10 ||$number == 12)
  {$day="1";}
  
elseif($number == 2)
      {$day="2";}
	  
else	  
  {$day="3";}

  
  switch($day)
	
	{case "1":
	  $a=31 ;
	  break;
	 case "2":
	  $a=28;
	  break;
	 case "3":
	  $a=30;
	  break;
	}
	echo "<tr><td>月</td><td>$number</td></tr>";
	echo "<tr><td>天數</td><td>$a</td></tr>";
?>
</table>
</body>
</html>
