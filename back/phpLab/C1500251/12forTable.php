<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center" width="100">
<?php
$number=$_REQUEST["number"];
$i=1;
for($i=1;$i<=$number;$i++)
	if ($i %2 ==1)
   echo "<tr>","<td>",$i,"</td>";
	elseif ($i %2 ==0)
   echo "<td>",$i,"</td>","</tr>";   
?>

</table>
</body>
</html>