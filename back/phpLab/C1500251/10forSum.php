<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$number=$_REQUEST["number"];
$total1=0;
$total2=0;
$total3=0;

for($i=1;$i<=$number;$i++)
    {
	$total1=$total1+$i;
	}
   echo "總和",$total1,"<br/>";
   
for($i=1;$i<=$number;$i+2)
   {
   $total2+=$i;
   }
   echo "奇數和:",$total2,"<br/>";
   
for($i=2;$i<=$number;$i+2)
    if($number%2 == 0)
	{
	 $total3+=$i;
	}
   echo "偶數和:",$total3,"<br/>"; 
   
?>


</body>
</html>