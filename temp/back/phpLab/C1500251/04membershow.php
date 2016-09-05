<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1">
<?php
echo "<tr>","<td>","姓名:","</td>","<td>",$_GET["memName"],"</td>","</tr>";
echo "<tr>","<td>","帳號:","</td>","<td>",$_GET["memId"],"</td>","</tr>";
echo "<tr>","<td>","密碼:","</td>","<td>",$_GET["memPsw"],"</td>","</tr>";
echo "<tr>","<td>","e-mail:","</td>","<td>",$_GET["email"],"</td>","</tr>";
echo "<tr>","<td>","性別:","</td>","<td>",$_GET["sex"],"</td>","</tr>";
echo "<tr>","<td>","生日:","</td>","<td>",$_GET["birthday"],"</td>","</tr>";
echo "<tr>","<td>","連絡電話:","</td>","<td>",$_GET["tel"],"</td>","</tr>";
?>
</table>
</body>
</html>