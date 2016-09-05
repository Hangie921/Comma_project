// $(document).ready(function(){
// 	$('td').click(function(){
// 		$(this).css('background', #777);
// 	});
	
// });


function doFirst(){
	cal_before = document.getElementById('cal-before');
	cal_after = document.getElementById('cal-after');
	month = document.getElementById('month');
	td = document.getElementsByTagName('td');
//========================================加了這段而已	
	$('.calendar td').click(function(){
		theDate = $(this).text();
		$('.date').html(theDate);
		
		$(this).css('background','red');
		$('.calendar td').not(this).css('background','#fff');
	});
//========================================	
	cal_before.addEventListener("click", monthBefore, false);
	cal_after.addEventListener("click", monthAfter, false);
//	td.addEventListener("click", changeBg, false);
	td.onclick =changeBg; 
}
function theDate(){
	
}

function monthBefore(){
	month.innerHTML = 10;
}

function monthAfter(){
	month.innerHTML = 12;
}
function changeBg(){
	td.style.fontSize ="25px";
}

window.addEventListener("load", doFirst, false);