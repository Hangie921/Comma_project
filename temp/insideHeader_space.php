	<div class="header">
	<div class="logo"><a href="index_front.php"><img src="img/logo_white.png" width="90" height="75"></a></div>
	<div class="menu-container">
		<div class="menu"><span class="m" id="exhibition"><a href="exhibitions.php">展覽資訊</a></span></div>
		<div class="menu selected"><span class="m" id="place"><a href="SiteCategory.php" id="ordera">場地種類</a></span></div>
		<div class="menu"><span class="m" id="order"><a href="calendar.php">瀏覽檔期</a></span></div>
		<div class="menu"><span class="m" ><a href="qa.php">Q & A</a></span></div>
	</div>
 	

<!-- <div class="login"><img src="img/singup.jpg" height="50" width="50"><br/><span class="signup"><a href="#">登入 / 註冊</a></span></div> -->
<!-- =========================================================== -->

	<?php 
	if(isset($_SESSION['memEmail'])&& $_SESSION['memPic']!=null){

	echo "<div class='login'><img id='personal' src=",$_SESSION['memPic']," alt='會員中心'>
		<div id='logout_text'><a href='logout.php'>登出</a></div>
		</div>";
	}else{
	echo "<div class='login'><img id='defaultPic' src='img/singup.jpg' height='50' width='50' alt=''>
		<div id='login_text'>登入/註冊</div>
		</div>";
	}
?>
<!-- <div class="login"><img src="img/signup.png" alt="">
	<div id="login_text">登入/註冊</div>
</div> -->

	<div class="orderbox-container">
	<div class="cl"></div>
		<h3 id="roomname-order">會員註冊/登入</h3>
		<div class="orderbox">
			<div class="topinfo">
				<h4 id="memName1">註冊會員</h4>
				<ul>
					<li><span>姓名：</span><input type="text" id="name" name="memName"></li>
					<li><span>信箱：</span><input type="email" id="email" name="memEmail"></li>
					<li><span>密碼：</span><input type="password" id="pass01" name="psw1"></li>
					<li><span>再輸入密碼：</span><input type="password" id="pass02" name="psw2"></li>
					<li><span>電話：</span><input type="text" id="phoneNum" name="tel"></li>
				</ul>
				<div class="btns" style="margin-top:20px;">
				<!-- <button id="submit" onclick="submit()">註冊</button> -->
				<input class="submit" type="submit" id="submit" onclick="submit()" value="註冊" >
				</div>
				
			</div>
		
			<div class="circle1"></div>

			<div class="bottominfo">
				<h4 id="memName2">登入會員</h4>
				<ul>
					<li><span>信箱：</span>
					<input type="email" id="email1"></li>
					<li><span>密碼：</span>
					<input type="password" id="pass03"></li>
				</ul>
				
				<div class="btns" style="margin-top:20px;">
				<button id="login" onclick="login()">登入</button><br>
				<span id="Forgotpassword"><a href="javascript:void(0);">忘記密碼</a></span>	
				</div>	
			</div>		
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		
		$('#email').blur(function(){
			checkId($(this).val());
		});
		$('#pass02').blur(function(){
			if($('#pass01').val().length<6){
				alert('密碼要六位數以上喔');
				$('#pass01').focus().select();
			}
			else if($('#pass01').val()!='' && $('#pass01').val()!==$('#pass02').val()){
				alert('前後密碼不一致');
				$('#pass01').focus().select();
			}	
		});
		//check the number
		$('#email').blur(function(){
			var email = $(this).val();
			if(email.search('@') == -1 ){
				alert('Email格式不符');
			}
		});

		$('#tel').blur(function(){
			var num = $(this).val();
			if(num.search(/[^0-9]/) != -1 ){
				alert('電話號碼只有數字喔!');
				$(this).focus().select();
			}
		});
	});//end of the ready
	
	function checkId(id){
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function(){
			if( xhr.readyState == 4){
			   if( xhr.status == 200 ){
				   if( xhr.responseText != "Unused Email!"){
					   alert( 'Email已有人使用');
					   $('#email').focus();
				   }else{
				   	   
				   }

			   }else{
				   alert( xhr.status );
			   }//status
		   }//readyState
		};//end of the statechange

	   var memEmail = document.getElementById("email").value;
	   	   //產生json物件
	   var mem = { "memEmail" : memEmail}; 
       //將jsno物件轉成json字串,傳到server端 
	   var url = "checkId.php?mem=" + JSON.stringify(mem);
	   xhr.open("Get",url,true);
	   xhr.send(null);
	}

	function submit(){
		var memName = document.getElementById("name").value;
		var memEmail = document.getElementById("email").value;
		var memPsw1 = document.getElementById("pass01").value;
		var memPsw2 = document.getElementById("pass02").value;
		// var memPhone = $('#tel').val();
	    var memPhone = document.getElementById("phoneNum").value;
	    
	    if(memName=='' || memEmail==''|| memPsw1==''||memPsw2==''||memPhone==''){
	    	alert('所有欄位都要填喔!')
	    }else{
	    	xhr = new XMLHttpRequest();
	    	xhr.onreadystatechange = function(){
			if( xhr.readyState == 4){
			   if( xhr.status == 200 ){
				   if( xhr.responseText == ""){
					   alert('註冊成功');
					   location.href='index_front.php';
					   // document.getElementsByClassName('login')[0].innerHTML="<img src='singup.png'><div id='login_text'>會員中心</div>";
				   }else{
				   	   alert(xhr.responseText);
				   }

			   }else{
				   alert( xhr.status );
			   }//status
		   }//readyState
		};//end of the statechange
	    

		 //產生json物件
	    var mem = { "memEmail" : memEmail, "memPsw": memPsw1,"memName":memName,"memPhone":memPhone}; 
        //將jsno物件轉成json字串,傳到server端 
	    var url = "submit.php?mem=" + JSON.stringify(mem);
	    xhr.open("Get",url,true);
	    xhr.send(null);


	    }//end of the empty check 
	}//end of the submit()

	function login(){
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function (){

		   if( xhr.readyState == 4){
			   if( xhr.status == 200 ){
				   if( xhr.responseText == "error"){
					   alert( '帳號錯誤');
				   }else{
				   	   // var detail = JSON.parse(xhr.responseText);
					   // document.getElementsByClassName('login')[0].innerHTML="<img src="+detail.memPic+"><div id='login_text'>會員中心</div>";
					   location.href='index_front.php';
					   }
			   }else{
				   alert( xhr.status );
			   }//status
		   }//readyState
	   }//xhr_onreadystatechange
	
	   var memEmail = document.getElementById("email1").value;
	   var memPsw = document.getElementById("pass03").value;
	   //產生json物件
	   var mem = { "memEmail" : memEmail, "memPsw": memPsw}; 
       //將jsno物件轉成json字串,傳到server端 
	   var url = "login.php?mem=" + JSON.stringify(mem);
	   xhr.open("Get",url,true);
	   xhr.send(null);

	}//end of login()

</script>

<!-- ============================================================================= -->
	<div class="burger-cover">
		<ul>
			<li class="bur top"></li>
			<li class="bur middle"></li>
			<li class="bur bottom"></li>
		</ul>
	</div>

</div>
<div class="phone-content">
		<div class="box" id="index"><a href="index_front.php">首頁</a></div>
		<div class="box" id="exhibition"><a href="exhibitions.php">展覽資訊</a></div>
		<div class="box" id="place"><a href="SiteCategory.php">場地種類</a></div>
		<div class="box" id="calendar"><a href="calendar.php">瀏覽檔期</a></div>
		<div class="box" id="login">登入 / 註冊</div>
		<div class="box" id="logout">登出</div>
	</div>	
