<?php
        session_start();
        include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


		if(!isset($_SESSION['username'])){
		  header("Location: ../login.php");
        }
?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <script>

    function remove_row(x){
        var a =  confirm("Are you sure you want to remove this row?");
        if(a){console.log($(x).parents()[2].remove());}
        else return false;
    }

    function rotate(tg) {
            console.log(tg);
            $("#"+tg).toggleClass('flip');
    }

    function percent_limit_input(x,y,event){
            console.log(x.toString());
            console.log(event.which);

            var c=0;
            var t;

            for(var i=0; i<x.length; i+=1){
                t = x.toString().charAt(i);
                console.log(" . count = "+t);
                if(t=='.'){
                   c+=1;
                }
            }

            if(c>=2){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }

            if(event.which==69 || event.which==189){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }else if(parseFloat(x)<=10000 || parseFloat(x)>=0){

            }else{
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }

            /*
            if(x.indexOf("-")!=-1){
                   document.getElementById(y).value = x.toString().slice(0,-1);
            console.log(x);
            }
            */
            if(parseFloat(x)>10000 || parseFloat(x)<0){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }
        }

        function fetch_academic_year(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    if(val!="none") elem.value = val;
                    console.log(elem.value);
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_academic_year.php", true);
            xhttp.send();
        }


        function fetch_academic_year2(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    if(val!="none") elem.value = val;
                    console.log(elem.value+"%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%");
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_academic_year2.php", true);
            xhttp.send();
        }

        function fetch_academic_year_dis_cont(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    if(val!="none") elem.value = val;
                    console.log(elem.value);
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_academic_year_dis_cont.php", true);
            xhttp.send();
        }


        function fetch_course_name(x,y){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_course_name.php?Course_code="+x, true);
            xhttp.send();
        }

        function fetch_programme_name(x,y){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                    //document.getElementById("n"+y).value = "GOVIND";
                    //console.log("******"+document.getElementById("n"+y).value);

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;
                    console.log(document.getElementById("n"+y));
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_programme_name.php?Prog_code="+x, true);
            xhttp.send();
        }

        function fetch_programme_code(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    var elem = document.getElementById("p"+x);
                    elem.innerHTML = this.responseText;
                    var a = this.responseText;
                    a = $(a).next("option[value='"+val+"']");
                    $(a).attr('selected','selected');

                    if(val!="none") elem.value = val;
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_programme_code.php", true);
            xhttp.send();
        }

        function fetch_course_code(x,y, val = "none"){

            fetch_programme_name(x,y);

            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

                if (this.readyState == 4 && this.status == 200) {
                    u = "c"+y.slice(1,y.length);
                    document.getElementById(u).innerHTML = this.responseText;
                    if(val!="none") document.getElementById(u).value = val;
                }
            };
            xhttp.open("GET","../Dropdowns/fetch_course_code.php?Prog_code="+x, true);
            xhttp.send();
        }

        function fetch_course_code_only(x,val="none"){

            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

                if (this.readyState == 4 && this.status == 200) {
                    //u = "c"+y.slice(1,y.length);
                    document.getElementById(x).innerHTML = this.responseText;
                    console.log(this.responseText);

                    if(val != "none"){
                        document.getElementById(x).value = val;
                    }
                }
            };
            xhttp.open("GET","../Dropdowns/fetch_course_code.php", true);
            xhttp.send();
        }

        function get_time(){
            var d = new Date();
            var n = d.getTime();
            return n.toString();
            //return new Date(ms).toISOString.slice(11.-1);
        }


        function num_rows(tid,fid){
            l = $('#'+tid).find('tr').length;
            console.log("Number of rows : "+l+"----"+tid);

            if(l>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }

        function num_rows_2_headrows(tid,fid){
            l = $('#'+tid).find('tr').length;
            console.log("Number of rows : "+l+"----"+tid);

            if(l>3){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-3)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }


    </script>


<link rel="icon" href="../logo.png">
<title>Information Gathering System</title>


    <style>

        th{
            text-align: center;
            font-weight: 500;
            font-size: 15px;
        }

        td,th{
            border: 1px solid grey;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .image {
            -moz-transition: transform 1s;
            -webkit-transition: transform 1s;
            transition: transform 1s;

            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);

        }

        .flip {
            transform: rotate(180deg);
        }

    </style>

    <style>
        #d211, #h211, #d212, #h212, #d213, #h213, #d223, #h223, #d231, #h231, #d221, #h221, #d232, #h232, #d222, #h222, #d233, #h233 ,#d241, #h241, #h242, #d242, , #h243, #d243 , #h244, #d244 , #h245, #d245, #h251, #d251, #h252, #d252, #h253, #d253, #h254, #d254, #h255, #d255, #h261, #d261, #h262, #d262, #h263, #d263 {
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d211, #d212, #d213, #d223, #d231, #d221, #d232, #d222 , #d233, #d241, #d242, #d243, #d244, #d245, #d251, #d252, #d253, #d254, #d255, #d261 , #d262 , #d263{
            padding: 10px;
            display: none;
        }
    </style>

    <style>

        textarea{
            resize:none;
        }

        select{
            width:10%;
            background-color:#ffffff;
            opacity:.92;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        input[type=text],input[type=number],textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=submit],input[type=button],.Save {
            width: 650px;
            /*
            background-color: #424242;
            color: #EEEEEE;
            */
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

         button {
            width: 90px;
            background-color: #ffffff;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #333333;
        }

        input[type=button]:hover {
            background-color: #333333;
        }


        button:hover {
            background-color: #cd2026;
        }

        .add,.remove{
            border: 0px;
        }

        .body{
/*
            background-color:#CACACA;
            */
            /*background-color:#CACACA;
            */
        }

        *{
            margin: 0;
            padding: 0;
        }

        .container{
            height: 100%;
            width: 100%;
        }

        #left, #middle, #right, .x {
            display: inline-block;
            *display: inline; zoom: 1;
            vertical-align: top;
            font-size: 12px;
            padding: 0px;
        }

        #left{
            width: 20%;
        }

        #middle{
            width: 50%;
        }

        #right{
            width: 10%;
        }

    </style>

</head>


<body class="BACK" onload="load_time_func();">


    <!--
        TOP HEADING DAVV
    -->

    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Information Gathering System 2017 - 2018</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <!--
        TOP FIXED HEADER Username
    -->

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px;"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#424242";
                document.getElementById("myHeader1").style.backgroundColor = "#424242";
                document.getElementById("myHeader2").style.backgroundColor = "#424242";
                document.getElementById("myHeader3").style.backgroundColor = "#424242";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#616161";
                document.getElementById("myHeader1").style.backgroundColor = "#616161";
                document.getElementById("myHeader2").style.backgroundColor = "#616161";
                document.getElementById("myHeader3").style.backgroundColor = "#616161";
            }
        }

    </script>


    <center>


        <div class="col-sm-12"  style="margin-top:0px;">
            <br><br>
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 2 - TEACHING-LEARNING & EVALUATION</a></center>
        </div>

<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.1  Student Enrollment and Profile</a></center>

<div class="col-sm-12">
    <hr/>
</div>

    </center>


<!--
    2.1.1
-->
<script>
        	function save211(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var YearOfEnroll = $($(rows[i]).find('select')[0]).val();
        				var pc = $($(rows[i]).find('select')[1]).val();
                        var pn = $($(rows[i]).find('input')[0]).val();
                        var TotalStudents = $($(rows[i]).find('input')[1]).val();
                        var OtherStateStudents = $($(rows[i]).find('input')[2]).val();
                        var OtherCountryStudents = $($(rows[i]).find('input')[3]).val();
                        if(YearOfEnroll == "")
        				{
        					alert('Please Select Year of Enrollment to save');
        					return false;
        				}else if(TotalStudents==""){
                            alert('Please fill Total Number of Students to save');
        					return false;
        				}else if(OtherStateStudents==""){
                            alert('Please fill Total Number of Other State Students to save');
        					return false;
        				}else if(OtherCountryStudents==""){
                            alert('Please fill Total Number of Other Country Students to save');
        					return false;
                        }else if(pc==""){
                            alert('Please select Programme code to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ YearOfEnroll + "','"+ pc+ "','"+ pn + "','"+ TotalStudents + "','" + OtherStateStudents + "','" + OtherCountryStudents + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d211").slideToggle("slow");
                               rotate("tg211");
                               num_rows("tab211","ch211");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet211.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_211()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab211').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var pc = x[1];
                                   var idd = $(ay).attr('id');


	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

                                   idd = $(pc).attr('id');
                                   fetch_programme_code(idd.substr(1), $(pc).attr('value'));

    							}
        			}
                    num_rows("tab211","ch211");
        		};
          			   			 xhttp.open("GET", "fetch211.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg211"); $("#d211").slideToggle("slow");'>

        <div class="col-sm-1" id="ch211">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h211" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.1.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of students from other States and Countries during the last five years            </div>
        </div>

        <div id="to211" class="col-sm-1">
            <br><img class="image flip"  id="tg211" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d211">
            <br>
    <script>

    	function addRow211()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var CM1= '<td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';
            var CM2= '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:100px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="Number" style="width:100px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="Number" style="width:100px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+CM1+CM2+C2+C3+C4+CR+'</tr>';

            var x = $('#tab211').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab211">
            <tr>
                <th style="width:250px; padding:20px;">Year of enrollment</th>
                <th style="width:140px; padding:20px;">Programme Code</th>
                <th style="width:150px; padding:20px;">Programme Name</th>
                <th style="width:150px; padding:20px;">Total Number of students enrolled</th>
                <th style="width:150px; padding:20px;">Number of students enrolled from other States</th>
                <th style="width:150px; padding:20px;">Number of students enrolled from other countries</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow211()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save211($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    2.1.2
-->
<script>
        	function save212(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var PC = $($(rows[i]).find('select')[1]).val();
                        var PN = $($(rows[i]).find('input')[0]).val();
                        var ASN = $($(rows[i]).find('input')[1]).val();
                        var EARN = $($(rows[i]).find('input')[2]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(PC==""){
                            alert('Please fill Programme Code to save');
        					return false;
        				}else if(ASN==""){
                            alert('Please fill Number of Seats Available to save');
        					return false;
        				}else if(ASN==""){
                            alert('Please fill Number of Eligible Applications Recieved to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ PC + "','" + PN + "','" + ASN + "','" + EARN + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d212").slideToggle("slow");
                               rotate("tg212");
                               num_rows("tab212","ch212");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet212.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_212()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab212').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');

                                   var pc = x[1];

	          			            idd = idd.substr(1);
                                   // console.log(i+"****"+idd+"******************");
	            					//console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

                                   idd = $(pc).attr('id');
                                   console.log("-++++++-"+idd.substr(3)+"-++++-");

                                   fetch_programme_code(idd.substr(1), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab212","ch212");
        		};
          			   			 xhttp.open("GET", "fetch212.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg212"); $("#d212").slideToggle("slow");'>

        <div class="col-sm-1" id="ch212">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h212" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.1.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Demand Ratio during the last five years.
            </div>
        </div>

        <div id="to212" class="col-sm-1">
            <br><img class="image flip"  id="tg212" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d212">
            <br>
    <script>

    	function addRow212()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><select style="width:140px;" id="'+ip+'" onchange="fetch_programme_name(this.value,this.id)" ></select></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Programme Name" id="'+ipn+'" style="width:250px;" required disabled></center></td>';
            var C4 = '<td><center><input type="number" placeholder="Number" style="width:250px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="Number" style="width:250px;" re quired></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab212').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab212">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:140px; padding:20px;">Programme Code</th>
                <th style="width:150px; padding:20px;">Programme Name</th>
                <th style="width:150px; padding:20px;">Number of seats available</th>
                <th style="width:150px; padding:20px;">Number of Eligible Applications Recieved</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow212()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save212($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>




<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    2.1.3
-->
<script>
        	function save213(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 2; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var pc   = $($(rows[i]).find('select')[1]).val();

                        var pn   = $($(rows[i]).find('input')[0]).val();

                        //alert(pn);

                        var SC_R = $($(rows[i]).find('input')[1]).val();
                        var ST_R = $($(rows[i]).find('input')[2]).val();
                        var OBC_R = $($(rows[i]).find('input')[3]).val();
                        var GEN_R = $($(rows[i]).find('input')[4]).val();
                        var OTH_R = $($(rows[i]).find('input')[5]).val();

                        var SC_A = $($(rows[i]).find('input')[6]).val();
                        var ST_A = $($(rows[i]).find('input')[7]).val();
                        var OBC_A = $($(rows[i]).find('input')[8]).val();
                        var GEN_A = $($(rows[i]).find('input')[9]).val();
                        var OTH_A = $($(rows[i]).find('input')[10]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(pc=="" || SC_R=="" || SC_A=="" || ST_R=="" || ST_A=="" || OBC_R=="" || OBC_A=="" || GEN_R=="" || GEN_A=="" || OTH_R=="" || OTH_A ==""){
                            alert('Please Fill all inputs to save');
        					return false;
        				}else

                        var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year+"','"+ pc+"','"+ pn + "','"+ SC_R + "','" + ST_R + "','" + OBC_R + "','" + GEN_R + "','"+ OTH_R + "','" + SC_A + "','" + ST_A + "','" + OBC_A + "','" +GEN_A + "','" +OTH_A + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d213").slideToggle("slow");
                               rotate("tg213");
                               num_rows("tab213","ch213");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet213.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}


        	function fetch_rows_213()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab213').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');

                                   var pc = x[1];

	          			            idd = idd.substr(1);
                                   // console.log(i+"****"+idd+"******************");
	            					//console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

                                   idd = $(pc).attr('id');
                                   //console.log("-++++++-"+idd.substr(3)+"-++++-");

                                   fetch_programme_code(idd.substr(1), $(pc).attr('value'));
    							}
        			}
                    num_rows_2_headrows("tab213","ch213");
        		};
          			   			 xhttp.open("GET", "fetch213.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg213"); $("#d213").slideToggle("slow");'>

        <div class="col-sm-1" id="ch213">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h213" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.1.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Average percentage of seats filled against seats reserved for various categories as per applicable reservation policy during the last five years             </div>
        </div>

        <div id="to213" class="col-sm-1">
            <br><img class="image flip"  id="tg213" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d213">
            <br>
    <script>

    	function addRow213()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:80px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var CM1= '<td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';
            var CM2= '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';


            var html = '<tr id="'+i+'">'+C1+CM1+CM2+C2+C2+C2+C2+C2+C2+C2+C2+C2+C2+CR+'</tr>';

            var x = $('#tab213').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
            fetch_programme_code(i);
    	}
    </script>
    <form>


        <table border="0" id="tab213">
            <tr>
                <th colspan="3" style="width:120px; padding:20px;"></th>
                <th colspan="5" style="width:600px; padding:20px;">Number of seats earmarked for reserved category as per GOI or State Government rule</th>
                <th colspan="5" style="width:600px; padding:20px;">Number of students admitted from the reserved category</th>
            </tr>
            <tr>
                <th style="width:150px; padding:20px;">Year</th>
                <th style="width:150px; padding:20px;">Programme Code</th>
                <th style="width:150px; padding:20px;">Programme Name</th>
                <th style="width:140px; padding:20px;">SC</th>
                <th style="width:140px; padding:20px;">ST</th>
                <th style="width:140px; padding:20px;">OBC</th>
                <th style="width:140px; padding:20px;">GEN</th>
                <th style="width:140px; padding:20px;">OTH</th>
                <th style="width:140px; padding:20px;">SC</th>
                <th style="width:140px; padding:20px;">ST</th>
                <th style="width:140px; padding:20px;">OBC</th>
                <th style="width:140px; padding:20px;">GEN</th>
                <th style="width:140px; padding:20px;">OTH</th>
            </tr>
			<tr>
				<td class="add"  colspan="11"><input class="add" type="image" src="../images/add2.png" onclick="addRow213()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save213($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>




<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.2 Catering to Student Diversity</a></center>

<div class="col-sm-12" >
    <hr/>
</div>



<!--
    2.2.1
-->

                <script>

            function save221(ta)
        	{
                link =  document.getElementById("link2_2_1").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d221").slideToggle("slow");
                               rotate("tg221");

                               if(document.getElementById("TA2_2_1").value==""){
               document.getElementById("ch221").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch221").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet221.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg221"); $("#d221").slideToggle("slow");'>

        <div class="col-sm-1" id="ch221">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h221" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.2.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            The institution assesses the learning levels of the students, after admission and organises special Programmes for advanced learners and slow learners            </div>
        </div>

        <div id="to221" class="col-sm-1">
            <br><img class="image flip"  id="tg221" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d221">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA2_2_1" style="margin-left:85px; width:930px;height:200px; background-color:#ffffff; opacity:.82;">

        </textarea>

        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input id="link2_2_1" type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save221( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>

    </div>
</center>


<div class="col-sm-12" >
    <hr/>
</div>




<!--2.2.2-->




    <div class="col-sm-12" onclick='rotate("tg222"); $("#d222").slideToggle("slow");'>

        <div class="col-sm-1" id="ch222">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h222" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.2.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Student - Full time teacher ratio
            </div>
        </div>

        <div id="to222" class="col-sm-1">
            <br><img class="image flip"  id="tg222" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save222(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var idd = $(rows[i]).attr('id');

        				var year = $($(rows[i]).find('select')[0]).val();
                        var pc   = $($(rows[i]).find('select')[1]).val();

                        var pn  = $($(rows[i]).find('input')[0]).val();
                        var uge  = $($(rows[i]).find('input')[1]).val();
                        var pge  = $($(rows[i]).find('input')[2]).val();
                        var ugt  = $($(rows[i]).find('input')[3]).val();
                        var pgt  = $($(rows[i]).find('input')[4]).val();
                        var botht  = $($(rows[i]).find('input')[5]).val();

        				if(year == ""){
        					alert('Please select year to save');
        					return false;
        				}else if(pc=="" || uge == "" || pge=="" || ugt=="" || pgt=="" || botht==""){
        					alert('Please input required fields to save');
        					return false;
                        }else{

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ year+ "','"+ pc+ "','"+ pn + "','"+ uge + "','" +  pge + "','" + ugt + "','" + pgt + "','" +  botht + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d222").slideToggle("slow");
                               rotate("tg222");
                               num_rows("tab222","ch222");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t2_2_2", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_222()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {

                        console.log("REACHING");

          			   var x = $('#tab222').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log(x);
	          			          var pc = x[1];
	          			          var ay = x[0];
	          			          var idd = $(ay).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id

	            					//idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

	          			          idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
                                   fetch_programme_code(idd, $(pc).attr('value'));
    							}
        			}
                    num_rows("tab222","ch222");
        		};
          			   			 xhttp.open("GET", "fetch222.php", true);
         			   			 xhttp.send();
        	}
		</script>

<center>
    <div class="col-sm-12" id="d222">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow222()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;

            var CM1= '<td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';
            var CM2= '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';


    		var html = '<tr id="'+i+'"  ><td><center><select id="'+ay+'" placeholder="Year" style="width:175px;" required></select></center></td>'+CM1+CM2+'<td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Number" style="width:140px;" required></center></td><td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Number" style="width:140px;" required></center></td><td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Number" style="width:140px;" required></center></td><td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Number" style="width:140px;" required></center></td><td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Number" style="width:140px;" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab222').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table id="tab222">
            <tr>
                <th style="width:200px; padding:10px;">Year</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Porgramme Code</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Programme Name</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Number of students enrolled in the institution (UG)</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Number of students enrolled in the institution (PG)</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Number of full time teachers available in the institution teaching only UG courses</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Number of full time teachers available in the institution teaching only PG courses</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Number of teachers teaching both UG and PG courses</th>
            </tr>
          <!--  <tr>
          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Number" style="width:250px;" disabled></center></td>
         	 		<td><center><button onclick="remove_row(this);" type="button">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow222()">Add a new Row</button></td>-->
                <td class="add"  colspan="5"><input class="add" type="image" src="../images/add2.png" onclick="addRow222()" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save222($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--2.2.3-->




    <div class="col-sm-12" onclick='rotate("tg223"); $("#d223").slideToggle("slow");'>

        <div class="col-sm-1" id="ch223">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h222" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.2.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Percentage of differently abled students (Divyangjan) on rolls(current year data)
            </div>
        </div>

        <div id="to223" class="col-sm-1">
            <br><img class="image flip"  id="tg223" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save223(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var idd = $(rows[i]).attr('id');

        				var v0  = $($(rows[i]).find('select')[0]).val();
        				var v1  = $($(rows[i]).find('select')[1]).val();
                        var v2  = $($(rows[i]).find('input')[0]).val();
                        var v3  = $($(rows[i]).find('input')[1]).val();
                        var v4  = $($(rows[i]).find('input')[2]).val();
                        var v5  = $($(rows[i]).find('input')[3]).val();
                        var v6  = $($(rows[i]).find('input')[4]).val();
                        var v7  = $($(rows[i]).find('input')[5]).val();
                        var v8  = $($(rows[i]).find('select')[2]).val();

        				if(v1 == "" || v2=="" || v3=="" || v4=="" || v5=="" || v6=="" || v7=="" || v8==""){
        					alert('Please input all fields to save');
        					return false;
                        }else{

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v2 + "','"+ v3 + "','" +  v4 + "','" + v5 + "','" + v6 + "','" +  v0 + "','"  +  v7 + "','"  +  v1 + "','" +  v8 + "','"  + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d223").slideToggle("slow");
                               rotate("tg223");
                               num_rows("tab223","ch223");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t2_2_3", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_223()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {

                        console.log("REACHING");

          			   var x = $('#tab223').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log(x);
	          			          var cc = x[0];
	          			          var ay = x[1];
                                    var yp = x[2];
                                  var idd = $(ay).attr('id');
	          			          idd = idd.substr(1);

	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

                                   fetch_academic_year2("y"+idd,$(yp).attr('value'));

	          			          idd = $(cc).attr('id');


	            					//    console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_course_code_only(idd,$(cc).attr('value'));

                                   document.getElementById(idd).value = $(cc).attr('value');

                                   console.log("))))))))))))"+document.getElementById(idd).value);
//                                   console.log("(((((((((())))))))))"+document.getElementById(idd).value);// = $(cc).attr('value');



                                   fetch_programme_code(idd.substr(1),$(cc).attr('value'));

                                   /*
	          			              var yp = x[2];
//                                   idd = $(cc).attr('id');

                                   idd = $(yp).attr('id').substr(0);

                                   alert(idd);

                                   fetch_programme_code2(idd,$(yp).attr('value'));
                                   */
    							}
        			}
                    num_rows("tab223","ch223");
        		};
          			   			 xhttp.open("GET", "fetch223.php", true);
         			   			 xhttp.send();
        	}
		</script>

<center>
    <div class="col-sm-12" id="d223">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow223()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var ay2= "yy"+i;


            var C1 = '<td><center><input type="text" placeholder="Student Name" style="width:200px;" required></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Gender" style="width:100px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="UDID Card Number" style="width:140px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Type" style="width:150px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="%" style="width:80px;" required></center></td>';
            var C6 = '<td><center><select style="width:150px;" id="'+ip+'" onchange="fetch_programme_name(this.value,this.id)" ></select></center></td>';
            var C7 = '<td><center><input type="text" placeholder="Course Name" id="'+ipn+'" style="width:250px;" required disabled></center></td>';
            var C8 = '<td><center><select style="width:175px;" id="'+ay+'"></select></center></td>';
            var C9 = '<td><center><select style="width:175px;" id="'+ay2+'"></select></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+C7+C8+C9+CR+'</tr>';


    		var x = $('#tab223').find('tr');
   			$(x[x.length-1]).before(html);


            fetch_academic_year2("y"+i);
            fetch_academic_year(i);
            //fetch_course_code_only(ic);
            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table id="tab223">
            <tr>
                <th style="width:200px; padding:10px; padding-left:0px;">Name of the student enrolled under Differntly abled Cateogry</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Gender</th>
                <th style="width:140px; padding:10px; padding-left:0px;">UDID Card Number</th>
                <th style="width:150px; padding:10px; padding-left:0px;">Type of Disability</th>
                <th style="width:70px; padding:10px; padding-left:0px;">Percentage of Disability</th>
                <th style="width:130px; padding:10px; padding-left:0px;">Programme enrolled (CODE)</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Programme enrolled (NAME)</th>
                <th style="width:175px; padding:10px; padding-left:0px;">Year of Enrollment</th>
                <th style="width:175px; padding:10px; padding-left:0px;">Year of Completion</th>
            </tr>
          <!--  <tr>
          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Number" style="width:250px;" disabled></center></td>
         	 		<td><center><button onclick="remove_row(this);" type="button">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow222()">Add a new Row</button></td>-->
                <td class="add"  colspan="5"><input class="add" type="image" src="../images/add2.png" onclick="addRow223()" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save223($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

        <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">2.3  Teaching - Learning Process</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.3.1
-->

                <script>

            function save231(ta)
        	{
                link =  document.getElementById("link2_3_1").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d231").slideToggle("slow");
                               rotate("tg231");

                               if(document.getElementById("TA2_3_1").value==""){
               document.getElementById("ch231").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch231").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet231.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg231"); $("#d231").slideToggle("slow");'>

        <div class="col-sm-1" id="ch231">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h231" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.3.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Student centric methods, such as experiential learning, participative learning and problem solving methodologies are used for enhancing learning experiences.
            </div>
        </div>

        <div id="to231" class="col-sm-1">
            <br><img class="image flip"  id="tg231" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d231">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA2_3_1" style="margin-left:85px; width:930px;height:200px; background-color:#ffffff; opacity:.82;">

        </textarea>

        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input id="link2_3_1" type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save231( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.3.2
-->
<script>
        	function save232(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('input')[0]).val();
                        var i2 = $($(rows[i]).find('input')[1]).val();
                        var i3 = $($(rows[i]).find('input')[2]).val();
                        var i4 = $($(rows[i]).find('input')[3]).val();
                        var i5 = $($(rows[i]).find('input')[4]).val();
                        var i6 = $($(rows[i]).find('input')[5]).val();

                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "" || i6 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','"+ i5 + "','"+ i6 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}

        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d232").slideToggle("slow");
                               rotate("tg232");
                               num_rows("tab232","ch232");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet232.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_232()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab232').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {

    				           }
        			}
                    num_rows("tab232","ch232");
        		};
          			   			 xhttp.open("GET", "fetch232.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg232"); $("#d232").slideToggle("slow");'>

        <div class="col-sm-1" id="ch232">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h232" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.3.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Percentage of teachers using ICT for effective teaching with Learning Management Systems (LMS), E-learning resources etc.(current year data).
            </div>
        </div>

        <div id="to232" class="col-sm-1">
            <br><img class="image flip"  id="tg232" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d232">
            <br>
    <script>

    	function addRow232()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/

            var C1 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Resources" style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="text" placeholder="E-Resources" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

    		var x = $('#tab232').find('tr');
            $(x[x.length-1]).before(html);

    	}
    </script>
    <form>

        <table border="0" id="tab232">
            <tr>
                <th style="width:200px; padding:20px;">Number of teachers using ICT (LMS,e-Resources)</th>
                <th style="width:200px; padding:20px;">Number of teachers on roll</th>
                <th style="width:200px; padding:20px;">ICT tools and resources available</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Number of ICT enabled classrooms</th>
                <th style="width:200px; padding:20px;">Number of smart classrooms</th>
                <th style="width:200px; padding:20px; padding-left:0px;">E-resources and techniques used</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow232()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save232($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    2.3.3
-->
<script>
        	function save233(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var YearOfEnroll = $($(rows[i]).find('select')[0]).val();
                        var TotalStudents = $($(rows[i]).find('input')[0]).val();
                        var OtherStateStudents = $($(rows[i]).find('input')[1]).val();
                        var OtherCountryStudents = $($(rows[i]).find('input')[2]).val();
                        if(YearOfEnroll == "")
        				{
        					alert('Please Select Year of Enrollment to save');
        					return false;
        				}else if(TotalStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
        				}else if(OtherStateStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
        				}else if(OtherCountryStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ YearOfEnroll + "','"+ TotalStudents + "','" + OtherStateStudents + "','" + OtherCountryStudents + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d233").slideToggle("slow");
                               rotate("tg233");
                               num_rows("tab233","ch233");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet233.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_233()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab233').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');


	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_rows("tab233","ch233");
        		};
          			   			 xhttp.open("GET", "fetch233.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg233"); $("#d233").slideToggle("slow");'>

        <div class="col-sm-1" id="ch233">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h233" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.3.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Ratio of students to mentor for academic and stress related issues(current year data)
            </div>
        </div>

        <div id="to233" class="col-sm-1">
            <br><img class="image flip"  id="tg233" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d233">
            <br>
    <script>

    	function addRow233()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Ratio" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab233').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab233">
            <tr>
                <th style="width:250px; padding:20px;">Year of enrollment</th>
                <th style="width:250px; padding:20px;">	Number of students enrolled in the institution</th>
                <th style="width:250px; padding:20px;">Number of fulltime teachers</th>
                <th style="width:250px; padding:20px;">Mentor: Mentee Ratio</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow233()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save233($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.1  Student Enrollment and Profile</a></center>

<div class="col-sm-12">
    <hr/>
</div>



<!--
    2.4.1
-->
<script>
        	function save241(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        var v4 = $($(rows[i]).find('input')[3]).val();
                        var v5 = $($(rows[i]).find('input')[4]).val();

                        if(v1=="" || v2=="" || v3=="" || v4=="" || v5==""){
                        	alert('Please fill input feilds to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v1 + "','"+ v2 + "','" + v3 + "','" + v4 + "','" + v5 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d241").slideToggle("slow");
                               rotate("tg241");
                               num_rows("tab241","ch241");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet241.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_241()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab241').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          					}
        			}
                    num_rows("tab241","ch241");
        		};
          			   			 xhttp.open("GET", "fetch241.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg241"); $("#d241").slideToggle("slow");'>

        <div class="col-sm-1" id="ch241">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h241" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.4.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of students from other States and Countries during the last five years            </div>
        </div>

        <div id="to241" class="col-sm-1">
            <br><img class="image flip"  id="tg241" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d241">
            <br>
    <script>

    	function addRow241()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><input type="text" placeholder="Name" style="width:120px;" required></center></td>';
            var C2 = '<td><center><input type="text" placeholder="PAN NO." style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Designation" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C5 = '<td><center><input type="text" placeholder="Year" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab241').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab241">
            <tr>
                <th style="width:250px; padding:20px;">Name of the teacher</th>
                <th style="width:250px; padding:20px;">PAN No.</th>
                <th style="width:250px; padding:20px;">Designation</th>
                <th style="width:250px; padding:20px;">No. of sanctioned posts</th>
                <th style="width:250px; padding:20px;">Year of appointment</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow241()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save241($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.4.2
-->
<script>
        	function save242(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var YearOfEnroll = $($(rows[i]).find('select')[0]).val();
                        var TotalStudents = $($(rows[i]).find('input')[0]).val();
                        var OtherStateStudents = $($(rows[i]).find('input')[1]).val();
                        if(YearOfEnroll == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(TotalStudents==""){
                            alert('Please fill input field to save');
        					return false;
        				}else if(OtherStateStudents==""){
                            alert('Please fill input field to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ YearOfEnroll + "','"+ TotalStudents + "','" + OtherStateStudents + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d242").slideToggle("slow");
                               rotate("tg242");
                               num_rows("tab242","ch242");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet242.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_242()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab242').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');


	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_rows("tab242","ch242");
        		};
          			   			 xhttp.open("GET", "fetch242.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg242"); $("#d242").slideToggle("slow");'>

        <div class="col-sm-1" id="ch242">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h242" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.4.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                 Average percentage of full time teachers with Ph.D. during the last five years (10).
            </div>
        </div>

        <div id="to242" class="col-sm-1">
            <br><img class="image flip"  id="tg242" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d242">
            <br>
    <script>

    	function addRow242()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select required placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab242').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab242">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Number of full time teachers with PhD</th>
                <th style="width:250px; padding:20px;">Number of full time teachers</th>
            </tr>
			<tr>
				<td class="add"  colspan="1"><input class="add" type="image" src="../images/add2.png" onclick="addRow242()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save242($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.4.3
-->
<script>
        	function save243(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        var v4 = $($(rows[i]).find('input')[3]).val();
                        var v5 = $($(rows[i]).find('input')[4]).val();

                        if(v1=="" || v2=="" || v3=="" || v4=="" || v5==""){
                        	alert('Please fill input feilds to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v1 + "','"+ v2 + "','" + v3 + "','" + v4 + "','" + v5 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d243").slideToggle("slow");
                               rotate("tg243");
                               num_rows("tab243","ch243");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet243.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_243()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab243').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          					}
        			}
                    num_rows("tab243","ch243");
        		};
          			   			 xhttp.open("GET", "fetch243.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg243"); $("#d243").slideToggle("slow");'>

        <div class="col-sm-1" id="ch243">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h243" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.4.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average teaching experience of full time teachers in number of years (10).
            </div>
        </div>

        <div id="to243" class="col-sm-1">
            <br><img class="image flip"  id="tg243" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d243">
            <br>
    <script>

    	function addRow243()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><input type="text" placeholder="Name" style="width:230px;" required></center></td>';
            var C2 = '<td><center><input type="text" placeholder="PAN NO." style="width:230px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Designation" style="width:230px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Name of Dept" style="width:230px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="Total Months of experience" style="width:230px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab243').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab243">
            <tr>
                <th style="width:230px; padding:20px;">Name of the teacher</th>
                <th style="width:230px; padding:20px;">PAN No.</th>
                <th style="width:230px; padding:20px;">Designation</th>
                <th style="width:230px; padding:20px;">Name of Department</th>
                <th style="width:230px; padding:20px;">Number of months of teaching experience (Total months)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow243()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save243($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.4.4
-->
<script>
        	function save244(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        var v4 = $($(rows[i]).find('input')[3]).val();
                        var v5 = $($(rows[i]).find('input')[4]).val();

                        if(v1=="" || v2=="" || v3=="" || v4=="" || v5==""){
                        	alert('Please fill input feilds to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v1 + "','"+ v2 + "','" + v3 + "','" + v4 + "','" + v5 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d244").slideToggle("slow");
                               rotate("tg244");
                               num_rows("tab244","ch244");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet244.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_244()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab244').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          					}
        			}
                    num_rows("tab244","ch244");
        		};
          			   			 xhttp.open("GET", "fetch244.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg244"); $("#d244").slideToggle("slow");'>

        <div class="col-sm-1" id="ch244">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h244" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.4.4</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of full time teachers who received awards, recognition, fellowships at State, National, International level from Government, recognised bodies during the last five years (10).
            </div>
        </div>

        <div id="to244" class="col-sm-1">
            <br><img class="image flip"  id="tg244" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d244">
            <br>
    <script>

    	function addRow244()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><input type="text" placeholder="Year" style="width:120px;" required></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Name" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="PAN NO" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Designation" style="width:120px;" required></center></td>';
            var C5 = '<td><center><input type="text" placeholder="Name of award" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab244').find('tr');
   			$(x[x.length-1]).before(html);

    	}
    </script>
    <form>

        <table border="0" id="tab244">
            <tr>
                <th style="width:250px; padding:20px;">Year of Award</th>
                <th style="width:250px; padding:20px;">Name of full time teacher receiving awards from state level,national level, international level	</th>
                <th style="width:250px; padding:20px;">PAN NO.</th>
                <th style="width:250px; padding:20px;">Designation</th>
                <th style="width:250px; padding:20px;">Name of the award, fellowship, received from Government or recognised bodies</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow244()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save244($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    2.4.5
-->
<script>
        	function save245(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var nosp = document.getElementById("i245_nosp").value;
                        var v0 = $($(rows[i]).find('select')[0]).val();
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();

                        if(nosp==""){
                        	alert('Please fill Number of sanctioned post to save');
        					return false;
                        }

                        if(v0=="" || v1=="" || v2==""){
                        	alert('Please fill input feilds to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v0 + "','"+ v1 + "','" + v2 + "','" + nosp + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d245").slideToggle("slow");
                               rotate("tg245");
                               num_rows("tab245","ch245");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet245.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_245()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){

         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab245').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           //console.log(x);
	          			          var ay = x[0];
	          			          var idd = $(ay).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                    console.log($(ay).attr('value')+"@@@@@");
	          					}
        			}
                    num_rows("tab245","ch245");
        		};
          			   			 xhttp.open("GET", "fetch245.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg245"); $("#d245").slideToggle("slow");'>

        <div class="col-sm-1" id="ch245">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h245" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.4.5</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of full time teachers from other States against sanctioned posts during the last five years (10).
            </div>
        </div>

        <div id="to245" class="col-sm-1">
            <br><img class="image flip"  id="tg245" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d245">

            Number of sanctioned post <input id="i245_nosp" required type="number" placeholder="Number of sanctioned post" style="width:220px;">

            <br>
    <script>

    	function addRow245()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select id="'+ay+'" placeholder="Year" style="width:165px;" required></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Name" style="width:230px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="State" style="width:230px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab245').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab245">
            <tr>
                <th style="width:230px; padding:20px;">Year</th>
                <th style="width:230px; padding:20px;">Name of full time teacher from other state	</th>
                <th style="width:230px; padding:20px;">State from which qualifying degree was obtained</th>
            </tr>
			<tr>
				<td class="add"  colspan="1"><input class="add" type="image" src="../images/add2.png" onclick="addRow245()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save245($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

    <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.1  Evaluation Process and Reforms (40)</a></center>

<div class="col-sm-12">
    <hr/>
</div>








<!--
    2.5.1
-->
<script>
        	function save251(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var v1 = $($(rows[i]).find('select')[0]).val();
        				var v2 = $($(rows[i]).find('input')[0]).val();
        				var v3 = $($(rows[i]).find('input')[1]).val();
        				var v4 = $($(rows[i]).find('input')[2]).val();
                        var v5 = $($(rows[i]).find('input')[3]).val();

        				var idd = $(rows[i]).attr('id');

                        var percent = $($(rows[i]).find('input')[1]).val();
                        if(v1 == "" || v2 == "" || v3 == "" || v4 == "" || v5 == ""){
        					alert('Please fill al inputs to save');
        					return false;
                        }else{
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v1 + "','"+ v2 + "','" + v3 + "','" + v4 + "','" + v5 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               //alert(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d251").slideToggle("slow");
                               rotate("tg251");
                               num_rows("tab251","ch251");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet251.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_251()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab251').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
    							}
        			}
                    num_rows("tab251","ch251");
        		};
          			   			 xhttp.open("GET", "fetch251.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg251"); $("#d251").slideToggle("slow");'>

        <div class="col-sm-1" id="ch251">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h251" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.5.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average number of days from the date of last semester-end/ year- end examination till the declaration of results during the last five years (15).
            </div>
        </div>

        <div id="to251" class="col-sm-1">
            <br><img class="image flip"  id="tg251" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d251">
            <br>
    <script>

    	function addRow251()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/

            var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td> <td><center><input  type="text" placeholder="Semester" style="width:250px;" ></center></td> <td><center><input  type="text" placeholder="Examination End date" style="width:250px;"></center></td> <td><center><input  type="text" placeholder="Result Declaration Date" style="width:250px;" ></center></td> <td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    		var x = $('#tab251').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            //fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab251">
            <tr>
                <th style="width:150px; padding:20px;">Programme Code</th>
                <th style="width:250px; padding:20px;">Programme Name</th>
                <th style="width:80px; padding:20px;">Semester</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Last date of the last semester-end/ year- end examination	</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Date of declaration of results of semester-end/ year- end examination	</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow251()" alt="Submit" width="48" height="48">
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save251($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    2.5.2
-->
<script>
        	function save252(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var YearOfEnroll = $($(rows[i]).find('select')[0]).val();
                        var TotalStudents = $($(rows[i]).find('input')[0]).val();
                        var OtherStateStudents = $($(rows[i]).find('input')[1]).val();
                        if(YearOfEnroll == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(TotalStudents==""){
                            alert('Please fill input field to save');
        					return false;
        				}else if(OtherStateStudents==""){
                            alert('Please fill input field to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ YearOfEnroll + "','"+ TotalStudents + "','" + OtherStateStudents + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d252").slideToggle("slow");
                               rotate("tg252");
                               num_rows("tab252","ch252");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet252.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_252()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab252').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');


	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_rows("tab252","ch252");
        		};
          			   			 xhttp.open("GET", "fetch252.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg252"); $("#d252").slideToggle("slow");'>

        <div class="col-sm-1" id="ch252">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h252" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.5.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                 Average percentage of student complaints/grievances about evaluation against total number appeared in the examinations during the last five years (5).
            </div>
        </div>

        <div id="to252" class="col-sm-1">
            <br><img class="image flip"  id="tg252" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d252">
            <br>
    <script>

    	function addRow252()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select required placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab252').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab252">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Number of complaints or grievances about evaluation</th>
                <th style="width:250px; padding:20px;">Total number of students appeared in the examination</th>
            </tr>
			<tr>
				<td class="add"  colspan="1"><input class="add" type="image" src="../images/add2.png" onclick="addRow252()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save252($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    2.5.3
-->
<script>
        	function save253(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var YearOfEnroll = $($(rows[i]).find('select')[0]).val();
                        var TotalStudents = $($(rows[i]).find('input')[0]).val();
                        var OtherStateStudents = $($(rows[i]).find('input')[1]).val();
                        var OtherCountryStudents = $($(rows[i]).find('input')[2]).val();
                        if(YearOfEnroll == "")
        				{
        					alert('Please Select Year of Enrollment to save');
        					return false;
        				}else if(TotalStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
        				}else if(OtherStateStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
        				}else if(OtherCountryStudents==""){
                            alert('Please fill input feilds to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ YearOfEnroll + "','"+ TotalStudents + "','" + OtherStateStudents + "','" + OtherCountryStudents + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d253").slideToggle("slow");
                               rotate("tg253");
                               num_rows("tab253","ch253");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet253.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_253()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab253').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var ay = x[0];
                                   var idd = $(ay).attr('id');


	          			            idd = idd.substr(1);
                                    console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_rows("tab253","ch253");
        		};
          			   			 xhttp.open("GET", "fetch253.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg253"); $("#d253").slideToggle("slow");'>

        <div class="col-sm-1" id="ch253">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h253" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.5.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of applications for revaluation leading to change in marks (5).
            </div>
        </div>

        <div id="to253" class="col-sm-1">
            <br><img class="image flip"  id="tg253" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d253">
            <br>
    <script>

    	function addRow253()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="Number" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab253').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab253">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Number of applications received for revaluation</th>
                <th style="width:250px; padding:20px;">Number of students appeared in final exam</th>
                <th style="width:250px; padding:20px;">Number of revaluation cases where marks changed</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow253()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow232()">Add a new Row</button></td> -->
			</tr>

            <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save253($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>



<!--
    2.5.4
-->

        <script>

            function save254(ta)
        	{
                link =  document.getElementById("link2_5_4").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d254").slideToggle("slow");
                               rotate("tg254");

                               if(document.getElementById("TA2_5_4").value==""){
                                    document.getElementById("ch254").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> Not Filled';
                                }else{
                                    document.getElementById("ch254").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet254.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg254"); $("#d254").slideToggle("slow");'>

        <div class="col-sm-1" id="ch254">
            <img src="../images/unfilled.png" width="52" height="52"> Filled
        </div>

        <div id="h254" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">2.5.4</div>
            <div class="col-sm-11" style="font-size:18px;">
            Positive impact of reforms on the examination procedures and processes including IT integration and continuous internal assessment on the examination management system.
            </div>
        </div>

        <div id="to254" class="col-sm-1">
            <br><img class="image flip"  id="tg254" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>

    <div class="col-sm-12" id="d254">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA2_5_4" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link2_5_4" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save254( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    2.5.5
-->
<script>
        	function save255(table)
        	{
                        var v0 = document.getElementById("d2550").value;
                        var v1 = document.getElementById("d2551").value;
                        var v2 = document.getElementById("d2552").value;
                        var v3 = document.getElementById("d2553").value;
                        var v4 = document.getElementById("d2554").value;
                        var v5 = document.getElementById("d2555").value;

                        if(v0==""){
                           alert('Please the options A B C D E Above table');
                            return false;
                        }

                        if( v1=="" || v2=="" || v3=="" || v4=="" || v5=="" ){
                           alert();
                            return false;
                        }

                        document.getElementById("ch255").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';

    					var rowss = "('"+"<?php echo $_SESSION['username'];?>"+"','"+ v1 + "','"+ v2 + "','" + v3 + "','" + v4 + "','"+ v5  + "','"+ v0  +"')";

                        var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               //alert(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d255").slideToggle("slow");
                               rotate("tg255");

        		  			}
        		  		};

          			   xhttp.open("GET", "savet255.php?rows="+rowss, true);
         			   xhttp.send();
        	}

		</script>

    <div class="col-sm-12" onclick='rotate("tg255"); $("#d255").slideToggle("slow");'>

        <div class="col-sm-1" id="ch255">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h255" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.5.5</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Status of automation of Examination division along with approved Examination Manual.
                <br>A 100% automation of entire division & implementation of Examination Management System (EMS)
                <br>B Only student registration, Hall ticket issue & Result Processing
                <br>C Only student registration and result processing
                <br>D Only result processing
                <br>E Only manual methodology
            </div>
        </div>

        <div id="to255" class="col-sm-1">
            <br><img class="image flip"  id="tg255" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


        <div class="col-sm-12" id="d255">
            <br>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <select id="d2550" style="width:700px;">
                    <option value="">Select</option>
                    <option value="A 100% automation of entire division & implementation of Examination Management System (EMS)">A. 100% automation of entire division & implementation of Examination Management System (EMS)</option>
                    <option value="B Only student registration, Hall ticket issue & Result Processing">B. Only student registration, Hall ticket issue & Result Processing </option>
                    <option value="C Only student registration and result processing">C. Only student registration and result processing </option>
                    <option value="D Only result processing">D. Only result processing </option>
                    <option value="E Only manual methodology">E. Only manual methodology </option>
                </select>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-12"><br></div>
<center>
    <form>

        <table border="0" id="tad255">
            <tr>
                <th style="width:250px; padding:20px;">100% automation of entire division & implementation of Examination Management System (EMS) (Yes/No)</th>
                <th style="width:250px; padding:20px;">Student registration, Hall ticket issue & Result Processing are automated (Yes/No)</th>
                <th style="width:250px; padding:20px;">Student registration and result processing are automated (Yes/No)</th>
                <th style="width:250px; padding:20px;">Result processing is only automated (Yes/No)</th>
                <th style="width:250px; padding:20px;">Follow manual methods (Yes/No)</th>
            </tr>
            <tr>
                <td><center><select style="width:150px;" id="d2551"><option value="">Select</option><option value="yes">YES</option><option value="no">No</option></select></center></td>
                <td><center><select style="width:150px;" id="d2552"><option value="">Select</option><option value="yes">YES</option><option value="no">No</option></select></center></td>
                <td><center><select style="width:150px;" id="d2553"><option value="">Select</option><option value="yes">YES</option><option value="no">No</option></select></center></td>
                <td><center><select style="width:150px;" id="d2554"><option value="">Select</option><option value="yes">YES</option><option value="no">No</option></select></center></td>
                <td><center><select style="width:150px;" id="d2555"><option value="">Select</option><option value="yes">YES</option><option value="no">No</option></select></center></td>
            </tr>

<!--
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow255()" alt="Submit" width="48" height="48">
			</tr>
-->
        </table>
      <br><br>
        <input type="button" class="SAVE" onclick="save255($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>
</center>
        </div>



<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.6 Student Performance and Learning Outcomes</a></center>

<div class="col-sm-12">
    <hr/>
</div>




<!--
    2.6.1
-->

        <script>

            function save261(ta)
        	{
                link =  document.getElementById("link2_6_1").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d261").slideToggle("slow");
                               rotate("tg261");

                               if(document.getElementById("TA2_6_1").value==""){
                                    document.getElementById("ch261").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch261").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet261.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg261"); $("#d261").slideToggle("slow");'>

        <div class="col-sm-1" id="ch261">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h261" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">2.6.1</div>
            <div class="col-sm-11" style="font-size:18px;">
            Programme outcomes, Programme specific outcomes and course outcomes for all Programmes offered by the institution are stated and displayed on website and communicated to teachers and students
            </div>
        </div>

        <div id="to261" class="col-sm-1">
            <br><img class="image flip"  id="tg261" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d261">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA2_6_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link2_6_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save261( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>


<!--
    2.6.3
-->
<script>
        	function save263(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(v1=="" || v2=="" || v3==""){
                            alert('Please fill input fields to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ v1 + "','" + v2 + "','" + v3 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d263").slideToggle("slow");
                               rotate("tg263");
                               num_rows("tab263","ch263");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet263.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_263()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab263').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));

	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab263","ch263");
        		};
          			   			 xhttp.open("GET", "fetch263.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg263"); $("#d263").slideToggle("slow");'>

        <div class="col-sm-1" id="ch263">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h263" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.6.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Online student satisfaction survey regarding teaching learning process.
            </div>
        </div>

        <div id="to263" class="col-sm-1">
            <br><img class="image flip"  id="tg263" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d263">
            <br>
    <script>

    	function addRow263()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;
            var gi = "g"+i;
            var cati = "cat"+i;

            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/

            var c1 = '<td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';

            var c2 = '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';
            var c3 = '<td><center><input type="number" step="0.5" min="0" max="100"  placeholder="Number" style="width:120px;" required></center></td>';
            var c4 = '<td><center><input type="text" step="0.5" min="0" max="100"  placeholder="Text" style="width:120px;" required></center></td>';
            var c4 = '<td><center><input type="text" step="0.5" min="0" max="100"  placeholder="Text" style="width:120px;" required></center></td>';

            var c5 = '<td><center><select id="'+gi+'" style="width:150px;" required><option value="">Select</option><option value="Male">Male</option><option value="Female">Female</option><option value="Transgender">Transgender</option></select></center></td>';

            var c7 = '<td><center><select id="'+cati+'" style="width:150px;" required><option value="">Select</option><option value="GEN">GEN</option><option value="OBC">OBC</option><option value="SC">SC</option><option value="ST">ST</option></select></center></td>';

            var c6 = '<td><center><select id="'+ay+'" placeholder="Enrollment Number" style="width:165px;" required></select></center></td>';

            var c8 =

            var cR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';



            var html = '<tr id="'+i+'">'+c4+c5+c7+c4+c4+c4+c1+c2+c8+c9+c10'</tr>';
    		var x = $('#tab263').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab263">
            <tr>
                <th style="width:150px; padding:20px;">Name of the student</th>
                <th style="width:250px; padding:20px;">Gender</th>
                <th style="width:80px; padding:20px;">Category</th>
                <th style="width:200px; padding:20px; padding-left:0px;">State of Domicile</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Nationality if othern than Indian</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Email ID</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Programme code</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Programme name</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Student Unique Enrolment ID</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Mobile Number</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Year of joining</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow263()" alt="Submit" width="48" height="48">
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save263($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>





<!--
    2.6.2
-->

        <script>

            function save262(ta)
        	{
                link =  document.getElementById("link2_6_2").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d262").slideToggle("slow");
                               rotate("tg262");

                               if(document.getElementById("TA2_6_2").value==""){
                                    document.getElementById("ch262").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch262").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet262.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg262"); $("#d262").slideToggle("slow");'>

        <div class="col-sm-1" id="ch262">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h262" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">2.6.2</div>
            <div class="col-sm-11" style="font-size:18px;">
            Attainment of Programme outcomes, Programme specific outcomes and course outcomes are evaluated by the institution.
            </div>
        </div>

        <div id="to262" class="col-sm-1">
            <br><img class="image flip"  id="tg262" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d262">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA2_6_2" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br><br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link2_6_2" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save262( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>







<!--
    2.6.3
-->
<script>
        	function save263(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                        var v1 = $($(rows[i]).find('input')[0]).val();
                        var v2 = $($(rows[i]).find('input')[1]).val();
                        var v3 = $($(rows[i]).find('input')[2]).val();
                        if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(v1=="" || v2=="" || v3==""){
                            alert('Please fill input fields to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ v1 + "','" + v2 + "','" + v3 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert('Changes Saved Successfully');
                               $("#d263").slideToggle("slow");
                               rotate("tg263");
                               num_rows("tab263","ch263");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet263.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_263()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab263').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));

	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab263","ch263");
        		};
          			   			 xhttp.open("GET", "fetch263.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg263"); $("#d263").slideToggle("slow");'>

        <div class="col-sm-1" id="ch263">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h263" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>2.6.3</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Average pass percentage of students (Current year data).
            </div>
        </div>

        <div id="to263" class="col-sm-1">
            <br><img class="image flip"  id="tg263" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d263">
            <br>
    <script>

    	function addRow263()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/

            var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><input type="number" step="0.5" min="0" max="100"  placeholder="Number" style="width:120px;" required></center></td><td><center><input type="number" step="0.5" min="0" max="100"  placeholder="Number" style="width:120px;" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    		var x = $('#tab263').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab263">
            <tr>
                <th style="width:150px; padding:20px;">Programme Code</th>
                <th style="width:250px; padding:20px;">Programme Name</th>
                <th style="width:80px; padding:20px;">Number of students appeared in the final year examination</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Number of students passed in final year examination</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow263()" alt="Submit" width="48" height="48">
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save263($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

        <!--
                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">2.7 Student Satisfaction Survey</a></center>
        -->
<div class="col-sm-12">
    <hr/>
</div>









<script>
    function load_time_func(){
        console.log("page_c2_loaded");

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_2_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 2.2.1
            document.getElementById("TA2_2_1").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link2_2_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA2_2_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA2_2_1").value==""){
               document.getElementById("ch221").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch221").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();


?>

        // 2.3.1
            document.getElementById("TA2_3_1").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link2_3_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA2_3_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA2_3_1").value==""){
               document.getElementById("ch231").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch231").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }


<?php
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_4_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
?>

        document.getElementById("i245_nosp").value="<?php echo $row['sanctioned_post_number']; ?>";


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_5_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 2.5.4
            document.getElementById("TA2_5_4").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link2_5_4").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA2_5_4").placeholder = "Describe the examination reforms with reference to the following within a minimum of 500 words and maximum 1000 words \n • Examination procedures \n • Processes integrating IT \n • Continuous internal assessment system ";

            if(document.getElementById("TA2_5_4").value==""){
               document.getElementById("ch254").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch254").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_5_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row_num = mysqli_num_rows($res);
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 2.5.5
            document.getElementById("d2550").innerHTML = '<option value="">Select</option><option value="A. 100% automation of entire division & implementation of Examination Management System (EMS)">A 100% automation of entire division & implementation of Examination Management System (EMS)</option><option value="B Only student registration, Hall ticket issue & Result Processing">B. Only student registration, Hall ticket issue & Result Processing </option><option value="C Only student registration and result processing">C. Only student registration and result processing </option><option value="D Only result processing">D. Only result processing </option><option value="E. Only manual methodology">E Only manual methodology </option>';

            var q = '<option value="">Select</option><option value="yes">YES</option><option value="no">No</option>';

            document.getElementById("d2551").innerHTML = q;
            document.getElementById("d2552").innerHTML = q;
            document.getElementById("d2553").innerHTML = q;
            document.getElementById("d2554").innerHTML = q;
            document.getElementById("d2555").innerHTML = q;

            var x0 = document.getElementById("d2550").value = '<?php echo $row['v0']; ?>';
            var x1 = document.getElementById("d2551").value = '<?php echo $row['v1']; ?>';
            var x2 = document.getElementById("d2552").value = '<?php echo $row['v2']; ?>';
            var x3 = document.getElementById("d2553").value = '<?php echo $row['v3']; ?>';
            var x4 = document.getElementById("d2554").value = '<?php echo $row['v4']; ?>';
            var x5 = document.getElementById("d2555").value = '<?php echo $row['v5']; ?>';

            var k=<?php echo $row_num; ?>;

            //alert(k);

            if(k==0){
               document.getElementById("ch255").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
                //alert("in");
            }else{
               document.getElementById("ch255").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_6_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 2.6.1
            document.getElementById("TA2_6_1").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link2_6_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA2_6_1").placeholder = "Describe Course Outcomes (COs) for all courses and mechanism of communication within a minimum of 500 characters and maximum of 500 words ";

            if(document.getElementById("TA2_6_1").value==""){
               document.getElementById("ch261").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch261").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_6_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 2.6.2
            document.getElementById("TA2_6_2").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link2_6_2").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA2_6_2").placeholder = "Describe Course Outcomes (COs) for all courses and mechanism of communication within a minimum of 500 characters and maximum of 500 words ";

            if(document.getElementById("TA2_6_2").value==""){
               document.getElementById("ch262").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch262").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }



    fetch_rows_211();
    fetch_rows_212();
    fetch_rows_213();

    fetch_rows_222();
    fetch_rows_223();

    fetch_rows_232();
    fetch_rows_233();

    fetch_rows_241();
    fetch_rows_242();
    fetch_rows_243();
    fetch_rows_244();
    fetch_rows_245();

    fetch_rows_251();
    fetch_rows_252();
    fetch_rows_253();

    fetch_rows_263();
}

</script>




</body>

</html>
