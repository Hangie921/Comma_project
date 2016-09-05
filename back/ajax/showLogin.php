<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#login{
			display:none;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<span id="spanLogin">登入</span><br>
	<table id="login">
		<tr>
			<td>帳號: <input type="text" id="id" > </td>
		</tr>
		<tr>
			<td>密碼: <input type="password" id="psw"></td>
		</tr>
		<tr>
			<td>
				<input type="button" value="登入" onclick="showLogin()">
			</td>
		</tr>
	</table>

	<script>
		function checkId(){
			var xhr = new XMLHttpRequest();
			var url = "GetResponseText.php?memId="+document.getElementById('id').value+'?memPsw='+document.getElementById('psw').value;
			xhr.open("Get",url,true);
			xhr.send(null);
		}
		window.onload=function(){
			document.getElementById('spanLogin').onclick=function(){
				document.getElementById('login').style.display="";
			}
		}
	</script>








</body>
</html>