$(document).ready(function(){
	$(".scrollbar").slider();

	$("#calendar").click(function(){
		$(this).toggleClass("active"); 
	});

	$(".close").click(function(){
		$(".contact-information").bPopup().close();
		$(".orderbox-container").bPopup().close();
		$(".orderbox2-container").bPopup().close();
		$("body").css("overflow-y", "auto");		
	})
	$("#orderbtn").click(function(){
		$(".orderbox-container").bPopup();
		$("body").css("overflow", "hidden");
	});

	$("#cancel").click(function(){
		$(".orderbox-container").bPopup().close();
		$("body").css("overflow-y", "auto");
	});

	$("#preview").click(function(){
		$(".orderbox2-container").bPopup();
		$(".orderbox-container").bPopup().close();
	});

	$("#service").click(function(){
		$(".contact-information").bPopup();
		$("body").css("overflow", "hidden");
	});

	$("#laststep").click(function(){
		$(".orderbox2-container").bPopup().close();
		$(".orderbox-container").bPopup();
	});
});//end of ready


