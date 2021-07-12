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
<title>Data Capturing System</title>


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

    w{
			color: red;
		}

		x{
			color: green;
		}

		y{
			color: orange;
		}

		z{
			color: black;
			font-size: 19px;
		}

		w,x,y{
			font-weight: bold;
			font-size: 25px;
		}



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
            width: 250px;
            background-color: #0e3778;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
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
        input[type=button]{
        	background-color: #0e3778;
		    color: white;
        }
        input[type=button]:hover {
            background-color: #0e3778;
        }

    </style>

</head>
<body class="BACK" onload="">

<div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;background-color:#0E3778">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System-2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color:#0E3778;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778;"><a onclick="window.history.back()"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
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

    <style>

      th{
        font-weight:bold;
      }

      td,th{
        padding:8px;
      }

      button{
        border-radius: 10px;
        padding: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
      }

      .bordered {
    border: solid #aaa 1px;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    border-radius: 20px;
    -webkit-box-shadow: 0 1px 1px #ccc;
    -moz-box-shadow: 0 1px 1px #ccc;
    box-shadow: 0 1px 1px #ccc;
}

    </style>

<?php
  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $query911 = "SELECT count(*) FROM t9_1_1 WHERE Username LIKE '".$_SESSION['username']."'";
  $res911  = mysqli_query($connection,$query911);// or die(mysqli_error($connection));

  while ($row911 = $res911->fetch_assoc()) {
    $tt911 = $row911['count(*)'];
  }

  $query912 = "SELECT count(*) FROM t9_1_2 WHERE Username LIKE '".$_SESSION['username']."'";
  $res912  = mysqli_query($connection,$query912);// or die(mysqli_error($connection));

  while ($row912 = $res912->fetch_assoc()) {
    $tt912 = $row912['count(*)'];
  }

  $query921 = "SELECT count(*) FROM t9_2_1 WHERE Username LIKE '".$_SESSION['username']."'";
  $res921  = mysqli_query($connection,$query921);// or die(mysqli_error($connection));

  while ($row921 = $res921->fetch_assoc()) {
    $tt921 = $row921['count(*)'];
  }

  $query922 = "SELECT count(*) FROM t9_2_2 WHERE Username LIKE '".$_SESSION['username']."'";
  $res922  = mysqli_query($connection,$query922);// or die(mysqli_error($connection));

  while ($row922 = $res922->fetch_assoc()) {
    $tt922 = $row922['count(*)'];
  }

  $query923 = "SELECT count(*) FROM t9_2_3 WHERE Username LIKE '".$_SESSION['username']."'";
  $res923  = mysqli_query($connection,$query923);// or die(mysqli_error($connection));

  while ($row923 = $res923->fetch_assoc()) {
    $tt923 = $row923['count(*)'];
  }

  $query932a = "SELECT count(*) FROM t9_3_2a WHERE Username LIKE '".$_SESSION['username']."'";
  $res932a  = mysqli_query($connection,$query932a);// or die(mysqli_error($connection));

  while ($row932a = $res932a->fetch_assoc()) {
    $tt932a = $row932a['count(*)'];
  }

  $query932b = "SELECT count(*) FROM t9_3_2b WHERE Username LIKE '".$_SESSION['username']."'";
  $res932b  = mysqli_query($connection,$query932b);// or die(mysqli_error($connection));

  while ($row932b = $res932b->fetch_assoc()) {
    $tt932b = $row932b['count(*)'];
  }

  $query933 = "SELECT count(*) FROM t9_3_3 WHERE Username LIKE '".$_SESSION['username']."'";
  $res933  = mysqli_query($connection,$query933);// or die(mysqli_error($connection));

  while ($row933 = $res933->fetch_assoc()) {
    $tt933 = $row933['count(*)'];
  }

  $query941 = "SELECT count(*) FROM t9_4_1 WHERE Username LIKE '".$_SESSION['username']."'";
  $res941  = mysqli_query($connection,$query941);// or die(mysqli_error($connection));

  while ($row941 = $res941->fetch_assoc()) {
    $tt941 = $row941['count(*)'];
  }

  $query942 = "SELECT count(*) FROM t9_4_2 WHERE Username LIKE '".$_SESSION['username']."'";
  $res942  = mysqli_query($connection,$query942);// or die(mysqli_error($connection));

  while ($row942 = $res942->fetch_assoc()) {
    $tt942 = $row942['count(*)'];
  }


?>

<div style="visibility:hidden;">
  x
</div>

  <br><br>

  <center>
  <b style="font-size:20px; color:#565656;"> EXTENDED PROFILE </b>
  </center>

  <br><br>


  <center>

    <?php //echo $tt911; ?>

    <input style="margin-right: 10px;" type="button" onclick="location.href='e911.php';" value="9.1.1<?php if($tt911>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right: 10px;" type="button" onclick="location.href='e912.php';" value="9.1.2<?php if($tt912>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
<br>
    <input style="margin-right:10px;"  type="button" onclick="location.href='e921.php';" value="9.2.1<?php if($tt921>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right:10px;"  type="button" onclick="location.href='e922.php';" value="9.2.2<?php if($tt922>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right:10px;"  type="button" onclick="location.href='e923.php';" value="9.2.3<?php if($tt923>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
<br>
    <input style="margin-right:10px;" type="button" onclick="location.href='e932a.php';" value="9.3.2a<?php if($tt932a>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right:10px;" type="button" onclick="location.href='e932b.php';" value="9.3.2b<?php if($tt932b>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right:10px;" type="button" onclick="location.href='e933.php';" value="9.3.3<?php if($tt933>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
<br>
    <input style="margin-right:10px;" type="button" onclick="location.href='e941.php';" value="9.4.1<?php if($tt941>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>
    <input style="margin-right:10px;" type="button" onclick="location.href='e942.php';" value="9.4.2<?php if($tt942>0){ echo "(Filled)"; }else{ echo "(Not Filled)"; }?>"/>


  </center>

</body>
</html>
