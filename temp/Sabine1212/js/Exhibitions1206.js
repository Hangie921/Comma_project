$(document).ready( function() {
      

	    $(".gallery").flipping_gallery({
	      enableScroll: true,
	      autoplay: 2000
	    });
	    
	    $(".next").click(function() {
	      $(".gallery").flipForward();
	      return false;
	    });
	    $(".prev").click(function() {
	      $(".gallery").flipBackward();
	      return false;
	    });




 var number = $('#number').val();
 var counter=1;
$('.dateTextContainer').hide();
$('.rightSide').hide();
$('#dateTextCont1').show();
$('#rightCont1').show();
     
	    var mousewheel = (/Firefox/i.test(navigator.userAgent)) ?
		"DOMMouseScroll" : "mousewheel";
		document.getElementsByClassName('gallery')[0].addEventListener(mousewheel,
        function (e) {
            if (e.wheelDelta > 0 || e.detail < 0){
            	// $(".circle:nth-child(2)").css("color", "#ffc600");
                if(counter!=1){
                  counter--;
                  $('.dateTextContainer').hide();
                  $('.rightSide').hide();
                  $('#dateTextCont'+counter).show();
                  $('#rightCont'+counter).show();
                }else{
                  counter=number;
                  $('.dateTextContainer').hide();
                  $('.rightSide').hide();
                  $('#dateTextCont'+counter).show();
                  $('#rightCont'+counter).show();

                }
                //滑輪往前
            }else{
                // $(".circle:nth-child(2)").css("color", "#red");
                if(counter!=number){
                  counter++;
                  $('.dateTextContainer').hide();
                  $('.rightSide').hide();
                  $('#dateTextCont'+counter).show();
                  $('#rightCont'+counter).show();
                }else{
                  counter=1;
                  $('.dateTextContainer').hide();
                  $('.rightSide').hide();
                  $('#dateTextCont'+counter).show();
                  $('#rightCont'+counter).show();

                }                
            }//滑輪往後
       }, false);

    
});