var year, month, dd;
function doFirst(){
    var newDate = new Date();
    year = newDate.getFullYear();
    month = newDate.getMonth();
    dd = newDate.getDate();
   
    day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

    var calendar = get_calendar(year, month, dd); //=============

    document.getElementById("calendar-month").innerHTML = month+1;
    document.getElementById("calendar-year").innerHTML = year;
    document.getElementById("calendar-dates").appendChild(calendar);
 
    date = document.getElementById('date');
    date.innerHTML = dd;
    month_before = document.getElementById('month_before');
    month_after = document.getElementById('month_after');

    month_before.addEventListener("click", calBefore, false);
    month_after.addEventListener("click", calAfter, false);

}

function get_calendar(year, month, dd){
    var newDate = new Date(year,month+1,0);
    var days = newDate.getDate();
    var day_no = new Date(year, month, 1).getDay();  //first date
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
        var div = document.createElement('div');
        div.innerHTML = count;
        count++;
        div.id="theDay";
        if( parseInt(div.innerHTML) == new Date().getDate()){
            div.style.background = "#ffa800";
            div.style.boxShadow = "0 0 10px #555";
        }     
        div.onclick = showDate;
        td.appendChild(div);
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
            var div = document.createElement('div');
            div.innerHTML = count;

            count++;
            div.id="theDay";
            if( parseInt(div.innerHTML) == new Date().getDate()){
                div.style.background = "#ffa800";
                div.style.boxShadow = "0 0 10px #555";
            } 
            div.onclick = showDate;
            td.appendChild(div);
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
	return table;
}

var tdPrevious = null;
function showDate(){
    if( tdPrevious != null){
        tdPrevious.style.background = "#eee";
        tdPrevious.style.boxShadow = "none";
    }
    this.style.background = "#ffa800";
    this.style.boxShadow = "0 0 10px #555";
    tdPrevious = this;

    

    date.innerHTML = this.innerHTML;
    // alert( this.innerHTML )
}

function calBefore(){
  var newDate = new Date(year,month-1,dd);
  year = newDate.getFullYear();
  month = newDate.getMonth();
  dd = newDate.getDate();
  var calendar = get_calendar(year, month, dd); //=============
  document.getElementById("calendar-month").innerHTML = month+1;
  document.getElementById("calendar-year").innerHTML = year;
  var table = document.getElementById("calendar-dates").firstChild;
  document.getElementById("calendar-dates").removeChild(table);
  document.getElementById("calendar-dates").appendChild(calendar);
}

function calAfter(){
  var newDate = new Date(year,month+1,dd);
  year = newDate.getFullYear();
  month = newDate.getMonth();
  dd = newDate.getDate();
  var calendar = get_calendar(year, month, dd); //=============
  document.getElementById("calendar-month").innerHTML = month+1;
  document.getElementById("calendar-year").innerHTML = year;
  var table = document.getElementById("calendar-dates").firstChild;
  document.getElementById("calendar-dates").removeChild(table);
  document.getElementById("calendar-dates").appendChild(calendar);
}

window.addEventListener("load", doFirst, false);