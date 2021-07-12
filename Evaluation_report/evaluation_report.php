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
        input[type=button]{
        	background-color: #444;
		    color: white;
        }
        input[type=button]:hover {
            background-color: #333333;
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

<?php

$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM eval_report WHERE Username LIKE '".$_SESSION['username']."' AND sid = ".$_GET['sid']." ";
$res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

while ($rowh = $res->fetch_assoc()) {
  $rowo = $rowh;
}

//echo print_r($rowo);
//echo $rowo[1];

$row = [];

$var = 0;
foreach ($rowo as $mm) {
  $row[$var] = urldecode($mm);
  $var++;
}

/*
$row = array();
for($c=0; $c<count($rowA); $c++){
  array_push($row,$rowA[$c]);
  $row[$c];
}
*/

?>

<div id="as">
<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>

    <div class="col-sm-12">

         <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">EVALUATIVE REPORT OF THE DEPARTMENT</a></center>

    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

  <form method="POST" action="add_report_handler.php" id="form_eval">

    <div class="col-sm-12">

      <div class="col-sm-12">
          <br>
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Name of University</b></div>
          <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="univ_name" type="text" value="Devi Ahilya Vishwavidyalaya, Indore" placeholder="NAME" style="width:340px;" readonly></div>
      </div>
 ``
      <div class="col-sm-12">
          <br>
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Name of Department</b></div>
          <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="univ_name" type="text" value="<?php echo $_SESSION['name']; ?>" placeholder="NAME" style="width:550px;" readonly></div>
      </div>

      <input name="sid" type="hidden" value="<?php echo $_GET['sid']; ?>" placeholder="NAME" style="width:340px;" readonly>
      <div class="col-sm-12">
          <br>
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Name of Sub-Department</b></div>
          <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="sub_dept" type="text" value="<?php echo $_GET['sd']; ?>" placeholder="NAME" style="width:550px;" readonly></div>
      </div>

      <div class="col-sm-12">
          <br>
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>District</b></div>
          <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="univ_name" type="text" value="Indore" placeholder="NAME" style="width:340px;" readonly></div>
      </div>

      <div class="col-sm-12">
          <br>
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>State</b></div>
          <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="univ_name" type="text" value="MADHYA PRADESH" placeholder="NAME" style="width:340px;" readonly></div>
      </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Year of Establishment</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f1" type="number" placeholder="Year" value="<?php echo $row[3]; ?>" style="width:240px;"></div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Is the Department part of a School/Faculty of the University</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <select name="f2" style=" width:240px;">
                    <option value="">Select</option>
                    <option <?php if($row[4]=="Yes") echo "selected"; ?> value="Yes">Yes</option>
                    <option <?php if($row[4]=="No") echo "selected"; ?> value="No">No</option>
                </select>
            </div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Names of programmes offered</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <input type="text" name="f3" style="" value="<?php echo $row[5]; ?>" placeholder="Provide link of document containing Programme Details">
            </div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Sanctioned (UG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f41" value="<?php echo $row[6]; ?>" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		  <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Filled (UG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f42" type="number" value="<?php echo $row[7]; ?>" placeholder="Number" style="width:240px;"></div>
        </div>
		  <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Sanctioned (PG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f43" type="number" placeholder="Number" value="<?php echo $row[8]; ?>" style="width:240px;"></div>
        </div>
		 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Filled (PG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f44" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[9]; ?>"></div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Projects received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f51" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[10]; ?>"></div>
        </div>
		<div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Projects: Total grants received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f52" type="number" placeholder="Number" style="width:140px;" value="<?php echo $row[11]; ?>"></div>
        </div>

        <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Inter -institutional collaborative projects and Associated grants received:</b></div>
            <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>

            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>National collaboration</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f61" type="text" placeholder="Description" style="width:540px;" value="<?php echo $row[12]; ?>"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>International collaboration</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f62" type="text" placeholder="Description" style="width:540px;" value="<?php echo $row[13]; ?>"></div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Departmental projects funded by DST-FIST,UGC-SAP/CAS,DPE, DBT, ICSSR, AICTE etc.</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f71" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[14]; ?>"></div>
        </div>
		 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Departmental projects funded by DST-FIST,UGC-SAP/CAS,DPE, DBT, ICSSR, AICTE etc. : Total grants received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f72" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[15]; ?>"></div>
        </div>


        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Special research laboratories sponsored by / created by industry or corporate bodies</b>
            </div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f8" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[16]; ?>"></div>
        </div>

        <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Publications:</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>

            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Papers Published</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f91" type="number" placeholder="Papers" style="width:240px;" value="<?php echo $row[17]; ?>"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of books with ISBN</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f92" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[18]; ?>"></div>
			<div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Citation Index (Range)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f931" type="text" placeholder="Citation Index" style="width:240px;" value="<?php echo $row[19]; ?>"></div>
			<div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Citation Index (Average)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f932" type="number" placeholder="Citation Index" style="width:240px;" value="<?php echo $row[20]; ?>"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Impact factor (Range)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f941" type="text" placeholder="Impact factor" style="width:240px;" value="<?php echo $row[21]; ?>"></div>
        <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Impact factor (Average)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f942" type="number" placeholder="Impact factor" style="width:240px;" value="<?php echo $row[22]; ?>"></div>

          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of h-index</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f95" type="number" placeholder="h-index" style="width:240px;" value="<?php echo $row[23]; ?>"></div>

		</div>



      <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Details of patents and income generated</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <input name="f10" style="width:600px;" type="text" value="<?php echo $row[24]; ?>" placeholder="Details of patents and income generated">
            </div>
        </div>
<div class="col-sm-12">

            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Areas of consultancy and income generated</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f11" type="text" placeholder="Description" style="width:540px;" value="<?php echo $row[25]; ?>"></div>
        </div>
   <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Awards/Recognitions received at the National
and International level by :</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>

            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Faculty</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f121" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[26]; ?>"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Doctoral/ Post Doctoral fellows</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f122" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[27]; ?>"></div>
  <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Students</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f123" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[28]; ?>"></div>

    </div>
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>How many students have cleared Civil
Services and Defense Services examinations,
NET, SET (SLET), GATE and other
competitive examinations</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f13" type="number" placeholder="Number" style="width:240px;" value="<?php echo $row[29]; ?>"></div>
        </div>
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>List of doctoral, post-doctoral students
and research associates:</b></div> <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>
           <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>From the host institution/university</b></div> <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <input name="f141" cols="80" type="text"  style="width:500px;" placeholder="Provide link of the relavant document" value="<?php echo $row[30]; ?>">
            </div>
   <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>From other institutions/universities</b></div> <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <input type="text" name="f142" style="width:500px;" placeholder="Provide link of the relavant document" value="<?php echo $row[31]; ?>">
            </div>
        </div>
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Scholars/ Post Graduate
students getting financial assistance from the
University/State/ Central</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input name="f15" type="number" placeholder="Number" style="width:140px;" value="<?php echo $row[32]; ?>"></div>
        </div>
<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

</div>
    <div class="col-sm-12"> <div class="col-sm-3" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" ></div>
     <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" >
        <input id="smt" type="button" name="save" value="Save Changes" class="SAVE">
      </div>
      <div class="col-sm-3" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" ></div>
      </div>
</div>


</form>

    <script>

      $(document).ready(function(){
        $("#smt").click(function(){
    var form=$("#form_eval");
    $.ajax({
            type:"POST",
            url:form.attr("action"),
            data:form.serialize(),//only input
            success: function(response){
                console.log(response);
                alert(response);
                if(response=="Changes Saved Successfully"){
                  window.location.href = "sub_department.php";
                }
            }
        });
      });
    });


function save_old()
{
	var a = $('#as').find('input, select, textarea');
	var rows = "('<?php echo $_SESSION['username'];?>','";
	var i = 1;
	for(var x = 5; x < a.length; x++)
	{
		if(x!=a.length-1) rows += " "+$(a[x]).val()+"','";
		else rows +=""+$(a[x]).val()+"');";
	}
	var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       	alert(this.responseText);
							//alert(this.responseText);

         			       }
         			       };
          			   			 xhttp.open("POST", "saveData.php", true);
								xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         			   			 xhttp.send("rows="+rows+"&table=eval_report");
}

function fetch()
{
	var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {
         			       		var b = this.responseText;
         			       		var res = b.split(",");
         			       		var a = $('#as').find('input, select, textarea');
         			       		for(var x = 5; x < a.length-1; x++)
								{	if(res[x+1]==null){
									res[x+1]="";
								}
									$(a[x]).val(''+res[x+1]);
								}
         			       	}
         			       };

          			   			 xhttp.open("GET", "fetch.php?table=eval_report", true);
         			   			 xhttp.send();
}


function load_time_func(){

//fetch();


        }
    </script>
</body>
</html>
