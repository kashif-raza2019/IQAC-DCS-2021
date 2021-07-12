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
  <link rel="stylesheet" href="../css/w3_l.css">

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>


    <script>

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
            $("#h113").click(function(){
                $("#d113").slideToggle("slow");
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
            $("#h142").click(function(){
                $("#d142").slideToggle("slow");
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

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;
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
<title>Information Gathering System</title>


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


        #d111, #h111, #d112, #h112, #d113, #h113, #d121, #h121, #d122, #h122, #d131, #h131, #d132, #h132, #d134, #h134, #d141, #h141, #d142, #h142{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d111, #d112, #d113, #d121, #d122, #d131, #d132,#d134, #d141, #d142{
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

        .input_2{
            background-color:#ffffff;
            opacity:.92;
            width: 80%;
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

    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
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

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px;">

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
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 1 - CURRICULAR ASPECTS</a></center>
        </div>
<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">1.1 Curriculum Design and Development</a></center>

    </center>
<!--
    1.1.1
-->

        <script>

            function save111()
        	{
                //link =  document.getElementById("link1_1_1").value;
               // ta = ta.value;
               var valu= document.getElementById("TA1_1_1").value;
                //console.log(ta+"\n"+link);

                if($("#link1_1_1").val()==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                link = $("#link1_1_1").val();

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d111").slideToggle("slow");
                               rotate("tg111");

                               if(document.getElementById("TA1_1_1").value=="" || link==""){
                                    document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet111.php?desc="+valu+"&link="+link, true);
         			   			 xhttp.send();
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
            <div class="col-sm-1"  style="font-size:18px;">1.1.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Curricula developed /adopted have relevance to the local/ national / regional/global developmental needs with learning objectives including Programme outcomes, Programme specific outcomes and course outcomes of all the Programme offered by the University.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Minutes of relevant Academic Council/BOS meeting
                <br>* Any additional information
                <br>* Details of Programme syllabus revision in last 5 years
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

        <input type="text" id="link1_1_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>
<!--
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link1_1_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
-->
        </div>

        <input type="button" class="SAVE" onclick="save111( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    1.1.2
-->
<script>
        	function save112(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                        var percent = $($(rows[i]).find('input')[1]).val();
                        link = $($(rows[i]).find('input')[2]).val();

                if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(percent==""){
                            alert('Please select valid percentage to save');
        					return false;
                        }
        				else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else{

        				var idd = $(rows[i]).attr('id');
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var percent = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();

                  programmeCode = escapeHtml(programmeCode);
                  programmeName = escapeHtml(programmeName);
                  yearOfIntro = escapeHtml(yearOfIntro);
                  percent = escapeHtml(percent);
                  link = escapeHtml(link);
                  idd = escapeHtml(idd);

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" + yearOfIntro + "','" + percent + "','" + link + "','" + idd +"')";

                  alert(link + rowss);

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
                               $("#d112").slideToggle("slow");
                               rotate("tg112");
                               num_rows("tab112","ch112");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet112.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_112()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab112').find('tr');
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
                    num_rows("tab112","ch112");
        		};
          			   			 xhttp.open("GET", "fetch112.php", true);
         			   			 xhttp.send();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg112"); $("#d112").slideToggle("slow");'>

        <div class="col-sm-1" id="ch112">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h112" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.1.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>How many Programmes were revised out of total number of Programmes offered during the last five years.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Upload Additional information
                <br>* Link for Additional information
            </div>
        </div>

        <div id="to112" class="col-sm-1">
            <br><img class="image flip"  id="tg112" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d112">
            <br>
    <script>

    	function addRow112()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;
            var li = "l"+i;

            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/

            var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td> <td><center><select placeholder="Year" style="width:165px;" id="'+ay+'"></select></center></td><td><center><input id="'+per+'" type="number" step="0.5" min="0" max="100" onkeyup="percent_limit_input(this.value,this.id,event)"  placeholder="Percentage" style="width:120px;" required></center></td> <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td> <td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    		var x = $('#tab112').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    	function addRow113()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var li = "l"+i;


    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;"></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ic+'" onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" ></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><input type="text" placeholder="Activity" style="width:250px;" ></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:165px;" ></select></center></td>  <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    		var x = $('#tab113').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab112">
            <tr>
                <th style="width:150px; padding:20px;">Programme Code of Revised Syllabus</th>
                <th style="width:250px; padding:20px;">Programme Name of Revised Syllabus</th>
                <th style="width:80px; padding:20px;">Year of Revision</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Percentage of Syllabus content added or replaced</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow112()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save112($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    1.1.3
-->


    <div class="col-sm-12" onclick='rotate("tg113"); $("#d113").slideToggle("slow");' >

        <div class="col-sm-1" id="ch113">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h113" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.1.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Average percentage of courses having focus on employability/ entrepreneurship/ skill development.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Any additional information
                <br>* Programme/ Curriculum/ Syllabus of the courses
                <br>* Minutes of the Boards of Studies/ Academic Council meetings with approvals for these courses
                <br>* MoU's with relevant organizations for these courses, if any
                <br>* Average percentage of courses having focus on employability/entrepreneurship
            </div>
        </div>

        <div id="to113" class="col-sm-1">
            <br><img class="image flip"  id="tg113" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>

<!-- style="width:100%; overflow-x:auto;"  -->

    <div class="col-sm-12" id="d113" style="">

        <br>
        <script>
        	function save113(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                link = $($(rows[i]).find('input')[3]).val();

        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else{
                  var idd = $(rows[i]).attr('id');
        				  var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
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

                   programmeCode=escapeHtml( programmeCode);
                   programmeName =escapeHtml( programmeName);
                   courseCode=escapeHtml(courseCode);
                   courseName=escapeHtml(courseName);
                   activity=escapeHtml(activity);
                   yearOfIntro=escapeHtml(yearOfIntro);
                   link=escapeHtml(link);
                   idd=escapeHtml(idd);

        					console.log(""+ programmeCode + ""+ programmeName + "" +  courseCode + "" + courseName + "" + activity + "" +  yearOfIntro);
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  courseCode + "','" + courseName + "','" + activity + "','" +  yearOfIntro + "','" + link + "','" + idd +"')";
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
                               $("#d113").slideToggle("slow");
                               rotate("tg113");
                               num_rows("tab113","ch113");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet113.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_113()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab113').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab113","ch113");
        		};
          			   			 xhttp.open("GET", "fetch113.php", true);
         			   			 xhttp.send();
        	}
		</script>
    <form>

        <table border="0" id="tab113">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
            	<th style="width:250px; padding:10px;">Name of the Programme</th>
                <th style="width:100px; padding:10px;">Course Code</th>
                <th style="width:250px; padding:10px;">Name of the Course</th>
                <th style="width:80px; padding:10px;">Activities with direct bearing (effect) on Employability/ Entrepreneurship/ Skill development</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Introduction</th>
                <th style="width:200px; padding:10px; padding-left:0px;">Link of the relevant document</th>

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
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow113()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save113($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>



<!--
    1.2.1
-->
        <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">1.2 Academic Flexibility</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

    <script>
        	function save121(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                link = $($(rows[i]).find('input')[2]).val();

          			if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }
        				else
        				{


        				var idd = $(rows[i]).attr('id');
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[1]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
                programmeCode = escapeHtml(programmeCode);
                programmeName = escapeHtml(programmeName);
                yearOfIntro = escapeHtml(yearOfIntro);
                link = escapeHtml(link);
                idd = escapeHtml(idd);

        					console.log(""+ programmeCode + ""+ programmeName + "" +  courseCode + "" + courseName +  "" +  yearOfIntro);
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  courseCode + "','" + courseName + "','" +  yearOfIntro + "','" + link + "','" + idd +"')";
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
                               $("#d121").slideToggle("slow");
                               rotate("tg121");
                               num_rows("tab121","ch121");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_2_1", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_121()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab121').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           console.log(y);
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab121","ch121");
        		};
          			   			 xhttp.open("GET", "fetch121.php", true);
         			   			 xhttp.send();
        	}
		</script>





    <div class="col-sm-12" onclick='rotate("tg121"); $("#d121").slideToggle("slow");'>

        <div class="col-sm-1" id="ch121">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h121" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.2.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Percentage of new courses introduced of the total number of courses across all Programmes offered during the last five years.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Minutes of relevant Academic Council/BOS meeting
                <br>* Any additional information
                <br>* Institutional data in prescribed format
            </div>
        </div>

        <div id="to121" class="col-sm-1">
            <br><img class="image flip"  id="tg121" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>
<center>
    <div class="col-sm-12" id="d121">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>

        function remove_row(x){
            var a =  confirm("Are you sure you want to remove this row?");
            if(a){console.log($(x).parents()[2].remove());}
            else return false;
        }

        function addRow121()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var li = "l"+i;

    		var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" required class="programmeCode" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;"></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ic+'" required onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" ></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:165px;" required></select></center></td>  <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab121').find('tr');
   			$(x[x.length-1]).before(html);



            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab121">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:250px; padding:10px;">Programme Name</th>
                <th style="width:100px; padding:10px;">Course Code</th>
                <th style="width:150px; padding:10px;">Name of the new course introduced in last 5 years</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Introduction</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>
            -->
			<tr>
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow121()" alt="Submit" width="48" height="48">
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow121()">Add a new Row</button></td>-->
			</tr>
        </table>

        <br><br>

        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save121($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>

    </center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--1.2.2-->

<script>
        	function save122(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                link = $($(rows[i]).find('input')[3]).val();

        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else{

        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				var idd = $(rows[i]).attr('id');
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var type = $($(rows[i]).find('input[type="radio"]:checked')[0]).val();
        				console.log(type);
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();
        				if(type == "" || type == undefined)
        				{
        					alert('Please select type of the Course');
        					return false;
        				}
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}


                                                                programmeCode=escapeHtml( programmeCode);
                                                                programmeName=escapeHtml( programmeName);
                                                                type=escapeHtml(type);
                                                                yearOfIntro=escapeHtml(yearOfIntro);
                                                                link=escapeHtml(link);
                                                                idd=escapeHtml(idd);


        					console.log(""+ programmeCode + ""+ programmeName + "" + type +  "" +  yearOfIntro);
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  type + "','" +  yearOfIntro + "','" + link + "','" + idd +"')";
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
                               $("#d122").slideToggle("slow");
                               rotate("tg122");
                               num_rows("tab122","ch122");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_2_2", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_122()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab122').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log(x);
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
                    num_rows("tab122","ch122");
        		};
          			   			 xhttp.open("GET", "fetch122.php", true);
         			   			 xhttp.send();
        	}
		</script>



    <div class="col-sm-12" onclick='rotate("tg122"); $("#d122").slideToggle("slow");'>

        <div class="col-sm-1" id="ch122">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h122" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.2.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
             Percentage of programs in which Choice Based Credit System (CBCS)/elective course system has been implemented.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Any additional information
                <br>* Minutes of relevant Academic Council/BOS meeting
                <br>* Institutional data in prescribed format
            </div>
        </div>

        <div id="to122" class="col-sm-1">
            <br><img class="image flip"  id="tg122" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d122">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           var radioNumber122 = 0;
        function addRow122()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var li = "l"+i;

    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td width="300px"><center><input type="radio" name="type'+radioNumber122+'" value="CBCS">CBCS  <input type="radio" name="type'+radioNumber122+'" value="Elective"> Elective</center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:165px;" required></select></center></td>  <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		radioNumber122++;
    		var x = $('#tab122').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab122">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:250px; padding:10px;">Name of Program adopting CBCS/Elective Course System</th>
                <th style="width:100px; padding:10px;">Type of Course</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Implementation</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><input type="radio" name="type" value="CBCS">CBCS / Elective <input type="radio" name="type" value="Elective"></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>
            -->
			<tr>
<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow122()" alt="Submit" width="48" height="48">
				<!--<td colspan="4"><button value="" width="500px" onclick="addRow122()">Add a new Row</button></td>-->
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save122($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>

</center>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>


<!--
    1.3.1
-->

                <script>

            function save131(ta)
        	{
              // ta = ta.value;
               var vu= document.getElementById("TA1_3_1").value;
               // console.log(ta+"\n"+link);

               if($("#link1_3_1").val()==""){
                 alert("Please provide link of the relevant document");
                 return false;
               }

               link = $("#link1_3_1").val();


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d131").slideToggle("slow");
                               rotate("tg131");

                               if(document.getElementById("TA1_3_1").value=="" || link==""){
               document.getElementById("ch131").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch131").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet131.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>

        <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">1.3 Curriculum Enrichment</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



    <div class="col-sm-12" onclick='rotate("tg131"); $("#d131").slideToggle("slow");'>

        <div class="col-sm-1" id="ch131">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h131" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.3.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Institution integrates cross cutting issues relevant to Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum.
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Any additional information
                <br>* Upload the list and description of the courses which address the Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum
            </div>
        </div>

        <div id="to131" class="col-sm-1">
            <br><img class="image flip"  id="tg131" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d131">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA1_3_1" style="margin-left:85px; width:930px;height:200px; background-color:#ffffff; opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link1_3_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save131( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--1.3.2-->


    <div class="col-sm-12" onclick='rotate("tg132"); $("#d132").slideToggle("slow");'>

        <div class="col-sm-1" id="ch132">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h132" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.3.2 and 1.3.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Number of value-added courses imparting transferable and life skills offered during the last five years
            <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Any additional information
                <br>* Brochure or any other document relating to value added courses
                <br>* List of value added courses
            </div>
        </div>

        <div id="to132" class="col-sm-1">
            <br><img class="image flip"  id="tg132" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


<center>
    <div class="col-sm-12" id="d132">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow132()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var ay1= "y"+ay;
            var li = "l"+i;


    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><select id="'+ic+'" onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" required></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year Offering" style="width:170px;" required></select></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" placeholder="Number" style="width:80px;" required></center></td><td><center><select id="'+ay1+'" placeholder="Year Discontinued" style="width:170px;" required></select></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" style="width:80px;" placeholder="Number" required></center></td> <td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" style="width:80px;" placeholder="Number" required></center></td>   <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>   <td class="remove" style="width:40px;"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab132').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
            fetch_academic_year_dis_cont(ay);
    	}
    </script>
    <style>

    	td,th
    	{
    		border: 1px solid gray;
    		padding: 10px;
    	}
    </style>
      <script>
        	function save132(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                link = $($(rows[i]).find('input')[4]).val();

                if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else{
        				var idd = $(rows[i]).attr('id');
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        				var timesOffered = $($(rows[i]).find('input[type="number"]')[0]).val();
        				if(timesOffered == "")
        				{
        					alert('Please Enter number of times the course was offered');
        					return false;
        				}
        				var yearDiscontinue = $($(rows[i]).find('select')[3]).val();
        				if(yearDiscontinue == "")
        				{
        					alert('Please Enter when the course was discontinued, Select None Otherwise');
        					return false;
        				}
        				var enrolledStudents = $($(rows[i]).find('input[type="number"]')[1]).val();
        				if(enrolledStudents == "")
        				{
        					alert('Please Enter number of Enrolled Students for the course');
        					return false;
        				}
        				var totalStudents = $($(rows[i]).find('input[type="number"]')[2]).val();
        				if(totalStudents == "")
        				{
        					alert('Please Enter total number of students completing the course this year');
        					return false;
        				}
        					console.log(""+ programmeCode +  "" +  courseCode + "" + courseName + "" +  yearOfIntro + "" + timesOffered + "" + yearDiscontinue + "" + enrolledStudents + "" + totalStudents);
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ "','" +  courseCode + "','" + courseName + "','" +  yearOfIntro + "','" + timesOffered + "','" + yearDiscontinue + "','" + enrolledStudents + "','" + totalStudents + "','" + link + "','" + idd +"')";
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
                               $("#d132").slideToggle("slow");
                               rotate("tg132");
                               num_rows("tab132","ch132");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_3_2", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_132()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab132').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var ay1 = x[3];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   fetch_academic_year_dis_cont("y"+idd, $(ay1).attr('value'));
    							}
        			}
                    num_rows("tab132","ch132");
        		};
          			   			 xhttp.open("GET", "fetch132.php", true);
         			   			 xhttp.send();
        	}
		</script>
    <form>

        <table id="tab132">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Course Code</th>
                <th style="width:100px; padding:10px;">Name of the value added courses (with 30 or more contact hours)offered during last five years</th>


                <th style="width:100px; padding:10px;">Year of Offering	</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of times offered during the same year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Discontinuation </th>
                <th style="width:100px; padding:10px; padding-left:0px;">Number of students enrolled in the year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Number of Students completing the course in the year</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Course Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year Offering" style="width:80px;" disabled></select></center></td>

                <td><center><input type="number" step="1" min="0" placeholder="Frequency in Year" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year Discontinued" style="width:80px;" disabled></select></center></td>
                <td><center><input type="number" step="1" min="0" placeholder="Total Enrolled Students" style="width:250px;" disabled></center></td>
                <td><center><input type="number" step="1" min="0" placeholder="Students Completing Course" style="width:250px;" disabled></center></td>
            </tr>
            -->
			<tr>
				<!--<td colspan="8"><button value="" width="500px" onclick="addRow132()">Add a new Row</button></td>-->
		<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow132()" alt="Submit" width="48" height="48">	</tr>
        </table>

        <input type="button" class="SAVE" onclick="save132($(this).parent().children()[0])"  value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>

</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
<!--1.3.4-->




    <div class="col-sm-12" onclick='rotate("tg134"); $("#d134").slideToggle("slow");'>

        <div class="col-sm-1" id="ch134">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h134" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.3.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
             Percentage of students undertaking field projects / internships (Current Year data)
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Any additional information
                <br>* List of students enrolled
            </div>
        </div>

        <div id="to134" class="col-sm-1">
            <br><img class="image flip"  id="tg134" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save134(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                link = $($(rows[i]).find('input')[3]).val();

        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else{


        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var idd = $(rows[i]).attr('id');
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        				var studentsProgramme = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var studentsInternship = $($(rows[i]).find('input[type="number"]')[1]).val();
        				if(studentsProgramme == "")
        				{
        					alert('Please Enter number of students in the programme');
        					return false;
        				}
        				if(studentsInternship == "")
        				{
        					alert('Please Enter number of students taking internships or field projects');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" +  yearOfIntro + "" + studentsProgramme + "" + studentsInternship);
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  yearOfIntro + "','" + studentsProgramme + "','" + studentsInternship + "','" + link + "','" + idd +"')";
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
                               $("#d134").slideToggle("slow");
                               rotate("tg134");
                               num_rows("tab134","ch134");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_3_4", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_134()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab134').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log(x);
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
                    num_rows("tab134","ch134");
        		};
          			   			 xhttp.open("GET", "fetch134.php", true);
         			   			 xhttp.send();
        	}
		</script>

<center>
    <div class="col-sm-12" id="d134">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow134()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var li = "l"+i;

    		var html = '<tr id="'+i+'"  ><td ><center><select id="'+ip+'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:165px;" required></select></center></td> <td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48"  placeholder="Students in programmes" style="width:250px;" required></center></td> <td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Students doing Internships" style="width:250px;" required></center></td>  <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab134').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table id="tab134">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Programme Name</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students in the programme</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students undertaking field projects / internships</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>

            </tr>
          <!--  <tr>
          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Students doing Internships" style="width:250px;" disabled></center></td>
         	 		<td><center><button onclick="remove_row(this);" type="button">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow134()">Add a new Row</button></td>-->
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow134()" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save134($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--1.4.1-->




    <div class="col-sm-12" onclick='rotate("tg141"); $("#d141").slideToggle("slow");'>

        <div class="col-sm-1" id="ch141">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h141" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.4.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Structured feedback recieved from <br>
             1) Students, 2) Teachers, 3) Employers,<br>
4) Alumni 5) Parents,<br>
for design and review of syllabus
                <br><br>Please keep following and other relevant documents ready in hard copy:
                <br>* URL for stakeholder feedback report
                <br>* Action taken report of the University on feedback report as stated in the minutes of the Governing Council, Syndicate, Board of Management
                <br>* Any additional information
            </div>
        </div>

        <div id="to141" class="col-sm-1">
            <br><img class="image flip"  id="tg141" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save141(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var option = $($(rows[i]).find('select')[0]).val();
        				if(option == "")
        				{
        					alert('Please select atleast one Option to save');
        					return false;
        				}
        				else
        				{


        				var URL = $($(rows[i]).find('input[type="text"]')[0]).val();
        				if(URL== ""&&option!='0')
        				{
        					alert('Please enter a URL');
        					return false;
        				}
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ option + "','"+ URL + "','" + idd +"')";
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
                               $("#d141").slideToggle("slow");
                               rotate("tg141");
                               num_rows("tab141","ch141");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_4_1", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_141()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab141').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log("Hello I M here");
	          			          var pc = x[0];
			/*var
       options = '<option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option>';
						$(pc).html(options);*/
						$(pc).attr('value', $(pc).attr('value'));
            load_sel_t1_4_1($(pc).attr('id'),$(pc).attr('value'));

//            alert($(pc).attr('id') + $(pc).find('option')[1]);

    							}


        			}
                    num_rows("tab141","ch141");
        		};
          			   			 xhttp.open("GET", "fetch141.php", true);
         			   			 xhttp.send();


        	}
		</script>

<center>
    <div class="col-sm-12" id="d141">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow141(event)
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;

    		var html = '<tr id = "'+i+'"><td><center><select style="width:200px" value = "4"><option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option></select></center></td><td><center><input type="text" placeholder="URL" style="width:250px"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td> </tr>';

    		var x = $('#tab141').find('tr');
   			$(x[x.length-1]).before(html);
            event.preventDefault();
    	}
    </script>
    <form>

        <table id="tab141">
            <tr>
                <th style="width:100px; padding:10px;">Option</th>
                <th style="width:100px; padding:10px; padding-left:0px;">URL</th>
            </tr>
          <!--  <tr>

          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Students doing Internships" style="width:250px;" disabled></center></td>

         	 		<td><center><button onclick="remove_row(this);" type="button">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow141()">Add a new Row</button></td>-->
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow141(event)" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save141($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--1.4.2-->




    <div class="col-sm-12" onclick='rotate("tg142"); $("#d142").slideToggle("slow");'>

        <div class="col-sm-1" id="ch142">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h142" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>1.4.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>A. Feedback collected, analysed and action taken and feedback
available on website<br>
B. Feedback collected, analysed and action has been taken<br>
C. Feedback collected and analysed<br>
D. Feedback collected<br>
E. Feedback not collected
                <br><br>Please keep following and other relevant documents ready in hard copy:
                <br>* Upload any additional information
                <br>* URL for feedback report
            </div>
        </div>

        <div id="to142" class="col-sm-1">
            <br><img class="image flip"  id="tg142" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save142(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var option = $($(rows[i]).find('select')[0]).val();
        				if(option == "")
        				{
        					alert('Please select atleast one Option to save');
        					return false;
        				}
        				else
        				{


        				var URL = $($(rows[i]).find('input[type="text"]')[0]).val();
        				if(URL== ""&&option!='E')
        				{
        					alert('Please enter a URL');
        					return false;
        				}
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ option + "','"+ URL + "','" + idd +"')";
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
                               $("#d142").slideToggle("slow");
                               rotate("tg142");
                               num_rows("tab142","ch142");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_4_2", true);
         			   			 xhttp.send();
        		}
        	}


        	function fetch_rows_142()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab142').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');

          			           console.log(x);
	          			          var pc = x[0];
			/*var options = '<option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option>';
						$(pc).html(options);*/
						$(pc).attr('value', $(pc).attr('value'));
            load_sel_t1_4_2($(pc).attr('id'),$(pc).attr('value'));


    							}
        			}
                    num_rows("tab142","ch142");
        		};
          			   			 xhttp.open("GET", "fetch142.php", true);
         			   			 xhttp.send();
        	}
		</script>

<center>
    <div class="col-sm-12" id="d142">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow142()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;

    		var html = '<tr id = "'+i+'"><td><center><select style="width:200px" value = "4"><option value = "A">A</option><option value = "B"> B</option><option value = "C"> C</option><option value = "D"> D</option><option value = "E"> E</option></select></center></td><td><center><input type="text" placeholder="URL" style="width:250px"></center></td>  <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td> </tr>';
    		var x = $('#tab142').find('tr');
   			$(x[x.length-1]).before(html);
            event.preventDefault();

    	}
    </script>
    <form>

        <table id="tab142">
            <tr>
                <th style="width:100px; padding:10px;">Option</th>
                <th style="width:100px; padding:10px; padding-left:0px;">URL</th>
            </tr>
          <!--  <tr>

          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Students doing Internships" style="width:250px;" disabled></center></td>

         	 		<td><center><button onclick="remove_row(this);" type="button">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow142()">Add a new Row</button></td>-->
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow142()" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save142($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

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
	$query = "select distinct * from t1_1_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 1.1.1
            document.getElementById("TA1_1_1").value = '<?php echo str_replace("'","\'",urldecode($row["Description"])); ?>';
            document.getElementById("link1_1_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA1_1_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA1_1_1").value==""){
               document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t1_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 1.3.1
            document.getElementById("TA1_3_1").value = '<?php echo urldecode($row["Description"]); ?>';
            document.getElementById("link1_3_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA1_3_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA1_3_1").value==""){
               document.getElementById("ch131").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch131").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }

        //1.1.3 Loading all rows that are already saved
        	fetch_rows_113();
        	fetch_rows_112();
        	fetch_rows_121();
        	fetch_rows_122();
        	fetch_rows_132();
            fetch_rows_134();
            fetch_rows_141();
            fetch_rows_142();
        }


        function load_sel_t1_4_1(x,y){
          //$(".sel_t1_4_1").html('<option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option>');
          $("#"+x).val(y);
//          alert(y);
        }

        function load_sel_t1_4_2(x,y){
          //$(".sel_t1_4_1").html('<option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option>');
          $("#"+x).val(y);
//          alert(y);
        }


        function escapeHtml(text) {
          return text
              .replace(/&/g, "%26")
              .replace(/</g, "%3C")
              .replace(/>/g, "%3E")
              .replace(/"/g, "\\%22")
              .replace(/'/g, "\\%27");
        }


    </script>



</body>
</html>
