function doFirst(){
    var d = new Date();
    var month_name = ['1','2','3','4','5','6','7','8','9','10','11','12'];
    var month = d.getMonth();   //0-11
    var year = d.getFullYear(); //2014
    var first_date = month_name[month] + " " + 1 + " " + year;
    //September 1 2014
    var tmp = new Date(first_date).toDateString();
    //Mon Sep 01 2014 ...
    var first_day = tmp.substring(0, 3);    //Mon
    day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var day_no = day_name.indexOf(first_day);   //1
    var days = new Date(year, month+1, 0).getDate();    //30
    //Tue Sep 30 2014 ...
    var calendar = get_calendar(day_no, days);
    document.getElementById("calendar-month").innerHTML = month_name[month];
    document.getElementById("calendar-year").innerHTML = year;    
    document.getElementById("calendar-dates").appendChild(calendar);
 
    date = document.getElementById('date');
    month_before = document.getElementById('month_before');
    month_after = document.getElementById("month_after");

    month_before.addEventListener("click", monthBefore, false);
    month_after.addEventListener("click", monthAfter, false);
}

function get_calendar(day_no, days){
    var table = document.createElement('table');
    var tr = document.createElement('tr');
    
    //row for the day letters
    for(var i=0; i<=6; i++){
        var td = document.createElement('td');
        td.innerHTML = day_name[i];
        td.id="weekname";
        tr.appendChild(td);
    }
    table.appendChild(tr);
    
    //create 2nd row
    tr = document.createElement('tr');
    var c;
    for(c=0; c<=6; c++){
        if(c == day_no){
            break;
        }
        var td = document.createElement('td');
        td.innerHTML = "";
        td.style.border = "none";
        tr.appendChild(td);
    }
    
    var count = 1;
    for(; c<=6; c++){
        var td = document.createElement('td');
        td.innerHTML = count;
        count++;
        td.id="theDay";
        if( parseInt(td.innerHTML) == new Date().getDate()){
            td.style.background = "#ffa800";
            td.style.boxShadow = "0 0 10px #555";
        }     
        td.onclick = showDate;    
        tr.appendChild(td);
    }
    table.appendChild(tr);


    //rest of the date rows
    for(var r=3; r<=7; r++){
        tr = document.createElement('tr');
        for(var c=0; c<=6; c++){
            if(count > days){
                table.appendChild(tr);
                return table;
            }
            var td = document.createElement('td');
            td.innerHTML = count;

            count++;
            td.id="theDay";
            if( parseInt(td.innerHTML) == new Date().getDate()){
                td.style.background = "#ffa800";
                td.style.boxShadow = "0 0 10px #555";
            } 
            td.onclick = showDate;
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
	return table;
}
var tdPrevious = null;
function showDate(){
    if( tdPrevious != null){
        tdPrevious.style.background = "#fff";
        tdPrevious.style.boxShadow = "none";
    }
    this.style.background = "#ffa800";
    this.style.boxShadow = "0 0 10px #555";
    tdPrevious = this;

    date.innerHTML = this.innerHTML;
    // alert( this.innerHTML )

    alert(theDay);
}

window.addEventListener("load", doFirst, false);