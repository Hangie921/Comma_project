		//the order details from mySql
		//detail[0].startDate
		//detail[0].endDate
		var d = new Date();
		// document.getElementById('prevMonth').addEventListener('click',monthBackward(d),false);
		// document.getElementById('nextMonth').addEventListener('click',monthForward(d),false);		
		$('#prevMonth').click(function(){
			monthBackward(d);
		});
		$('#nextMonth').click(function(){
			monthForward(d);
		});
		printMonth(d);
		changeBg(detail,d);

	function monthForward(date){
		if(date.getMonth()!=11){
			date.setMonth(date.getMonth()+1);

		}else{
			date.setMonth(0);
			yearForward(date);
		}
		printMonth(date);
		changeBg(detail,date);
	}
	function monthBackward(date){
		if(date.getMonth()!=0){
			date.setMonth(date.getMonth()-1);
			printMonth(date);
		}else{
			date.setMonth(11);
			yearBackward(date);
		}
		changeBg(detail,date);
	}
	function yearForward(date){
		date.setFullYear(date.getFullYear()+1);
		printMonth(date);
		changeBg(detail,d);
	}
	function yearBackward(date){
		date.setFullYear(date.getFullYear()-1);
		printMonth(date);
		changeBg(detail,date);
	}
	function changeBg(detail,date){
		var e = date;
		var order={
				startMonth:'',
				endMonth:'',
				startDay:'',
				endDat:''
		}

		for(var i=0;i<detail.length;i++){//目前無法輸出跨月分的訂單
			order.startMonth=parseInt(detail[i].startDate.split('-',3)[1]);
			order.endMonth=parseInt(detail[i].endDate.split('-',3)[1]);
			order.startDay=parseInt(detail[i].startDate.split('-',3)[2]);
			order.endDay=parseInt(detail[i].endDate.split('-',3)[2]);
			if(order.startMonth==e.getMonth()+1){
				for(var j=order.startDay;j<=order.endDay;j++){
					var id='day'+j;
					document.getElementById(id).style.backgroundColor='#DB9043';
				}
			}//end of the month judge if
		}

	}

	function printMonth(date){
		var d = date;
		var e = new Date();
		var days = 0;
		var whichOne = 0;
		var leapYear = 0;
		// document.write('今天是: '+e.getFullYear(),"年 ",e.getMonth()+1,"月 ",e.getDate(),"日 星期",e.getDay(),"<br>"); //月份要+1 星期日會是星期0

		//判斷閏年
		if(d.getFullYear()%400 == 0){
			leapYear = 1;
		}else if(d.getFullYear()%100 == 0){
			leapYear = 0;
		}else if (d.getFullYear()%4 == 0){
			leapYear = 1;
		}

		//先判斷是幾月，然後將天數輸入陣列，搭配下面switch服用
		if (d.getMonth()+1 == 1||d.getMonth()+1 == 3||d.getMonth()+1 == 5||d.getMonth()+1 == 7||d.getMonth()+1 == 8||d.getMonth()+1 == 10||d.getMonth()+1 == 12){
			whichOne = 1;
		}else if(d.getMonth()+1 !==2){  //將其他小月又不是二月的月份設定成30天
			whichOne = 2;
		}else if (leapYear == 0) {  //不是閏年所以28天
			whichOne = 3;
		}else{
			whichOne = 4;  //是閏年所以是29天
		}
	

		switch(whichOne){
			case 1:
			days = 31;
			break;
			case 2:
			days = 30;
			break;
			case 3:
			days = 28;
			break;
			case 4:
			days = 29;
			break;
		}

		var ary = new Array();  //將天數印進ary中，並印出來檢查
		for(x=1;x<=days;x++){
			ary[x] = x;
			// document.write(x,"<br>");
		}
		var container=document.getElementById('calender');//月曆的容器

		if(document.getElementById('year')){//標題
			document.getElementById('year').innerHTML=d.getFullYear();
			document.getElementById('month').innerHTML=d.getMonth()+1;
		}else{
			var y=document.createTextNode(d.getFullYear());
			var m=document.createTextNode(d.getMonth()+1);
			var h2 =document.createElement('h2');
			var p =document.createElement('p');
			h2.appendChild(y);
			h2.setAttribute('id','year');
			p.appendChild(m);
			p.setAttribute('id','month');
			container.appendChild(h2);
			container.appendChild(p);
		}
		//清除表格
		if(document.getElementById('calContainer')){
			trAr = document.getElementById('calContainer').childNodes;
			for(var i=0;i<trAr.length;i++){
				document.getElementById('calContainer').removeChild(trAr[i]);
			}
		}else{
			var table = document.createElement('table');	
			table.setAttribute('id','calContainer');
			container.appendChild(table);
		}
		var content="<tr>";
		

		//開始印表格
		
		// document.write("<table id='calContainer' border='1'><tr>");

		var counter = 0;
		var weekday = 0;
		var y = 1;
		d.setDate(1);
			content+="<td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td></tr><tr>";
			while(counter!== d.getDay()){
				
				content+="<td></td>";
				counter++;
				weekday++;
			}
		// document.write(weekday,"<br>");
			while(y <= days){ //days =30
				// if(y==e.getDate()){
				// 	document.write("<td class='today' id=day"+ary[y]+">",ary[y],"</td>");
				// 	weekday++;
				// }
				// else 
				if(weekday !== 6 && y !== days){			//不用換行，且還沒印完日期的時候
					content+="<td id=day"+ary[y]+">"+ary[y]+"</td>";
					weekday++;
				}else if(weekday == 6  && y !== days){				//換行
					content+="<td id=day"+ary[y]+">"+ary[y]+"</td></tr><tr>";
					weekday = 0;
				}else if(weekday !== 6 && y == days){			//印完了，但是沒換行
					content+="<td id=day"+ary[y]+">"+ary[y]+"</td>";
				}else if(weekday == 6 && y == days){					//印完剛好一行結束
					content+="<td id=day"+ary[y]+">"+ary[y]+"</td></tr>";		
				}
				y++;
			}
			while(weekday !==6){
				content+="<td></td>";
				weekday++;
			}

		// content+="</tr>";//table結束
		document.getElementById('calContainer').innerHTML=content;
	}
	