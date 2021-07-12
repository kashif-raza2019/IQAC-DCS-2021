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

    </script>

<link rel="icon" href="../logo.png">
<title>Criteria-4 Information Gathering System</title>


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


        #d413, #h413, #d414, #h414, #d423, #h423, #d424, #h424, #d425, #h425, #d426, #h426, #d427, #h427, #d434, #h434, #d411,  #h411, #h412, #d412, #h421, #d421, #d422, #h422, #h432, #d432, #h433, #d433, #d431, #d441, #d442, #h431, #h441, #h442{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d413, #d414, #d423, #d424, #d425, #d426, #d427, #d434, #d411, #d412, #d421, #d422, #d432, #d433, #d431, #d441, #d442{
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

        input[type=text],input[type=number],textarea {
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
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 4 - Infrastructure and Learning Resources </a></center>
        </div>
<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">4.1  Physical Facilities</a></center>

    </center>



<!-- 4.1.1-->



        <script>

            function save411()
        {
//                link =  document.getElementById("link4_1_1").value;
               // ta = ta.value;
               // alert(ta);
                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA4_1_1').value;

                link =  document.getElementById("link4_1_1").value;

                link = escapeHtml(link);
                desc = escapeHtml(desc);

                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }


                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d411").slideToggle("slow");
                               rotate("tg411");

                               if(document.getElementById("TA4_1_1").value==""){
                                    document.getElementById("ch411").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch411").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet411.php?desc="+desc+"&link="+link , true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg411"); $("#d411").slideToggle("slow");'>

        <div class="col-sm-1" id="ch411">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h411" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">4.1.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            The institution has adequate facilities for teaching - learning. viz.,
classrooms, laboratories, computing equipment, etc <br>
<br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to411" class="col-sm-1">
            <br><img class="image flip"  id="tg411" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d411">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
        <textarea id="TA4_1_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link4_1_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link4_1_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save411();" value="SAVE CHANGES" style="margin-left:80px; width:920px;">
    </form>
</center>
    </div>




<!-- / 4.1.1-- -->


<!--
-->

        <script>

            function save412()
        	{
                link =  document.getElementById("link4_1_2").value;

                link = escapeHtml(link);

                //ta = ta.value;
                if(link==""){
                  alert("Please provide link of the relevant document");
                  return false;
                }

                //console.log(ta+"\n"+link);
                var desc=document.getElementById('TA4_1_2').value;

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
          			   			 xhttp.open("POST", "savet412.php?desc="+desc+"&link="+link, true);
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
            <div class="col-sm-1"  style="font-size:18px;">4.1.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
          The institution has adequate facilities for sports, games (indoor,
outdoor, gymnasium, yoga centre etc.,) and cultural activities
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

        <input type="text" id="link4_1_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

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

            function save413(ta)
        	{
                lcd =  document.getElementById("i4_1_3_lcd").value;
                lan= document.getElementById("i4_1_3_lan").value;
				semi=document.getElementById("i4_1_3_semi").value;
                totalc= document.getElementById("i4_1_3_totalc").value;
				totals=document.getElementById("i4_1_3_totals").value;

			   if(document.getElementById("i4_1_3_totalc").value==""){
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' Please Enter Total Number of Classrooms in Department');
									return false;
                                }else if (document.getElementById("i4_1_3_totals").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert(' please Enter Total Seminar Halls in the Department');
									return false;
                                }else if (document.getElementById("i4_1_3_lcd").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Number of classrooms with LCD facilities');
									return false;
                                }else if (document.getElementById("i4_1_3_lan").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Number of classrooms with wifi/LAN facilities');
									return false;

        		  			}else if (document.getElementById("i4_1_3_semi").value=="") {
                                    document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
									alert('Please Number of seminar halls with ICT facilities');
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


									xhttp.open("POST", "savet413.php?lcd="+lcd+"&lan="+lan+"&semi="+semi+"&totalc="+totalc+"&totals="+totals, true);
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
            <div class="col-sm-1"  style="font-size:18px;">4.1.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
             Percentage of classrooms and seminar halls with ICT - enabled facilities such as smart class, LMS, etc. (current Year Data)

			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
<br>* Upload Number of classrooms and seminar halls with ICT enabled
facilities
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
        <table>
		<th><b>Total Class Rooms in the Department</b><th><b>Total Seminar Halls in the Department</b></th>
		<th><b>Number of classrooms with LCD facilities</b></th><th><b>Number of classrooms with wifi/LAN facilities</b></th><th><b>Number of seminar halls with ICT facilities</b>

		<tr><td><input type="number" min="0" id="i4_1_3_totalc"></td><td><input type="number" min="0" id="i4_1_3_totals"></td><td><input type="number" min="0" id="i4_1_3_lcd"> </td><td><input type="number" min="0" id="i4_1_3_lan"> </td>
		<td><input type="number" min="0" id="i4_1_3_semi"></td>

		</tr>

		</table>


        <br><br>



        <input type="button" class="SAVE" onclick="save413( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
    4.1.4
-->
<script>
        	function save414(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var budgeta = $($(rows[i]).find('input')[0]).val();
                        var budgetu = $($(rows[i]).find('input')[1]).val();
						var yeara = $($(rows[i]).find('select')[0]).val();

                        if(budgeta == "")
        				{
        					alert('Please Enter Budget allocated for infrastructure augmentation');
        					return false;
        				}else if(budgetu==""){
                            alert('Please Enter Budget utilised for infrastructure development');
        					return false;
                        }
        				else if(yeara==""){
							alert('Please Enter Year of allocation');
        					return false;
						}else
        				{

        				var idd = $(rows[i]).attr('id');
        				/*
						var budgeta = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var budgetu = $($(rows[i]).find('input[type="number"]')[1]).val();
        				var yeara = $($(rows[i]).find('select')[0]).val();
						*/
						//alert(yeara);

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ budgeta + "','"+ budgetu + "','" + yeara + "','" + idd +"')";
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
                               $("#d414").slideToggle("slow");
                               rotate("tg414");
                               num_rows("tab414","ch414");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet414.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_414()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab414').find('tr');
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
									console.log(idd);
	            					idd = idd.substr(1);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab414","ch414");
        		};
          			   			 xhttp.open("GET", "fetch414.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg414"); $("#d414").slideToggle("slow");'>

        <div class="col-sm-1" id="ch414">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h414" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.1.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br> Average percentage of budget allocation, excluding salary for infrastructure augmentation during the last five years (INR) (10)
			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Upload audited utilization statements
<br>* Upload Details of budget allocation, excluding salary during the last
five years
            </div>
        </div>

        <div id="to414" class="col-sm-1">
            <br><img class="image flip"  id="tg414" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d414">
            <br>
    <script>

    	function addRow414()
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

			var C1 = '<td><center><input type="number" step="0.5" min="0" max="100" placeholder="Budget allocated" style="width:250px;" required></center></td>';
			var C2 = '<td><center><input type="number" step="0.5" min="0" max="100" placeholder="Budget utilised" style="width:250px;" required></center></td>';
			var C3 = '<td><center><select placeholder="Year" style="width:180px;" id="'+ay+'"></select></center></td>';
			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+CR+'</tr>';
    		var x = $('#tab414').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
    	}

    </script>
    <form>

        <table border="0" id="tab414">
            <tr>
                <th style="width:280px; padding:20px;">Budget allocated for infrastructure augmentation</th>
                <th style="width:280px; padding:20px;">Budget utilised for infrastructure development </th>
                <th style="width:80px; padding:20px;">Year of allocation</th>

            </tr>
			<tr>
				<td class="add"  colspan="3"><input class="add" type="image" src="../images/add2.png" onclick="addRow414()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save414($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!-- 4.2.1 -->

<script>

    	function addRow421()
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

			var nameil = '<td><center><input type="text"  required placeholder="Name" style="width:160px;" required></center></td>';
			var nature = '<td><center><input type="text"  placeholder="Nature" style="width:200px;" required></center></td>';
			var version = '<td><center><input type="text" placeholder="version" style="width:150px;"></center></td>';

			var yearat = '<td><center><select id="'+ay+'" placeholder="Year of automation" style="width:175px;" required></select></center></td>';

			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+nameil+nature+version+yearat+CR+'</tr>';
    		var x = $('#tab421').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
    	}

    </script>
                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">4.2  Library as a Learning Resource</a></center>
        <div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!-- 4.2.1-->
    <div class="col-sm-12" onclick='rotate("tg421"); $("#d421").slideToggle("slow");'>

        <div class="col-sm-1" id="ch421">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>


        <div id="h423" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Library is automated using Integrated Library Management System
(ILMS)
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information

            </div>
        </div>

        <div id="to423" class="col-sm-1">
            <br><img class="image flip"  id="tg421" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


    <div class="col-sm-12" id="d421">



	<center>
        <br>
        <script>
        	function save421(table){

				//alert('121');
				var rows = $(table).find('tr');

        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";


        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var nameil = $($(rows[i]).find('input')[0]).val();
						var nature = $($(rows[i]).find('input')[1]).val();
						var version = $($(rows[i]).find('input')[2]).val();

						var yearat = $($(rows[i]).find('select')[0]).val();


						if(nameil == ""){
        					alert('Please Enter Name of ILMS software');
        					return false;
        				}

						else if(nature == "")
        				{
        					alert('Please Enter Nature of auomation (fully or partially)');
        					return false;
        				}
        				else if(version==""){
							alert('Please Enter Version');
        					return false;
						}else if(yearat==""){
							alert('Please Enter Year of automation');
        					return false;
						}
						else
        				{


        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ nameil + "','"+ nature + "','" +  version + "','" + yearat +"','" + idd +"')";
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
                               $("#d421").slideToggle("slow");
                               rotate("tg421");
                               num_rows("tab421","ch421");
        		  			}
        		  		};

          			   			 xhttp.open("POST", "savet421.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
				}

			}

        	function fetch_rows_421()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){

         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab421').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var bool_yesno = x[0];
	          			         //var cc = x[1];
	          			          var ay = x[0];
	          			          var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(1);
	            					//console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));



    							}
        			}
                    num_rows("tab421","ch421");
        		};
          			   			 xhttp.open("GET", "fetch421.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table border="0" id="tab421">
            <tr>
                <th style="width:100px; padding:10px;">Name of ILMS software</th>
            	<th style="width:250px; padding:10px;">Nature of auomation (fully or partially)</th>
                <th style="width:100px; padding:10px;">Version</th>
                <th style="width:250px; padding:10px;">Year of automation</th>
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
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow421()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save421($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>


<!--4.2.1-->

<!-- 4.2.2 -->

    <div class="col-sm-12" onclick='rotate("tg422"); $("#d422").slideToggle("slow");'>

        <div class="col-sm-1" id="ch422">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>


        <div id="h422" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Collection of rare books, manuscripts, special reports or any other
knowledge resource for library enrichment
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information

            </div>
        </div>

        <div id="to422" class="col-sm-1">
            <br><img class="image flip"  id="tg422" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


    <div class="col-sm-12" id="d422">

	<script>

    	function addRow422()
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

			var nameb = '<td><center><input type="text"  required placeholder="Name of book" style="width:160px;" required></center></td>';
			var namep = '<td><center><input type="text"  placeholder="Name of publisher" style="width:200px;" required></center></td>';
			var nameau = '<td><center><input type="text" placeholder="Name of author" style="width:150px;"></center></td>';
			var numc = '<td><center><input type="number" min="0" placeholder="Number of Copies" style="width:150px;"></center></td>';

//			var yearp = '<td><center><select id="'+ay+'" placeholder="Year of publishing" style="width:175px;" required></select></center></td>';
      var yearp = '<td><center><input type="text" id="'+ay+'" placeholder="Year of publishing" style="width:175px;" required></center></td>';

			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+nameb+namep+nameau+numc+yearp+CR+'</tr>';
    		var x = $('#tab422').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            //fetch_academic_year(i);
    	}

    </script>

	<center>
        <br>
        <script>
        	function save422(table){

				//alert('121');
				var rows = $(table).find('tr');

        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";


        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var nameb = $($(rows[i]).find('input')[0]).val();
						var namep = $($(rows[i]).find('input')[1]).val();
						var nameau = $($(rows[i]).find('input')[2]).val();
						var numc = $($(rows[i]).find('input')[3]).val();

						var yearp = $($(rows[i]).find('input')[4]).val();


						if(nameb == ""){
        					alert('Please Name of the book/ manuscript');
        					return false;
        				}

						else if(namep == "")
        				{
        					alert('Please Enter Name of the publisher');
        					return false;
        				}
        				else if(nameau==""){
							alert('Please Enter Name of the author');
        					return false;
						}else if(numc==""){
							alert('Please Enter Number of copies');
        					return false;
						}else if(yearp==""){
							alert('Please Enter Year of publishing');
        					return false;
						}
						else
        				{


        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ nameb + "','"+ namep + "','" +  nameau + "','" + numc +"','"+yearp+"','" + idd +"')";
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
                               $("#d422").slideToggle("slow");
                               rotate("tg422");
                               num_rows("tab422","ch422");
        		  			}
        		  		};

          			   			 xhttp.open("POST", "savet422.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
				}

			}

        	function fetch_rows_422()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab422').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			        //  x = $(responseRows[i]).find('select');
	          			          var bool_yesno = x[0];
	          			         //var cc = x[1];
	          			          //var ay = x[0];
	          			          //var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					//idd = idd.substr(1);
	            					//console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));



    							}
        			}
                    num_rows("tab422","ch422");
        		};
          			   			 xhttp.open("GET", "fetch422.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table border="0" id="tab422">
            <tr>
                <th style="width:100px; padding:10px;">Name of the book/ manuscript </th>
            	<th style="width:250px; padding:10px;">Name of the publisher </th>
                <th style="width:100px; padding:10px;">Name of the author</th>
                <th style="width:250px; padding:10px;">Number of copies</th>
				<th style="width:250px; padding:10px;">Year of publishing</th>
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
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow422()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save422($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>


<!--4.2.1-->



<!--4.2.2 -->



<!--
    4.2.3
-->
<script>

    	function addRow423()
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

			var mem = '<td><center><input type="text"  required placeholder="memberships" style="width:160px;" required></center></td>';
			var sub = '<td><center><input type="text"  placeholder="subscriptions" style="width:200px;" required></center></td>';
			var name = '<td><center><input type="text" placeholder="Name" style="width:120px;"></center></td>';
			var eres = '<td><center><input type="number" placeholder="No of e-resources" style="width:120px;"></center></td>';
			var validityf = '<td><center><input type="number"  placeholder="from year" style="width:100px;" required></select></center></td>';
			var validityt = '<td><center><input type="number"  placeholder="to year" style="width:100px;" required></select></center></td>';
			var report = '<td><center><input type="text" placeholder="Link of Report" style="width:150px;"></center></td>';
			var access = '<td><center><input type="text" placeholder="Yes / No" style="width:100px;"></center></td>';
      var llliii = '<td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>';
			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+mem+sub+name+eres+validityf+validityt+report+access+llliii+CR+'</tr>';
    		var x = $('#tab423').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
    	}

    </script>


    <div class="col-sm-12" onclick='rotate("tg423"); $("#d423").slideToggle("slow");'>

        <div class="col-sm-1" id="ch423">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>


<!-- 4.2.1 -->




<!--4.2.1>



<!-- 4.2.3  -->
        <div id="h423" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>4.2.3 Does  the institution have the following:
<br/>1. e – journals
<br/>2. e-ShodhSindhu
<br/>3. Shodhganga  membership
<br/>4. e-books
<br/>5. Databases

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Details of subscriptions like e-journals, e-ShodhSindhu, Shodhganga
Membership etc
            </div>
        </div>

        <div id="to423" class="col-sm-1">
            <br><img class="image flip"  id="tg423" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


    <div class="col-sm-12" id="d423">
	<div class="col-sm-4" style="margin-left:202px">
	<select id="choice_423" class="form-control" >
	<option value="">Select</option>
	<option value="Any  4 of the above">Any  4 of the above</option>
	<option value="Any  3 of the above">Any  3 of the above</option>
	<option value="Any  2 of the above">Any  2 of the above</option>
	<option value="Any  1 of the above">Any  1 of the above</option>
	<option value="None of the above">None of the above</option>
        </select>

	</div>
	<div class="col-sm-8">
	</div>


	<center>
        <br>
        <script>
        	function save423(table)
        	{	var rows = $(table).find('tr');
				if(rows.length==2){
					alert('Please Add atleast one Record.');
					return false;
				}


        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{	var choice_423= document.getElementById('choice_423').value;

        				var mem = $($(rows[i]).find('input')[0]).val();
						var sub = $($(rows[i]).find('input')[1]).val();
						var name = $($(rows[i]).find('input')[2]).val();
						var eres = $($(rows[i]).find('input')[3]).val();
						var validityf = $($(rows[i]).find('input')[4]).val();
						var validityt = $($(rows[i]).find('input')[5]).val();
						var reportf = $($(rows[i]).find('input')[6]).val();
						var access = $($(rows[i]).find('input')[7]).val();
            var link = $($(rows[i]).find('input')[8]).val();
						if(choice_423 == "")
        				{
        					alert('Please Select Any one option');
        					return false;
        				}
						else if(mem == "")
        				{
        					alert('Please Enter Details of memberships');
        					return false;
        				}
        				else if(sub==""){
							alert('Please Enter Details of subscriptions');
        					return false;
						}else if(name==""){
							alert('Please Enter Name of service subscribed to	');
        					return false;
						}else if(eres==""){
							alert('Please Enter No of e-resources with full text access	');
        					return false;
						}else if(validityf==""){
							alert('Please Enter Validity from year ');
        					return false;
						}else if(validityt==""){
							alert('Please Enter Validity to year ');
        					return false;
						}else if(reportf==""){
							alert('Please Enter Usage report from the service provider');
        					return false;
						}else if(access==""){
							alert('Please Enter Whether remote access provided? (Yes / No)');
        					return false;
						}else if(link==""){
              alert('Please provide link of the relevant document');
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
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ mem + "','"+ sub + "','" +  name + "','" + eres + "','" + validityf + "','" + validityt + "','"+reportf + "','" + access +"','" + link  + "','" + idd +"','" + choice_423 +"')";
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
                               $("#d423").slideToggle("slow");
                               rotate("tg423");
                               num_rows("tab423","ch423");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet423.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_423()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab423').find('tr');
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
                    num_rows("tab423","ch423");
        		};
          			   			 xhttp.open("GET", "fetch423.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table border="0" id="tab423">
            <tr>
                <th style="width:100px; padding:10px;">Details of memberships</th>
            	<th style="width:250px; padding:10px;">Details of subscriptions</th>
                <th style="width:100px; padding:10px;">Name of service subscribed to</th>
                <th style="width:250px; padding:10px;">No of e-resources with full text access</th>
                <th style="width:80px; padding:10px;">Validity from</th>
				<th style="width:80px; padding:10px;">Validity to</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Usage report from the service provider</th>
				<th style="width:100px; padding:10px; padding-left:0px;">Whether remote access provided? (Yes / No)</th>
        <th style="width:200px; padding:20px; padding-left:0px;">Link of the relevant document</th>

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
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow423()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save423($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>



<!--
    4.2.4
-->


    <script>
        	function save424(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var books = $($(rows[i]).find('input')[0]).val();
						var journals = $($(rows[i]).find('input')[1]).val();
						var year = $($(rows[i]).find('select')[0]).val();
						var budget = $($(rows[i]).find('input')[2]).val();
						var subscriptions = $($(rows[i]).find('input')[3]).val();


        				if(books == "")
        				{
        					alert('Please Enter Expenditure on the purchase of books');
        					return false;
        				}
        				else if(journals == "")
        				{
        					alert('Please Enter Expenditure on the purchase of journals');
        					return false;
        				} else if(year == "")
        				{
        					alert('Please Select Year of expenditure');
        					return false;
        				} else if(budget == "")
        				{
        					alert('Please Enter Budget allocated');
        					return false;
        				}else if(subscriptions == "")
        				{
        					alert('Please Enter Expenditure on subscription to e-journals and other e-resources');
        					return false;
        				}else
        				{


        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ books + "','"+ journals + "','" +  year + "','" + budget + "','" +  subscriptions + "','" + idd +"')";
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
                               $("#d424").slideToggle("slow");
                               rotate("tg424");
                               num_rows("tab424","ch424");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t4_2_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_424()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab424').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           console.log(y);
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          //var pc = x[0];
	          			          //var cc = x[1];
	          			          var ay = x[0];
	          			          var idd = $(ay).attr('id');
	          			          idd = idd.substr(1);


	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));

	            					console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab424","ch424");
        		};
          			   			 xhttp.open("GET", "fetch424.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>





    <div class="col-sm-12" onclick='rotate("tg424"); $("#d424").slideToggle("slow");'>

        <div class="col-sm-1" id="ch424">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h424" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Average annual expenditure for purchase of  books and journals  during the last five years  (5) (INR)
		<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Audited statements of accounts
<br>* Details of annual expenditure for purchase of books and journals
during the last five years
            </div>
        </div>

        <div id="to424" class="col-sm-1">
            <br><img class="image flip"  id="tg424" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>
<center>
    <div class="col-sm-12" id="d424">

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

        function addRow424()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;

    		var html = '<tr id="'+i+'"><td><center><input type="number" step="0.01" min="0" placeholder="Expenditure (books)" style="width:200px;" ></center></td><td><center><input  type="number" step="0.01" placeholder="Expenditure (journals)" style="width:200px;" ></center></td><td><center><select id="'+ay+'" placeholder="Year of expenditure" style="width:175px;" required></select></center></td><td><center><input  type="number" step="0.01" placeholder="budget" style="width:200px;" ></center></td><td><center><input  type="number" step="0.01" placeholder="Expenditure (subscriptions)" style="width:200px;" ></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab424').find('tr');
   			$(x[x.length-1]).before(html);



            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab424">
            <tr>
                <th style="width:100px; padding:10px;">Expenditure on  the purchase of books</th>
                <th style="width:250px; padding:10px;">Expenditure on the purchase of journals </th>
                <th style="width:100px; padding:10px;">Year of expenditure</th>
                <th style="width:150px; padding:10px;">Budget allocated</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Expenditure on subscription to e-journals and other e-resources </th>

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
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow424()" alt="Submit" width="48" height="48">
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow121()">Add a new Row</button></td>-->
			</tr>
        </table>

        <br><br>

        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save424($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>

    </center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--1.2.2-->

<script>
        	function save425(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var ereso = $($(rows[i]).find('input')[0]).val();
						var det = $($(rows[i]).find('input')[1]).val();
						var raccess = $($(rows[i]).find('input')[2]).val();
            var link = $($(rows[i]).find('input')[3]).val();
        				if(ereso == "")
        				{
        					alert('Please Enter E-resource');
        					return false;
        				}
        				else if(det == "")
        				{
        					alert('Please Enter Contact person details');
        					return false;
        				}else if(raccess == "")
        				{
        					alert('Please Enter Whether remote access provided? (Yes / No)');
        					return false;
        				}else if(link==""){
                  alert('Please provide link of the relevant document');
                  return false;
                }else
        				{

         			   			 var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ ereso + "','"+ det + "','" +  raccess + "','" + link + "','" + idd +"')";
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
                               $("#d425").slideToggle("slow");
                               rotate("tg425");
                               num_rows("tab425","ch425");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t4_2_5", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_425()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab425').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');

          			          // console.log(x);
	          			        //  var pc = x[0];
	          			         // var ay = x[1];
	          			         // var idd = $(pc).attr('id');
	          			         // idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					//idd = idd.substr(2);
	            					//console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab425","ch425");
        		};
          			   			 xhttp.open("GET", "fetch425.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>



    <div class="col-sm-12" onclick='rotate("tg425"); $("#d425").slideToggle("slow");'>

        <div class="col-sm-1" id="ch425">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h425" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.5<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Availability of remote access to e-resources of the library   (1) (Yes/No)
			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Details of remote access to e-resources of the library
            </div>
        </div>

        <div id="to425" class="col-sm-1">
            <br><img class="image flip"  id="tg425" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d425">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>

        function addRow425()
    	{
            var i = get_time();
            var id = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var li = "l"+i;


    		var html = '<tr id="'+i+'" ><td><center><input placeholder="e-resource" type="text" style="width:150px;" required></center></td><td><center><input  type="text" placeholder="Contact person details" style="width:250px;" ></center></td><td><center><input type="text" placeholder="Yes / No" style="width:165px;" required></center></td><td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';

    		var x = $('#tab425').find('tr');
   			$(x[x.length-1]).before(html);

    	}
    </script>
    <form>

        <table border="0" id="tab425">
            <tr>
                <th style="width:100px; padding:10px;">E-resource</th>
                <th style="width:250px; padding:10px;">Contact person details</th>
                <th style="width:100px; padding:10px;">Whether remote access provided? (Yes / No)</th>
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
<td class="add"  colspan="3"><input class="add" type="image" src="../images/add2.png" onclick="addRow425()" alt="Submit" width="48" height="48">
				<!--<td colspan="4"><button value="" width="500px" onclick="addRow122()">Add a new Row</button></td>-->
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save425($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>

</center>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>


<!--
    1.3
-->

                <script>

            function save426()
        	{
						var last = document.getElementById('i4_2_6_lastp').value;
						var method = document.getElementById('i4_2_6_method').value;
						var users = document.getElementById('i4_2_6_users').value;
						var teachers = document.getElementById('i4_2_6_teachers').value;
						var students = document.getElementById('i4_2_6_students').value;



        				if(last == "")
        				{
        					alert('Please Provide/ upload last page of accession register details');
        					return false;
        				}
        				else if(method == "")
        				{
        					alert('Please Enter Method of computing per day usage of library');
        					return false;
        				}else if(users == "")
        				{
        					alert('Please Enter Number of users using library through e-access per day');
        					return false;
        				}else if(teachers == "")
        				{
        					alert('Please Enter Number of teachers accessing library per day');
        					return false;
        				}else if(students == "")
        				{
        					alert('Please Enter No. of students accessing library per day');
        					return false;
        				}
						else
        				{

                  document.getElementById("ch426").innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled </a>';

        					rowss = "('"+"<?php echo $_SESSION['username'];?>"+"','"+ last + "','"+ method + "','" +  users + "','" +  teachers + "','" +  students +"')";

        				}

        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
          			        // console.log(this.responseText);
                              alert(this.responseText);
                               $("#d426").slideToggle("slow");
                               rotate("tg426");
                               //num_rows("tab426","ch426");
        		  			}
        		  		};
          			   			  xhttp.open("POST", "savet426.php?last="+last+"&method="+method+"&users="+users+"&teachers="+teachers+"&students="+students, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
			}


        </script>


    <div class="col-sm-12" onclick='rotate("tg426"); $("#d426").slideToggle("slow");'>

        <div class="col-sm-1" id="ch426">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h426" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.6<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
             Percentage per day usage of library by teachers and students

			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Details of library usage by teachers and students
            </div>
        </div>

        <div id="to131" class="col-sm-1">
            <br><img class="image flip"  id="tg426" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
    <div class="col-sm-12" id="d426">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>
         <table border="0" id="tab426">
            <tr>
                <th style="width:100px; padding:10px;">Provide/ upload last page of accession register details</th>
                <th style="width:250px; padding:10px;">Method of computing per day usage of library</th>
                <th style="width:100px; padding:10px;">Number of users using library through e-access per day</th>
                <th style="width:150px; padding:10px;">Number of teachers accessing library per day</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students accessing library per day</th>

            </tr>

			<tr>
			<td>
			<input type="text" placeholder="Last page" id="i4_2_6_lastp" >
			</td>
			<td><input type="text" placeholder="Method" id="i4_2_6_method"></td>
			<td><input type="number" placeholder="Number of users" id="i4_2_6_users"></td>
			<td><input type="number" placeholder="Number of teachers" id="i4_2_6_teachers"></td>
			<td><input type="number" placeholder="number of students" id="i4_2_6_students"></td>
			</tr>


        </table>

        <br><br>



        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input id="link1_3_1" type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save426()" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--1.3.2-->


    <div class="col-sm-12" onclick='rotate("tg427"); $("#d427").slideToggle("slow");'>

        <div class="col-sm-1" id="ch427">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h427" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.2.7<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
          E-content is developed by teachers :
<br/>1. For e-PG-Pathshala
<br/>2. For CEC (Under Graduate)
<br/>3. For SWAYAM
<br/>4. For other MOOCs platform
<br/>5. For NPTEL/NMEICT/any other Government initiatives
<br/>6. For institutional LMS
  <br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Any additional information
<br>* Give links or upload document of e-content developed
<br>* Details of e-content developed by teachers for e-PG-Pathshala, CEC
(UG)
            </div>
        </div>

        <div id="to427" class="col-sm-1">
            <br><img class="image flip"  id="tg427" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


<center>
    <div class="col-sm-12" id="d427">
	<div class="col-sm-4" >
	<select id="choice_427" class="form-control" style="margin-left:202px" >
	<option value="">Select</option>
	<option value="Any 5 of the above">Any 5 of the above</option>
	<option value="Any 4 of the above">Any 4  of the above</option>
	<option value="Any 3 of the above">Any 3 of the above</option>
	<option value="Any 2 of the above">Any 2 of the above</option>
	<option value="None of the above">None of the above</option>
	</select>

	</div>
	<div class="col-sm-8">
	</div>

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow427()
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


    		var html = '<tr id="'+i+'" ><td><center><input type="text" style="width:150px;" placeholder="Name of teacher" required></center></td><td><center><input type="text" style="width:150px;"placeholder="Name of module"  required></center></td><td><center><input  type="text" placeholder="Platform" style="width:250px;" ></center></td><td><center><select placeholder="Year" style="width:180px;" id="'+ay+'"></select></center></td>  <td><center><input id="'+li+'" type="text" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove" style="width:40px;"><center>   <button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab427').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            fetch_academic_year(i);
            //fetch_academic_year_dis_cont(ay);
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
        	function save427(table)
        	{
            //console.log(table);
        		var rows = $(table).find('tr');
				if(rows.length==2){
					alert('Please Add atleast one Record.');
					return false;
				}
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
//                alert("googlr");
        				var teacher = $($(rows[i]).find('input')[0]).val();
							var module = $($(rows[i]).find('input')[1]).val();
								var platform = $($(rows[i]).find('input')[2]).val();
									var datel = $($(rows[i]).find('select')[0]).val();
                  link = $($(rows[i]).find('input')[3]).val();
                        var choice427 = document.getElementById("choice_427").value;

//                        alert(link);


                        if(choice427==""){
                            alert(" Please select appropriate choice");
                            return false;
                        }

                        if(link == "")
                        {
                          alert('Please provide link of the relavant document');
                          return false;
                        }

        				if(teacher == "")
        				{
        					alert('Please enter Name of the teacher');
        					return false;
        				}
        				else if(module == "")
        				{
        					alert('Please enter Name of the module ');
        					return false;
        				}else if(platform == "")
        				{
        					alert('Please enter Platform on which module is developed');
        					return false;
        				}else if(datel == "")
        				{
        					alert('Please select Date of launching e content');
        					return false;
        				}else
        				{


        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ teacher + "','"+  module + "','" + platform + "','" +  datel + "','"+  link + "','" +  choice427 + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log("::::::::::"+rowss);

                  //alert(rowss);

        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert(this.responseText);
                               $("#d427").slideToggle("slow");
                               rotate("tg427");
                               num_rows("tab427","ch427");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t4_2_7", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_427()
        	{


        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {

          			   var x = $('#tab427').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          //var pc = x[0];
	          			          //var cc = x[1];
	          			          var ay = x[0];
	          			         // var ay1 = x[3];
	          			          var idd = $(ay).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, 	//idd = idd.substr(2);
	            					console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   //fetch_academic_year_dis_cont("y"+idd, $(ay1).attr('value'));
    							}
        			}
                    num_rows("tab427","ch427");
        		};
          			   			 xhttp.open("GET", "fetch427.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table id="tab427">
            <tr>
                <th style="width:100px; padding:10px;">Name of the teacher </th>
                <th style="width:100px; padding:10px; padding-left:0px;">Name of the module</th>
                <th style="width:100px; padding:10px;">Platform on which module is developed </th>
                <th style="width:100px; padding:10px;">Date of launching e content</th>
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
		<td class="add"  colspan="4">
      <input class="add" type="image" src="../images/add2.png" onclick="addRow427()" alt="Submit" width="48" height="48"></td>
    </tr>
        </table>

        <input type="button" class="SAVE" onclick="save427($(this).parent().children()[0])"  value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>

</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--1.3.4-->
 <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">4.3  IT Infrastructure</a></center>
        <div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!-- jain edits -->


<!-- 4.3.1
-->

<!--
-->

        <script>

            function save431()
        	{
                link =  document.getElementById("link4_3_1").value;
                //ta = ta.value;
                var x=document.getElementById("TA4_3_1").value;
               // console.log(ta+"\n"+link);

               link = escapeHtml(link);
               x = escapeHtml(x);

               if(link==""){
                 alert("Please provide link of the relevant document");
                 return false;
               }

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d431").slideToggle("slow");
                               rotate("tg431");

                               if(document.getElementById("TA4_3_1").value==""){
                                    document.getElementById("ch431").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch431").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet431.php?desc="+x+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg431"); $("#d431").slideToggle("slow");'>

        <div class="col-sm-1" id="ch431">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h431" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">4.3.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
              Institution frequently updates its IT facilities including Wi-Fi
              <br><br>
              Describe IT facilities including Wi-Fi with date and nature of updation
within a minimum of 500 characters and maximum of 500 words

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to431" class="col-sm-1">
            <br><img class="image flip"  id="tg431" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d431">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA4_3_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link4_3_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link4_3_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save431()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!-- jain edits -->




<!-- 4.3.2 -->



    <div class="col-sm-12" onclick='rotate("tg432"); $("#d432").slideToggle("slow");'>

        <div class="col-sm-1" id="ch432">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h432" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.3.2<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
         Student - Computer ratio (current year data)
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Student – computer ratio

            </div>
        </div>

        <div id="to432" class="col-sm-1">
            <br><img class="image flip"  id="tg432" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


<center>
    <div class="col-sm-12" id="d432">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow432()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var ay1= "y"+ay;

    		var html = '<tr id="'+i+'" ><td><center><input type="number" min="0" style="width:150px;" placeholder="Number of students" required></center></td><td><center><input type="number" style="width:150px;"placeholder="Number of computers"  required></center></td><td class="remove" style="width:40px;"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab432').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            //fetch_academic_year(i);
            //fetch_academic_year_dis_cont(ay);
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
        	function save432(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var numbers = $($(rows[i]).find('input')[0]).val();
							var numberc = $($(rows[i]).find('input')[1]).val();

        				if(numbers == "")
        				{
        					alert('Please enter Number of students');
        					return false;
        				}
        				else if(numberc == "")
        				{
        					alert('Please enter Number of Computers');
        					return false;
        				}else
        				{


        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ numbers + "','"+  numberc+"')";
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
                               $("#d432").slideToggle("slow");
                               rotate("tg432");
                               num_rows("tab432","ch432");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t4_3_2", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_432()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab432').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');
	          			          //var pc = x[0];
	          			          //var cc = x[1];
	          			         // var ay = x[0];
	          			         // var ay1 = x[3];
	          			          //var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					//idd = idd.substr(2);
	            					//console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));
                                   //fetch_academic_year_dis_cont("y"+idd, $(ay1).attr('value'));
    							}
        			}
                    num_rows("tab432","ch432");
        		};
          			   			 xhttp.open("GET", "fetch432.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table id="tab432">
            <tr>
                <th style="width:100px; padding:10px;">Number of students</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Number of Computers</th>

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
		<td class="add"  colspan="2"><input class="add" type="image" src="../images/add2.png" onclick="addRow432()" alt="Submit" width="48" height="48">	</tr>
        </table>

        <input type="button" class="SAVE" onclick="save432($(this).parent().children()[0])"  value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>

</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!-- /4.3.2 -->

<!-- 4.2.3 -->

<script>

    	function addRow433()
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

			var band = '<td><center><input type="text"  required placeholder="Bnadwidth" style="width:160px;" required></center></td>';


			var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+band+CR+'</tr>';
    		var x = $('#tab433').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            //fetch_academic_year(i);
    	}

    </script>


    <div class="col-sm-12" onclick='rotate("tg433"); $("#d433").slideToggle("slow");'>

        <div class="col-sm-1" id="ch433">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>


<!-- 4.2.1 -->




<!--4.2.1>



<!-- 4.2.3  -->
        <div id="h433" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.3.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Available bandwidth of internet connection in the Institution
(Leased line)
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Details of available bandwidth of internet connection in the
Institution



            </div>
        </div>

        <div id="to433" class="col-sm-1">
            <br><img class="image flip"  id="tg433" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>


    <div class="col-sm-12" id="d433">
	<div class="col-sm-4" style="margin-left:202px">
	<select id="choice_433" class="form-control" >
	<option value="">Select</option>
	<option value="greater than or equal to 1 GBPS">greater than or equal to 1 GBPS</option>
	<option value="500 MBPS - 1 GBPS">500 MBPS - 1 GBPS</option>
	<option value="250 MBPS - 500 MBPS">250 MBPS - 500 MBPS</option>
	<option value="50 MBPS - 250 MBPS">50 MBPS - 250 MBPS
</option>
	<option value="less than 50 MBPS">less than 50 MBPS</option>
        </select>

	</div>
	<div class="col-sm-8">
	</div>

	<br /> <br/>
	<center>
        <br>
        <script>
        	function save433(table)
        	{
        					var x= document.getElementById('choice_433').value;

							var rowss = "('"+"<?php echo $_SESSION['username'];?>"+"','"+ x +"')";

							if(x==""){
								alert('Please Select and option');
								return false;
							}

						 document.getElementById("ch433").innerHTML = '<img src="../images/filled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;">  Filled</a>';

        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               console.log(this.responseText);
                              alert(this.responseText);
                               $("#d433").slideToggle("slow");
                               rotate("tg433");
                               //num_rows("tab433","ch433");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet433.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}



        	function fetch_rows_433()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab433').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			         // x = $(responseRows[i]).find('select');
	          			        //  var bool_yesno = x[0];
	          			         //var cc = x[1];
	          			         // var ay = x[0];
	          			         // var idd = $(ay).attr('id');
	          			          //idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					//idd = idd.substr(1);
	            					//console.log(x.length);
	            					//fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));


    							}
        			}
                    num_rows("tab433","ch433");
        		};
          			   			 xhttp.open("GET", "fetch433.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>
    <form>

        <table border="0" id="tab433">
           <!-- <tr>
                <th style="width:100px; padding:10px;">Available internet bandwidth</th>


            </tr>  -->
            <!--<tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><input type="text" placeholder="Activity" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>-->

		<!--	<tr>
                <td class="add"  colspan="1"><input class="add" type="image" src="../images/add2.png" onclick="addRow433()" alt="Submit" width="48" height="48">

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
		<!--	</tr>   -->
        </table>


        <input type="button" class="SAVE" value="SAVE CHANGES" onclick="save433($(this).parent().children()[0])" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12">
    <hr/>
</div>


<!-- /4.2.3 -->





    <div class="col-sm-12" onclick='rotate("tg434"); $("#d434").slideToggle("slow");'>

        <div class="col-sm-1" id="ch434">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h434" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>4.3.4<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
             Facilities for e-content development such as Media centre, Recording facility, Lecture Capturing System(LCS)  (1) (Yes/No)

			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Links of photographs
<br>* Facilities for e-content development such as Media Centre,
Recording facility, LCS
            </div>
        </div>

        <div id="to434" class="col-sm-1">
            <br><img class="image flip"  id="tg434" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

        <script>
        	function save434(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var namee = $($(rows[i]).find('input')[0]).val();
							var linkm = $($(rows[i]).find('input')[1]).val();
        				if(namee == "")
        				{
        					alert('Please enter Name of the e-content development facilities');
        					return false;
        				}
        				else if(linkm == "")
        				{
        					alert('Please enter Name of the e-content development facilities');
        					return false;
        				}else
        				{



        				var idd = $(rows[i]).attr('id');

        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ namee + "','"+ linkm +"','"+ idd +"')";
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
                               $("#d434").slideToggle("slow");
                               rotate("tg434");
                               num_rows("tab434","ch434");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "saveData.php?table=t4_3_4", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_434()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab434').find('tr');
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {

								  // var yesno = x[0];
								  // var idd = $(yesno).attr('id');
								  // fetch_bool(idd,$(yesno).attr('value'));

								   //console.log(idd+"_____________________________");
/*
						   x = $(responseRows[i]).find('select');

          			           console.log(x);
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					//fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				//fetch_academic_year(idd, $(ay).attr('value'));

  */
    							}
        			}
                    num_rows("tab434","ch434");
        		};
          			   			 xhttp.open("GET", "fetch434.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

<center>
    <div class="col-sm-12" id="d434">

        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow434()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;

    		var html = '<tr id="'+i+'"  ><td><center><input  type="text" placeholder="Name" style="width:250px;" ></center></td><td><center><input type="text" placeholder="Link" style="width:165px;" required></select></center></td></td class="remove"><td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td></tr>';
    		var x = $('#tab434').find('tr');
   			$(x[x.length-1]).before(html);

            //fetch_programme_code(i);
            //fetch_academic_year(i);
    	}
    </script>
    <form>

        <table id="tab434">
            <tr>
                <th style="width:100px; padding:10px;">Name of the e-content development facilities</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Provide link to videos of the media centre and recording facility</th>

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
                <td class="add"  colspan="2"><input class="add" type="image" src="../images/add2.png" onclick="addRow434()" alt="Submit" width="48" height="48">
			</tr>
        </table>

        <input type="button" class="SAVE" onclick="save434($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

    </div>
</center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>





	 <!--------->
<!--jain edits -->

<center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">4.4 Maintenance of Campus Infrastructure</a></center>
        <div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

<!--
  4.4.1
-->
<script>
        	function save441(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var Year = $($(rows[i]).find('select')[0]).val();

						 var asba = $($(rows[i]).find('input')[0]).val();
						  var expa = $($(rows[i]).find('input')[1]).val();
						   var asbp = $($(rows[i]).find('input')[2]).val();
						   var expp = $($(rows[i]).find('input')[3]).val();


                        if(Year == "")
        				{
        					alert('Please Select Year to save');
        					return false;
        				}else if(asba==""){
                            alert('Please fill Assigned budget on academic facilities (excluding salary for human resources)');
        					return false;
        				}else if(expa==""){
                            alert('Please fill Expenditure on academic facilities (excluding salary for human resources)');
        					return false;
        				}else if(asbp==""){
                            alert('Please Assigned budget on physical facilities (excluding salary for human resources)');
        					return false;
        				}else if(expp==""){
                            alert('Expenditure on physical facilities (excluding salary for human resources)');
        					return false;
        				}
        				else
        				{
        				var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ Year + "','"+asba+"','"+expa+"','"+asbp+"','"+expp+"','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
							//alert(rowss);
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);
                               $("#d441").slideToggle("slow");
                               rotate("tg441");
                               num_rows("tab441","ch441");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet441.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_441()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
                  select_NA();
          			   var x = $('#tab441').find('tr');
   					   $(x[x.length-1]).before(this.responseText);

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
                    num_rows("tab441","ch441");
        		};
          			   			 xhttp.open("GET", "fetch441.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg441"); $("#d441").slideToggle("slow");'>

        <div class="col-sm-1" id="ch441">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h441" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">4.4.1<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">Average expenditure incurred on maintenance of physical facilities
and academic support facilities excluding salary component, as a
percentage during the last five years (INR in lakhs)

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Audited statements of accounts.
<br>* Details about assigned budget and expenditure on physical facilities
and academic facilities

		</div>
        </div>

        <div id="to441" class="col-sm-1">
            <br><img class="image flip"  id="tg441" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d441">
            <br>
    <script>

    	function addRow441()
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

            var C2 = '<td><center><input type="number" min="0" step="0.01" placeholder="" style="width:220px;" required></center></td>';
		    var C3 = '<td><center><input type="number" min="0" step="0.01" placeholder="" style="width:220px;" required></center></td>';
		    var C4 = '<td><center><input type="number" min="0" step="0.01" placeholder="" style="width:220px;" required></center></td>';
		    var C5 = '<td><center><input type="number" min="0" step="0.01" placeholder="" style="width:220px;" required></center></td>';



            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

            var x = $('#tab441').find('tr');
   			$(x[x.length-1]).before(html);

            fetch_academic_year(i);
			fetch_programme_code(i);
    	}
    </script>
    <form>

        <table border="0" id="tab441">
            <tr>
                <th style="width:250px; padding:20px;">Year</th>
                <th style="width:250px; padding:20px;">Assigned budget on academic facilities (excluding salary for human resources)</th>
				<th style="width:250px; padding:20px;">Expenditure on academic facilities (excluding salary for human resources)</th>
				<th style="width:250px; padding:20px;">Assigned budget on physical facilities (excluding salary for human resources)</th>
				<th style="width:250px; padding:20px;">Expenditure on physical facilities (excluding salary for human resources)</th>
            </tr>
			<tr>
				<td class="add"  colspan="2"><input class="add" type="image" src="../images/add2.png" onclick="addRow441()" alt="Submit" width="48" height="48">
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


        <input type="button" class="SAVE" onclick="save441($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">

</div>




<!-- 4.4.2
-->

<!--
-->

        <script>

            function save442()
        	{
                link =  document.getElementById("link4_4_2").value;
                //ta = ta.value;
                var x= document.getElementById("TA4_4_2").value;
               // console.log(ta+"\n"+link);

               link = escapeHtml(link);

               if(link==""){
                 alert("Please provide link of the relevant document");
                 return false;
               }

               x = escapeHtml(x);

                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
                               alert(this.responseText);
                               $("#d442").slideToggle("slow");
                               rotate("tg442");

                               if(document.getElementById("TA4_4_2").value==""){
                                    document.getElementById("ch442").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch442").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet442.php?desc="+x+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg442"); $("#d442").slideToggle("slow");'>

        <div class="col-sm-1" id="ch442">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h442" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">4.4.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
         There are established systems and procedures for
maintaining and utilizing physical, academic and support facilities -
laboratory, library,sports complex, computers, classrooms etc.

<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Upload any additional information
<br>* Paste link for additional information
            </div>
        </div>

        <div id="to442" class="col-sm-1">
            <br><img class="image flip"  id="tg442" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d442">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA4_4_2" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link4_4_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link4_4_2" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save442()" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!-- jain edits -->
















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
            document.getElementById("TA4_1_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link4_1_1").value = '<?php echo urldecode($row["link"]); ?>';
            document.getElementById("TA4_1_1").placeholder = "Describe the adequacy of facilities for teaching –learning as per theminimum specified requirement by statutory bodies within minimum500 characters and maximum 500 words";

            if(document.getElementById("TA4_1_1").value==""){
               document.getElementById("ch411").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch411").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }



		//4.1.2
			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_1_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

		document.getElementById("TA4_1_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link4_1_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA4_1_2").placeholder = "Describe the of adequacy facilities for sports, games and cultural activities which include specification about area/size, year of establishment and user rate within minimum of 500 characters and maximum of 500 words";

            if(document.getElementById("TA4_1_2").value==""){
               document.getElementById("ch412").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch412").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }





<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_1_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.1.3
			document.getElementById("i4_1_3_lcd").value = '<?php echo $row["lcd"]; ?>';
			document.getElementById("i4_1_3_lan").value= '<?php echo $row["lan"]; ?>';
			document.getElementById("i4_1_3_semi").value ='<?php echo $row["semi"]; ?>';
			document.getElementById("i4_1_3_totalc").value= '<?php echo $row["totalc"]; ?>';
			document.getElementById("i4_1_3_totals").value ='<?php echo $row["totals"]; ?>';

		lcd =  document.getElementById("i4_1_3_lcd").value;
                lan= document.getElementById("i4_1_3_lan").value;
				semi=document.getElementById("i4_1_3_semi").value;
				totalc= document.getElementById("i4_1_3_totalc").value;
						totals= document.getElementById("i4_1_3_totals").value;

		if(lcd =="" || lan=="" || semi==""||totalc==""||totals==""){

               document.getElementById("ch413").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch413").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_6 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>



						document.getElementById('i4_2_6_lastp').value='<?php echo $row['last'];?>';
						document.getElementById('i4_2_6_method').value='<?php echo $row['method'];?>';
						document.getElementById('i4_2_6_users').value='<?php echo $row['users'];?>';
						document.getElementById('i4_2_6_teachers').value='<?php echo $row['teachers'];?>';
						document.getElementById('i4_2_6_students').value='<?php echo $row['students'];?>';


						 last = document.getElementById('i4_2_6_lastp').value;
						 method = document.getElementById('i4_2_6_method').value;
						 users = document.getElementById('i4_2_6_users').value;
						 teachers = document.getElementById('i4_2_6_teachers').value;
						 students = document.getElementById('i4_2_6_students').value;



            if(last =="" || method=="" || users=="" || teachers==""|| students==""){

               document.getElementById("ch426").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch426").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }



		<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_3_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.3.3



			document.getElementById('choice_433').innerHTML='<option value="">Select</option><option value="greater than or equal to 1 GBPS">greater than or equal to 1 GBPS</option><option value="500 MBPS - 1 GBPS">500 MBPS - 1 GBPS</option><option value="250 MBPS - 500 MBPS">250 MBPS - 500 MBPS</option><option value="50 MBPS - 250 MBPS">50 MBPS - 250 MBPS</option><option value="less than 50 MBPS">less than 50 MBPS</option>';
	document.getElementById("choice_433").value = '<?php echo $row["choice_433"]; ?>';

		 if(document.getElementById("choice_433").value==""){
               document.getElementById("ch433").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch433").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




			<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>




        // 4.1.3



			document.getElementById('choice_423').innerHTML='<option value="">Select</option><option value="Any  4 of the above">Any  4 of the above</option><option value="Any  3 of the above">Any  3 of the above</option><option value="Any  2 of the above">Any  2 of the above</option><option value="Any  1 of the above">Any  1 of the above</option><option value="None of the above">None of the above</option>';
		document.getElementById("choice_423").value = '<?php echo $row["choice_423"]; ?>';



		//1.1.3 Loading all rows that are already saved






				<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_7 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>


			document.getElementById('choice_427').innerHTML='<option value="">Select</option><option value="Any 5 of the above">Any 5 of the above</option><option value="Any 4 of the above">Any 4 of the above</option><option value="Any 3 of the above">Any 3 of the above</option><option value="Any 2 of the above">Any 2 of the above</option><option value="None of the above">None of the above</option>';
		document.getElementById("choice_427").value = '<?php echo $row["choice_427"]; ?>';












<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_4_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 5.4.1
            document.getElementById("TA4_4_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link4_4_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA4_4_2").placeholder = "Describe policy details of systems and procedures for maintaining and utilizing physical, academic and support facilities on the website within a minimum of 500 word and maximum of 1000 words";

            if(document.getElementById("TA4_4_2").value==""){
               document.getElementById("ch442").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch442").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");




		// jain edits ----------------------------



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>

        // 4.3.1
            document.getElementById("TA4_3_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link4_3_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA4_3_1").placeholder = "Describe policy details of systems and procedures for maintaining and utilizing physical, academic and support facilities on the website within a minimum of 500 word and maximum of 1000 words";

            if(document.getElementById("TA4_3_1").value==""){
               document.getElementById("ch431").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch431").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px; color:#000;"> Filled</a>';
            }




        console.log("page_c2_loaded");







        	fetch_rows_414();
        	fetch_rows_423();
			fetch_rows_424();
			fetch_rows_425();
			fetch_rows_427();
			fetch_rows_434();
			fetch_rows_421();
			fetch_rows_422();
			fetch_rows_432();
			//fetch_rows_433();
			fetch_rows_441();

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
        if($row['section'][1]!=4){
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
                 xhttp.open("GET", "../profile/maintain_session.php?page=c4.php", true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send("rows="+rowss);
    }

    setInterval(function() { maintain_session(); }, 800000);


    </script>

</body>
</html>
