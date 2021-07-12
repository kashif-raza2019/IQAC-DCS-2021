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

<link rel="icon" href="logo.png">
<title>Criteria-3 Data Capturing System NAAC A & A 2019</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            var elem = $("#"+x).find(".year");
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    /*var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    */
                    $(elem).html(this.responseText);
                    if(val!="none") $(elem).val(''+val);
                }
            };
            xhttp.open("GET", "fetch_academic_year.php", true);
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
            xhttp.open("GET", "fetch_academic_year_dis_cont.php", true);
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

            if(l>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }

    </script>



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


        #d311, #h311, #d331, #h331, #d361, #h361, #d372, #h372, #d371, #h371, #d364, #h364, #d363, #h363, #d362, #h362, #d353, #h353, #d352, #h352, #d348. #h348, #d373, #h373, #d347, #h347, #d346, #h346, #d346b, #h346b,  #d346c, #h346c,  #d345, #h345, #d344, #h344, #d343, #h343, #d342, #h342, #d341,#h341, #d334, #h334, #d333, #h333, #d332, #h332, #d312, #h312,#d316, #h316, #d351, #d323, #h323, #h351, #d313, #h313, #d315, #h315, #d314, #h314, #h322, #d322, {
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d331, #d311, #d361, #d372, #d371, #d364, #d363, #d362, #d353, #d352, #d348, #d373, #d347, #d346, #d346b, #d346c,  #d345, #d344, #d343,#d342, #d341, #d334, #d333, #d312,#d313,#d332, #d351,#d322, #d323 ,#d113, #d121, #d122, #d316, #d315, #d314{
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

        input[type=text],input[type=number],textarea ,input[type=date]{
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
        th,td
        {
        	border: 1px solid gray;
        	padding: 10px;
        }
        .add,.remove{
            border: 0px;
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
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 3 - RESEARCH, EXTENSION AND INNOVATIONS</a></center>
        </div>
<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.1 Promotion of Research and Facilities</a></center>

    </center>

 <!--
    3.1.1
-->

        <script>

            function save311(ta)
        	   {
                link =  document.getElementById("link3_1_1").value;
                var ata = ta.value;

                link = escapeHtml(link);
                ata = escapeHtml(ata);

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                console.log(ta+"\n"+link);
               var rowss = "('"+"<?php echo $_SESSION['username'];?>" + "','" + ata + "','" + link + "','" + ta.id + "');";
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d311").slideToggle("slow");
                               rotate("tg311");

                               if(document.getElementById("TA3_1_1").value==""){
                                    document.getElementById("ch311").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"/> <br>Not Filled';
                                }else{
                                    document.getElementById("ch311").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        		function fetch_rows_311()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("TA3_1_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_1_1").value==""){
                                    document.getElementById("ch311").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                                }else{
                                    document.getElementById("ch311").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }
         			       }
         			       };

          			   			 xhttp.open("GET", "fetch311.php?table=t3_1_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

            function fetch_rows_311_link()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("link3_1_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_1_1").value==""){
                                    document.getElementById("ch311").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                                }else{
                                    document.getElementById("ch311").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }
         			       }
         			       };

          			   			 xhttp.open("GET", "fetch311_link.php?table=t3_1_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}


        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg311"); $("#d311").slideToggle("slow");'>

        <div class="col-sm-1" id="ch311">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h311" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">3.1.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            The institution has a well defined policy for promotion of research and the same is uploaded on the institutional website
 <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* Minutes of the Governing Council/ Syndicate/Board of Management
related to research promotion policy adoption
<br>* URL of Policy document on promotion of research uploaded on website
            </div>

        </div>

        <div id="to311" class="col-sm-1">
            <br><img class="image flip"  id="tg311" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d311">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA3_1_1" placeholder="URL of Policy Document on Promotion of Research" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link3_1_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

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

        <input type="button" class="SAVE" onclick="save311( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.1.2
-->
<script>
        	function save312(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{

        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var amount = $($(rows[i]).find('input')[1]).val();
                        var duration = $($(rows[i]).find('input')[2]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(amount==""||amount<0){
                            alert('Please enter valid amount');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }

        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','"+ amount + "','" + Year + "','" + duration + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d312").slideToggle("slow");
                               rotate("tg312");
                               num_rows("tab312","ch312");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_312()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab312').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

               select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab312","ch312");
        		};
          			   			 xhttp.open("GET", "fetch312.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg312"); $("#d312").slideToggle("slow");'>

        <div class="col-sm-1" id="ch312">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h312" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.1.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>The institution provides seed money to its teachers for research (average per year) (INR in Lakhs) <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* Minutes of the relevant bodies of the University
<br>* Budget and expenditure statements signed by the Finance Officer
indicating seed money provided and utilized
<br>* List of teachers receiving grant and details of grant received
            </div>
        </div>

        <div id="to312" class="col-sm-1">
            <br><img class="image flip"  id="tg312" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d312">
            <br>
    <script>
    	function addRow312()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of the teacher" style="width:250px;" required></center></td>'+
			  '<td><center><input type="text" placeholder="Amount" style="width:160px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
              '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab312').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);

            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab312">
            <tr>
                <th style="width:150px; padding:20px;">Name of the teacher getting seed money</th>
                <th style="width:250px; padding:20px;">The amount of seed money (INR in LAKHS)</th>
                <th style="width:80px; padding:20px;">Year of Recieving grant</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Duration (in Months) of grant</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow312()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow312()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><input type="text" placeholder="Name of the teacher" style="width:250px;" required></center></td>
				<td><center><input type="number" placeholder="Amount" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="number" placeholder="Duration of grant" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save312($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.1.3
-->
<script>
        	function save313(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var period = $($(rows[i]).find('input')[2]).val();
                        var award = $($(rows[i]).find('input')[1]).val();
                        var agency = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(award==""){
                            alert('Please enter an Award name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter an agency name');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','"+ award + "','" +period+"','" + Year + "','" + agency + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               //alert(this.responsetext);
                               alert(this.responseText);
                               $("#d313").slideToggle("slow");
                               rotate("tg313");
                               num_rows("tab313","ch313");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_313()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab313').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {

          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab313","ch313");
        		};
          			   			 xhttp.open("GET", "fetch313.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg313"); $("#d313").slideToggle("slow");'>

        <div class="col-sm-1" id="ch313">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h313" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.1.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Number of teachers awarded international fellowship for advanced studies/ research during the last five years
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* e-copies of the award letters of the teachers
<br>* List of teachers and their international fellowship details
            </div>
        </div>

        <div id="to313" class="col-sm-1">
            <br><img class="image flip"  id="tg313" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d313">
            <br>
    <script>
    	function addRow313()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of the teacher" style="width:250px;" required></center></td>'+
			  '<td><center><input type="text" placeholder="Award" style="width:250px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:250px;" required></center></td>'+
              '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab313').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab313">
            <tr>
                <th style="width:150px; padding:20px;">Name of the teacher awarded international fellowship</th>
                <th style="width:250px; padding:20px;">Name of the award</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:80px; padding:20px;">Year of Award</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Awarding Agency</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow313()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow313()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><input type="text" placeholder="Name of the teacher" style="width:250px;" required></center></td>
				<td><center><input type="number" placeholder="Amount" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="number" placeholder="Duration of grant" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save313($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.1.4
-->
<script>
        	function save314(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var duration = $($(rows[i]).find('input')[1]).val();
                        var type = $($(rows[i]).find('input')[2]).val();
                        var agency = $($(rows[i]).find('input')[3]).val();
                        var exam = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(duration==""){
                            alert('Please enter an Award name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter an agency name');
        					return false;
                        }else if(type==""){
                            alert('Please enter a fellowship type');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','"+ Year + "','" + duration + "','" + type + "','" + agency + "','" + exam + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               //alert(this.responsetext);
                               alert(this.responseText);
                               $("#d314").slideToggle("slow");
                               rotate("tg314");
                               num_rows("tab314","ch314");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_314()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab314').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab314","ch314");
        		};
          			   			 xhttp.open("GET", "fetch314.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg314"); $("#d314").slideToggle("slow");'>

        <div class="col-sm-1" id="ch314">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h314" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.1.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Number of JRFs, SRFs, Post Doctoral Fellows, Research Associates and other research fellows in the University enrolled during the last five years
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* List of research fellows and their fellowship details
            </div>
        </div>

        <div id="to314" class="col-sm-1">
            <br><img class="image flip"  id="tg314" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d314">
            <br>
    <script>
    	function addRow314()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Fellow" style="width:250px;" required></center></td>'+
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Type of Fellowship" style="width:250px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:250px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Exam" style="width:250px;" required></center></td>'+
              '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab314').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab314">
            <tr>
                <th style="width:250px; padding:20px;">Name of Research fellow</th>
                <th style="width:80px; padding:20px;">Year of enrollment</th>
                <th style="width:200px; padding:20px;">Duration (in Months) of fellowship</th>
                <th style="width:200px; padding:20px;">Type of fellowship</th>
                <th style="width:200px; padding:20px; ">Granting Agency</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Qualifying exam if any (NET, GATE,  etc.)</th>

            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow314()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow314()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><input type="text" placeholder="Name of the teacher" style="width:250px;" required></center></td>
				<td><center><input type="number" placeholder="Amount" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="number" placeholder="Duration of grant" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>


        <input type="button" class="SAVE" onclick="save314($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    3.1.5
-->
<script>
        	function save315(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var link = $($(rows[i]).find('input')[1]).val();
                        var choice = $($(".opt")[0]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(link==""){
                            alert('Please enter a valid link');
        					return false;
                        }else if(choice==""){
                            alert('Please enter a valid choice');
        					return false;
                        }
        				else
        				{

                  link = escapeHtml(link);

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+choice+"','"+ name + "','"+ Year + "','" + link + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d315").slideToggle("slow");
                               rotate("tg315");
                               num_rows("tab315","ch315");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_5", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_315()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab315').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
    						$($('.opt')).val($('input[type=hidden]').val());
        			}
                    num_rows("tab315","ch315");
        		};
          			   			 xhttp.open("GET", "fetch315.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg315"); $("#d315").slideToggle("slow");'>

        <div class="col-sm-1" id="ch315">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h315" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.1.5<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>University has the following facilities<br>
1. Central Instrumentation Centre<br>
2. Animal House/Green House / Museum<br>
3. Central Fabrication facility<br>
4. Media laboratory/Business Lab/Studios<br>
5. Research/Statistical Databases<br>
Options:<br>
A. Any four facilities exist<br>
B. Three of the facilities exist<br>
C. Two of the facilities exist<br>
D. One of the facilities exist<br>
E. None of the facilities exist<br>
<br><select placeholder="Year" class="opt" style="width:320px;" required>
<option value=''>Select</option>
<option value='A'>A. Any four facilities exist</option>
<option value='B'>B. Three of the facilities exist</option>
<option value='C'>C. Two of the facilities exist</option>
<option value='D'>D. One of the facilities exist</option>
<option value='E'>E. None of the facilities exist</option>
</select><br>
 <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Paste link of videos and geotagged photographs
<br>* Upload the list of facilities provided by the university and their year of
establishment
<br>* Upload any additional information
            </div>
        </div>

        <div id="to315" class="col-sm-1">
            <br><img class="image flip"  id="tg315" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d315">
            <br>
    <script>
    	function addRow315()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Fellow" style="width:250px;" required></center></td>'+
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td><center><input type="text" placeholder="Link" style="width:300px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab315').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab315">
            <tr>
                <th style="width:250px; padding:20px;">Name of the facility</th>
                <th style="width:80px; padding:20px;">Year of establishment</th>
                <th style="width:200px; padding:20px;">Provid link of Videos/Pictures</th>

            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow315()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow315()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save315($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    3.1.6
-->
<script>
        	function save316(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var agency = $($(rows[i]).find('input')[1]).val();
                        var funds = $($(rows[i]).find('input')[2]).val();
                        var duration = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }else if(agency==""){
                            alert('Please enter a valid Agency Name');
        					return false;
                        }else if(funds==""||funds<0){
                            alert('Please enter a valid FUNDS');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','"+ agency + "','" + Year + "','" + funds + "','" + duration + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d316").slideToggle("slow");
                               rotate("tg316");
                               num_rows("tab316","ch316");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_1_6", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_316()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab316').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab316","ch316");
        		};
          			   			 xhttp.open("GET", "fetch316.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg316"); $("#d316").slideToggle("slow");'>

        <div class="col-sm-1" id="ch316">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h316" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.1.6<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Percentage of departments with UGC-SAP, CAS, DST-FIST ,DBT,ICSSR and other similar recognitions by government agency (Current Year Data)
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e-version of departmental recognition award letters
<br>* List of departments and award details
<br>* Upload any additional information
            </div>
        </div>

        <div id="to316" class="col-sm-1">
            <br><img class="image flip"  id="tg316" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d316">
            <br>
    <script>
    	function addRow316()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Scheme" style="width:250px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Agency" style="width:250px;" required></center></td>'+
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td><center><input type="number" placeholder="Funds" style="width:160px;" required></center></td>'+
			  '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab316').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab316">
            <tr>
                <th style="width:250px; padding:20px;">Name of Scheme</th>
                <th style="width:80px; padding:20px;">Name of funding Agency</th>
                <th style="width:200px; padding:20px;">Year of Award</th>
                <th style="width:200px; padding:20px;">Funds Provided (Amount in Rupees)</th>
                <th style="width:200px; padding:20px;">Duration (in Months) of award</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow316()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow316()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save316($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.2 Resource Mobilization for Research</a></center>

    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.2.1 and 3.2.2
-->
<script>
        	function save322(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var principal = $($(rows[i]).find('input')[1]).val();
                        var department = $($(rows[i]).find('input')[2]).val();
                        var funds = $($(rows[i]).find('input')[3]).val();
                        var duration = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }else if(principal==""){
                            alert('Please enter a valid Principal Name');
        					return false;
                        }else if(funds==""||funds<0){
                            alert('Please enter a valid FUNDS');
        					return false;
                        }else if(department==""){
                            alert('Please enter a valid Department Name');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','"+ principal + "','" + department + "','" + Year + "','" + funds + "','" + duration + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d322").slideToggle("slow");
                               rotate("tg322");
                               num_rows("tab322","ch322");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_2_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_322()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab322').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab322","ch322");
        		};
          			   			 xhttp.open("GET", "fetch322.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg322"); $("#d322").slideToggle("slow");'>

        <div class="col-sm-1" id="ch322">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h322" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.2.1 and 3.2.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;"> Grants for research projects sponsored by the non-government sources such as industry, corporate houses, international bodies, endowments, Chairs in the institution during the last five years and Grants for research projects sponsored by the government sources during the last five years (Amount in Rupees)
              <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e-copies of the grant award letters for research projects sponsored by
non-government
<br>* List of project and grant details
<br>* Upload any additional information
            </div>
        </div>

        <div id="to322" class="col-sm-1">
            <br><img class="image flip"  id="tg322" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d322">
            <br>
    <script>
    	function addRow322()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Project" style="width:250px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Principal Investigator" style="width:250px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Department of Principal Investigator" style="width:250px;" required></center></td>'+
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td><center><input type="number" placeholder="Funds" style="width:160px;" required></center></td>'+
			  '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab322').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab322">
            <tr>
                <th style="width:250px; padding:20px;">Name of the Project/ Endowments, Chairs</th>
                <th style="width:80px; padding:20px;">Name of the Principal Investigator/ Co Investigator</th>
                <th style="width:200px; padding:20px;">Department of Principal Investigator/ Co Investigator</th>
                <th style="width:200px; padding:20px;">Year of Award</th>
                <th style="width:200px; padding:20px;">Funds provided (In Rupees)</th>
                <th style="width:200px; padding:20px;">Duration (in Months) of the project</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow322()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow322()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save322($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.2.3
-->
<script>
        	function save323(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var principal = $($(rows[i]).find('input')[0]).val();
                        var department = $($(rows[i]).find('input')[1]).val();
                        var duration = $($(rows[i]).find('input')[2]).val();
                        var name = $($(rows[i]).find('input')[3]).val();
                        var funds = $($(rows[i]).find('input')[4]).val();
                        var agency = $($(rows[i]).find('input')[5]).val();
                        var period = $($(rows[i]).find('input')[6]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }else if(principal==""){
                            alert('Please enter a valid Principal Name');
        					return false;
                        }else if(funds==""||funds<0){
                            alert('Please enter a valid FUNDS');
        					return false;
                        }else if(department==""){
                            alert('Please enter a valid department Name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter a valid Agency Name');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ principal + "','"+ department + "','" + duration + "','" + name + "','" + funds + "','" + agency + "','" + period +"','"+ Year + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d323").slideToggle("slow");
                               rotate("tg323");
                               num_rows("tab323","ch323");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_2_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_323()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab323').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab323","ch323");
        		};
          			   			 xhttp.open("GET", "fetch323.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg323"); $("#d323").slideToggle("slow");'>

        <div class="col-sm-1" id="ch323">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h323" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.2.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Average number of research projects per teacher funded by government and non-government agencies during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* List of research projects and funding details
<br>* Any additional information
<br>* Supporting document from Funding Agency
<br>* Paste Link for the funding agency website
            </div>
        </div>

        <div id="to323" class="col-sm-1">
            <br><img class="image flip"  id="tg323" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d323">
            <br>
    <script>
    	function addRow323()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Principal Investigator" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Designation" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Project Name" style="width:200px;" required></center></td>'+
			  '<td><center><input type="number" placeholder="Funds" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency Name" style="width:200px;" required></center></td>'+
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab323').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab323">
            <tr>
                <th style="width:80px; padding:20px;">Name of the Principal Investigator/ Co Investigator</th>
                <th style="width:200px; padding:20px;">Designation</th>
                <th style="width:200px; padding:20px;">Duration (in Months) of the project</th>
                <th style="width:250px; padding:20px;">Name of the Research Project</th>
                <th style="width:200px; padding:20px;">Amount Sanctioned(in Rupees)</th>
                <th style="width:250px; padding:20px;">Name of Funding Agency</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of Award</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow323()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow323()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save323($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.3 Innovation Ecosystem</a></center>

    </center>

 <!--
    3.3.1
-->

        <script>

            function save331(ta)
        	  {
                link =  document.getElementById("link3_3_1").value;
                var ata = ta.value;

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                ata = escapeHtml(ata);
                link = escapeHtml(link);

                //console.log(ta+"\n"+link);
                var rowss = "('"+"<?php echo $_SESSION['username'];?>" + "','" + ata + "','" + link + "','" + ta.id + "');";
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d331").slideToggle("slow");
                               rotate("tg331");

                               if(document.getElementById("TA3_3_1").value==""){
                                    document.getElementById("ch331").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"/><br> Not Filled';
                                }else{
                                    document.getElementById("ch331").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_3_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        		function fetch_rows_331()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("TA3_3_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_3_1").value==""){
                                    document.getElementById("ch331").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                                }else{
                                    document.getElementById("ch331").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }
         			       }
         			       };

          			   			 xhttp.open("GET", "fetch311.php?table=t3_3_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

            function fetch_rows_331_link()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("link3_3_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_3_1").value==""){
                                    document.getElementById("ch331").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                         }else{
                                    document.getElementById("ch331").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                         }
         			       }
         			      };

          			   			 xhttp.open("GET", "fetch311_link.php?table=t3_3_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg331"); $("#d331").slideToggle("slow");'>

        <div class="col-sm-1" id="ch331">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h331" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">3.3.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Institution has created an eco system for innovations including
Incubation centre and other initiatives for creation and transfer of
knowledge
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
            </div>
        </div>

        <div id="to331" class="col-sm-1">
            <br><img class="image flip"  id="tg331" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d331">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA3_3_1" placeholder="Describe available incubation centre and evidence of its usage (activity) within a minimum of 500 characters and maximum of 500 words" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link3_3_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

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

        <input type="button" class="SAVE" onclick="save331( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.3.2
-->
<script>
        	function save332(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var dateFrom = $($(rows[i]).find('input')[1]).val();
                        var dateto = $($(rows[i]).find('input')[2]).val();
                        var link = $($(rows[i]).find('input')[3]).val();
                        var dateEst = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(dateFrom==""){
                            alert('Please enter a valid Date');
        					return false;
                        }else if(dateto==""){
                            alert('Please enter a valid Date');
        					return false;
                        }else if(link==""){
                            alert('Please enter a valid link');
        					return false;
                        }else if(dateEst==""){
                            alert('Please enter a valid Date');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+ name + "','" + dateFrom +"','"+dateto+"','" + link + "','" + dateEst  + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d332").slideToggle("slow");
                               rotate("tg332");
                               num_rows("tab332","ch332");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_3_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_332()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab332').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab332","ch332");
        		};
          			   			 xhttp.open("GET", "fetch332.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg332"); $("#d332").slideToggle("slow");'>

        <div class="col-sm-1" id="ch332">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h332" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.3.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of workshops/seminars conducted on Intellectual Property Rights (IPR) and Industry-Academia Innovative practices during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Report of the event
<br>* Any additional information
<br>* List of workshops/seminars during last 5 years
            </div>
        </div>

        <div id="to332" class="col-sm-1">
            <br><img class="image flip"  id="tg332" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d332">
            <br>
    <script>
    	function addRow332()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'
             +'<td><center><input type="text" placeholder="Name of Workshop" style="width:200px;" required></center></td>'+
              '<td><center><input type="date" placeholder="DD/MM/YY" style="width:180px;" required></center></td>'+
              '<td><center><input type="date" placeholder="DD/MM/YY" style="width:180px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Link" style="width:200px;" required></center></td>'+
              '<td><center><input type="date" placeholder="DD/MM/YY" style="width:180px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab332').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab332">
            <tr>
                <th style="width:80px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Name of the workshop/ seminar</th>
                <th style="width:250px; padding:20px;" colspan=2>Date From – To</th>
                <th style="width:200px; padding:20px;">Link to the Activity report on the website</th>
                <th style="width:250px; padding:20px;">Date of establishment of IPR cell</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow332()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow332()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save332($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    3.3.3
-->
<script>
        	function save333(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();
                        var title = $($(rows[i]).find('input')[0]).val();
                        var name = $($(rows[i]).find('input')[1]).val();
                        var agency = $($(rows[i]).find('input')[2]).val();
                        var period = $($(rows[i]).find('input')[3]).val();
                        var category = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter a valid Agency Name');
        					return false;
                        }else if(title==""){
                            alert('Please enter a valid Title of Innovation');
        					return false;
                        }else if(category==""){
                            alert('Please enter a valid category');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ title + "','"+ name + "','" + agency + "','"+period+"','" + Year + "','" + category  + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d333").slideToggle("slow");
                               rotate("tg333");
                               num_rows("tab333","ch333");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_3_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_333()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab333').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab333","ch333");
        		};
          			   			 xhttp.open("GET", "fetch333.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg333"); $("#d333").slideToggle("slow");'>

        <div class="col-sm-1" id="ch333">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h333" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.3.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of awards for innovation won by institution/teachers/research scholars/students during the last five years
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e- copies of award letters
<br>* Any additional information
<br>* List of innovation and award details
            </div>
        </div>

        <div id="to333" class="col-sm-1">
            <br><img class="image flip"  id="tg333" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d333">
            <br>
    <script>
    	function addRow333()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Category" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab333').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab333">
            <tr>
                <th style="width:80px; padding:20px;">Title of the innovation</th>
                <th style="width:200px; padding:20px;">Name of the Awardee </th>
                <th style="width:250px; padding:20px;">Name of the Awarding Agency with contact details</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of Award</th>
                <th style="width:250px; padding:20px;">Category- institution/teacher/research scholar/student</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow333()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow333()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save333($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.3.4
-->
<script>
        	function save334(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var name = $($(rows[i]).find('input')[0]).val();
                        var nature = $($(rows[i]).find('input')[1]).val();
                        var period = $($(rows[i]).find('input')[2]).val();
                        var contact = $($(rows[i]).find('input')[3]).val();
                        var Year = $($(rows[i]).find('select')[0]).val();

                        if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(nature==""){
                            alert('Please enter a valid Nature');
        					return false;
                        }else if(contact==""){
                            alert('Please enter valid contact information');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                }else if(Year==""){
                  alert('Please enter Year of commencement');
                }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + nature + "','"+period+"','" + Year + "','" + contact + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d334").slideToggle("slow");
                               rotate("tg334");
                               num_rows("tab334","ch334");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_3_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_334()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab334').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab334","ch334");
        		};
          			   			 xhttp.open("GET", "fetch334.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg334"); $("#d334").slideToggle("slow");'>

        <div class="col-sm-1" id="ch334">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h334" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.3.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of start-ups incubated on campus during the last five years
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* e- sanction order of the University for the start ups on campus
<br>* Contact details of the promoters for information
<br>* List of startups details like name of startup, nature, year of
commencement etc
            </div>
        </div>

        <div id="to334" class="col-sm-1">
            <br><img class="image flip"  id="tg334" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d334">
            <br>
    <script>
    	function addRow334()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name of Startup" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Nature" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Contact" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab334').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab334">
            <tr>
                <th style="width:80px; padding:20px;">Name of the start up</th>
                <th style="width:200px; padding:20px;">Nature of start up</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:250px; padding:20px;">Year of commencement</th>
                <th style="width:200px; padding:20px;">Contact information of the promoters</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow334()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow334()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save334($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.4 Research Publications and Awards</a></center>

    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.4.1
-->
<script>
        	function save341(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var url = $($(rows[i]).find('input')[0]).val();
                        var yesno = $($(rows[i]).find('input')[1]).val();
                        var mech = $($(rows[i]).find('input')[2]).val();
                        if(url==""){
                            alert('Please enter a URL');
        					return false;
                        }else if(yesno==""){
                            alert('Please enter a valid Response (Yes/No)');
        					return false;
                        }else if(mech==""){
                            alert('Please enter valid Mechanism');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ url + "','" + yesno + "','" + mech + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d341").slideToggle("slow");
                               rotate("tg341");
                               num_rows("tab341","ch341");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_341()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab341').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  /* console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}*/
        			}
                    num_rows("tab341","ch341");
        		};
          			   			 xhttp.open("GET", "fetch341.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg341"); $("#d341").slideToggle("slow");'>

        <div class="col-sm-1" id="ch341">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h341" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">The institution has a stated Code of Ethics to check malpractices and plagiarism in Research (Yes/No)
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Institutional data in prescribed format
<br>* Any additional information
            </div>
        </div>

        <div id="to341" class="col-sm-1">
            <br><img class="image flip"  id="tg341" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d341">
            <br>
    <script>
    	function addRow341()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="URL" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Mechanism" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab341').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab341">
            <tr>
                <th style="width:80px; padding:20px;">Provide upload the URL having code of ethics</th>
                <th style="width:200px; padding:20px;">Whether Colleges have been provided access to plagiarism detecting software (Yes/No)</th>
                <th style="width:250px; padding:20px;">Mechanism for detecting plagiarism </th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow341()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow341()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save341($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
    <!--
    3.4.2
-->
<script>
        	function save342(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var award = $($(rows[i]).find('input')[1]).val();
                        var agency = $($(rows[i]).find('input')[2]).val();
                        var period =  $($(rows[i]).find('input')[3]).val();
                        var details = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter a valid Agency Name');
        					return false;
                        }else if(award==""){
                            alert('Please enter a valid Award Name');
        					return false;
                        }else if(details==""){
                            alert('Please enter valid details');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + award + "','" + agency + "','"+period+"','" + Year +"','" + details + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d342").slideToggle("slow");
                               rotate("tg342");
                               num_rows("tab342","ch342");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_342()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab342').find('tr');
   					   $(x[x.length-1]).before(this.responseText);


   					  console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab342","ch342");

//                    select_NA();

        		};
          			   			 xhttp.open("GET", "fetch342.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg342"); $("#d342").slideToggle("slow");'>

        <div class="col-sm-1" id="ch342">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h342" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">The institution provides incentives to teachers who receive state, national and international recognition/awards (Yes/No)
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e- copies of the letters of awards
<br>* Any additional information
<br>* List of Awardees and Award details
            </div>
        </div>

        <div id="to342" class="col-sm-1">
            <br><img class="image flip"  id="tg342" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d342">
            <br>
    <script>
    	function addRow342()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Award" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Details" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab342').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab342">
            <tr>
                <th style="width:80px; padding:20px;">Name of the Awardee with contact details</th>
                <th style="width:200px; padding:20px;">Name of the Award</th>
                <th style="width:250px; padding:20px;">Name of the Awarding Agency</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:250px; padding:20px;">Year of Award</th>
                <th style="width:250px; padding:20px;">Incentive details</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow342()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow342()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save342($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
 <!--
    3.4.3
-->
<script>
        	function save343(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var award = $($(rows[i]).find('input')[1]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(award==""){
                            alert('Please enter a valid Patent Number');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + award  + "','" + Year  + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d343").slideToggle("slow");
                               rotate("tg343");
                               num_rows("tab343","ch343");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_343()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab343').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab343","ch343");
        		};
          			   			 xhttp.open("GET", "fetch343.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg343"); $("#d343").slideToggle("slow");'>

        <div class="col-sm-1" id="ch343">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h343" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of Patents published/awarded during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* List of patents and year it was awarded
            </div>
        </div>

        <div id="to343" class="col-sm-1">
            <br><img class="image flip"  id="tg343" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d343">
            <br>
    <script>
    	function addRow343()
    	{
            var i = get_time();
             var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Patent Number" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab343').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab343">
            <tr>
                <th style="width:80px; padding:20px;">Name of the Patent published/awarded</th>
                <th style="width:200px; padding:20px;">Patent Number</th>
                <th style="width:250px; padding:20px;">Year of Award</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow343()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow343()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save343($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.4.4
-->
<script>
        	function save344(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var department = $($(rows[i]).find('input')[1]).val();
                        var guide = $($(rows[i]).find('input')[2]).val();
                        var title = $($(rows[i]).find('input')[3]).val();
                        var yearof = $($(rows[i]).find('input')[4]).val();
                        var period = $($(rows[i]).find('input')[5]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(department==""){
                            alert('Please enter a Department Number');
        					return false;
                        }else if(guide==""){
                            alert('Please enter a Guide Name');
        					return false;
                        }else if(title==""){
                            alert('Please enter a valid Title');
        					return false;
                        }else if(yearof==""){
                            alert('Please enter Year of Registeration');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + department  + "','" + guide +"','"+title+"','"+yearof+"','"+period+"','" + Year + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d344").slideToggle("slow");
                               rotate("tg344");
                               num_rows("tab344","ch344");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_344()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab344').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab344","ch344");
        		};
          			   			 xhttp.open("GET", "fetch344.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg344"); $("#d344").slideToggle("slow");'>

        <div class="col-sm-1" id="ch344">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h344" class="col-sm-10" >

            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of Ph.D.s awarded per teacher during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* URL to the research page on HEI web site
<br>* List of PhD scholars and their details like name of the guide , title of
thesis, year of award etc
<br>* Any additional information
            </div>
        </div>

        <div id="to344" class="col-sm-1">
            <br><img class="image flip"  id="tg344" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d344">
            <br>
    <script>
    	function addRow344()
    	{
            var i = get_time();
            var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input id="dept'+i+'" type="text" placeholder="Department" style="width:200px;" disabled></center></td>'+
              '<td><center><input type="text" placeholder="Guide/s" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Year of Registeration" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab344').find('tr');
   			$(x[x.length-1]).before(t);

		document.getElementById("dept"+i).value = document.getElementById("dept_name").innerHTML;

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab344">
            <tr>

                <th style="width:80px; padding:20px;">Name of the PhD scholar</th>
                <th style="width:200px; padding:20px;">Name of the Department</th>
                <th style="width:250px; padding:20px;">Name of the guide/s</th>
                <th style="width:80px; padding:20px;">Title of the thesis</th>
                <th style="width:200px; padding:20px;">Year of registration of the scholar</th>
                <th style="width:250px; padding:20px;">Year of Award of PhD</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow344()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow344()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save344($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.4.5
-->
<script>
        	function save345(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var title = $($(rows[i]).find('input')[0]).val();
                        var name = $($(rows[i]).find('input')[1]).val();
                        var department = $($(rows[i]).find('input')[2]).val();
                        var journal = $($(rows[i]).find('input')[3]).val();
                        var period = $($(rows[i]).find('input')[4]).val();
                        var isbn = $($(rows[i]).find('input')[5]).val();
                        var link = $($(rows[i]).find('input')[6]).val();

                        link = escapeHtml(link);

                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(department==""){
                            alert('Please enter a Department Number');
        					return false;
                        }else if(isbn==""){
                            alert('Please enter an ISBN/ISSN number');
        					return false;
                        }else if(title==""){
                            alert('Please enter a valid Title');
        					return false;
                        }else if(journal==""){
                            alert('Please enter Journal Name');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }else if(link==""){
                          alert('Please provide link of relavent document');
                return false;
                      }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ title + "','" + name  + "','" + department +"','"+journal+"','"+period+"','"+Year+"','" + isbn +"','" + link + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}

        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d345").slideToggle("slow");
                               rotate("tg345");
                               num_rows("tab345","ch345");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_5", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_345()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab345').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab345","ch345");
        		};
          			   			 xhttp.open("GET", "fetch345.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg345"); $("#d345").slideToggle("slow");'>

        <div class="col-sm-1" id="ch345">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h345" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.5<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of research papers per teacher in the Journals notified on UGC website during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* List of research papers by title, author, department, name and year of
publication
            </div>
        </div>

        <div id="to345" class="col-sm-1">
            <br><img class="image flip"  id="tg345" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d345">
            <br>
    <script>
    	function addRow345()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Department" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Journal Name" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="ISBN/ISSN" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Link of the relevant document" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab345').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab345">
            <tr>
                <th style="width:80px; padding:20px;">Title of paper</th>
                <th style="width:200px; padding:20px;">Name of the author/s</th>
                <th style="width:250px; padding:20px;">Department of the teacher</th>
                <th style="width:80px; padding:20px;">Name of journal</th>
		            <th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of Publication</th>
                <th style="width:250px; padding:20px;">ISBN/ISSN number</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow345()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow345()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save345($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.4.6
-->
<script>
        	function save346(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var btitle = $($(rows[i]).find('input')[1]).val();
                        var ptitle = $($(rows[i]).find('input')[2]).val();
                        var protitle = $($(rows[i]).find('input')[3]).val();
                        var cname = $($(rows[i]).find('input')[4]).val();
                        var nori = $($(rows[i]).find('input')[5]).val();
                        var period = $($(rows[i]).find('input')[6]).val();
                        var isbn = $($(rows[i]).find('input')[7]).val();
                        var inst = $($(rows[i]).find('input')[8]).val();
                        var publ  = $($(rows[i]).find('input')[9]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(btitle==""){
                            alert('Please enter a Book Title');
        					return false;
                        }else if(isbn==""){
                            alert('Please enter an ISBN/ISSN number');
        					return false;
                        }else if(ptitle==""){
                            alert('Please enter a Paper Title');
        					return false;
                        }else if(protitle==""){
                            alert('Please enter a Title for Proceeding in Conference');
        					return false;
                        }else if(cname==""){
                            alert('Please enter a Conference Name');
        					return false;
                        }else if(inst==""){
                            alert('Please enter an Institution Name');
        					return false;
                        }else if(publ==""){
                            alert('Please enter a valid Publication Name');
        					return false;
                        }else if(nori==""){
                            alert('Please enter Type of Conference (National/International)');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid period');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + btitle  + "','" + ptitle  +"','"+ protitle +"','"+	cname +"','" + nori + "','"+period+"','" + Year + "','" + isbn + "','" + inst + "','" + publ + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d346").slideToggle("slow");
                               rotate("tg346");
                               num_rows("tab346","ch346");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_6", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_346()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab346').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab346","ch346");
        		};
          			   			 xhttp.open("GET", "fetch346.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg346"); $("#d346").slideToggle("slow");'>

        <div class="col-sm-1" id="ch346">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h346" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.6<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of books and chapters in edited volumes / books published, and papers in national/international conference-proceedings per teacher during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* List books and chapters in edited volumes / books published
            </div>
        </div>

        <div id="to346" class="col-sm-1">
            <br><img class="image flip"  id="tg346" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d346">
            <br>
    <script>
    	function addRow346()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Book Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Paper Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Proceedings Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Conference Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="National/International" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="ISBN/ISSN" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institute Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Publisher Name" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab346').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab346">
            <tr>
                <th style="width:80px; padding:20px;">Name of the teacher</th>
                <th style="width:200px; padding:20px;">Title of the book/chapters published</th>
                <th style="width:250px; padding:20px;">Title of the paper</th>
                <th style="width:80px; padding:20px;">Title of the proceedings of the conference</th>
                <th style="width:200px; padding:20px;">Name of the conference</th>
                <th style="width:80px; padding:20px;">National / International</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of publication</th>
                <th style="width:250px; padding:20px;">ISBN/ISSN number of the proceeding</th>
                <th style="width:200px; padding:20px;">Affiliating Institute at the time of publication </th>
                <th style="width:200px; padding:20px;">Name of the publisher</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow346()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow346()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save346($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.4.6 (b)
-->
<script>
        	function save346b(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var name = $($(rows[i]).find('input')[0]).val();
                        var authors = $($(rows[i]).find('input')[1]).val();
                        var ptitle = $($(rows[i]).find('input')[2]).val();
                        var protitle = $($(rows[i]).find('input')[3]).val();
                        var cname = $($(rows[i]).find('input')[4]).val();
                        var inst = $($(rows[i]).find('input')[5]).val();
                        var nori = $($(rows[i]).find('input')[6]).val();
                        var stdate = $($(rows[i]).find('input')[7]).val();
                        var enddate = $($(rows[i]).find('input')[8]).val();
                        var duration = $($(rows[i]).find('input')[9]).val();
                        var Year  = $($(rows[i]).find('input')[10]).val();
                        var affinst  = $($(rows[i]).find('input')[11]).val();
                        var finance  = $($(rows[i]).find('input')[12]).val();
                        var remarks  = $($(rows[i]).find('input')[13]).val();
                        if($(rows[i]).find('input:text').filter(function() { return $(this).val() == ""; }).length > 0 ) alert("Please fill all the fields!");
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('0','"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + authors
        					  + "','" + ptitle  +"','"+ protitle +"','"+	cname +"','" + inst + "','"+ nori + "','"+stdate+
        					  "','" + enddate + "','" + duration + "','" + Year + "','" + affinst + "','" + finance +"','" + remarks +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d346b").slideToggle("slow");
                               rotate("tg346b");
                               num_rows("tab346b","ch346b");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_6b", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_346b()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab346b').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }

        			}
                    num_rows("tab346b","ch346b");
        		};
          			   			 xhttp.open("GET", "fetch346b.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg346b"); $("#d346b").slideToggle("slow");'>

        <div class="col-sm-1" id="ch346b">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h346b" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.6(b)<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of papers in national/international conferences per teacher during the last five years

            </div>
        </div>

        <div id="to346b" class="col-sm-1">
            <br><img class="image flip"  id="tg346b" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d346b">
            <br>
    <script>
    	function addRow346b()
    	{

var i = get_time();
			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Authors" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Paper Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Type of Presentation" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Conference Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Institute" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="National/International" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Start Date" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="End Date" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Duration" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Academic year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institute" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Financial Assistance" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Remarks" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab346b').find('tr');
   			$(x[x.length-1]).before(t);

    	}
    </script>
    <form>

        <table border="0" id="tab346b">
            <tr>
                <th style="width:80px; padding:20px;">Name of the teacher</th>
                <th style="width:200px; padding:20px;">Name(s) of other associated Authors(s)</th>
                <th style="width:250px; padding:20px;">Title of the paper</th>
                <th style="width:80px; padding:20px;">Type of presentation (Oral/ Poster)</th>
                <th style="width:200px; padding:20px;">Name of the conference</th>
                <th style="width:200px; padding:20px;">Host Organization/ Institute</th>
                <th style="width:80px; padding:20px;">National / International</th>
		<th style="width:200px; padding:20px;">Conference Start Date<br>(DD-MM-YYYY)</th>
		<th style="width:200px; padding:20px;">Conference End Date<br>(DD-MM-YYYY)</th>
                <th style="width:200px; padding:20px;">Duration of conference <br>(In Days)</th>
                <th style="width:200px; padding:20px;">Academic Year</th>
                <th style="width:200px; padding:20px;">Affiliating Institute of Teacher</th>
                <th style="width:200px; padding:20px;">Financial Assistance Provided by the University in Rs. (if any)</th>
                <th style="width:200px; padding:20px;">Remarks (if any)</th>

            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow346b()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow346b()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save346b($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    3.4.6 (c)
-->
<script>
        	function save346c(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var name = $($(rows[i]).find('input')[0]).val();
                        var wname = $($(rows[i]).find('input')[1]).val();
                        var inst = $($(rows[i]).find('input')[2]).val();
                        var nori = $($(rows[i]).find('input')[3]).val();
                        var stdate = $($(rows[i]).find('input')[4]).val();
                        var enddate = $($(rows[i]).find('input')[5]).val();
                        var duration = $($(rows[i]).find('input')[6]).val();
                        var Year  = $($(rows[i]).find('input')[7]).val();
                        var affinst  = $($(rows[i]).find('input')[8]).val();
                        var finance  = $($(rows[i]).find('input')[9]).val();
                        var remarks  = $($(rows[i]).find('input')[10]).val();
                        if($(rows[i]).find('input:text').filter(function() { return $(this).val() == ""; }).length > 0 ) alert("Please fill all the fields!");
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('0','"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + wname
        					  + "','" + inst + "','"+ nori + "','"+stdate+
        					  "','" + enddate + "','" + duration + "','" + Year + "','" + affinst + "','" + finance +"','" + remarks +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d346c").slideToggle("slow");
                               rotate("tg346c");
                               num_rows("tab346c","ch346c");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_6c", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_346c()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab346c').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }

        			}
                    num_rows("tab346c","ch346c");
        		};
          			   			 xhttp.open("GET", "fetch346c.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg346c"); $("#d346c").slideToggle("slow");'>

        <div class="col-sm-1" id="ch346c">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h346c" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.6(c)<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;"> Details of workshop attended during the last five years.
            </div>
        </div>

        <div id="to346c" class="col-sm-1">
            <br><img class="image flip"  id="tg346c" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d346c">
            <br>
    <script>
    	function addRow346c()
    	{

var i = get_time();
			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Workshop" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name of Institute" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="National/International" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Start Date" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="End Date" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Duration" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Academic year" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institute" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Financial Assistance" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Remarks" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab346c').find('tr');
   			$(x[x.length-1]).before(t);

    	}
    </script>
    <form>

        <table border="0" id="tab346c">
            <tr>
                <th style="width:80px; padding:20px;">Name of the teacher</th>
                <th style="width:200px; padding:20px;">Name of Workshop </th>
                <th style="width:200px; padding:20px;">Host Organization/ Institute</th>
                <th style="width:80px; padding:20px;">National / International</th>
		<th style="width:200px; padding:20px;">Conference Start Date<br>(DD-MM-YYYY)</th>
		<th style="width:200px; padding:20px;">Conference End Date<br>(DD-MM-YYYY)</th>
                <th style="width:200px; padding:20px;">Duration of conference <br>(In Days)</th>
                <th style="width:200px; padding:20px;">Academic Year</th>
                <th style="width:200px; padding:20px;">Affiliating Institute of Teacher</th>
                <th style="width:200px; padding:20px;">Financial Assistance Provided by the University in Rs. (if any)</th>
                <th style="width:200px; padding:20px;">Remarks (if any)</th>

            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow346c()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow346c()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save346c($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.4.7
-->
<script>
        	function save347(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var ptitle = $($(rows[i]).find('input')[0]).val();
                        var name = $($(rows[i]).find('input')[1]).val();
                        var jtitle = $($(rows[i]).find('input')[2]).val();
                        var indx = $($(rows[i]).find('input')[3]).val();
                        var mention = $($(rows[i]).find('input')[4]).val();
                        var citations = $($(rows[i]).find('input')[5]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(jtitle==""){
                            alert('Please enter a Journal Title');
        					return false;
                        }else if(indx==""){
                            alert('Please enter a citation index');
        					return false;
                        }else if(ptitle==""){
                            alert('Please enter a Paper Title');
        					return false;
                        }else if(mention==""){
                            alert('Please enter Institutional Affiliations');
        					return false;
                        }else if(citations==""||citations<0){
                            alert('Please enter valid number of citations');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ ptitle + "','" + name  + "','" + jtitle  +"','"+ Year +"','"+	indx +"','" + mention + "','" + citations  + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d347").slideToggle("slow");
                               rotate("tg347");
                               num_rows("tab347","ch347");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_7", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_347()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab347').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		pc = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc).attr('value'));
    							}
        			}
                    num_rows("tab347","ch347");
        		};
          			   			 xhttp.open("GET", "fetch347.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg347"); $("#d347").slideToggle("slow");'>

        <div class="col-sm-1" id="ch347">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h347" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.7<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">BiblioMetrics of the publications during the last five years based on average citation index in Scopus/ Web of Science or PubMed/ Indian Citation Index
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
<br>* Bibliometrics of the publications during the last five years
            </div>
        </div>

        <div id="to347" class="col-sm-1">
            <br><img class="image flip"  id="tg347" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d347">
            <br>
    <script>
    	function addRow347()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Paper Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Journal Title" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="citation index" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institute name" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="citations" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab347').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab347">
            <tr>
                <th style="width:80px; padding:20px;">Title of the paper</th>
                <th style="width:200px; padding:20px;">Name of the author</th>
                <th style="width:80px; padding:20px;">Title of the journal</th>
                <th style="width:200px; padding:20px;">Year of publication</th>
                <th style="width:80px; padding:20px;">Citation Index</th>
                <th style="width:200px; padding:20px;">Institutional affiliation as mentioned in the publication </th>
                <th style="width:200px; padding:20px;"> Number of citations excluding self citations</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow347()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow347()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save347($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.4.8
-->
<script>
        	function save348(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var ptitle = $($(rows[i]).find('input')[0]).val();
                        var name = $($(rows[i]).find('input')[1]).val();
                        var jtitle = $($(rows[i]).find('input')[2]).val();
                        var indx = $($(rows[i]).find('input')[3]).val();
                        var mention = $($(rows[i]).find('input')[5]).val();
                        var citations = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(jtitle==""){
                            alert('Please enter a Journal Title');
        					return false;
                        }else if(indx==""){
                            alert('Please enter a citation index');
        					return false;
                        }else if(ptitle==""){
                            alert('Please enter a Paper Title');
        					return false;
                        }else if(mention==""){
                            alert('Please enter Institutional Affiliations');
        					return false;
                        }else if(citations==""||citations<0){
                            alert('Please enter valid number of citations');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ ptitle + "','" + name  + "','" + jtitle  +"','"+ Year +"','"+	indx +"','" + citations  + "','" + mention + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d348").slideToggle("slow");
                               rotate("tg348");
                               num_rows("tab348","ch348");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_4_8", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_348()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab348').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
          			           		var k =$(responseRows[i]).attr('id');
		            				fetch_academic_year(k, $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab348","ch348");
        		};
          			   			 xhttp.open("GET", "fetch348.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg348"); $("#d348").slideToggle("slow");'>

        <div class="col-sm-1" id="ch348">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h348" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.4.8<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">BiblioMetricss of the publications during the last five years based on Scopus/ Web of Science – h-index of the University
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Bibiliometrics of publications based on Scopus/ Web of Science - h-
index of the University
<br>*
Any additional information
            </div>
        </div>

        <div id="to348" class="col-sm-1">
            <br><img class="image flip"  id="tg348" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d348">
            <br>
    <script>
    	function addRow348()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Paper Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Journal Title" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="h-index" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="citations" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institute name" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab348').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab348">
            <tr>
                <th style="width:80px; padding:20px;">Title of the paper</th>
                <th style="width:200px; padding:20px;">Name of the author</th>
                <th style="width:80px; padding:20px;">Title of the journal</th>
                <th style="width:200px; padding:20px;">Year of publication</th>
                <th style="width:80px; padding:20px;">h-index</th>
                <th style="width:200px; padding:20px;"> Number of citations excluding self citations</th>
                <th style="width:200px; padding:20px;">Institutional affiliation as mentioned in the publication </th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow348()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow348()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save348($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.5 Consultancy</a></center>

    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
<!--
    3.5.1
-->
<script>
        	function save351(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var url = $($(rows[i]).find('input')[0]).val();
                        if(url==""){
                            alert('Please enter valid URL');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');

                url = escapeHtml(url);

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','" + url + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//alert(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               //console.log(this.responseText);
                               alert(this.responseText);
                               $("#d351").slideToggle("slow");
                               rotate("tg351");
                               num_rows("tab351","ch351");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_5_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_351()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab351').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab351","ch351");
        		};
          			   			 xhttp.open("GET", "fetch351.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg351"); $("#d351").slideToggle("slow");'>

        <div class="col-sm-1" id="ch351">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h351" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.5.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Institution has a policy on consultancy including revenue sharing between the institution and the individual (yes/No)
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Upload minutes of the Governing Council/ Syndicate/Board of
Management related to consultancy policy
<br>* Upload soft copy of the Consultancy Policy
<br>* Upload any additional information
<br>* Paste URL of the consultancy policy document
            </div>
        </div>

        <div id="to351" class="col-sm-1">
            <br><img class="image flip"  id="tg351" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d351">
            <br>
    <script>
    	function addRow351()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="URL" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab351').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab351">
            <tr>
                <th style="width:80px; padding:20px;">Provide URL of the consultancy policy document.</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow351()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow351()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save351($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.5.2
-->
<script>
        	function save352(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var project = $($(rows[i]).find('input')[1]).val();
                        var agency = $($(rows[i]).find('input')[2]).val();
                        var revenue = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter a Name');
        					return false;
                        }else if(project==""){
                            alert('Please enter a Project Name');
        					return false;
                        }else if(agency==""){
                            alert('Please enter the agency contact details');
        					return false;
                        }else if(revenue==""||revenue<0){
                            alert('Please enter valid revenue');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + project  + "','" + agency  +"','"+ Year +"','"+	revenue + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d352").slideToggle("slow");
                               rotate("tg352");
                               num_rows("tab352","ch352");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_5_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_352()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab352').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab352","ch352");
        		};
          			   			 xhttp.open("GET", "fetch352.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg352"); $("#d352").slideToggle("slow");'>

        <div class="col-sm-1" id="ch352">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h352" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.5.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Revenue generated from consultancy during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Audited statements of accounts indicating the revenue generated
through consultancy
<br>* Any additional information
<br>* List of consultants and revenue generated by them
            </div>
        </div>

        <div id="to352" class="col-sm-1">
            <br><img class="image flip"  id="tg352" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d352">
            <br>
    <script>
    	function addRow352()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="project" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Contact Details" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="number" placeholder="Revenue" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab352').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab352">
            <tr>
                <th style="width:80px; padding:20px;">Name of the consultant</th>
                <th style="width:200px; padding:20px;">Name of consultancy project</th>
                <th style="width:80px; padding:20px;">Consulting/Sponsoring agency with contact details</th>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:80px; padding:20px;">Revenue generated (amount in rupees)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow352()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow352()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save352($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.5.3
-->
<script>
        	function save353(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var title = $($(rows[i]).find('input')[1]).val();
                        var agency = $($(rows[i]).find('input')[2]).val();
                        var revenue = $($(rows[i]).find('input')[3]).val();
                        var num = $($(rows[i]).find('input')[4]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(title==""){
                            alert('Please enter the title of corporate training programme');
        					return false;
                        }else if(agency==""){
                            alert('Please enter the agency contact details');
        					return false;
                        }else if(revenue==""||revenue<0){
                            alert('Please enter valid revenue');
        					return false;
                        }else if(num==""||num<0){
                            alert('Please enter valid number of trainees');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + title  + "','" + agency  +"','"+ Year +"','"+	revenue + "','" + num + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d353").slideToggle("slow");
                               rotate("tg353");
                               num_rows("tab353","ch353");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_5_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_353()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab353').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab353","ch353");
        		};
          			   			 xhttp.open("GET", "fetch353.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg353"); $("#d353").slideToggle("slow");'>

        <div class="col-sm-1" id="ch353">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h353" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.5.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Revenue generated from corporate training by the institution during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Audited statements of account indicating the revenue generated through
training
<br>* Any additional information
<BR>* List of teacher consultants and revenue generated by them
            </div>
        </div>

        <div id="to353" class="col-sm-1">
            <br><img class="image flip"  id="tg353" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d353">
            <br>
    <script>
    	function addRow353()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Contact Details" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="number" placeholder="Revenue" style="width:160px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Trainees" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab353').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab353">
            <tr>
                <th style="width:80px; padding:20px;">Names of the teacher-consultants</th>
                <th style="width:200px; padding:20px;">Title of the corporate training programme</th>
                <th style="width:80px; padding:20px;">Agency seeking training with contact details</th>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:80px; padding:20px;">Revenue generated (amount in rupees)</th>
                <th style="width:80px; padding:20px;">Number of Trainees</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow353()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow353()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save353($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.6 Extension Activities</a></center>

    </center>


 <!--
    3.6.1
-->

        <script>

            function save361(ta)
        	{
                link =  document.getElementById("link3_6_1").value;
                var ata = ta.value;

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                ata = escapeHtml(ata);
                link = escapeHtml(link);

                //console.log(ta+"\n"+link);
               var rowss = "('"+"<?php echo $_SESSION['username'];?>" + "','" + ata + "','" + link + "','" + ta.id + "');";
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d361").slideToggle("slow");
                               rotate("tg361");

                               if(document.getElementById("TA3_6_1").value==""){
                                    document.getElementById("ch361").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"/><br> Not Filled';
                                }else{
                                    document.getElementById("ch361").innerHTML = '<img src="../images/filled.png" width="52" height="52"><br> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_6_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        		function fetch_rows_361()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("TA3_6_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_6_1").value==""){
                                    document.getElementById("ch361").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                                }else{
                                    document.getElementById("ch361").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }
         			       }
         			       };

          			   			 xhttp.open("GET", "fetch311.php?table=t3_6_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

            function fetch_rows_361_link()
        		{
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		document.getElementById("link3_6_1").value = this.responseText;
//         			       		//alert(this.responsetext);
         			       		 if(document.getElementById("TA3_6_1").value==""){
                                    document.getElementById("ch361").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"> <br>Not Filled';
                                }else{
                                    document.getElementById("ch361").innerHTML = '<img src="../images/filled.png" width="52" height="52"> <br>Filled';
                                }
         			       }
         			       };

          			   			 xhttp.open("GET", "fetch311_link.php?table=t3_6_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg361"); $("#d361").slideToggle("slow");'>

        <div class="col-sm-1" id="ch361">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h361" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">3.6.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
           Extension activities in the neighbourhood community in terms of impact
and sensitising students to social issues and holistic development during the
last five years
<br><br>Please keep following and other relevant documents ready in hard copy:<br>* Any additional information
            </div>
        </div>

        <div id="to361" class="col-sm-1">
            <br><img class="image flip"  id="tg361" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d361">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA3_6_1" placeholder="Describe the impact of extension activities in sensitising students to social issues and holistic development within a minimum of 500 characters and maximum of 500 words" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link3_6_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

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

        <input type="button" class="SAVE" onclick="save361( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    3.6.2
-->
<script>
        	function save362(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var award = $($(rows[i]).find('input')[1]).val();
                        var awardG = $($(rows[i]).find('input')[2]).val();
                        var period = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(award==""){
                            alert('Please enter the name of the award');
        					return false;
                        }else if(awardG==""){
                            alert('Please enter the name of the Awarding Body');
        					return false;
                        }else if(awardG==""){
                            alert('Please enter valid year');
        				}
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + award  + "','" + awardG  +"','"+period+"','"+ Year + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d362").slideToggle("slow");
                               rotate("tg362");
                               num_rows("tab362","ch362");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_6_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_362()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab362').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab362","ch362");
        		};
          			   			 xhttp.open("GET", "fetch362.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg362"); $("#d362").slideToggle("slow");'>

        <div class="col-sm-1" id="ch362">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h362" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.6.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of awards and recognition received for extension activities from Government /recognised bodies during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e-copy of the award letters
<BR>* Any additional information
<br>*
Number of awards for extension activities in last 5 year
e-copy of the award letters

            </div>
        </div>

        <div id="to362" class="col-sm-1">
            <br><img class="image flip"  id="tg362" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d362">
            <br>
    <script>
    	function addRow362()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Award" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Awarding Body" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab362').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab362">
            <tr>
                <th style="width:80px; padding:20px;">Name of the activity</th>
                <th style="width:200px; padding:20px;">Name of the Award/ recognition </th>
                <th style="width:80px; padding:20px;">Name of the Awarding government/ recognised bodies</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of award </th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow362()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow362()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save362($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.6.3
-->
<script>
        	function save363(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var agency = $($(rows[i]).find('input')[1]).val();
                        var teachers = $($(rows[i]).find('input')[3]).val();
                        var students = $($(rows[i]).find('input')[4]).val();
                        var period = $($(rows[i]).find('input')[2]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(agency==""){
                            alert('Please enter the name of the agency');
        					return false;
                        }else if(teachers==""||teachers<0){
                            alert('Please enter valid number of teachers');
        					return false;
                        }else if(students==""||students<0){
                            alert('Please enter valid number of students');
        					return false;
                        }else if(period==""){
                            alert('Please enter valid year');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + agency + "','"+period+"','" + Year  +"','"+ teachers + "','"+ students + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d363").slideToggle("slow");
                               rotate("tg363");
                               num_rows("tab363","ch363");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_6_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_363()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab363').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab363","ch363");
        		};
          			   			 xhttp.open("GET", "fetch363.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg363"); $("#d363").slideToggle("slow");'>

        <div class="col-sm-1" id="ch363">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h363" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.6.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of extension and outreach programs conducted in collaboration with industry, community and Non- Government Organisations through NSS/NCC/Red cross/YRC etc., during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Reports of the event organized
<br>* Any additional information
<br>* Number of extension and outreach Programmes conducted with
industry, community etc for the last five years
            </div>
        </div>

        <div id="to363" class="col-sm-1">
            <br><img class="image flip"  id="tg363" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d363">
            <br>
    <script>
    	function addRow363()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Teachers" style="width:160px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Students" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab363').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab363">
            <tr>
                <th style="width:80px; padding:20px;">Name of the activity</th>
                <th style="width:200px; padding:20px;">Organising unit/ agency/ collaborating agency  </th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:80px; padding:20px;">Year of the activity </th>
                <th style="width:200px; padding:20px;">Number of teachers participated in such activities </th>
                <th style="width:200px; padding:20px;">Number of students participated in such activities</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow363()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow363()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save363($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    3.6.4
-->
<script>
        	function save364(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var name = $($(rows[i]).find('input')[0]).val();
                        var agency = $($(rows[i]).find('input')[1]).val();
                        var scheme = $($(rows[i]).find('input')[2]).val();
                        var teachers = $($(rows[i]).find('input')[4]).val();
                        var students = $($(rows[i]).find('input')[5]).val();
                        var period = $($(rows[i]).find('input')[3]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(agency==""){
                            alert('Please enter the name of the agency');
        					return false;
                        }else if(scheme==""){
                            alert('Please enter the name of the Scheme');
        					return false;
                        }else if(teachers==""||teachers<0){
                            alert('Please enter valid number of teachers');
        					return false;
                        }else if(students==""||students<0){
                            alert('Please enter valid number of students');
        					return false;
                        }else if(period==""){
                            alert('Please enter a valid year');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ name + "','" + agency + "','" +scheme+"','"+period+"','" + Year  +"','"+ teachers + "','"+ students + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d364").slideToggle("slow");
                               rotate("tg364");
                               num_rows("tab364","ch364");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_6_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_364()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab364').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab364","ch364");
        		};
          			   			 xhttp.open("GET", "fetch364.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg364"); $("#d364").slideToggle("slow");'>

        <div class="col-sm-1" id="ch364">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h364" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.6.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Average percentage of students participating in extension activities with Government Organisations, Non-Government Organisations and programs such as Swachh Bharat, Aids Awareness, Gender Issue, etc. during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Report of the event
<br>* Any additional information
<br>* Average percentage of students participating in extension activities with
Govt. or NGO etc
            </div>
        </div>

        <div id="to364" class="col-sm-1">
            <br><img class="image flip"  id="tg364" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d364">
            <br>
    <script>
    	function addRow364()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Scheme" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Teachers" style="width:160px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Students" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab364').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab364">
            <tr>
                <th style="width:80px; padding:20px;">Name of the activity</th>
                <th style="width:200px; padding:20px;">Organising unit/ agency/ collaborating agency  </th>
                <th style="width:80px; padding:20px;">Name of the scheme</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:80px; padding:20px;">Year of the activity </th>
                <th style="width:200px; padding:20px;">Number of teachers participated in such activities </th>
                <th style="width:200px; padding:20px;">Number of students participated in such activities</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow364()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow364()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save364($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">3.7 Collaboration</a></center>

    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    3.7.1
-->
<script>
        	function save371(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var title = $($(rows[i]).find('input')[0]).val();
                        var agency = $($(rows[i]).find('input')[1]).val();
                        var name = $($(rows[i]).find('input')[2]).val();
                        var source = $($(rows[i]).find('input')[3]).val();
                        var duration = $($(rows[i]).find('input')[4]).val();
                        var nature = $($(rows[i]).find('input')[6]).val();
                        var period = $($(rows[i]).find('input')[5]).val();
                        var link = $($(rows[i]).find('input')[7]).val();

                        link = escapeHtml(link);

                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(agency==""){
                            alert('Please enter the name of the agency');
        					return false;
                        }else if(title==""){
                            alert('Please enter the name of the Title');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }else if(nature == ""){
                            alert('Please enter nature of activity');
        					return false;
                        }else if(source == ""){
                            alert('Please enter Source of financial support');
        					return false;
                        }else if(period == ""){
                            alert('Please enter valid Year');
        					return false;
                        }
                        else if(link == ""){
                            alert('Please provide link of the relevant document');
        					return false;
                        }
        				else
        				{


        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ title + "','" + agency + "','" +name+"','" + source  +"','"+ period+"','"+Year + "','"+ duration + "','" + nature + "','" + link + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d371").slideToggle("slow");
                               rotate("tg371");
                               num_rows("tab371","ch371");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_7_1", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_371()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab371').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab371","ch371");
        		};
          			   			 xhttp.open("GET", "fetch371.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg371"); $("#d371").slideToggle("slow");'>

        <div class="col-sm-1" id="ch371">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h371" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.7.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of Collaborative activities for research, faculty exchange, student exchange per year
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* Copies of collaboration
<br>* Any additional information
<br>* Number of Collaborative activities for research, faculty etc
            </div>
        </div>

        <div id="to371" class="col-sm-1">
            <br><img class="image flip"  id="tg371" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d371">
            <br>
    <script>
    	function addRow371()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Agency Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Source" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Duration" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Nature" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Link of the relavant document" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab371').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab371">
            <tr>
                <th style="width:80px; padding:20px;">Title of the collaborative activity</th>
                <th style="width:200px; padding:20px;">Name of the collaborating agency with contact details</th>
                <th style="width:80px; padding:20px;">Name of the participant </th>
                <th style="width:80px; padding:20px;">Source of financial support</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:200px; padding:20px;">Year of collaboration</th>
                <th style="width:200px; padding:20px;">Duration (in Months)</th>
                <th style="width:200px; padding:20px;">Nature of the activity</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow371()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow371()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save371($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    3.7.2
-->
<script>
        	function save372(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var title = $($(rows[i]).find('input')[0]).val();
                        var inst = $($(rows[i]).find('input')[1]).val();
                        var durationf = $($(rows[i]).find('input')[2]).val();
                        var durationt = $($(rows[i]).find('input')[3]).val();
                        var nature = $($(rows[i]).find('input')[4]).val();
                        var name = $($(rows[i]).find('input')[5]).val();
                        var link = $($(rows[i]).find('input')[6]).val();
                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(name==""){
                            alert('Please enter Names of teachers separated by , ');
        					return false;
                        }else if(inst==""){
                            alert('Please enter the name of the Institute');
        					return false;
                        }else if(title==""){
                            alert('Please enter the name of the Title');
        					return false;
                        }else if(durationf==""){
                            alert('Please enter valid from');
        					return false;
                        }else if(durationt==""){
                            alert('Please enter valid to');
        					return false;
                        }else if(nature == ""){
                            alert('Please enter nature of activity');
        					return false;
                        }else if(link == ""){
                            alert('Please provide link of relevant document');
                  return false;
                        }else{

                          link = escapeHtml(link);

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ title + "','" + inst + "','" +Year+"','" + durationf + "','"+durationt +"','"+ nature + "','"+ name + "','" + link + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d372").slideToggle("slow");
                               rotate("tg372");
                               num_rows("tab372","ch372");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_7_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_372()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab372').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();

   					  console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}
        			}
                    num_rows("tab372","ch372");
        		};
          			   			 xhttp.open("GET", "fetch372.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg372"); $("#d372").slideToggle("slow");'>

        <div class="col-sm-1" id="ch372">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h372" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.7.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of linkages with institutions/industries for internship, on-the-job training, project work, sharing of research facilities etc. during the last five years
            <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e-copies of linkage related Document
<br>* Any additional information
<br>* Details of linkages with institutions/industries for internship
            </div>
        </div>

        <div id="to372" class="col-sm-1">
            <br><img class="image flip"  id="tg372" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d372">
            <br>
    <script>
    	function addRow372()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institution Name" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Year" class="year" style="width:165px;" required></select></center></td>'+
              '<td><center><input type="date" placeholder="DD/MM/YY" style="width:180px;" required></center></td>'+
              '<td><center><input type="date" placeholder="DD/MM/YY" style="width:180px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Nature" style="width:160px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Link of the relavant document" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab372').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab372">
            <tr>
                <th style="width:80px; padding:20px;">Title of the linkage</th>
                <th style="width:200px; padding:20px;">Name of the partnering institution/ industry /research lab with contact details</th>
                <th style="width:80px; padding:20px;">Year of commencement</th>
                <th style="width:80px; padding:20px;" colspan=2>Duration (From-To)</th>
                <th style="width:200px; padding:20px;">Nature of linkage</th>
                <th style="width:200px; padding:20px;">Name of the participant</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow372()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow372()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save372($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    3.7.3
-->
<script>
        	function save373(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var Year = $($(rows[i]).find('select')[0]).val();
                        var org = $($(rows[i]).find('input')[0]).val();
                        var inst = $($(rows[i]).find('input')[1]).val();
                        var duration = $($(rows[i]).find('input')[3]).val();
                        var activities= $($(rows[i]).find('input')[4]).val();
                        var num = $($(rows[i]).find('input')[5]).val();
                        var period = $($(rows[i]).find('input')[2]).val();


                        if(period == ""){
        					alert('Year of signing Mou can not be left unfilled');
        					return false;
			}

			if(period.length != 4){
				alert('Year of signing Mou should be of length 4');
				return false;
			}

			if(period.substr(0,2)!="20" || parseInt(period.substr(2))>parseInt(Year.substr(14)) || parseInt(period.substr(2))<parseInt(Year.substr(5,7)) ){
				alert('Mismatch of Year with the Academic Period selected');
				return false;
			}

                        if(Year == "")
        				{
        					alert('Please select valid Academic Period to save');
        					return false;
        				}else if(num==""||num<0){
                            alert('Please enter valid number of teachers/students ');
        					return false;
                        }else if(inst==""){
                            alert('Please enter the name of the Institute');
        					return false;
                        }else if(org==""){
                            alert('Please enter the name of Organization');
        					return false;
                        }else if(duration==""||duration<=0){
                            alert('Please enter valid duration');
        					return false;
                        }else if(activities== ""){
                            alert('Please enter activity');
        					return false;
                        }else if(period== ""){
                            alert('Please enter valid Year');
        					return false;
                        }
        				else
        				{

        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ org + "','" + inst + "','"+period+"','" +Year+"','" + duration +"','"+ activities + "','"+ num + "','" +  idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               console.log(this.responseText);
                               alert(this.responseText);
                               $("#d373").slideToggle("slow");
                               rotate("tg373");
                               num_rows("tab373","ch373");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t3_7_3", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_373()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {

                  select_NA();

          			   var x = $('#tab373').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

select_NA();


              console.log("Hello the world");

          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
          			           		var pc1 = $(responseRows[i]).find('select')[0];
		            				fetch_academic_year($(responseRows[i]).attr('id'), $(pc1).attr('value'));
    							}

        			fetched_duration();
        			}
                    num_rows("tab373","ch373");
        		};
          			   			 xhttp.open("GET", "fetch373.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);


        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg373"); $("#d373").slideToggle("slow");'>

        <div class="col-sm-1" id="ch373">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h373" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>3.7.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Number of functional MoUs with institutions of national, international importance, other universities, industries, corporate houses etc. during the last five years (only functional MoUs with ongoing activities to be considered)
             <br><br>Please keep following and other relevant documents ready in hard copy:<br>* e-copies of the MoUs with institution/ industry/ corporate house
<br>* Any additional information
<br>* Details of functional MoUs with institutions of national, international
importance, other universities etc. during the last five years
            </div>
        </div>

        <div id="to373" class="col-sm-1">
            <br><img class="image flip"  id="tg373" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d373">
            <br>
    <script>
    	function addRow373()
    	{
            var i = get_time();

			   var t = '<tr id = "'+i+'"><td><center><input type="text" placeholder="Organization Name" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Institution Name" style="width:200px;" required></center></td>'+
              '<td><center><select placeholder="Period" class="year" style="width:175px;" required></select></center></td>'+
              '<td><center><input type="text" placeholder="Year" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Duration" style="width:200px;" required></center></td>'+
              '<td><center><input type="text" placeholder="Activities" style="width:200px;" required></center></td>'+
              '<td><center><input type="number" placeholder="Numbers" style="width:160px;" required></center></td>'+
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    		var x = $('#tab373').find('tr');
   			$(x[x.length-1]).before(t);

            fetch_academic_year(i);
            fetched_duration();
    	}
    </script>
    <form>

        <table border="0" id="tab373">
            <tr>
                <th style="width:80px; padding:20px;">Orglinkanisation with which MoU is signed</th>
                <th style="width:200px; padding:20px;">Name of the institution/ industry/ corporate house</th>
		<th style="width:200px; padding:20px;">Academic Period </th>
                <th style="width:80px; padding:20px;">Year of signing MoU</th>
                <th style="width:80px; padding:20px;">Duration (in Months)</th>
                <th style="width:200px; padding:20px;">List the actual activities under each MoU year wise</th>
                <th style="width:200px; padding:20px;">Number of students/teachers participated under MoUs</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow373()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow373()">Add a new Row</button></td> -->
			</tr>
        </table>


        <input type="button" class="SAVE" onclick="save373($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



    <script>
    function fetched_duration()
    {
    	var a = $("input[placeholder=Duration]");
    	for(var i = 0; i < a.length; i++)
    	{
    		$(a[i]).focusout(function(){
    		console.log(this);
    			if($(this).val()<=10)
    				alert("Kindly Check if you have entered the Duration in Months");
    		});
    	}
    }
        function load_time_func(){


          <?php
/*
              $connection = mysqli_connect($servername, $username, $password, $dbname);
          	$query = "select distinct * from t3_1_1 where Username like '".$_SESSION['username']."';";
          	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
              $row  = $res ->fetch_assoc();
                      //echo $row['Description'];
*/          ?>
/*
                  // 3.1.1
                      document.getElementById("TA3_1_1").value = '<?php// echo $row["descr"]; ?>';
                      document.getElementById("link3_1_1").value = '<?php// echo urldecode($row["Link"]); ?>';
                      document.getElementById("TA3_1_1").placeholder = "Describe Course Outcomes (COs) for all courses and mechanism of communication within a minimum of 500 characters and maximum of 500 words ";

                      if(document.getElementById("TA3_1_1").value==""){
                         document.getElementById("ch311").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
                      }else{
                         document.getElementById("ch311").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
                      }
*/
<?php  ?>


        //1.1.3 Loading all rows that are already saved

        fetch_rows_311();
        fetch_rows_311_link();
        fetch_rows_331();
        fetch_rows_331_link();
        fetch_rows_361();
        fetch_rows_361_link();
        fetch_rows_312();
        fetch_rows_313();
        fetch_rows_314();
        fetch_rows_315();
        fetch_rows_316();
        fetch_rows_322();
        fetch_rows_323();

        fetch_rows_332();
        fetch_rows_333();
        fetch_rows_334();
        fetch_rows_341();
        fetch_rows_342();
        fetch_rows_343();
        fetch_rows_344();
        fetch_rows_345();
        fetch_rows_346();
        fetch_rows_346b();
        fetch_rows_346c();
        fetch_rows_347();
        fetch_rows_348();
        fetch_rows_351();
        fetch_rows_352();
        fetch_rows_353();
        fetch_rows_362();
        fetch_rows_363();
        fetch_rows_364();
        fetch_rows_371();
        fetch_rows_372();
        fetch_rows_373();

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

        $connection = mysqli_connect($servername, $username, $password, $dbname);

          $sql_na = "Select * from not_applicable WHERE Username LIKE '".$_SESSION['username']."'";
          $res  = mysqli_query($connection,$sql_na) ; //or die(mysqli_error($connection));

          while ($row = $res->fetch_assoc()){
            if($row['section'][1]!=3){
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
                     xhttp.open("GET", "../profile/maintain_session.php?page=c3.php", true);
                   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                 xhttp.send("rows="+rowss);
        }

        setInterval(function() { maintain_session(); }, 800000);


    </script>

</body>
</html>
