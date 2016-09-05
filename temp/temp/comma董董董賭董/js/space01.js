var totalamount;
var subtotal;

$(document).ready(function(){
    totalamount = document.getElementById("totalamount");
    subtotal = document.getElementById("subtotal").innerHTML;
	$("#rightcalendar").click(function(){
		$(this).toggleClass("active"); 
	});

	$(".close").click(function(){
		$(".contact-information").bPopup().close();
		$(".orderbox-container").bPopup().close();
		$(".lightbox_bg").css("display", "none");
		$(".orderbox2-container").css("display", "none");
		$(".Map-wrapper").bPopup().close();
		$("body").css("overflow-y", "auto");	
	})
	$("#orderbtn").click(function(){
		 $.post( "loginOrNot.php", function( data ) {
		 	if(data=="false"){
		 		alert("login");
		 	}else{
				$(".orderbox-container").bPopup();
			}  			
		});  				
	});

	$("#cancel").click(function(){
		$(".orderbox-container").bPopup().close();
		$("body").css("overflow-y", "auto");
	});

	$("#preview").click(function(){
		$(".orderbox-container").bPopup().close();
		$(".orderbox2-container").bPopup();
	});

	$("#service").click(function(){
		$(".contact-information").bPopup();
	});

	$("#laststep").click(function(){
		$(".orderbox-container").bPopup();
	});

	$("#submit").click(function(){
		$(".r-success").bPopup();
	});

	var nownum = 1;
	var nowimg = $(".sImg img").attr("src", "img/"+nownum+".jpg");//一開始是
	// var numimg = $(".sImg img").attr("id").substr(7);//img id的數字
	$(".nav-circleslide .prev").click(function(){
		// alert(nownum);
		if( nownum == 1){
			$(".sImg img").attr("src", "img/4.jpg");
			nownum = 4;
		}else{
			nownum-=1;
			$(".sImg img").attr("src", "img/"+nownum+".jpg");
		}
	});
	$(".nav-circleslide .next").click(function(){
		// alert(nownum);
		if( nownum == 4){
			$(".sImg img").attr("src", "img/1.jpg");
			nownum = 1;
		}else{
			nownum+=1;
			$(".sImg img").attr("src", "img/"+nownum+".jpg");
		}
	});

	function addDays(theDate, days) {
    	return new Date(theDate.getTime() + days*24*60*60*1000);
  	}
 	var mindate = addDays(new Date(), 7);
  	$("input").blur(function(){
  		var start = document.getElementById("startTime").value;
    	var end = document.getElementById("endTime").value;
  		if(start == "" || end == ""){
  			return;
  		}
    	start = Date.parse(start);
    	end = Date.parse(end);
    	var difference = end - start; 
    console.log( "start" , start) 	;
    console.log( "end" , end) 	;
    console.log( "difference" , difference) 	;
    console.log( "subtotal" , subtotal) 	;
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
    if (scrolled + w_height - 100 > offsetTop) {
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
function cancel_order(){
	$('form').attr("onSubmit", "return false");
}

function showMap(){
	$(".Map-wrapper").bPopup();
	var latlng = new google.maps.LatLng(25.035644, 121.545520);
	var mapArea = document.getElementById("Map");
	var mapOptions = {
		zoom:12,
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

