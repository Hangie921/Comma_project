var totalamount;
var subtotal;
var totaldays;
$(document).ready(function(){
    totalamount = document.getElementById("totalamount");
    subtotal = document.getElementById("subtotal").innerHTML;
    totaldays = document.getElementById('totaldays');
  $("#rightcalendar").click(function(){
    $(this).toggleClass("active"); 
  });

  $(".close").click(function(){
    $(".contact-information").bPopup().close();
    $(".ordernow-container").bPopup().close();
    $(".lightbox_bg").css("display", "none");
    $(".Map-wrapper").bPopup().close();
    $("body").css("overflow-y", "auto");  
  });

  $("#orderbtn").click(function(){

    $.post( "loginOrNot.php", function( data ) {
      if(data=="false"){
        alert("請先登入或註冊");
      }else{
        $(".ordernow-container").bPopup();
      }       
    });         
  });

  // $("#cancel").click(function(){
  //   $(".ordernow-container").bPopup().close();
  //   $("body").css("overflow-y", "auto");
  // });

  $("#preview").click(function(){
    $(".ordernow-container").bPopup().close();
    $(".orderbox2-container").bPopup();
  });

  $("#service").click(function(){
    $(".contact-information").bPopup();
  });

  $("#laststep").click(function(){
    $(".ordernow-container").bPopup();
  });

  $("#submit").click(function(){
    $(".r-success").bPopup();
  });

  var nownum = 1;//第一張
  $(".nav-circleslide .prev").click(function(){
    switch(nownum){
      case 1:
        $(".sImg img").attr("src", "img/site/1_004.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_003.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_001.jpg");
        nownum = 4;
        break;
      case 2:
        $(".sImg img").attr("src", "img/site/1_001.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_004.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_002.jpg");
        nownum = 1;
        break;
      case 3:
        $(".sImg img").attr("src", "img/site/1_002.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_001.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_003.jpg");
        nownum = 2;
        break;
      case 4:
        $(".sImg img").attr("src", "img/site/1_003.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_002.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_004.jpg");
        nownum =3;
        break;
    }
  });
  $(".nav-circleslide .next").click(function(){
    switch(nownum){
      case 1:
        $(".sImg img").attr("src", "img/site/1_002.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_001.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_003.jpg");
        nownum = 2;
        break;
      case 2:
        $(".sImg img").attr("src", "img/site/1_003.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_002.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_004.jpg");
        nownum = 3;
        break;
      case 3:
        $(".sImg img").attr("src", "img/site/1_004.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_003.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_001.jpg");
        nownum = 4;
        break;
      case 4:
        $(".sImg img").attr("src", "img/site/1_001.jpg");
        $(".nav-circleslide .prev div img").attr("src", "img/site/1_004.jpg");
        $(".nav-circleslide .next div img").attr("src", "img/site/1_002.jpg");
        nownum = 1;
        break;
    }

  });

  function addDays(theDate, days) {
      return new Date(theDate.getTime() + days*24*60*60*1000);
    }
  var mindate = addDays(new Date(), 7);
    $("input").blur(function(){
      var start = document.getElementById("startDate").value;
      var end = document.getElementById("endDate").value;
      if(start == "" || end == ""){
        return;
      }
      start = Date.parse(start);
      end = Date.parse(end);
      var difference = end - start; 
    // console.log( "start" , start)  ;
    // console.log( "end" , end)  ;
    // console.log( "difference" , difference)  ;
    // console.log( "subtotal" , subtotal)  ;
        if(start > end || start < new Date()){
          alert("請確認您的日期是否正確");
          return false;
      }else if(start < mindate){
          alert("請預約一個星期後的日期");
          return false;
      }else{
        var diffInDay = difference / (24*60*60*1000)+1;
      }
     totalamount.innerHTML=parseInt(subtotal)*diffInDay;
     document.getElementById("total2").value = parseInt(subtotal)*diffInDay;
     totaldays.value = parseInt(diffInDay);
    });

    $(".burger-cover").click(function(){
      $(this).toggleClass("on");
      $(".phone-content").slideToggle();
    });//burger-toggle
});//end of ready

function revealOnScroll() {
  var scrolled = $(window).scrollTop();
//boder的動畫
   $('.feedback-border').each(function() {
    var current = $(this), // 当前元素
      w_height = $(window).outerHeight(), //视窗高度
      offsetTop = current.offset().top; //当前元素离顶部的高度

    // 计算高度差（此处预留50是为了看效果）
    // 当元素进入视窗时，添加class
    if (scrolled + w_height - 50 > offsetTop) {
      current.addClass("borderAni");
      $(".comL").addClass("animated slideInLeft");
      $(".comR").addClass("animated slideInRight");

    } else {
      current.removeClass("borderAni");
      $(".comL").removeClass("animated slideInLeft");
      $(".comR").removeClass("animated slideInRight");
    }
  });
}

// function cancel_order(){
//   $('form').attr("onSubmit", "return false");
// }

function showMap(){
  $(".Map-wrapper").bPopup();

  var site_number = getQueryVariable("siteNo");//1, 2, 3, 4, 5, 6, 7, 8, 9, 10
  // alert(site_number);
  var siteLocX = [24.987754,25.042733,25.033335,25.083225,25.058112,25.041264,25.053919,24.995641,25.051643,25.106627];
  var siteLocY = [121.575602,121.521913,121.558278,121.521052,121.518267,121.565059,121.521798,121.559671,121.520144,121.516324];
  var latlng = new google.maps.LatLng(siteLocX[site_number-1], siteLocY[site_number-1]);
  var mapArea = document.getElementById("Map");
  var mapOptions = {
    zoom:14,
    center: latlng,
    zoomControl: true,
    streetViewControl: false,
      scaleControl: true,
      styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},
           {"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},
           {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
           {"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},
           {"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#00B589"}]},
           {"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},
           {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#00B589"}]},
           {"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
           {"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#00B589"}]},
           {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
           {"featureType":"water","elementType":"all","stylers":[{"color":"#606060"},{"visibility":"on"}]}
          ]
  };
  var map = new google.maps.Map(mapArea, mapOptions); 
  var marker = new google.maps.Marker({
    position:latlng,
    map : map
  });
}


[].slice.call( document.querySelectorAll('nav > a') ).forEach( function(el) {
  el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
});

$(window).on("scroll", revealOnScroll);


function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
}

function check(){
  if(document.orderForm.startDate.value==""){
    alert("請選擇出租日期");
    document.orderForm.startDate.focus();
    return false;
  }
  if(document.orderForm.endDate.value==""){
    alert("請選擇結束時間");
    document.orderForm.endDate.focus();
    return false;
  }
  if(document.orderForm.cdNum.value==""){
    alert("請填寫信用卡卡號");
    document.orderForm.cdNum.focus();
    return false;
  }
  if(document.orderForm.cdDue.value==""){
    alert("請填寫信用卡到期日");
    document.orderForm.cdDue.focus();
    return false;
  }
  if(document.orderForm.cdcheck.value==""){
    alert("請填寫檢查碼");
    document.orderForm.cdcheck.focus();
    return false;
  }
  return true;
}

// JavaScript Document