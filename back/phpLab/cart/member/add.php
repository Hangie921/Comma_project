<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新增會員</title>
</head>
<body>
	
	<h2 align="center">會員資料管理系統-新增會員</h2>
	<p align="center"><a href="data.php">回主頁</a></p>
	<form action="addToDb.php" method="get">
	<table align="center" border="1">
		<tr>
			<td>會員帳號：</td>
			<td><input type="text" name="memId" ></td>
		</tr>
		<tr>
			<td>會員密碼：</td>
			<td><input type="text" name="memPsw"></td>
		</tr>
		<tr>
			<td>會員名字：</td>
			<td><input type="text" name="memName"></td>
		</tr>
		<tr>
			<td>Email：</td>
			<td><input type="email"></td>
		</tr>
		<tr>
			<td>性別：</td>
			<td>男<input type="radio" value="1" name="sex">女<input type="radio" value="0" name="sex" checked></td>
		</tr>
		<tr>
			<td>生日：</td>
			<td><input type="text" name="birthday"></td>
		</tr>
		<tr>
			<td>電話：</td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="reset" value="清除重寫"><input type="submit" value="確認送出"></td>
		</tr>
	</table>
	</form>
</body>
</html>