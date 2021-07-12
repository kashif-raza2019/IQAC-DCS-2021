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
  <script>
    rowss="";
  </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">

  <?php include("../css/locking_css.php"); ?>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/w3_l.css">

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
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
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
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        }

/*
        function fetch_course_name(x,y){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_course_name.php?Course_code="+x, true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        }
*/

function fetch_course_name(x,y){
    var xhttp,res;
    var programmeCode = y.slice(1);
    var pcode = $('#p'+programmeCode).val();
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("n"+y).value = this.responseText;
        }
    };
    xhttp.open("GET", "../Dropdowns/fetch_course_name.php?Course_code="+x+"&Prog_code="+pcode, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send("rows="+rowss);
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
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
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
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
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
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
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

    </script>


<link rel="icon" href="../logo.png">
<title>Criteria-5 Information Gathering System</title>


    <style>

        th{
            text-align: center;
            font-weight: 500;
            font-size: 15px;
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

        #d111, #h111,
        #d511, #h511,
        #d512, #h512,
		#d513, #h513,
		#d514, #h514,
		#d515, #h515,
		#d516, #h516,
		#d521, #h521,
		#d522, #h522,
		#d523, #h523,
		#d531, #h531,
		#d532, #h532,
		#d533, #h533,
		#d541, #h541,
		#d542, #h542,
		#d543, #h543		{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

#d111,#d511,#d515,#d512,#d513,#d514,#d516,#d521,#d522,#d523,#d531,#d532,#d533,#d542,#d543,#d541{
            padding: 10px;
            display: none;
        }
    </style>

    <style>

        textarea{
            resize:none;
        }

        select{
			font-size: 14px;
            width:10%;
            background-color:#ffffff;
            opacity:.92;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        input[type=text],input[type=number],textarea ,input[type=date]{
			font-size: 14px;
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
			font-size: 14px;
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
			font-size: 14px;
            width: 105px;
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
        }  input[type=submit]:hover {
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
		td,th
    	{
    		border: 1px solid gray;
    		padding: 10px;
    	}

    </style>

</head>


<body class="BACK" onload="load_time_func();">

<div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;background-color:#0E3778">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color:#0E3778;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;background-color:#0E3778;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778;">

<style>

  .nn:hover,.nnn,.nnn:hover{
    color: white;
  }

</style>

          <div  style="margin-top:10px; color:black; margin-left:-60px; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
    <a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">PROFILE</a>
    <div style="text-decoration:none; color:white;" class="w3-dropdown-content w3-bar-block w3-border">
      <a href="../Courses/view.php" class="w3-bar-item w3-button">Courses</a>
      <a href="#" onClick="window.open('../profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">URL Generator</a>
      <a href="#" onClick="window.open('../save_my_data/get_data.php','Save My Data','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">Save My Data</a>
      <a href="../additional_data/add_view.php" class="w3-bar-item w3-button">Upload Additional Data</a>
      <a href="../helpdesk/msg.php" class="w3-bar-item w3-button">Help-Desk</a>
      <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>

<!--
           <a style="color:white;" href="#" onClick="window.open('../profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;">URL GENERATOR</a> <a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a>
-->
         </div></center>
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
                document.getElementById("myHeader").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader1").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader2").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader3").style.backgroundColor = "#0E3778";
                $("#header2.h4").html('google');
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader1").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader2").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader3").style.backgroundColor = "#0E3778";
            }
        }

    </script>


    <center>


        <div class="col-sm-12"  style="margin-top:0px;">
            <br><br>
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 5 - STUDENT SUPPORT AND PROGRESSION</a></center>
        </div>

<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">5.1 Student Support

<div class="col-sm-12">
    <hr/>
</div>

    </center>
  </center>



<!--
   5.1.1
-->
<script>
        	function save511(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var NOS = $($(rows[i]).find('input')[0]).val();
                        var NOSBG = $($(rows[i]).find('input')[1]).val();
                     //   var NOSBNG = $($(rows[i]).find('input')[2]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(NOS==""){
                            alert('Please fill Name of Scheme to save');
        					return false;
        				}else if(NOSBG==""){
                            alert('Please fill Number of Students benefited by Govt. Scheme to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NOS + "','" + NOSBG + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d511").slideToggle("slow");
                               rotate("tg511");
                               num_rows("tab511","ch511");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet511.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_511()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab511').find('tr');
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
                    num_rows("tab511","ch511");
        		};
          			   			 xhttp.open("GET", "fetch511.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg511"); $("#d511").slideToggle("slow");'>

        <div class="col-sm-1" id="ch511">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h511" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.1.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">

               Average  percentage of students benefited by scholarships and freeships provided by the Government during the last five years.
				<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload Self attested letter with the list of students sanctioned
scholarship
<br>* Upload Any additional information
<br>* Average percentage of students benefited by scholarships and
freeships provided by the Government during the last five years 	   </div>
        </div>

        <div id="to511" class="col-sm-1">
            <br><img class="image flip"  id="tg511" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d511">
            <br>
    <script>

    	function addRow511()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

            var C1 = '<td><center><select placeholder="Year" style="width:180px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            //var C4 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab511').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab511">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Name of Scheme</th>
                <th style="width:250px; padding:20px;">Number of students benefited by government scheme </th>

            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow511()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save511($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
5.1.2 -->

<script>
        	function save512(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var NOS = $($(rows[i]).find('input')[0]).val();
                        var NOSBG = $($(rows[i]).find('input')[1]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(NOS==""){
                            alert('Please fill Name of Scheme to save');
        					return false;
        				}else if(NOSBG==""){
                            alert('Please fill Number of Students benefited by Govt. Scheme to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NOS + "','" + NOSBG + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d512").slideToggle("slow");
                               rotate("tg512");
                               num_rows("tab512","ch512");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet512.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_512()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab512').find('tr');
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
                    num_rows("tab512","ch512");
        		};
          			   			 xhttp.open("GET", "fetch512.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg512"); $("#d512").slideToggle("slow");'>

        <div class="col-sm-1" id="ch512">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h512" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.1.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">

       Average  percentage  of students benefited by scholarships, freeships, etc. provided by the institution besides government schemes during the last five years
	   <br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Number of students benefited by scholarships and freeships besides
government schemes in last 5 years
	        </div>
        </div>

        <div id="to512" class="col-sm-1">
            <br><img class="image flip"  id="tg512" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d512">
            <br>
    <script>

    	function addRow512()
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
            var C2 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab512').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab512">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Name of the scheme with contact information</th>
                <th style="width:250px; padding:20px;">Number of students benefited by Institution scheme </th>

            </tr>
			<tr>
				<td class="add"  colspan="3"><input class="add" type="image" src="../images/add2.png" onclick="addRow512()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save512($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>






<!--
    5.1.3
--><script>
        	function save513(table)

        	{
				var rows = $(table).find('tr');
				if(rows.length==2){
					alert('Please Add atleast one Record.');
					return false;
				}



        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var choice_513=document.getElementById('choice_513').value;
                        var NCES = $($(rows[i]).find('input')[0]).val();
                        var Year = $($(rows[i]).find('select')[0]).val();
						var NOSE = $($(rows[i]).find('input')[1]).val();
                        var NOAI = $($(rows[i]).find('input')[2]).val();
                         if(choice_513==""){
							 alert('Please select an option');
        					return false;

						 }else if(NCES == "")
        				{
        					alert('Please fill name of capability enhancement scheme to save');
        					return false;
        				}else if(Year==""){
                            alert('Please fill the Year to save');
        					return false;
        				}else if(NOSE==""){
                            alert('Please fill the number of students enrolled to save');
        					return false;
        				}else if(NOAI==""){
                            alert('Please fill the nane of agencies involved to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ NCES + "','"+ Year + "','" + NOSE + "','" + NOAI + "','" + idd +"','" +choice_513+"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d513").slideToggle("slow");
                               rotate("tg513");
                               num_rows("tab513","ch513");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet513.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_513()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab513').find('tr');
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
                  select_NA();
        			}
                    num_rows("tab513","ch513");
                    select_NA();
        		};
          			   			 xhttp.open("GET", "fetch513.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg513"); $("#d513").slideToggle("slow");'>

        <div class="col-sm-1" id="ch513">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h513" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.1.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">

             Number of capability enhancement and development schemes –<br>
1. Guidance for competitive examinations<br>
2. Career Counselling<br>
3. Soft skill development <br>
4. Remedial coaching <br>
5. Language lab<br>
6. Bridge courses<br>
7. Yoga and Meditation<br>
8. Personal Counselling<br>
          <br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Link to Institutional website
<br>* Any additional information
<br>* Details of capability enhancement and development schemes  </div>
        </div>

        <div id="to513" class="col-sm-1">
            <br><img class="image flip"  id="tg513" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
 <script>

    	function addRow513()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

          //  var C1 = '<td><center><select placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C1 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';
			var C2 = '<td><center><select placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';
            var C3 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab513').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
        <div class="col-sm-12" id="d513">


		<div class="col-sm-8" style="margin-left:120px;">
		<select id="choice_513" class="form-control">
		<option value="">Select</option>
		<option value="7 or more of the above">7 or more of the above</option>
		<option value="Any 6 of the above">Any 6 of the above</option>
		<option value="Any 5 of the above">Any 5 of the above</option>
		<option value="Any 4 of the above">Any 4 of the above</option>
		<option value="Any 3 of the above">Any 3 of the above</option>
		</select>

		</div>


    <form>

        <table border="0" id="tab513">
            <tr>
                <th style="width:250px; padding:20px;">Name of the capability enhancement scheme</th>
                <th style="width:250px; padding:20px;">Year of implementation</th>
                <th style="width:250px; padding:20px;">Number of students enrolled
 </th>
                <th style="width:250px; padding:20px;">Name of the agencies involved with contact details
</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow513()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save513($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!------------>

<!--
    5.1.4
-->
<script>
        	function save514(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var NOS = $($(rows[i]).find('input')[0]).val();
						var NOBSCE = $($(rows[i]).find('input')[1]).val();
                        var NOBSCCA = $($(rows[i]).find('input')[2]).val();
                        var NOSPCE = $($(rows[i]).find('input')[3]).val();
						var NOSP = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(NOS==""){
                            alert('Please fill Name of Scheme to save');
        					return false;
        				}else if(NOBSCE==""){
                            alert('Please fill Number of Students benefited by guidance for competitive exams to save');
        					return false;
        				}else if(NOBSCCA==""){
                            alert('Please fill Number of Students benefited by career counselling activities to save');
        					return false;
                        }else if(NOSPCE==""){
                            alert('Please fill Number of Students passed if competitive exams to save');
        					return false;
                        }else if(NOSP==""){
                            alert('Please fill Number of Students Placed to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NOS + "','" + NOBSCE + "','" + NOBSCCA + "','" + NOSPCE + "','" + NOSP + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d514").slideToggle("slow");
                               rotate("tg514");
                               num_rows("tab514","ch514");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet514.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_514()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab514').find('tr');
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
                  select_NA();
        			}
                    num_rows("tab514","ch514");
                    select_NA();
        		};
          			   			 xhttp.open("GET", "fetch514.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg514"); $("#d514").slideToggle("slow");'>

        <div class="col-sm-1" id="ch514">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h514" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.1.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">

           Average percentage of students benefited by guidance for competitive examinations and career counselling offered by the institution during the last five years  	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Number of students benefited by guidance for competitive
examinations and career counselling during the last five years
      </div>
        </div>

        <div id="to514" class="col-sm-1">
            <br><img class="image flip"  id="tg514" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d514">
            <br>
    <script>

    	function addRow514()
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
            var C2 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
			var C5 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var C6 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab514').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab514">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Name of Scheme</th>
                <th style="width:250px; padding:20px;">Number of benefited students by Guidance for Competitive examination </th>
                <th style="width:250px; padding:20px;">Number of benefited students by Career Counselling activities</th>
				<th style="width:250px; padding:20px;">Number of students who have passed in the competitive exam</th>
				<th style="width:250px; padding:20px;">Number of students placed</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow514()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save514($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>




<!--
    5.1.5
-->
<!--
-->

        <script>

            function save515(ta)
        	{
                link =  document.getElementById("link5_1_5").value;
                ta = ta.value;

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                ta = escapeHtml(ta);
                link = escapeHtml(link);

                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d515").slideToggle("slow");
                               rotate("tg515");

                               if(document.getElementById("TA5_1_5").value==""){
                                    document.getElementById("ch515").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch515").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet515.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg515"); $("#d515").slideToggle("slow");'>

        <div class="col-sm-1" id="ch515">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h515" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">5.1.5<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
          The institution has an active international students cell to cater to
the requirements of foreign students
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information

</div>
        </div>

        <div id="to515" class="col-sm-1">
            <br><img class="image flip"  id="tg515" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d515">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA5_1_5" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link5_1_5" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link5_1_5" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save515( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
















<!------------>

<!--
    5.1.6
-->
<script>
        	function save516(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var NOGA = $($(rows[i]).find('input')[0]).val();
						var NOGR = $($(rows[i]).find('input')[1]).val();
                        var NOD = $($(rows[i]).find('input')[2]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(NOGA==""){
                            alert('Please fill Number of grievances appealed to save');
        					return false;
        				}else if(NOGR==""){
                            alert('Please fill Number of grievances redressed to save');
        					return false;
        				}else if(NOD==""){
                            alert('Please fill Average time for grievance redressal in number of days to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NOGA + "','" + NOGR + "','" + NOD + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d516").slideToggle("slow");
                               rotate("tg516");
                               num_rows("tab516","ch516");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet516.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_516()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab516').find('tr');
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
                    num_rows("tab516","ch516");
        		};
          			   			 xhttp.open("GET", "fetch516.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg516"); $("#d516").slideToggle("slow");'>

        <div class="col-sm-1" id="ch516">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h516" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.1.6<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
        The institution has a transparent mechanism for timely redressal of student grievances including sexual harassment and ragging cases
		<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Minutes of the meetings of student redressal committee, prevention of sexual harassment committee and Anti Ragging committee
<br>* Upload any additional information
<br>* Details of student grievances including sexual harassment and
ragging cases
      </div>
        </div>

        <div id="to516" class="col-sm-1">
            <br><img class="image flip"  id="tg516" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d516">
            <br>
    <script>

    	function addRow516()
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
            var C2 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';
            var C4 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab516').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab516">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Number of grievances appealed</th>
                <th style="width:250px; padding:20px;">Number of grievances redressed</th>
                <th style="width:250px; padding:20px;">Average time for grievance redressal in number of days</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow516()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save516($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


    <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">5.2  Student Progression</center>

<div class="col-sm-12">
    <hr/>
</div>

<!--
    5.2.1
-->
<script>
        	function save521(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var PGF = $($(rows[i]).find('select')[1]).val();
						var NOSP = $($(rows[i]).find('input')[1]).val();
						var NOE = $($(rows[i]).find('input')[2]).val();
                        var PR = $($(rows[i]).find('input')[3]).val();

                       //var programmeName = $($(rows[i]).find('input[type="text"]')[3]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(PGF==""){
                            alert('Please fill Program graduated from to save');
        					return false;
                        }else if(NOSP==""){
                            alert('Please fill Number of students placed to save');
        					return false;
        				}else if(NOE==""){
                            alert('Please fill Name of the  employer with contact details to save');
        					return false;
        				}else if(PR>99.99){
                            alert('Please Enter Valid Package to save. Package should be between 0 to 99.99 lakhs/year');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
						var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ PGF + "','" + programmeName + "','" +  NOSP + "','" + NOE + "','" + PR + "','"  + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d521").slideToggle("slow");
                               rotate("tg521");
                               num_rows("tab521","ch521");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet521.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_521()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab521').find('tr');
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
									var pc = x[1];
                                    idd = $(pc).attr('id');

									console.log(idd+"__________________");
									fetch_programme_code(idd.substr(1),$(pc).attr('value'));

									 var idd = $(pc).attr('id');
	          			          idd = idd.substr(2);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));

									console.log(idd+"__________________");
									fetch_programme_code(idd.substr(2),$(pc).attr('value'));

									fetch_programme_name(idd)
    							}
        			}
                    num_rows("tab521","ch521");
        		};
          			   			 xhttp.open("GET", "fetch521.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg521"); $("#d521").slideToggle("slow");'>

        <div class="col-sm-1" id="ch521">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h521" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.2.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
     Average percentage of placement of outgoing students during the last five years
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Self attested list of students placed
<br>* Upload any additional information
<br>* Details of student placement during the last five years

      </div>
        </div>

        <div id="to521" class="col-sm-1">
            <br><img class="image flip"  id="tg521" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d521">
            <br>
    <script>

    	function addRow521()
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

            var C2 = '<td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';

			      var C3 = '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';

            var C4 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

            var C5 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C6 = '<td><center><input type="number" placeholder="ex: 3.2" min="0"  max="99.99" step="0.1"  style="width:120px;" required></center></td>';



            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab521').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab521">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
  <th style="width:250px; padding:20px;">Program graduated from </th>
  <th style="width:250px; padding:20px;">Program Name </th>
			   <th style="width:250px; padding:20px;">Number of students placed</th>
                <th style="width:250px; padding:20px;">Name of the  employer with contact details</th>
                <th style="width:250px; padding:20px;">Package received(Lakhs/Year)</th>


            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow521()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save521($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    5.2.2
-->
<script>
        	function save522(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var NOSEHE = $($(rows[i]).find('input')[0]).val();
						var PGF = $($(rows[i]).find('select')[1]).val();
                        var DGF = $($(rows[i]).find('input')[1]).val();
                        var IJ = $($(rows[i]).find('input')[2]).val();
                        var PAT = $($(rows[i]).find('input')[3]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(NOSEHE==""){
                            alert('Please fill Number of students enrolling into higher education to save');
        					return false;
        				}else if(PGF==""){
                            alert('Please fill Program graduated from to save');
        					return false;
        				}
                        else if(IJ==""){
                            alert('Please fill Name of institution joined to save');
        					return false;
                        }else if(PAT==""){
                            alert('Please fill the Name of programme admitted to to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NOSEHE + "','" + PGF + "','" + DGF + "','" + IJ + "','" + PAT +  "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d522").slideToggle("slow");
                               rotate("tg522");
                               num_rows("tab522","ch522");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet522.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_522()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab522').find('tr');
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
									var pc = x[1];
                                    idd = $(pc).attr('id');

									console.log(idd+"__________________");
									fetch_programme_code(idd.substr(1),$(pc).attr('value'));
    							}
        			}
                    num_rows("tab522","ch522");
        		};
          			   			 xhttp.open("GET", "fetch522.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg522"); $("#d522").slideToggle("slow");'>

        <div class="col-sm-1" id="ch522">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h522" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.2.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Percentage of student progression to higher education (previous graduating batch)(current year data)
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload supporting data for student/alumni
<br>* Any additional information
<br>* Details of student progression to higher education


      </div>
        </div>

        <div id="to522" class="col-sm-1">
            <br><img class="image flip"  id="tg522" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d522">
            <br>
    <script>

    	function addRow522()
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

            var C2 = '<td><center><input type="number" placeholder="" style="width:120px;" required></center></td>';

			var C3 = '<td><center><select placeholder="select" onchange="fetch_course_code(this.value,this.id)" style="width:175px;" id="'+ip+'"></select></center></td>';

            var C4 = '<td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" readonly style="width:100%;" value="" required></center></td>';

            var C5 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C6 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';


            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab522').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab522">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Number of students enrolling into higher education</th>
                <th style="width:250px; padding:20px;">Program graduated from  </th>
                <th style="width:250px; padding:20px;">Programme Name </th>
                <th style="width:250px; padding:20px;">Name of institution joined</th>
                <th style="width:250px; padding:20px;">Name of programme admitted to</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow522()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save522($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    5.2.3
-->
<script>
        	function save523(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var ROLLNO = $($(rows[i]).find('input')[0]).val();
						var EXAM = $($(rows[i]).find('select')[1]).val();
						//var NET = $($(rows[i]).find('input')[1]).val();
                        //var SLET = $($(rows[i]).find('input')[2]).val();
                        //var GATE = $($(rows[i]).find('input')[3]).val();
                      //  var GMAT = $($(rows[i]).find('input')[4]).val();
                       // var CAT = $($(rows[i]).find('input')[5]).val();
                     //   var GRE = $($(rows[i]).find('input')[6]).val();
                     //   var TOEFL = $($(rows[i]).find('input')[7]).val();
                   //     var CIVIL = $($(rows[i]).find('input')[8]).val();
                      //  var STATE = $($(rows[i]).find('input')[9]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(ROLLNO==""){
                            alert('Please fillRegistration number/roll number for the exam to save');
        					return false;
        				}else if(EXAM==""){
                            alert('Please fill exam name to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ ROLLNO + "','" + EXAM + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d523").slideToggle("slow");
                               rotate("tg523");
                               num_rows("tab523","ch523");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet523.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_523()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab523').find('tr');
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
									var q = $(x[1]).attr('value');
									$(x[1]).val(''+q);
									var k = $(x[1]).children('option[value="'+q+'"]')[0];
									document.getElementById('per'+idd).value = q;
									//console.log($(x[1]).val());
    							}
        			}
                    num_rows("tab523","ch523");
        		};
          			   			 xhttp.open("GET", "fetch523.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg523"); $("#d523").slideToggle("slow");'>

        <div class="col-sm-1" id="ch523">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h523" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.2.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Average percentage of students qualifying in state/ national/ international level examinations during the last five years

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload supporting data for the same
<br>* Any additional information
<br>* Number of students qualifying in state/ national/ international level
examinations during the last five years

      </div>
        </div>

        <div id="to523" class="col-sm-1">
            <br><img class="image flip"  id="tg523" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d523">
            <br>
    <script>

    	function addRow523()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

		//	per'.$row['id_time'].'

            var C1 = '<td><center><select placeholder="Year" style="width:150px;" id="'+ay+'"></select></center></td>';

            var C2 = '<td><center><input type="text" placeholder="" style="width:150px;" required></center></td>';

			var C3 = '<td><center><select placeholder="Exam" style="width:150px;" id="'+per+'"><option value="NET">NET</option><option value="SLET">SLET</option><option value="GATE">GATE</option><optionvalue="GMAT">GMAT</option><option value="CAT">CAT</option><option value="GRE">GRE</option><option value="GPAT">GPAT</option><option value="NIPER JEE">NIPER JEE</option><option value="TOEFL">TOEFL</option>3<option value="CIVIL SERVICES">CIVIL SERVICES</option><option value="OTHER STATE EXAMS">OTHER STATE EXAMS</option></select></center></td>';



            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';

            var x = $('#tab523').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			//fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab523">
            <tr>
                <th style="width:50px; padding:5px;">Year</th>
                <th style="width:50px; padding:5px;">Registration number/roll number for the exam</th>
                <th style="width:50px; padding:5px;">
				Select Exam
				</th>
			</tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow523()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save523($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">5.3  Student Participation and Activities
</center>
<div class="col-sm-12">
    <hr/>
</div>


<!--
    5.3.1
-->
<script>
        	function save531(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var AWARD = $($(rows[i]).find('input')[0]).val();
						var NATIONAL_INTERNATIONAL = $($(rows[i]).find('input')[1]).val();
                        var SPORTS_CULTURAL = $($(rows[i]).find('input')[2]).val();
                        var AADHAR = $($(rows[i]).find('input')[3]).val();
                        var NAME = $($(rows[i]).find('input')[4]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(AWARD==""){
                            alert('Please fill award details to save');
        					return false;
        				}else if(NATIONAL_INTERNATIONAL==""){
                            alert('Please fill national/international  to save');
        					return false;
        				}
                        else if(SPORTS_CULTURAL==""){
                            alert('Please fill sports/cultural to save');
        					return false;
                        }
						else if(AADHAR==""){
                            alert('Please fill the aadhar number to save');
        					return false;
                        }
						else if(NAME==""){
                            alert('Please fill the Name of Students to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ AWARD + "','" + NATIONAL_INTERNATIONAL + "','" + SPORTS_CULTURAL + "','" + AADHAR + "','" + NAME +  "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d531").slideToggle("slow");
                               rotate("tg531");
                               num_rows("tab531","ch531");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet531.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_531()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab531').find('tr');
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
                    num_rows("tab531","ch531");
        		};
          			   			 xhttp.open("GET", "fetch531.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg531"); $("#d531").slideToggle("slow");'>

        <div class="col-sm-1" id="ch531">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h531" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.3.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Number of awards/medals for  outstanding performance in sports/cultural activities at  national/international level (award for a team event should be counted as one) during the last five years
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* e-copies of award letters and certificates
<br>* Any additional information
<br>* Number of awards/medals for outstanding performance in sports/cultural
activities at national/international level during the last five year
		</div>
        </div>

        <div id="to531" class="col-sm-1">
            <br><img class="image flip"  id="tg531" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d531">
            <br>
    <script>

    	function addRow531()
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

            var C2 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C3 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C4 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C5 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

			var C6 = '<td><center><input type="text" placeholder="" style="width:120px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab531').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab531">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Name of Award/Medal</th>
                <th style="width:250px; padding:20px;">National/ International</th>
                <th style="width:250px; padding:20px;">Sports/ Cultural</th>
                <th style="width:250px; padding:20px;">AADHAR / Student ID  number</th>
                <th style="width:250px; padding:20px;">Name of the student</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow531()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save531($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>



<!-- 5.3.2
-->

<!--
-->

        <script>

            function save111(ta)
        	{
                link =  document.getElementById("link5_3_2").value;
                ta = ta.value;

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                ta = escapeHtml(ta);
                link = escapeHtml(link);


                console.log(ta+"\n"+link);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d111").slideToggle("slow");
                               rotate("tg111");

                               if(document.getElementById("TA1_1_1").value==""){
                                    document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet111.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg111"); $("#d111").slideToggle("slow");'>

        <div class="col-sm-1" id="ch111">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h111" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">5.3.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
           Presence of an active Student Council & representation of students on
academic & administrative bodies/committees of the institution
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information
            </div>
        </div>

        <div id="to111" class="col-sm-1">
            <br><img class="image flip"  id="tg111" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d111">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA1_1_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link5_3_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link1_1_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save111( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>















<!--
    5.3.3
-->
<script>
        	function save533(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var ACTIVITY = $($(rows[i]).find('input')[0]).val();


                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(ACTIVITY==""){
                            alert('Please fill acitvity details to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ ACTIVITY + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d533").slideToggle("slow");
                               rotate("tg533");
                               num_rows("tab533","ch533");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet533.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_533()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab533').find('tr');
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
                    num_rows("tab533","ch533");
        		};
          			   			 xhttp.open("GET", "fetch533.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg533"); $("#d533").slideToggle("slow");'>

        <div class="col-sm-1" id="ch533">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h533" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.3.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Average number of sports and cultural activities / competitions organised at the institution level per year
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Report of the event
<br>* Upload any additional information
<br>* Number of sports and cultural activities / competitions organised per year


		</div>
        </div>

        <div id="to533" class="col-sm-1">
            <br><img class="image flip"  id="tg533" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d533">
            <br>
    <script>

    	function addRow533()
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

            var C2 = '<td><center><input type="text" placeholder="" style="width:220px;" required></center></td>';



            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+CR+'</tr>';

            var x = $('#tab533').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab533">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Name of Activity</th>
            </tr>
			<tr>
				<td class="add"  colspan="2"><input class="add" type="image" src="../images/add2.png" onclick="addRow533()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save533($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">

</div>


<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">5.4  Alumni Engagement</center>

<!--5.4.1 -->


<!-- 5.4.1
-->

<!--
-->

        <script>

            function save541(ta)
        	{
                link =  document.getElementById("link5_4_1").value;
                ta = ta.value;

                console.log(ta+"\n"+link);

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                ta = escapeHtml(ta);
                link = escapeHtml(link);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d541").slideToggle("slow");
                               rotate("tg541");

                               if(document.getElementById("TA5_4_1").value==""){
                                    document.getElementById("ch541").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch541").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet541.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg541"); $("#d541").slideToggle("slow");'>

        <div class="col-sm-1" id="ch541">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h541" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">5.4.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
          The Alumni Association/Chapters (registered and functional)
contributes significantly to the development of the institution through
financial and non financial means during the last five years

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information

            </div>
        </div>

        <div id="to541" class="col-sm-1">
            <br><img class="image flip"  id="tg541" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d541">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA5_4_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link5_4_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link5_4_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save541( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>













<!--
    5.4.2
-->
<script>
        	function save542(table)
        	{
        		var rows = $(table).find('tr');
				if(rows.length==2){
					alert('Please Add atleast one Record.');
					return false;
				}


        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{	var choice_542= document.getElementById('choice_542').value;
        				 var ALUM = $($(rows[i]).find('input')[0]).val();
        				var AADHAR = $($(rows[i]).find('input')[1]).val();
        				var GRADUATION = $($(rows[i]).find('input')[2]).val();
						var Year = $($(rows[i]).find('select')[0]).val();
                       var CONTRI = $($(rows[i]).find('input')[3]).val();


                        if(ALUM == "")
        				{
        					alert('Please fill Alumni Details to save');
        					return false;
        				}else if(AADHAR==""){
                            alert('Please fill Aadhar/PAN details to save');
        					return false;
        				}else if(GRADUATION==""){
                            alert('Please fill Graduation Year to save');
        					return false;
        				}else if(GRADUATION>2030){
                            alert('Please Enter Valid Details for Graduation year to save');
        					return false;
        				}else if(Year==""){
                            alert('Please fill Year of contribution to save');
        					return false;
        				}else if(CONTRI==""){
                            alert('Please fill Quantum of contribution (INR) to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ ALUM + "','"+ AADHAR + "','" + GRADUATION + "','" + Year + "','" + CONTRI + "','" + idd + "','" + choice_542 +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d542").slideToggle("slow");
                               rotate("tg542");
                               num_rows("tab542","ch542");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet542.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_542()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab542').find('tr');
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
                    num_rows("tab542","ch542");
        		};
          			   			 xhttp.open("GET", "fetch542.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg542"); $("#d542").slideToggle("slow");'>

        <div class="col-sm-1" id="ch542">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h542" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.4.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Alumni contribution during the last five years
<br>
A. greater 100 Lakhs<br>
B. 50Lakhs - 100 Lakhs<br>
C. 20 Lakhs  - 50 Lakhs<br>
D. 5 Lakhs   -  20 Lakhs<br>
E. less than 5 Lakhs

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Alumni association audited statements
 </div>
        </div>

        <div id="to542" class="col-sm-1">
            <br><img class="image flip"  id="tg542" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d542">

		<div class="col-sm-4" style="margin-left:202px">
		<select id="choice_542" class="form-control">
		<option value="">Select</option>
		<option value="100 Lakhs">greater 100 Lakhs</option>
		<option value="50Lakhs-100 Lakhs">50Lakhs - 100 Lakhs</option>
		<option value="20 Lakhs-50 Lakhs">20 Lakhs  - 50 Lakhs</option>
		<option value="5 Lakhs-20 Lakhs">5 Lakhs   -  20 Lakhs</option>
		<option value="5 Lakhs">less than 5 Lakhs</option>
		</select>
		</div>
		<div class="col-sm-8"></div>
            <br>
    <script>

    	function addRow542()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;



            var C1 = '<td><center><input type="text" placeholder="" style="width:220px;" required></center></td>';

			var C2 = '<td><center><input type="text" placeholder="" style="width:220px;" required></center></td>';

			var C3 = '<td><center><input type="number"   placeholder="" style="width:220px;" required></center></td>';

			var C4 = '<td><center><select placeholder="Year" style="width:175px;" id="'+ay+'"></select></center></td>';

			var C5 = '<td><center><input type="number" placeholder="" style="width:220px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab542').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab542">
            <tr>
                <th style="width:250px; padding:20px;">Name of the alumnus/ alumni association
</th>
                <th style="width:250px; padding:20px;">AADHAR / PAN
</th>
                <th style="width:250px; padding:20px;">Year of graduation
</th>
                <th style="width:250px; padding:20px;">Year of contribution
</th>
                <th style="width:250px; padding:20px;">Quantum of contribution (INR)
</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow542()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save542($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    5.4.3
-->
<script>
        	function save543(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
						var Year = $($(rows[i]).find('select')[0]).val();
        				// var ALUM = $($(rows[i]).find('input')[0]).val();
        				var DATE = $($(rows[i]).find('input')[0]).val();
        				var MEMBERS = $($(rows[i]).find('input')[1]).val();
        				var TOTAL = $($(rows[i]).find('input')[2]).val();


                        if(Year == "")
        				{
        					alert('Please fill year to save');
        					return false;
        				}else if(DATE==""){
                            alert('Please fill Dates of meetings to save');
        					return false;
        				}else if(MEMBERS==""){
                            alert('Please fill No. of members attended to save');
        					return false;
        				}else if(TOTAL==""){
                            alert('Please fill Total no. of alumni enrolled (INR) to save');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','" + DATE + "','" + MEMBERS + "','" + TOTAL + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d543").slideToggle("slow");
                               rotate("tg543");
                               num_rows("tab543","ch543");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet543.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_543()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab543').find('tr');
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
                    num_rows("tab543","ch543");
        		};
          			   			 xhttp.open("GET", "fetch543.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg543"); $("#d543").slideToggle("slow");'>

        <div class="col-sm-1" id="ch543">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h543" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">5.4.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Number of Alumni Association /Chapters  meetings held during the last five years
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Report of the event
<br>* Upload any additional information
<br>* Number of Alumni Association / Chapters meetings conducted during the
last five years
	</div>
        </div>

        <div id="to543" class="col-sm-1">
            <br><img class="image flip"  id="tg543" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d543">
            <br>
    <script>

    	function addRow543()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;

           var C1 = '<td><center><select placeholder="" style="width:175px;" id="'+ay+'"></select></center></td>';



			var C2 = '<td><center><input type="date" placeholder="" style="width:150px;" required></center></td>';

			var C3 = '<td><center><input type="number" placeholder="" style="width:150px;" required></center></td>';



			var C4 = '<td><center><input type="number" placeholder="" style="width:150px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab543').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab543">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>

                <th style="width:250px; padding:20px;">Date of meeting</th>
                <th style="width:250px; padding:20px;">No. of members attended</th>
                <th style="width:250px; padding:20px;">Total no. of alumni enrolled</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow543()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save543($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<script>
        function load_time_func(){


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_3_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 1.3.1
            document.getElementById("TA1_1_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link5_3_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA1_1_1").placeholder = "Describe the Student Council activity and students role in academic & administrative bodies within a minimum of 500 characters and maximum of 500 words .";

            if(document.getElementById("TA1_1_1").value==""){
               document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_1_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 1.3.1
            document.getElementById("TA5_1_5").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link5_1_5").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA5_1_5").placeholder = "Describe the international students cell activities within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA5_1_5").value==""){
               document.getElementById("ch515").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch515").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_4_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 5.4.1
            document.getElementById("TA5_4_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link5_4_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA5_4_1").placeholder = "Describe contribution of alumni association to the institution within a minimum of 500 characters and maximum of 500 words";

            if(document.getElementById("TA5_4_1").value==""){
               document.getElementById("ch541").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch541").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }






   	<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_1_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>


			document.getElementById('choice_513').innerHTML='<option value="">Select</option><option value="7 or more of the above">7 or more of the above</option><option value="Any 6 of the above">Any 6 of the above</option><option value="Any 5 of the above">Any 5 of the above</option><option value="Any 4 of the above">Any 4 of the above</option><option value="Any 3 of the above">Any 3 of the above</option>';
		document.getElementById("choice_513").value = '<?php echo $row["choice_513"]; ?>';


	 	<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_4_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>


			document.getElementById('choice_542').innerHTML='<option value="">Select</option><option value="100 Lakhs">greater 100 Lakhs</option><option value="50Lakhs-100 Lakhs">50Lakhs - 100 Lakhs</option><option value="20 Lakhs-50 Lakhs">20 Lakhs  - 50 Lakhs</option><option value="5 Lakhs-20 Lakhs">5 Lakhs   -  20 Lakhs</option><option value="5 Lakhs">less than 5 Lakhs</option>';
		document.getElementById("choice_542").value = '<?php echo $row["choice_542"]; ?>';








    fetch_rows_511();
    fetch_rows_512();
    fetch_rows_513();
	fetch_rows_514();

	fetch_rows_516();

	fetch_rows_521();
	fetch_rows_522();
	fetch_rows_523();

	fetch_rows_531();
	fetch_rows_533();
	fetch_rows_542();
	fetch_rows_543();

  select_NA();

}


    function escapeHtml(text) {
      return text
          .replace(/&/g, "%26")
          .replace(/</g, "%3C")
          .replace(/>/g, "%3E")
          .replace(/"/g, "\\%22")
          .replace(/'/g, "\\%27")
          .replace(/#/g, "%23");
    }


    function select_NA(){

    <?php

      $sql_na = "Select * from not_applicable WHERE Username LIKE '".$_SESSION['username']."'";
      $res  = mysqli_query($connection,$sql_na) ; //or die(mysqli_error($connection));

      while ($row = $res->fetch_assoc()){
        if($row['section'][1]!=5){
          continue;
        }
        ?>

          $(document).ready(function(){
            $("#<?php echo $row['img_div']; ?>").html('<img src="../images/na.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Applicable</a>');
          });

        <?php
      }
    ?>

    }

    function maintain_session(){
      var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

             if (this.readyState == 4 && this.status == 200) {
                 console.log(this.responseText);
                      // alert(this.responseText);
            }
          };
                 xhttp.open("GET", "../profile/maintain_session.php?page=c5.php", true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send("rows="+rowss);
    }

    setInterval(function() { maintain_session(); }, 800000);


</script>




</body>

</html>
