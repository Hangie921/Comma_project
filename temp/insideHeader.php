<?php echo "<script>var where='",$_SESSION['where'],"';</script>"; ?>
<div class="header">
	<div class="logo"><a href="index_front.php"><img src="img/logo_white.png" width="90" height="75"></a></div>
	<div class="menu-container">
		<a href="exhibitions.php"><div class="menu"><span class="m" id="exhibition">展覽資訊</span></div></a>
		<a href="SiteCategory.php" id="ordera"><div class="menu"><span class="m" id="place">場地種類</span></div></a>
		<a href="calendar.php"><div class="menu"><span class="m" id="order">瀏覽檔期</span></div></a>
		<a href="qa.php"><div class="menu"><span class="m" >Q & A</span></div></a>
	</div>
 	

<!-- =========================================================== -->
	<?php 
	if(isset($_SESSION['memEmail'])){
	echo "<div class='login'><a href='memberArea.php'><img id='personal' src='".$_SESSION['memPic']."' title='會員中心'></a>
		<div id='logout_text'><a href='logout.php'>登出</a></div>
		</div>";
	}else{
	echo "<div class='login'><img id='defaultPic' src='img/signup.png' alt=''>
		<div id='login_text'>登入/註冊</div>
		</div>";
	}
?>

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

<!-- ============================================================================= -->
	<div class="burger-cover">
		<ul>
			<li class="bur top"></li>
			<li class="bur middle"></li>
			<li class="bur bottom"></li>
		</ul>
	</div>
	<div class="phone-content">
		<a href="index_front.php"><div class="box" id="index">首頁</div></a>
		<a href="exhibitions.php"><div class="box" id="exhibition">展覽資訊</div></a>
		<a href="SiteCategory.php"><div class="box" id="place">場地種類</div></a>
		<a href="calendar.php"><div class="box" id="calendar">瀏覽檔期</div></a>
		<a href="qa.php"><div class="box" id="qa">Q & A</div></a>
		
		<?php 
		if(isset($_SESSION['memEmail'])!=null){
			echo "<a href='memberArea.php'><div class='box' id='memberarea'>會員中心</div></a><a href='logout.php'><div class='box' id='mobilelogout'>登出</div></a>";
		}else{
			echo "<div class='box' id='mobilelogin'>登入 / 註冊</div>";
		}
		
		?>

	</div>
</div>

<!-- ================================ -->

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
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
					   location.href= where;
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


//mobile menu
	// $(".burger-cover").click(function(){
 //  		$(this).toggleClass("on");
 //  		$(".phone-content").slideToggle();
 //  	});//burger-toggle
</script>