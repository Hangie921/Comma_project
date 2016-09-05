<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
	echo "你的帳號 : ",$_REQUEST["memId"],"<br>";
if(isset($_REQUEST["ability"])){
	echo "你的英文能力 : ";
	for($i=0;$i<count($_REQUEST["ability"]);$i++){
		echo $_REQUEST["ability"][$i],"<br>";
	}
}
echo "<br>";

if(isset($_REQUEST["specialty"])){
	echo "你的專長 : ";
	for($i=0;$i<count($_REQUEST["specialty"]);$i++){
		echo $_REQUEST["specialty"][$i],"<br>";
	}
}
?>
</body>
</html>