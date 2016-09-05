<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table border="1" align="center">
<h2 align="center" style="color:#F66">好媒媒班級通訊錄</h2>
<?php
$array1 = array( "number" => "94951001",
                 "name" => "黃一丁",
				 "tel" => "0911000333",
				 "address" => "中壢市中大路1號");
				 
$array2 = array( "number" => "94951002",
                 "name" => "劉二毛",
				 "tel" => "0922999887",
				 "address" => "高雄市中山路2號");
				 
$array3 = array( "number" => "94951003",
                 "name" => "張大化",
				 "tel" => "0933555779",
				 "address" => "台北市師大路3號");

echo "<tr bgcolor='#FFCC99'> <th> 學號 </th> <th> 姓名 </th> <th> 電話 </th> <th> 地址 </th> </tr>";
echo "<tr> <td> $array1[number] </td> <td> $array1[name] 
           <td> $array1[tel] </td> <td> $array1[address] </tr>";
		   
echo "<tr> <td> $array2[number] </td> <td> $array2[name] 
           <td> $array2[tel] </td> <td> $array2[address] </tr>";

echo "<tr> <td> $array3[number] </td> <td> $array3[name] 
           <td> $array3[tel] </td> <td> $array3[address] </tr>";

				 

?>
</table>
</body>
</html>