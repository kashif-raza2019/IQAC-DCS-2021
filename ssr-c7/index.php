<?php
        session_start();
        include("../credential.php");
//        if(!isset($_SESSION['names'])) header('Location:../login.php');


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
/*
        $(document).ready(function(){
            $("#h111").click(function(){
                $("#d111").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h112").click(function(){
                $("#d112").slideToggle("slow");
            });
        });


        $(document).ready(function(){
            $("#h423").click(function(){
                $("#d423").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h121").click(function(){
                $("#d121").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h122").click(function(){
                $("#d122").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h131").click(function(){
                $("#d131").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h132").click(function(){
                $("#d132").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h134").click(function(){
                $("#d134").slideToggle("slow");
            });
        });

  */

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

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;
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
            console.log(tid+"Number of rows : "+l+"----"+tid);

            if(l>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }

	function num_tabs(tid,fid){
            l = $('#'+tid).find('table').length;
            console.log(tid+"Number of tables : "+l+"----"+tid);

            if(l>0){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }

    </script>

<link rel="icon" href="../logo.png">
<title>Criteria VII</title>


    <style>

        th,td{
            border:solid 1px gray;
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


       #d7110, #h7110, #d711, #h711, #d414, #h414, #d423, #h423, #d424, #h424, #d425, #h425, #d426, #h426, #d427, #h427, #d434, #h434, #d411,  #h411, #h412, #d412, #h421, #d421, #d422, #h422, #h432, #d432, #h433, #d433, #d431, #d441, #d442, #h431, #h441, #h442, #h413, #d413, #h714, #d714, #h715, #d715, #d716, #h716, #d717, #h717, #h718, #d718, #h719, #d719, #h7721, #d721{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

      #d7110,  #d711, #d414, #d423, #d424, #d425, #d426, #d427, #d434, #d411, #d412, #d421, #d422, #d432, #d433, #d431, #d441, #d442, #d413, #d714, #d715, #d716, #d717, #d718, #d719, #d721{
            padding: 10px;
            display: none;
        }



       #d7110, #h7110,  #d7111, #h7111,
        #d7112, #h7112,
        #d7113, #h7113,
        #d7114, #h7114,
        #d7115, #h7115,
        #d7116, #h7116,
        #d7117, #h7117,
        #d721, #h721,
        #d7118, #h7118,
        #d7119, #h7119,
        #d731, #h731
     {
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

#d7111,
#d7110,
#d7112,
#d7113,
#d7114,
#d7115,
#d7116,
#d7117,
#d721,
#d7118,
#d7119,
#d731{
            padding: 10px;
            display: none;
        }



    </style>

    <style>

        textarea{
            resize:none;
        }

        select{
			font-size:14px;
            width:10%;
            background-color:#ffffff;
            opacity:.92;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        input[type=text],input[type=number],textarea,input[type=date] {
			font-size:14px;
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
			font-size:14px;
            width: 650px;
            /*
            background-color: #0e3778;
            color: #EEEEEE;
            */
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

         button {
			 font-size:14px;
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
            background-color: #0e3778;
        }

        input[type=button]:hover {
            background-color: #0e3778;
        }


        button:hover {
            background-color: #0e3778;
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

<div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;background-color:#0E3778">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System - 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color:#0E3778;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778;"><a style="cursor: pointer" onclick="window.history.back();"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;background-color:#0E3778;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
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
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">Criterion 7 - Institutional Values and Best Practices </a></center>
        </div>
<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">7.1 Institutional Values and Social Responsibilities</a></center>

    </center>



<!-- 7.1.1-->

 <script>

    	function addRow711()
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

			var year = '<td><center><select placeholder="Year" style="width:180px;" id="'+ay+'"></select></center></td>';
			var C1 = '<td><center><input type="text" placeholder="Title of programme" style="width:180px;" required></center></td>';
			var C2 = '<td><center><input type="date"  placeholder="" style="width:180px;" required></center></td>';
			var C3 = '<td><center><input type="date"  placeholder="" style="width:180px;" required></center></td>';
			var C4 = '<td><center><input type="number" min="0"   placeholder="" style="width:180px;" required></center></td>';
			var C5 = '<td><center><input type="number" min="0"  placeholder="" style="width:180px;" required></center></td>';

			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+year +C1+C2+C3+C4+C5+CR+'</tr>';
    		var x = $('#tab711').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
    	}

    </script>

        <script>
      function save711(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var year = $($(rows[i]).find('select')[0]).val();
                        var titlep = $($(rows[i]).find('input')[0]).val();
						var datef = $($(rows[i]).find('input')[1]).val();
						var datet = $($(rows[i]).find('input')[2]).val();
						var numm = $($(rows[i]).find('input')[3]).val();
						var numf = $($(rows[i]).find('input')[4]).val();
                        if(year == "")
        				{
        					alert('Please Enter Year');
        					return false;
        				}else if(titlep==""){
                            alert('Please Enter Title of programme');
        					return false;
                        }
        				else if(datef==""){
							alert('Please Enter Date (from)');
        					return false;
						}else if(datet==""){
							alert('Please Enter Date (to)');
        					return false;
						}else if(numm==""){
							alert('Please Enter Number of Male participants');
        					return false;
						}else if(numf==""){
							alert('Please Enter Number of Female participants');
        					return false;
						}
						else
        				{

        				var idd = $(rows[i]).attr('id');
        				/*
						var budgeta = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var budgetu = $($(rows[i]).find('input[type="number"]')[1]).val();
        				var yeara = $($(rows[i]).find('select')[0]).val();
						*/
						//alert(yeara);

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ year + "','"+ titlep + "','" + datef + "','" + datet +"','"+numm+ "','" + numf+"','" + idd +"')";

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
                               $("#d711").slideToggle("slow");
                               rotate("tg711");
                               num_rows("tab711","ch711");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet711.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_711()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab711').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var ay = x[0];
	          			          var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
									//console.log(idd);
	            					idd = idd.substr(1);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));

                        select_NA();
    							}
        			}
                    num_rows("tab711","ch711");
                    select_NA();
        		};
          			   			 xhttp.open("GET", "fetch711.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg711"); $("#d711").slideToggle("slow");'>

        <div class="col-sm-1" id="ch711">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h711" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Number of gender equity promotion Programmes organized by the institution
during the last five years
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Report of the event
<br>* Upload any additional information
<br>* List of gender equity promotion Programmes organized by the institution
            </div>
        </div>

        <div id="to711" class="col-sm-1">
            <br><img class="image flip"  id="tg711" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d711">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <table border="0" id="tab711">
            <tr>
                <th style="width:100px; padding:10px;">Year</th>
            	<th style="width:250px; padding:10px;">Title of programme</th>
                <th style="width:100px; padding:10px;">Date (from)</th>
				<th style="width:100px; padding:10px;">Date (to)</th>
                <th style="width:250px; padding:10px;">Number of Male participants</th>
				  <th style="width:250px; padding:10px;">Number of Female participants</th>
            </tr>
            <!--<tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><input type="text" placeholder="Activity" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>-->

			<tr>
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow711()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save711($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>
</center>
    </div>

<!-- 7.1.2 ---- >






<!-- / 4.1.1-- -->


<!--
-->

        <script>

            function save412()
        	{
                link =  document.getElementById("link7_1_2").value;
                //ta = ta.value;

                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA4_1_2').value;

                link = escapeHtml(link);

                if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }
                desc = escapeHtml(desc);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d412").slideToggle("slow");
                               rotate("tg412");

                               if(document.getElementById("TA4_1_2").value==""){
                                    document.getElementById("ch412").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch412").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet712.php?desc="+desc+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg412"); $("#d412").slideToggle("slow");'>

        <div class="col-sm-1" id="ch412">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h412" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
         Institution shows gender sensitivity in providing facilities such as:<br> a) Safety and Security
<br>b) Counselling
<br>c) Common Room
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to412" class="col-sm-1">
            <br><img class="image flip"  id="tg412" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d412">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA4_1_2" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link4_1_2" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save412()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>














<!--
    5.4.2
-->




<!--
    4.1.3
-->

        <script>

            function save413()
        	{
                powerreq =  document.getElementById("i7_1_3_powerreq").value;
                powert= document.getElementById("i7_1_3_powert").value;
				ren=document.getElementById("i7_1_3_ren").value;
                reng= document.getElementById("i7_1_3_reng").value;
				es=document.getElementById("i7_1_3_es").value;

			   if(document.getElementById("i7_1_3_powerreq").value==""){
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Power requirement met by renewable energy sources');
									return false;
                                }else if (document.getElementById("i7_1_3_powert").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Total power requirement');
									return false;
                                }else if (document.getElementById("i7_1_3_ren").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Enter Renewable energy source');
									return false;
                                }else if (document.getElementById("i7_1_3_reng").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Enter Renewable energy generated and used');
									return false;

        		  			}else if (document.getElementById("i7_1_3_es").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('please Enter Energy supplied to the grid');
									return false;
							}else{
								document.getElementById("ch413").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                              alert(this.responseText);
                               $("#d413").slideToggle("slow");
                               rotate("tg413");
                               console.log(this.responseText);

						   }
							};


									xhttp.open("POST", "savet713.php?lcd="+powerreq+"&lan="+powert+"&semi="+ren+"&totalc="+reng+"&totals="+es, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg413"); $("#d413").slideToggle("slow");'>

        <div class="col-sm-1" id="ch413">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h413" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Alternate Energy initiatives such as:
Percentage of annual power requirement of the Institution met by the renewable energy sources
(current year Data in <b>kWh</b>)

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Upload details of power requirement of the university met by renewable
energy sources
            </div>
        </div>

        <div id="to413" class="col-sm-1">
            <br><img class="image flip"  id="tg413" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d413">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

<style>
  #tt713 th{
    padding: 5px;
  }
</style>

        <table id="tt713">
		<th><b>Power requirement met by renewable energy sources </b></th><th><b>Total power requirement</b></th><th><b>Renewable energy source</b><th><b>Renewable energy generated and used</b><th><b>Energy supplied to the grid</b></th>
		<tr><td><input type="text" min="0" id="i7_1_3_powerreq"> </td><td><input type="text" min="0" id="i7_1_3_powert"> </td>
		<td><input type="text" min="0" id="i7_1_3_ren"></td><td><input type="text" min="0" id="i7_1_3_reng"></td><td><input type="text" min="0" id="i7_1_3_es"></td>

		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save413()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>




<!-- 7.1.4  -->


     <script>

            function save714()
        	{
                powerreq =  document.getElementById("i7_1_4_tl").value;
                powert= document.getElementById("i7_1_4_led").value;
				ren=document.getElementById("i7_1_4_ls").value;

			   if(document.getElementById("i7_1_4_tl").value==""){
                                    document.getElementById("ch714").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Total Lighting requirements');
									return false;
                                }else if (document.getElementById("i7_1_4_led").value=="") {
                                    document.getElementById("ch714").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Percentage Lighting through LED bulbs');
									return false;
                                }else if (document.getElementById("i7_1_4_ls").value=="") {
                                    document.getElementById("ch714").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Percentage Lighting through other sources');
									return false;
                                }else{
								document.getElementById("ch714").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                              alert(this.responseText);
                               $("#d714").slideToggle("slow");
                               rotate("tg714");
                               console.log(this.responseText);

						   }
							};


									xhttp.open("POST", "savet714.php?lcd="+powerreq+"&lan="+powert+"&semi="+ren, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg714"); $("#d714").slideToggle("slow");'>

        <div class="col-sm-1" id="ch714">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h714" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
           Annual lighting power requirements met through LED bulbs  (current year data)
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Upload details of lighting power requirements met through LED bulbs
            </div>
        </div>

        <div id="to714" class="col-sm-1">
            <br><img class="image flip"  id="tg714" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d714">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <table>
		<th><b>Total Lighting requirements (kWh)</b></th><th><b>Lighting through LED bulbs (kWh)</b></th><th><b>Lighting through other sources (kWh)</b>
		<tr><td><input type="text" min="0" id="i7_1_4_tl"> </td><td><input type="number" step="0.01" min="0" id="i7_1_4_led"> </td>
		<td><input type="number" min="0" step="0.01" id="i7_1_4_ls"></td>

		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save714()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>



<!-- /7.1.4 -->

<!-- 7.1.5 -->


  <script>

            function save715()
        	{
                link =  document.getElementById("link7_1_5").value;
                //ta = ta.value;

                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA7_1_5').value;

                                link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

                                desc = escapeHtml(desc);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d715").slideToggle("slow");
                               rotate("tg715");

                               if(document.getElementById("TA7_1_5").value==""){
                                    document.getElementById("ch715").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch715").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet715.php?desc="+desc+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg715"); $("#d715").slideToggle("slow");'>

        <div class="col-sm-1" id="ch715">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h715" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.5<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
         Waste Management steps including:
<br />* Solid waste management
<br/>* Liquid waste management
<br />* E-waste management

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to715" class="col-sm-1">
            <br><img class="image flip"  id="tg715" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d715">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_1_5" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_5" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_1_5" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save715()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>




<!--/ 7.1.5 -->



<!-- 7.1.6 -->

 <script>

            function save716()
        	{
                link =  document.getElementById("link7_1_6").value;
                //ta = ta.value;

                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA7_1_6').value;


                                link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

                                desc = escapeHtml(desc);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d716").slideToggle("slow");
                               rotate("tg716");

                               if(document.getElementById("TA7_1_6").value==""){
                                    document.getElementById("ch716").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch716").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet716.php?desc="+desc+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg716"); $("#d716").slideToggle("slow");'>

        <div class="col-sm-1" id="ch716">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h716" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.6<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
        Rain water harvesting structures and utilization in the campus

	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to716" class="col-sm-1">
            <br><img class="image flip"  id="tg716" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d716">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_1_6" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_6" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_1_6" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save716()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>




<!-- /7.1.6 -->


<!--  7.1.7 -->


 <script>

            function save717()
        	{
                link =  document.getElementById("link7_1_7").value;
                //ta = ta.value;

                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA7_1_7').value;


                                link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

                                desc = escapeHtml(desc);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d717").slideToggle("slow");
                               rotate("tg717");

                               if(document.getElementById("TA7_1_7").value==""){
                                    document.getElementById("ch717").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch717").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet717.php?desc="+desc+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg717"); $("#d717").slideToggle("slow");'>

        <div class="col-sm-1" id="ch717">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h717" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.7<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
       Green Practices
	  <br/> * Students, staff using
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Bicycles
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspb) Public Transport
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Pedestrian Friendly Roads
<br/>* Plastic free campus
<br/>* Paperless office
<br/>* Green landscaping with trees and plants

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to717" class="col-sm-1">
            <br><img class="image flip"  id="tg717" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d717">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_1_7" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_7" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_1_7" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save717()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>


<!-- /7.1.7 -->


<!-- 7.1.8 -->

<script>
        	function save718(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var ACTIVITY = $($(rows[i]).find('input')[0]).val();
						   var c1 = $($(rows[i]).find('input')[1]).val();
						      var c2 = $($(rows[i]).find('input')[2]).val();


                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(ACTIVITY==""){
                            alert('Please fill Budget allocated for green initiatives');
        					return false;
        				}else if(c1==""){
                            alert('Please fill Expenditure on green initiatives and waste management excluding salary component ');
        					return false;
        				}else if(c2==""){
                            alert('Please fill Annual expenditure excluding salary component of the institution');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ ACTIVITY + "','"+c1+"','"+c2+"','" + idd +"')";
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
                               $("#d718").slideToggle("slow");
                               rotate("tg718");
                               num_rows("tab718","ch718");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet718.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_718()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab718').find('tr');
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
	            					//console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                        select_NA();
    							}
        			}
                    num_rows("tab718","ch718");
                    select_NA();
        		};
          			   			 xhttp.open("GET", "fetch718.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg718"); $("#d718").slideToggle("slow");'>

        <div class="col-sm-1" id="ch718">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h718" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.1.8<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Average percentage expenditure on green initiatives and waste management
excluding salary component during the last five years (INR in lakhs)

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Green audit report
<br>* Details of expenditure on green initiatives and waste management during the
last five years
		</div>
        </div>

        <div id="to718" class="col-sm-1">
            <br><img class="image flip"  id="tg718" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d718">
            <br>
    <script>

    	function addRow718()
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

            var C2 = '<td><center><input type="number" step=".01" min="0"  placeholder="" style="width:180px;" required></center></td>';

			 var C3 = '<td><center><input type="number" step=".01" min="0"  placeholder="" style="width:180px;" required></center></td>';
			  var C4 = '<td><center><input type="number" step=".01" min="0"  placeholder="" style="width:180px;" required></center></td>';



            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

            var x = $('#tab718').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab718">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Budget allocated for green initiatives</th>
<th style="width:250px; padding:20px;">Expenditure on green initiatives and waste management excluding salary component </th>
<th style="width:250px; padding:20px;">Annual expenditure excluding salary component of the institution</th>
            </tr>
			<tr>
				<td class="add"  colspan="2"><input class="add" type="image" src="../images/add2.png" onclick="addRow718()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save718($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">

</div>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>


<!-- /7.1.8 -->


<!-- 7.1.9 -->


<script>

    	function addRow719()
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

			var pf = '<td><center><input type="text"  required placeholder="Yes/No" style="width:160px;" required></center></td>';
			var lift = '<td><center><input type="text"  placeholder="Yes/No" style="width:200px;" required></center></td>';
			var ramp = '<td><center><input type="text" placeholder="Yes/No" style="width:120px;"></center></td>';
			var braille = '<td><center><input type="text" placeholder="Yes/No" style="width:120px;"></center></td>';
			var rest = '<td><center><input type="text"  placeholder="Yes/No" style="width:100px;" required></select></center></td>';
			var scribes = '<td><center><input type="text"  placeholder="Yes/No" style="width:100px;" required></select></center></td>';
			var special = '<td><center><input type="text" placeholder="Yes/No" style="width:150px;"></center></td>';
			var other = '<td><center><input type="text" placeholder="Any other facility" style="width:100px;"></center></td>';

			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+pf+lift+ramp+braille+rest+scribes+special+other+CR+'</tr>';
    		var x = $('#tab719').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
    	}

    </script>
	<div class="col-sm-12" onclick='rotate("tg719"); $("#d719").slideToggle("slow");'>

	  <div class="col-sm-1" id="ch719">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

 <div id="h719" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>7.1.9<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Resources available in the institution
<br/>1) Physical facilities
<br/>2) Provision for lift  Lift
<br/>3) Ramp / Rails
<br/>4) Braille Software/facilities
<br/>5) Rest Rooms designated
<br/>6) Scribes for examination
<br/>7) Special skill development for differently abled students
<br/>8) Any other similar facility (Specify)

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Link to photos and videos of facilities for divyangjan
<br>* Upload resources available in the institution for Divyangjan


            </div>
        </div>

        <div id="to719" class="col-sm-1">
            <br><img class="image flip"  id="tg719" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


    <div class="col-sm-12" id="d719">
	<div class="col-sm-4" style="margin-left:202px">
	<select id="choice_719" class="form-control" >
	<option value="">Select</option>
	<option value="Any  4 of the above"> 7 and more of the above</option>
	<option value="Any  3 of the above"> At least 6 of the above</option>
	<option value="Any  2 of the above">At least 4 of the above</option>
	<option value="Any  1 of the above">At least 2 of the above</option>
	<option value="None of the above">None of the above</option>
        </select>

	</div>
	<div class="col-sm-8">
	</div>


	<center>
        <br>
        <script>
        	function save719(table)
        	{	var rows = $(table).find('tr');
				if(rows.length==2){
					alert('Please Add atleast one Record.');
					return false;
				}


        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{	var choice_719= document.getElementById('choice_719').value;

        				var mem = $($(rows[i]).find('input')[0]).val();
						var sub = $($(rows[i]).find('input')[1]).val();
						var name = $($(rows[i]).find('input')[2]).val();
						var eres = $($(rows[i]).find('input')[3]).val();
						var validityf = $($(rows[i]).find('input')[4]).val();
						var validityt = $($(rows[i]).find('input')[5]).val();
						var reportf = $($(rows[i]).find('input')[6]).val();
						var access = $($(rows[i]).find('input')[7]).val();
						if(choice_719 == "")
        				{
        					alert('Please Select Any one option');
        					return false;
        				}
						else if(mem == "")
        				{
        					alert('Please Enter Physical facilities (Yes/ No)');
        					return false;
        				}
        				else if(sub==""){
							alert('Please Enter Provision for lift (Yes/ No)');
        					return false;
						}else if(name==""){
							alert('Please Enter Ramp/ Rails (Yes/ No)');
        					return false;
						}else if(eres==""){
							alert('Please Enter Braille Software/facilities (Yes/ No)');
        					return false;
						}else if(validityf==""){
							alert('Please Enter Rest Rooms (Yes/ No)');
        					return false;
						}else if(validityt==""){
							alert('Please Enter Scribes for examination (Yes/ No)');
        					return false;
						}else if(reportf==""){
							alert('Please Enter Special skill development for differently abled students (Yes/ No)');
        					return false;
						}else if(access==""){
							alert('Please Enter Any other similar facility');
        					return false;
						}else
        				{


        				var idd = $(rows[i]).attr('id');
        				/*var mem = $($(rows[i]).find('input[type="text"]')[0]).val();

        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[1]).val();
        				var activity  = $($(rows[i]).find('input[type="text"]')[2]).val();
        				if(activity == "")
        				{
        					alert('Please Enter the Activity.');
        					return false;
        				}
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" +  courseCode + "" + courseName + "" + activity + "" +  yearOfIntro); */
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ mem + "','"+ sub + "','" +  name + "','" + eres + "','" + validityf + "','" + validityt + "','"+reportf + "','" + access +"','" + idd +"','" + choice_719 +"')";
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
                              alert(this.responseText);
                               $("#d719").slideToggle("slow");
                               rotate("tg719");
                               num_rows("tab719","ch719");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet719.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_719()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab719').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');
	          			          //var bool_yesno = x[0];
	          			         //var cc = x[1];
	          			         // var ay = x[0];
	          			         // var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            				//	idd = idd.substr(1);
	            					//console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));
									//console.log('+==============================+'+$(ay).attr('value'));


    							}
        			}
                    num_rows("tab719","ch719");
        		};
          			   			 xhttp.open("GET", "fetch719.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table border="0" id="tab719">
            <tr>
                <th style="width:100px; padding:10px;">Physical facilities (Yes/ No)</th>
            	<th style="width:250px; padding:10px;">Provision for lift (Yes/ No)</th>
                <th style="width:100px; padding:10px;">Ramp/ Rails (Yes/ No)</th>
                <th style="width:250px; padding:10px;">Braille Software/facilities (Yes/ No)</th>
                <th style="width:80px; padding:10px;">Rest Rooms (Yes/ No)</th>
				<th style="width:80px; padding:10px;">Scribes for examination (Yes/ No)</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Special skill development for differently abled students (Yes/ No)</th>
				<th style="width:100px; padding:10px; padding-left:0px;">Any other similar facility</th>

            </tr>
            <!--<tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><input type="text" placeholder="Activity" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>-->

			<tr>
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow719()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save719($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>










<!-- jain edits -->




<!--
   7.1.10
-->
<script>
        	function save7110(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();

                       var NAME = $($(rows[i]).find('input')[0]).val();

                        var DATE_FROM = $($(rows[i]).find('input')[1]).val();

						var DATE_TO = $($(rows[i]).find('input')[2]).val();

						var ISSUES = $($(rows[i]).find('input')[3]).val();

						var NUMBER_PARTICIPANTS = $($(rows[i]).find('input')[4]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				} else if(NAME==""){
                            alert('Please fill Name of the initiative to save');
        					return false;
                        }else if(DATE_FROM==""){
                            alert('Please fill From Date to save');
        					return false;
        				}else if(DATE_TO==""){
                            alert('Please fill To Date to save');
						return false;
						}
                       else if(ISSUES==""){
                            alert('Please fill Issues addressed to save');
        					return false;
                        }
                       else if(NUMBER_PARTICIPANTS==""){
                            alert('Please fill Number Participants to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NAME + "','" + DATE_FROM + "','" + DATE_TO + "','"+ ISSUES + "','" + NUMBER_PARTICIPANTS + "','" + idd +"')";
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
                               $("#d7110").slideToggle("slow");
                               rotate("tg7110");
                               num_rows("tab7110","ch7110");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7110.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_7110()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab7110').find('tr');
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
                    num_rows("tab7110","ch7110");
        		};
          			   			 xhttp.open("GET", "fetch7110.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg7110"); $("#d7110").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7110">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h7110" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.1.10 <br><br>Q<sub>N</sub>M
</div>
            <div class="col-sm-11" style="font-size:18px;">
Number of specific initiatives to address locational advantages and
disadvantages during the last five years


<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Number of Specific initiatives to address locational advantages and
disadvantages
          </div>
        </div>

        <div id="to7110" class="col-sm-1">
            <br><img class="image flip"  id="tg7110" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d7110">
            <br>
    <script>

    	function addRow7110()
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

			var C2 = '<td><center><input type="text" placeholder="Name" style="width:150px;" required></center></td>';


            var C3 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';

            var C4 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';


			var C5 = '<td><center><input type="text" placeholder="Issue" style="width:150px;" required></center></td>';

			var C6 = '<td><center><input type="number" placeholder="Number" style="width:150px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab7110').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab7110">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>

				<th style="width:250px; padding:20px;">Name of the initiative</th>

				<th style="width:250px; padding:20px;">Date(from)</th>

                <th style="width:250px; padding:20px;">Date(to)</th>

				<th style="width:250px; padding:20px;">Issues addressed</th>

				<th style="width:250px; padding:20px;">Number of participating students and staff</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow7110()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save7110($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>

  <div class="col-sm-12">
    <hr/>
</div>





<!--
   7.1.11
-->
<script>
        	function save7111(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();

                       var NAME = $($(rows[i]).find('input')[0]).val();

                        var DATE_FROM = $($(rows[i]).find('input')[1]).val();

						var DATE_TO = $($(rows[i]).find('input')[2]).val();

						var ISSUES = $($(rows[i]).find('input')[3]).val();

						var NUMBER_PARTICIPANTS = $($(rows[i]).find('input')[4]).val();

                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				} else if(NAME==""){
                            alert('Please fill Name of the initiative to save');
        					return false;
                        }else if(DATE_FROM==""){
                            alert('Please fill From Date to save');
        					return false;
        				}else if(DATE_TO==""){
                            alert('Please fill To Date to save');
						return false;
						}
                       else if(ISSUES==""){
                            alert('Please fill Issues addressed to save');
        					return false;
                        }
                       else if(NUMBER_PARTICIPANTS==""){
                            alert('Please fill Number Participants to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ NAME + "','" + DATE_FROM + "','" + DATE_TO + "','"+ ISSUES + "','" + NUMBER_PARTICIPANTS + "','" + idd +"')";
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
                               $("#d7111").slideToggle("slow");
                               rotate("tg7111");
                               num_rows("tab7111","ch7111");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7111.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_7111()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab7111').find('tr');
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
                    num_rows("tab7111","ch7111");
        		};
          			   			 xhttp.open("GET", "fetch7111.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg7111"); $("#d7111").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7111">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h7111" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.1.11 <br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Number of initiatives taken to engage with and contribute to local community
during the last five years(Not addressed elsewhere)

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Upload the report of the event
<br>* Details of initiatives taken to engage with local community during the last five
years
            </div>
        </div>

        <div id="to7111" class="col-sm-1">
            <br><img class="image flip"  id="tg7111" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d7111">
            <br>
    <script>

    	function addRow7111()
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

			var C2 = '<td><center><input type="text" placeholder="Name" style="width:150px;" required></center></td>';


            var C3 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';

            var C4 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';


			var C5 = '<td><center><input type="text" placeholder="Issue" style="width:150px;" required></center></td>';

			var C6 = '<td><center><input type="number" placeholder="Number" style="width:150px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

            var x = $('#tab7111').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab7111">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>

				<th style="width:250px; padding:20px;">Name of the initiative</th>

				<th style="width:250px; padding:20px;">Date(from)</th>

                <th style="width:250px; padding:20px;">Date(to)</th>

				<th style="width:250px; padding:20px;">Issues addressed</th>

				<th style="width:250px; padding:20px;">Number of participating students and staff</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow7111()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save7111($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>





<!--
    7.1.12
-->

        <script>

            function save7112(ta)
        	{
                lcd =  document.getElementById("i7_1_12_lcd").value;
                lan= document.getElementById("i7_1_12_lan").value;


			   if(document.getElementById("i7_1_12_lcd").value==""){
                                    document.getElementById("ch7112").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Yes/No');
									return false;
                                }else if (document.getElementById("i7_1_12_lcd").value=="yes" && document.getElementById("i7_1_12_lan").value=="") {
                                    document.getElementById("ch7112").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else if (document.getElementById("i7_1_12_lcd").value=="Yes" && document.getElementById("i7_1_12_lan").value=="") {
                                    document.getElementById("ch7112").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else{
								document.getElementById("ch7112").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               $("#d7112").slideToggle("slow");
                               rotate("tg7112");
                               console.log(this.responseText);
                               alert(this.responseText);
						   }
							};


									xhttp.open("POST", "savet7112.php?lcd="+lcd+"&lan="+lan, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7112"); $("#d7112").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7112">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7112" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.12<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
         Code of conduct handbook exists for students, teachers, governing body, administration including Vice Chancellor / Director / Principal
/Officials and support staff


<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* URL to Handbook on code of conduct for students and teachers , manuals and
brochures on human values and professional ethics


            </div>
        </div>

        <div id="to7112" class="col-sm-1">
            <br><img class="image flip"  id="tg7112" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7112">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <table>
		<th style="width:250px; padding:20px;"><b>Yes/No</b></th>
		<th style="width:250px; padding:20px;"><b>Provide Link for support document</b></th>

		<tr>
		<td><input type="text" min="0"id="i7_1_12_lcd" maxlength="3" placeholder="yes/no"> </td>
		<td><input type="text" min="0" id="i7_1_12_lan" placeholder="link"> </td>


		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save7112( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>




<!--
    7.1.13
-->

        <script>

            function save7113(ta)
        	{
                lcd =  document.getElementById("i7_1_13_lcd").value;
                lan= document.getElementById("i7_1_13_lan").value;


			   if(document.getElementById("i7_1_13_lcd").value==""){
                                    document.getElementById("ch7113").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Yes/No');
									return false;
                                }else if (document.getElementById("i7_1_13_lcd").value=="yes" && document.getElementById("i7_1_13_lan").value=="") {
                                    document.getElementById("ch7113").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else if (document.getElementById("i7_1_13_lcd").value=="Yes" && document.getElementById("i7_1_13_lan").value=="") {
                                    document.getElementById("ch7113").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else{
								document.getElementById("ch7113").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d7113").slideToggle("slow");
                               rotate("tg7113");
                               console.log(this.responseText);

						   }
							};


									xhttp.open("POST", "savet7113.php?lcd="+lcd+"&lan="+lan, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7113"); $("#d7113").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7113">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7113" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.13<br><br>Q<sub>N</sub>M
</div>
            <div class="col-sm-11" style="font-size:18px;">
           Display of core values in the institution and on its website


<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Provide URL of website that displays core values

            </div>
        </div>

        <div id="to7113" class="col-sm-1">
            <br><img class="image flip"  id="tg7113" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7113">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <table>
		<th style="width:250px; padding:20px;"><b>Yes/No</b></th>
		<th style="width:250px; padding:20px;"><b>Provide Link for support document</b></th>

		<tr>
		<td><input type="text" min="0"id="i7_1_13_lcd" maxlength="3" placeholder="yes/no"> </td>
		<td><input type="text" min="0" id="i7_1_13_lan" placeholder="link"> </td>


		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save7113( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
   7.1.14
-->
<script>
        	function save7114(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();

                        var SNO = $($(rows[i]).find('input')[0]).val();

                        var TITLE = $($(rows[i]).find('input')[1]).val();

                        var DATE_FROM = $($(rows[i]).find('input')[2]).val();

						var DATE_TO = $($(rows[i]).find('input')[3]).val();

						var NUMBER_PARTICIPANTS = $($(rows[i]).find('input')[4]).val();

						var LINK = $($(rows[i]).find('input')[5]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(SNO==""){
                            alert('Please fill Serial number to save');
        					return false;
        				}else if(TITLE==""){
                            alert('Please fill Title of Program to save');
        					return false;
        				}else if(DATE_FROM==""){
                            alert('Please fill From Date to save');
        					return false;
        				}else if(DATE_TO==""){
                            alert('Please fill To Date to save');
        					return false;
                        }else if(NUMBER_PARTICIPANTS==""){
                            alert('Please fill Number Participants to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ SNO + "','"+ TITLE + "','" + DATE_FROM + "','" + DATE_TO + "','" + NUMBER_PARTICIPANTS + "','" + LINK + "','" + idd +"')";
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
                               $("#d7114").slideToggle("slow");
                               rotate("tg7114");
                               num_rows("tab7114","ch7114");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7114.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_7114()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab7114').find('tr');
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
                    num_rows("tab7114","ch7114");
        		};
          			   			 xhttp.open("GET", "fetch7114.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg7114"); $("#d7114").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7114">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h7114" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.1.14<br><br>Q<sub>N</sub>M
</div>
            <div class="col-sm-11" style="font-size:18px;">

              The institution plans and organizes appropriate activities to increase consciousness about national identities and symbols; Fundamental
Duties and Rights of Indian citizens and other constitutional obligations

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Details of activities organized to increase consciousness about national
identities and symbols
               </div>
        </div>

        <div id="to7114" class="col-sm-1">
            <br><img class="image flip"  id="tg7114" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d7114">
            <br>
    <script>

    	function addRow7114()
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

            var C2 = '<td><center><input type="text" placeholder="Number" style="width:150px;" required></center></td>';

			var C3 = '<td><center><input type="text" placeholder="Title" style="width:150px;" required></center></td>';

            var C4 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';

            var C5 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';

			var C6 = '<td><center><input type="number" placeholder="number of participants" style="width:150px;" required></center></td>';

			var C7 = '<td><center><input type="text" placeholder="link" style="width:150px;" required></center></td>';

            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+C7+CR+'</tr>';

            var x = $('#tab7114').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab7114">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Sl. No.</th>
                <th style="width:250px; padding:20px;">Title of the programme/Activity
</th>
                <th style="width:250px; padding:20px;">Date(from)</th>
                <th style="width:250px; padding:20px;">Date(to)</th> <th style="width:250px; padding:20px;">Number of Participants</th><th style="width:250px; padding:20px;">Link for supporting documents</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow7114()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save7114($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>



<!--
    7.1.15
-->

        <script>

            function save7115(ta)
        	{
                lcd =  document.getElementById("i7_1_15_lcd").value;
                lan= document.getElementById("i7_1_15_lan").value;


			   if(document.getElementById("i7_1_15_lcd").value==""){
                                    document.getElementById("ch7115").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Yes/No');
									return false;
                                }else if (document.getElementById("i7_1_15_lcd").value=="yes" && document.getElementById("i7_1_15_lan").value=="") {
                                    document.getElementById("ch7115").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else if (document.getElementById("i7_1_15_lcd").value=="Yes" && document.getElementById("i7_1_15_lan").value=="") {
                                    document.getElementById("ch7115").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else{
								document.getElementById("ch7115").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                              alert(this.responseText);
                               $("#d7115").slideToggle("slow");
                               rotate("tg7115");
                               console.log(this.responseText);

						   }
							};


									xhttp.open("POST", "savet7115.php?lcd="+lcd+"&lan="+lan, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7115"); $("#d7115").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7115">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7115" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.15 <br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
             The institution offers a course on Human Values and professional ethics

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Provide link to Courses on Human Values and professional ethics on
Institutional website
            </div>
        </div>

        <div id="to7115" class="col-sm-1">
            <br><img class="image flip"  id="tg7115" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7115">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <table>
		<th style="width:250px; padding:20px;"><b>Yes/No</b></th>
		<th style="width:250px; padding:20px;"><b>Provide Link for support document</b></th>

		<tr>
		<td><input type="text" min="0" id="i7_1_15_lcd" maxlength="3" placeholder="yes/no"> </td>
		<td><input type="text" min="0" id="i7_1_15_lan" placeholder="link"> </td>


		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save7115( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>



<!--
    7.1.16
-->

        <script>

            function save7116(ta)
        	{
                lcd =  document.getElementById("i7_1_16_lcd").value;
                lan= document.getElementById("i7_1_16_lan").value;


			   if(document.getElementById("i7_1_16_lcd").value==""){
                                    document.getElementById("ch7116").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Yes/No');
									return false;
                                }else if (document.getElementById("i7_1_16_lcd").value=="yes" && document.getElementById("i7_1_16_lan").value=="") {
                                    document.getElementById("ch7116").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else if (document.getElementById("i7_1_16_lcd").value=="Yes" && document.getElementById("i7_1_16_lan").value=="") {
                                    document.getElementById("ch7116").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter link for documents');
									return false;
                                }else{
								document.getElementById("ch7116").innerHTML = '<img src="../images/filled.png" width="52" height="52"> Filled';

							}

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                       alert(this.responseText);
                               $("#d7116").slideToggle("slow");
                               rotate("tg7116");
                               console.log(this.responseText);

						   }
							};


									xhttp.open("POST", "savet7116.php?lcd="+lcd+"&lan="+lan, true);
									xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);								}





        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7116"); $("#d7116").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7116">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7116" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.16<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
             The institutional functioning is as per professional code of prescribed / suggested by statutory bodies / regulatory authorities for different
professions
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Provide URL of supporting documents to prove institution functions as per
professional code

            </div>
        </div>

        <div id="to7116" class="col-sm-1">
            <br><img class="image flip"  id="tg7116" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7116">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <table>
		<th style="width:250px; padding:20px;"><b>Yes/No</b></th>
		<th style="width:250px; padding:20px;"><b>Provide Link for support document</b></th>

		<tr>
		<td><input type="text" min="0" id="i7_1_16_lcd" maxlength="3" placeholder="yes/no"> </td>
		<td><input type="text" min="0" id="i7_1_16_lan" placeholder="link"> </td>


		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save7116( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
   7.1.17
-->
<script>
        	function save7117(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var TITLE = $($(rows[i]).find('input')[0]).val();
                        var DATE_FROM = $($(rows[i]).find('input')[1]).val();
                        var DATE_TO = $($(rows[i]).find('input')[2]).val();
						var NUMBER_PARTICIPANTS = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(TITLE==""){
                            alert('Please fill Title of Program to save');
        					return false;
        				}else if(DATE_FROM==""){
                            alert('Please fill From Date to save');
        					return false;
        				}else if(DATE_TO==""){
                            alert('Please fill To Date to save');
        					return false;
                        }else if(NUMBER_PARTICIPANTS==""){
                            alert('Please fill Number Participants to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ TITLE + "','" + DATE_FROM + "','" + DATE_TO + "','" + NUMBER_PARTICIPANTS + "','" + idd +"')";
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
                               $("#d7117").slideToggle("slow");
                               rotate("tg7117");
                               num_rows("tab7117","ch7117");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7117.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_7117()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab7117').find('tr');
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
                    num_rows("tab7117","ch7117");
        		};
          			   			 xhttp.open("GET", "fetch7117.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg7117"); $("#d7117").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7117">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h7117" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.1.17 <br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">

              Number of activities conducted for promotion of universal values (Truth, Righteous conduct, Love, Non-Violence and peace); national
values, human values, national integration, communal harmony and social cohesion as well as for observance of fundamental duties during the
last five years
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* List of activities conducted for promotion of universal value
            </div>
        </div>

        <div id="to7117" class="col-sm-1">
            <br><img class="image flip"  id="tg7117" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d7117">
            <br>
    <script>

    	function addRow7117()
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
            var C2 = '<td><center><input type="text" placeholder="title of program" style="width:150px;" required></center></td>';
            var C3 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';
            var C4 = '<td><center><input type="date" placeholder="dd/mm/yy" style="width:150px;" required></center></td>';
			var C5 = '<td><center><input type="number" placeholder="number of participants" style="width:150px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab7117').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab7117">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Title of the programme/Activity
</th>
                <th style="width:250px; padding:20px;">Date(from)</th>
                <th style="width:250px; padding:20px;">Date(to)</th> <th style="width:250px; padding:20px;">Number of Participants</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow7117()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save7117($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>





<!-- 7.1.18
-->

<!--
-->

        <script>

            function save7118(ta)
        	{
                link =  document.getElementById("link7_1_18").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA7_1_18").value;
               // console.log(ta+"\n"+link);

                               link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

                               vu = escapeHtml(vu);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d7118").slideToggle("slow");
                               rotate("tg7118");

                               if(document.getElementById("TA7_1_18").value==""){
                                    document.getElementById("ch7118").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch7118").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7118.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7118"); $("#d7118").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7118">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7118" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.18 <br><br>Q<sub>L</sub>M
</div>
            <div class="col-sm-11" style="font-size:18px;">
         Institution organizes national festivals and birth / death anniversaries of the
great Indian personalities.


<br><br>Describe efforts of the Institution in organizing national festivals and birth /
death anniversaries of the great Indian personalities within a minimum of 500
characters and maximum of 500 words


            </div>
        </div>

        <div id="to7118" class="col-sm-1">
            <br><img class="image flip"  id="tg7118" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7118">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_1_18" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_18" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_1_18" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save7118( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>











<!-- 7.1.19
-->

<!--
-->

        <script>

            function save7119(ta)
        	{
                link =  document.getElementById("link7_1_19").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA7_1_19").value;
                //console.log(ta+"\n"+link);

                                link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

                                vu = escapeHtml(vu);


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d7119").slideToggle("slow");
                               rotate("tg7119");

                               if(document.getElementById("TA7_1_19").value==""){
                                    document.getElementById("ch7119").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch7119").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet7119.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg7119"); $("#d7119").slideToggle("slow");'>

        <div class="col-sm-1" id="ch7119">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h7119" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.1.19<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
          The institution maintains complete transparency in its financial, academic,
administrative and auxiliary functions


<br><br>Describe efforts of the Institution towards maintenance of complete
transparency in its financial, academic, administrative and auxiliary functions
within a minimum of 500 characters and maximum of 500 words
            </div>
        </div>

        <div id="to7119" class="col-sm-1">
            <br><img class="image flip"  id="tg7119" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d7119">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_1_19" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_1_19" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_1_19" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save7119( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>



     <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">7.2  Best Practices
</center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
   7.2.1 new
-->


<script>
        	function save721()
        	{
			var Tabs = $('#Tabs721').find('table');

        		if(Tabs.length == 200000) console.log("empty");
        		else {
        			var Tabss = "";
        			for(var i = 0; i < Tabs.length; i++)
        			{

		                       var I1 = $($(Tabs[i]).find('input')[0]).val();
		                       var T1 = $($(Tabs[i]).find('textarea')[0]).val();
		                       var T2 = $($(Tabs[i]).find('textarea')[1]).val();
		                       var T3 = $($(Tabs[i]).find('textarea')[2]).val();
		                       var T4 = $($(Tabs[i]).find('textarea')[3]).val();
		                       var T5 = $($(Tabs[i]).find('textarea')[4]).val();
		                       var T6 = $($(Tabs[i]).find('textarea')[5]).val();


	                        if(I1 == ""){
        				alert('Please Enter Title to save');
        				return false;
        			}else if(T1==""){
                            		alert('Please fill Objective to save');
        				return false;
                        	}else if(T2==""){
                            		alert('Please Enter Context to save');
        				return false;
        			}else if(T3==""){
                            		alert('Please fill Practice to save');
					return false;
				}else if(T4==""){
                	            alert('Please fill evidence to save');
       				    return false;
                        	}else if(T5==""){
                            		alert('Please fill Problems Encountered to save');
        				return false;
                        	}

        			else{
        				var idd = $(Tabs[i]).attr('id');
        					Tabss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ I1 + "','"+ T1 + "','" + T2 + "','" + T3 + "','"+ T4 + "','" + T5 + "','" + T6 + "','" + idd +"')";
        					if(i!=Tabs.length-1) Tabss+= ",";
        					else Tabss += ";";
        					console.log(Tabss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d721").slideToggle("slow");
                               rotate("tg721");
                               num_tabs("Tabs721","ch721");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet721.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+Tabss);
        		}
        	}


        	function fetch_rows_721()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			  var x = $('#Tabs721').append(this.responseText);


				   //console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');
	          			         // var ay = x[0];
                                  // var idd = $(ay).attr('id');


	          			           // idd = idd.substr(1);
                                    //console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_tabs("Tabs721","ch721");
        		};
          			   			 xhttp.open("GET", "fetch721.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg721"); $("#d721").slideToggle("slow");'>

        <div class="col-sm-1" id="ch721">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h721" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.2.1 <br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Describe at least two institutional best practices

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Link for any additional information
          </div>
        </div>

        <div id="to721" class="col-sm-1">
            <br><img class="image flip"  id="tg721" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d721">
            <br>

	<style>
		.no_border{
			border:0px;
			padding:5px;
		}
	</style>

    <script>

	function remove_tab(x){
        	var a =  confirm("Are you sure you want to remove this row?");

        	if(a){console.log($(x).parent().parent().parent().parent().parent().remove());}
        	else return false;
    	}

    	function addTab721()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;


	    var Ti1 = '<tr class="no_border"><th class="no_border">Title of the Practice</th> <td class="no_border"> <input type="text" placeholder="Title of the Practice"> </td></tr>';

	    var Ti2 = '<tr class="no_border"><th class="no_border">Objectives of the Practice</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="What are the objectives / intended outcomes of this “best practice” and what are the underlying principles or concepts of this practice (in about 100 words)?"></textarea> </td></tr>';

	    var Ti3 = '<tr class="no_border"><th class="no_border">The Context</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="What were the contextual features or challenging issues that needed to be addressed in designing and implementing this practice (in about 150 words)?"></textarea> </td></tr>';

	    var Ti4 = '<tr class="no_border"><th class="no_border">The Practice</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:200px;" placeholder="Describe the practice and its uniqueness in the context of India higher education. What were the constraints / limitations, if any, faced (in about 400 words)?"></textarea> </td></tr>';

	    var Ti5 = '<tr class="no_border"><th class="no_border">Evidence of Success</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Provide evidence of success such as performance against targets and benchmarks, review results. What do these results indicate? Describe in about 200 words."></textarea> </td></tr>';


	    var Ti6 = '<tr class="no_border"><th class="no_border">Problems Encountered <br>and Resources Required</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Please identify the problems encountered and resources required to implement the practice (in about 150 words)."></textarea> </td></tr>';


	    var Ti7 = '<tr class="no_border"><th class="no_border">Notes (Optional)</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Please add any other information that may be relevant for adopting/ implementing the Best Practice in other institutions (in about 150 words)."></textarea> </td></tr>';


	    var TiR = '<tr class="no_border"><td class="remove no_border" colspan="2"><center><button style="width:1000px;" onclick="remove_tab(this);" type="button" >Remove</button></center></td></tr>';

            var html = '<table style="margin-bottom:30px;" border="1" id="'+i+'">'+Ti1+Ti2+Ti3+Ti4+Ti5+Ti6+Ti7+TiR+'</table>';

   	    $("#Tabs721").append(html);
    	}
    </script>


	<div id="ver721" class="col-sm-12">

		<div id="Tabs721">

		</div>

		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<input class="add" type="image" src="../images/add2.png" onclick="addTab721()" alt="Submit" width="48" height="48">
		</div>
		<div class="col-sm-8"></div>
	</div>

        <input type="button" class="SAVE" onclick="save721()" value="SAVE CHANGES" style="margin-left:0px;">



<!--
    <form>

        <table border="0" id="tab721">
            <tr>
                <th style="width:250px; padding:20px;">Title of the Practice</th>

				<th style="width:250px; padding:20px;"> Objectives of the Practice</th>

				<th style="width:250px; padding:20px;"> The Context</th>

		                <th style="width:250px; padding:20px;">The Practice</th>

				<th style="width:250px; padding:20px;">Evidence of Success</th>

				<th style="width:250px; padding:20px;"> Problems Encountered and Resources Required</th>

				<th style="width:250px; padding:20px;"> Notes (Optional)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow721()" alt="Submit" width="48" height="48">

			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save721($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>
-->
        </div>
    </center>






<!--
   7.2.1 new
-->
<!--

<script>
        	function save721(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{

                       var TITLE = $($(rows[i]).find('input')[0]).val();

                        var OBJECTIVE = $($(rows[i]).find('input')[1]).val();

						var CONTEXT = $($(rows[i]).find('input')[2]).val();

						var PRACTICE = $($(rows[i]).find('input')[3]).val();

						var EVIDENCE = $($(rows[i]).find('input')[4]).val();

						var PROBLEM = $($(rows[i]).find('input')[5]).val();

						var NOTES = $($(rows[i]).find('input')[6]).val();

                        if(TITLE == "")
        				{
        					alert('Please Enter Title to save');
        					return false;
        				} else if(OBJECTIVE==""){
                            alert('Please fill Objective to save');
        					return false;
                        }else if(CONTEXT==""){
                            alert('Please Enter Context to save');
        					return false;
        				}else if(PRACTICE==""){
                            alert('Please fill Practice to save');
						return false;
						}
                       else if(EVIDENCE==""){
                            alert('Please fill evidence to save');
        					return false;
                        }
                       else if(PROBLEM==""){
                            alert('Please fill Problems Encountered to save');
        					return false;
                        }
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ TITLE + "','"+ OBJECTIVE + "','" + CONTEXT + "','" + PRACTICE + "','"+ EVIDENCE + "','" + PROBLEM + "','" + NOTES + "','" + idd +"')";
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
                               $("#d721").slideToggle("slow");
                               rotate("tg721");
                               num_rows("tab721","ch721");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet721.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_721()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab721').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
   					   //console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');
	          			         // var ay = x[0];
                                  // var idd = $(ay).attr('id');


	          			           // idd = idd.substr(1);
                                    //console.log(i+"****"+idd+"******************");
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));

    							}
        			}
                    num_rows("tab721","ch721");
        		};
          			   			 xhttp.open("GET", "fetch721.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg721"); $("#d721").slideToggle("slow");'>

        <div class="col-sm-1" id="ch721">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h721" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">7.2.1 <br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
Describe at least two institutional best practices

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Link for any additional information
          </div>
        </div>

        <div id="to721" class="col-sm-1">
            <br><img class="image flip"  id="tg721" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d721">
            <br>
    <script>

    	function addRow721()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;



			var C1 = '<td><center><input type="text" placeholder="Title" style="width:150px;" required></center></td>';


           var C2 = '<td><center><input type="text" placeholder="Objective" style="width:150px;" required></center></td>';

		//var C2 = '<td style="height:200px; padding:0px;"><center><textarea style="height:200px; padding:0px;"></textarea></center></td>';

		   var C3 = '<td><center><input type="text" placeholder="context" style="width:150px;" required></center></td>';

		   var C4 = '<td><center><input type="text" placeholder="practice" style="width:150px;" required></center></td>';


		   var C5 = '<td><center><input type="text" placeholder="evidence of success" style="width:150px;" required></center></td>';


		   var C6 = '<td><center><input type="text" placeholder="problems encountered" style="width:150px;" required></center></td>';

			  var C7 = '<td><center><input type="text" placeholder="notes" style="width:150px;" required></center></td>';


            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+C7+CR+'</tr>';

            var x = $('#tab721').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab721">
            <tr>
                <th style="width:250px; padding:20px;">Title of the Practice</th>

				<th style="width:250px; padding:20px;"> Objectives of the Practice</th>

				<th style="width:250px; padding:20px;"> The Context</th>

                <th style="width:250px; padding:20px;">The Practice</th>

				<th style="width:250px; padding:20px;">Evidence of Success</th>

				<th style="width:250px; padding:20px;"> Problems Encountered and Resources Required</th>

				<th style="width:250px; padding:20px;"> Notes (Optional)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow721()" alt="Submit" width="48" height="48">
			</tr>

        </table>


        <input type="button" class="SAVE" onclick="save721($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


-->



<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>


     <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">7.3  Institutional Distinctiveness
</center>



<!-- 7.3.1
-->

<!--
-->

        <script>

            function save731(ta)
        	{
                link =  document.getElementById("link7_3_1").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA7_3_1").value;
               // console.log(ta+"\n"+link);
               link = escapeHtml(link);
if(link==""){
  alert('Please provide link of the relevant document');
  return false;
}

               vu = escapeHtml(vu);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d731").slideToggle("slow");
                               rotate("tg731");

                               if(document.getElementById("TA7_3_1").value==""){
                                    document.getElementById("ch731").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch731").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet731.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg731"); $("#d731").slideToggle("slow");'>

        <div class="col-sm-1" id="ch731">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h731" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">7.3.1<br><br>Q<sub>L</sub>M
</div>
            <div class="col-sm-11" style="font-size:18px;">
              Describe/Explain the performance of the institution in one area distinctive to
    its vision, priority and thrust
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Link for additional information

            </div>
        </div>

        <div id="to731" class="col-sm-1">
            <br><img class="image flip"  id="tg731" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d731">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA7_3_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link7_3_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link7_3_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save731( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
















    <script>
        function load_time_func(){



			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_1_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 1.3.1
         /*
            document.getElementById("TA4_1_1").value = '<?php //echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link4_1_1").value = '<?php //echo urldecode($row["Link"]); ?>';
            document.getElementById("TA4_1_1").placeholder = "Describe the adequacy of facilities for teaching –learning as per theminimum specified requirement by statutory bodies within minimum500 characters and maximum 500 words";

            if(document.getElementById("TA4_1_1").value==""){
               document.getElementById("ch411").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch411").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }
		     */

		//4.1.2
			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

		document.getElementById("TA4_1_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA4_1_2").placeholder = "Describe gender equity initiatives undertaken by the Institution on the specified areas within a minimum of 500 characters and maximum of 500 words each";

            if(document.getElementById("TA4_1_2").value==""){
               document.getElementById("ch412").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch412").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }





<!-- 7.1.5 -->


	<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

		document.getElementById("TA7_1_5").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_5").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_1_5").placeholder = "Describe efforts towards waste management on campus within a minimum of 500 characters and maximum of 500 words each";

            if(document.getElementById("TA7_1_5").value==""){
               document.getElementById("ch715").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch715").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }



 <!-- 7.1.7 --->

 <?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_7 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

		document.getElementById("TA7_1_7").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_7").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_1_7").placeholder = "Describe efforts towards green practices on the campus within a minimum of 500 characters and maximum of 500 words ";

            if(document.getElementById("TA7_1_7").value==""){
               document.getElementById("ch717").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch717").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }


 <!--  7.1.7 -->






  	<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_6 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];?>

		document.getElementById("TA7_1_6").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_6").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_1_6").placeholder = "Describe efforts towards rain water harvesting on the campus within aminimum 500 characters and Maximum 500 words ";

            if(document.getElementById("TA7_1_6").value==""){
               document.getElementById("ch716").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch716").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }






<!-- 7.1.5 -->





<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.1.3
			document.getElementById("i7_1_3_powerreq").value = '<?php echo $row["powerreq"]; ?>';
			document.getElementById("i7_1_3_powert").value= '<?php echo $row["powert"]; ?>';
			document.getElementById("i7_1_3_ren").value ='<?php echo $row["ren"]; ?>';
			document.getElementById("i7_1_3_reng").value= '<?php echo $row["reng"]; ?>';
			document.getElementById("i7_1_3_es").value ='<?php echo $row["es"]; ?>';

		var lcd =  document.getElementById("i7_1_3_powerreq").value;
            var    lan= document.getElementById("i7_1_3_powert").value;
			var	semi=document.getElementById("i7_1_3_ren").value;
				var totalc= document.getElementById("i7_1_3_reng").value;
					var 	totals= document.getElementById("i7_1_3_es").value;

		if(lcd =="" || lan=="" || semi==""||totalc==""||totals==""){

               document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch413").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }









			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.1.3
			document.getElementById("i7_1_4_tl").value = '<?php echo $row["tl"]; ?>';
			document.getElementById("i7_1_4_led").value= '<?php echo $row["led"]; ?>';
			document.getElementById("i7_1_4_ls").value ='<?php echo $row["ls"]; ?>';


		var lcd =  document.getElementById("i7_1_4_tl").value;
            var    lan= document.getElementById("i7_1_4_led").value;
			var	semi=document.getElementById("i7_1_4_ls").value;


		if(lcd =="" || lan=="" || semi==""){

               document.getElementById("ch714").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch714").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


















			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_9 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.1.3



			document.getElementById('choice_719').innerHTML='<option value="">Select</option><option value="Any  4 of the above"> 7 and more of the above</option><option value="Any  3 of the above"> At least 6 of the above</option><option value="Any  2 of the above">At least 4 of the above</option><option value="Any  1 of the above">At least 2 of the above</option><option value="None of the above">None of the above</option>';
		document.getElementById("choice_719").value = '<?php echo $row["choice_719"]; ?>';







		//1.1.3 Loading all rows that are already saved




		// jain edits ----------------------------


	   // 7.1.12




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_12 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

				  console.log("page_c7_ENTERED ONLLOAD loaded");



			document.getElementById("i7_1_12_lcd").value = '<?php echo $row["yes_no"]; ?>';
			document.getElementById("i7_1_12_lan").value= '<?php echo urldecode($row["link"]); ?>';


				lcd =  document.getElementById("i7_1_12_lcd").value;
                lan= document.getElementById("i7_1_12_lan").value;
				  console.log("LCD=="+lcd);
				  console.log("lan=="+lan);

		if(lcd =="" || lan==""){

               document.getElementById("ch7112").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7112").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_16 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

				  console.log("page_c7_ENTERED ONLLOAD loaded");


        // 7.1.13


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_13 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

				  console.log("page_c7_ENTERED ONLLOAD loaded");



			document.getElementById("i7_1_13_lcd").value = '<?php echo $row["yes_no"]; ?>';
			document.getElementById("i7_1_13_lan").value= '<?php echo urldecode($row["link"]); ?>';


				lcd =  document.getElementById("i7_1_13_lcd").value;
                lan= document.getElementById("i7_1_13_lan").value;
				  console.log("LCD=="+lcd);
				  console.log("lan=="+lan);

		if(lcd =="" || lan==""){

               document.getElementById("ch7113").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7113").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 7.3.1
            document.getElementById("TA7_3_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_3_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_3_1").placeholder = "Describe the institutional performance in one area distinctive to its vision,priority and thrust within a minimum of 500 characters and maximum of 1000 words ";
            if(document.getElementById("TA7_3_1").value==""){
               document.getElementById("ch731").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch731").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_19 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 7.3.1
            document.getElementById("TA7_1_19").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_19").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_1_19").placeholder = "Describe efforts of the Institution towards maintenance of complete transparency in its financial, academic, administrative and auxiliary functions within a minimum of 500 characters and maximum of 500 words";
            if(document.getElementById("TA7_1_19").value==""){
               document.getElementById("ch7119").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7119").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_18 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 7.1.18
            document.getElementById("TA7_1_18").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link7_1_18").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA7_1_18").placeholder = "Describe efforts of the Institution in organizing national festivals and birth /death anniversaries of the great Indian personalities within a minimum of 500 characters and maximum of 500 words ";
            if(document.getElementById("TA7_1_18").value==""){
               document.getElementById("ch7118").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7118").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");












<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_16 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

				  console.log("page_c7_ENTERED ONLLOAD loaded");


        // 7.1.16
			document.getElementById("i7_1_16_lcd").value = '<?php echo $row["yes_no"]; ?>';
			document.getElementById("i7_1_16_lan").value= '<?php echo urldecode($row["link"]); ?>';


				lcd =  document.getElementById("i7_1_16_lcd").value;
                lan= document.getElementById("i7_1_16_lan").value;
				  console.log("LCD=="+lcd);
				  console.log("lan=="+lan);

		if(lcd =="" || lan==""){

               document.getElementById("ch7116").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7116").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_15 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

				  console.log("page_c7_ENTERED ONLLOAD loaded");


        // 7.1.16
			document.getElementById("i7_1_15_lcd").value = '<?php echo $row["yes_no"]; ?>';
			document.getElementById("i7_1_15_lan").value= '<?php echo urldecode($row["link"]); ?>';


				lcd =  document.getElementById("i7_1_15_lcd").value;
                lan= document.getElementById("i7_1_15_lan").value;
				  console.log("LCD=="+lcd);
				  console.log("lan=="+lan);

		if(lcd =="" || lan==""){

               document.getElementById("ch7115").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch7115").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }




    fetch_rows_7117();
    fetch_rows_7111();
    fetch_rows_7110();
    fetch_rows_7114();
    fetch_rows_721();






        	fetch_rows_711();
			fetch_rows_718();
			fetch_rows_719();

      select_NA();

/*        	fetch_rows_122();
        	fetch_rows_132();
        	fetch_rows_134();
 */
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
        if($row['section'][1]!=7){
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
                 xhttp.open("GET", "../profile/maintain_session.php?page=c7.php", true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send("rows="+rowss);
    }

    setInterval(function() { maintain_session(); }, 800000);


    </script>

</body>
</html>
