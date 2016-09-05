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
$total=0;
for($i=1;$total<$number;){
	{
	$total+=$i;
	}
   echo "<tr>","<td>",$total,"</td>","</tr>";
    }   

?>

</table>
</body>
</html>