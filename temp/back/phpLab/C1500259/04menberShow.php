<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
  echo"<table width='450' border='1' cellspacing='0 'cellpadding='0'>
     <caption>您的會員資料為</caption>
     <tr><td width='226'>姓名</td><td>$_GET[memName]</td></tr>
     <tr><td>帳號</td><td>$_GET[memId]</td></tr>
     <tr><td>密碼</td><td>$_GET[memPsw]</td></tr>
     <tr><td>e-mail</td><td>$_GET[email]</td></tr>
     <tr><td>性別</td><td>$_GET[sex]</td></tr>
     <tr><td>生日</td><td>$_GET[birthday]</td></tr>
     <tr><td>連絡電話</td><td>$_GET[tel]</td></tr>
       </table>";
?>
</body>
</html>