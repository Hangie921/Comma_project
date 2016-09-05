<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<table>
<?php
$month = $_REQUEST["month"];
$day= 0;
echo "<table border='1'><tr><td>";
if($month<=12){
	if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12){
		$day = 1;
		}
	elseif($month==2){
		$day = 2;
		}
	else{
		$day =3;
		}//end inner if
}
else{
	echo "教你輸入月份你是看不懂中文尼!!";
	}
switch($day){
	case'1':
	echo "31";	
	break;
	case'2':
	echo "28";
	break;
	case'3':
	echo "30";
	break;
		}//end of the switch
echo "</td></tr></table>";
?>
</table>
</body>
</html>