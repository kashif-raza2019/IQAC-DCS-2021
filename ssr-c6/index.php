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

	</script>
    <script>

        function rotate(tg) {
                console.log(tg);
                $("#"+tg).toggleClass('flip');
        }
/*
        $(document).ready(function(){
            $("#h611").click(function(){
                $("#d611").slideToggle("slow");
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
            console.log("Number of rows : "+l+"----"+tid);

            if(l>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }

        function num_rows_633(tid1,tid2,fid){
            l1 = $('#'+tid1).find('tr').length;
            l2 = $('#'+tid2).find('tr').length;

            console.log("Number of rows : "+l1+"+"+l2+"----");

            if(l1>2 || l2>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l1-2)+"+"+(l2-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }

            //alert("done");
        }

    </script>

<link rel="icon" href="../logo.png">
<title>Criteria VI</title>


    <style>

        th,td{
            border: solid 1px gray;
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


        #d611, #h611, #d612, #h612, #d613, #h613, #d621, #h621, #d622, #h622, #d623, #h623, #d624, #h624, #d631, #h631, #d632, #h632, #d634, #h633, #d633, #h634,#d635, #h635, #d641, #h641, #d642, #h642, #d643, #h643,#d651, #h651, #d652, #h652, #d653, #h653, #d654, #h654, #d655, #h655{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d611, #d612, #d613, #d621, #d622, #d623, #d624, #d631,#d632, #d632,#d634, #d633, #d635, #d641, #d642, #d643, #d651, #d652, #d653, #d654, #d655{
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

        input[type=text],input[type=number],textarea,input[type=date] {
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
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System-2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color:#0E3778;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778;"><a style="cursor: pointer"  onclick="window.history.back()"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
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
    <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 6 - GOVERNANCE, LEADERSHIP & MANAGEMENT</a></center>
        </div>
<div class="col-sm-12">
    <hr/>
</div>

                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">6.1 Institutional Vision and Leadership</a></center>

    </center>




<!--
    6.1.1
-->

        <script>

            function save611(ta)
        	{
                link =  document.getElementById("link6_1_1").value;
              //  ta = ta.value;
                 var vu= document.getElementById("TA6_1_1").value;
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
                               $("#d611").slideToggle("slow");
                               rotate("tg611");

                               if(document.getElementById("TA6_1_1").value==""){
                                    document.getElementById("ch611").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch611").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet611.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>

    <div class="col-sm-12" onclick='rotate("tg611"); $("#d611").slideToggle("slow");'>

        <div class="col-sm-1" id="ch611">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h611" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.1.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            The governance of the institution is reflective of an effective leadership in tune with the vision and mission of the University.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Paste link for Additional Information
                <br>* Upload any additional information
            </div>
        </div>

        <div id="to611" class="col-sm-1">
            <br><img class="image flip"  id="tg611" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d611">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_1_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_1_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_1_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save611( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    6.1.2
-->

        <script>

            function save612(ta)
        	{
                link =  document.getElementById("link6_1_2").value;
              //  ta = ta.value;
                var vu= document.getElementById("TA6_1_2").value;
              //  console.log(ta+"\n"+link);

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
                               $("#d612").slideToggle("slow");
                               rotate("tg612");

                               if(document.getElementById("TA6_1_2").value==""){
                                    document.getElementById("ch612").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch612").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet612.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg612"); $("#d612").slideToggle("slow");'>

        <div class="col-sm-1" id="ch612">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h612" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;"><br>6.1.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;"><br>
            The institution practices decentralization and participative management.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Strategic Plan and deployment documents on the website
                <br>* Paste link for Additional Information
                <br>* Upload any additional information
            </div>
        </div>

        <div id="to612" class="col-sm-1">
            <br><img class="image flip"  id="tg612" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d612">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_1_2" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_1_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_1_2" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save612( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>


                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">6.2 Strategy Development and Deployment</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    6.2.1
-->

        <script>

            function save621(ta)
        	{
                link =  document.getElementById("link6_2_1").value;
              //  ta = ta.value;
               var vu= document.getElementById("TA6_2_1").value;
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
                               $("#d621").slideToggle("slow");
                               rotate("tg621");

                               if(document.getElementById("TA6_2_1").value==""){
                                    document.getElementById("ch621").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch621").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet621.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg621"); $("#d621").slideToggle("slow");'>

        <div class="col-sm-1" id="ch621">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h621" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;"><br>6.2.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;"><br>
            Perspective/Strategic plan and deployment documents are available in the institution.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Paste link for Additional Information
                <br>* Link to Organogram of the University webpage
                <br>* Upload any additional information
            </div>
        </div>

        <div id="to621" class="col-sm-1">
            <br><img class="image flip"  id="tg621" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d621">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_2_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_2_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_2_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save621( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>


<!--
    6.2.2
-->

        <script>

            function save622(ta)
        	{
                link =  document.getElementById("link6_2_2").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA6_2_2").value;
              //  console.log(ta+"\n"+link);
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
                               $("#d622").slideToggle("slow");
                               rotate("tg622");

                               if(document.getElementById("TA6_2_2").value==""){
                                    document.getElementById("ch622").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch622").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet622.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg622"); $("#d622").slideToggle("slow");'>

        <div class="col-sm-1" id="ch622">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h622" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.2.2<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Organizational structure of the university including governing body, administrative setup, and functions of various bodies, service rules, procedures, recruitment, promotional policies as well as grievance redressal mechanism.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* ERP Document
                <br>* Screen shots of user interfaces
                <br>* Any additional information
                <br>* Details of implementation of e-governance in areas of operation Planning and Development, Administration etc...
            </div>
        </div>

        <div id="to622" class="col-sm-1">
            <br><img class="image flip"  id="tg622" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d622">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_2_2" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_2_2" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_2_2" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save622( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    6.2.3
-->
<script>
        	function save623(table)
        	{
                        var i1 = document.getElementById("t62321").value;
                        var s1 = document.getElementById("yt62322").value;
                        var l1 = document.getElementById("lt62323").value;
                        var i2 = document.getElementById("t62331").value;
                        var s2 = document.getElementById("yt62332").value;
                        var l2 = document.getElementById("lt62333").value;
                        var i3 = document.getElementById("t62341").value;
                        var s3 = document.getElementById("yt62342").value;
                        var l3 = document.getElementById("lt62343").value;
                        var i4 = document.getElementById("t62351").value;
                        var s4 = document.getElementById("yt62352").value;
                        var l4 = document.getElementById("lt62353").value;
                        var i5 = document.getElementById("t62361").value;
                        var s5 = document.getElementById("yt62362").value;
                        var l5 = document.getElementById("lt62363").value;

                        //alert(l1 + l2 + l3 + l4 + l5);

                        var c = document.getElementById("t623m").value;

                        if(c==""){
                            alert("Please select appropriate option");
                            return false;
                        }

                /*i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "" || s1 == "" || s2 == "" || s3 == "" || s4 == "" || s5 == ""*/

                        if(c=="")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
<?php /*
//        					var rowss = "('"+"<?php// echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ s1 + "','" + i2 + "','" + s2 + "','"+ i3 + "','"+ s3 + "','"+ i4 + "','" + s4 + "','" + i5 + "','"+ s5 + "','" + c +"')";
*/
?>
                  var rowss = "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ s1 + "','" + l1 + "','" + i2 + "','" + s2 + "','" + l2 + "','" + i3 + "','"+ s3 + "','" + l3 + "','" + i4 + "','" + s4 + "','" + l4 + "','" + i5 + "','"+ s5 + "','" + l5 + "','" + c +"')";
        				}

        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){

         			       if (this.readyState == 4 && this.status == 200) {

                               alert(this.responseText);

                               //alert(this.responseText);

                               document.getElementById("ch623").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';

                               $("#d623").slideToggle("slow");
                               rotate("tg623");
                               //num_rows("tab623","ch623");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet623.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);

        	}

		</script>

    <div class="col-sm-12" onclick='rotate("tg623"); $("#d623").slideToggle("slow");'>

        <div class="col-sm-1" id="ch623">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h623" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.2.3<br><br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Implementation of e-governance in areas of operation
<br>1. Planning and Development
<br>2. Administration
<br>3. Finance and Accounts
<br>4. Student Admission and Support
<br>5. Examination.

                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Paste link for additional information
                <br>* Upload Any additional information
            </div>
        </div>

        <div id="to623" class="col-sm-1">
            <br><img class="image flip"  id="tg623" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d623">
            <br>

            <div class="col-sm-7"><select id="t623m" style="width:250px;"></select></div>
            <div class="col-sm-5" style="visibility:hidden;"><select></select></div>

    <form>

        <table border="0" id="tab623">
            <tr>
                <th style="width:200px; padding:20px;"><b>Areas of e governance</b></th>
                <th style="width:600px; padding:20px;"><b>Name of the Vendor with contact details</b></th>
                <th style="width:200px; padding:20px;"><b>Year of implementation</b></th>
                <th style="width:200px; padding:20px;"><b>Link of the Relavant Document</b></th>
            </tr>
            <tr>
                <th style="width:200px; padding:20px;">Planning and Development</th>
                <th style="width:600px; padding:20px;"><input id="t62321" type="text" placeholder="Name / Contact Details"></th>
                <th style="width:200px; padding:20px;"><select style="width:200px; " id="yt62322"></select></th>
                <td><center><input type="text" id="lt62323" placeholder="Link of the relevant document" style="width:250px;"></center></td>
            </tr>
            <tr>
                <th style="width:200px; padding:20px;">Administration</th>
                <th style="width:600px; padding:20px;"><input id="t62331" type="text" placeholder="Name / Contact Details"></th>
                <th style="width:200px; padding:20px;"><select style="width:200px; " id="yt62332"></select></th>
                <td><center><input type="text" id="lt62333" placeholder="Link of the relevant document" style="width:250px;"></center></td>
            </tr>
            <tr>
                <th style="width:200px; padding:20px;">Finance and Accounts</th>
                <th style="width:600px; padding:20px;"><input id="t62341" type="text" placeholder="Name / Contact Details"></th>
                <th style="width:200px; padding:20px;"><select style="width:200px; " id="yt62342"></select></th>
                <td><center><input type="text" id="lt62343" placeholder="Link of the relevant document" style="width:250px;"></center></td>
            </tr>
            <tr>
                <th style="width:200px; padding:20px;">Student Admission and Support</th>
                <th style="width:600px; padding:20px;"><input id="t62351" type="text" placeholder="Name / Contact Details"></th>
                <th style="width:200px; padding:20px;"><select style="width:200px; " id="yt62352"></select></th>
                <td><center><input type="text" id="lt62353" placeholder="Link of the relevant document" style="width:250px;"></center></td>
            </tr>
            <tr>
                <th style="width:200px; padding:20px;">Examination</th>
                <th style="width:600px; padding:20px;"><input id="t62361" type="text" placeholder="Name / Contact Details"></th>
                <th style="width:200px; padding:20px;"><select style="width:200px; " id="yt62362"></select></th>
                <td><center><input type="text" id="lt62363" placeholder="Link of the relevant document" style="width:250px;"></center></td>
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


        <input type="button" class="SAVE" onclick="save623($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>








<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>









<!--
    6.2.4
-->

        <script>

            function save624(ta)
        	{
                link =  document.getElementById("link6_2_4").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA6_2_4").value;
              //  console.log(ta+"\n"+link);
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
                               $("#d624").slideToggle("slow");
                               rotate("tg624");

                               if(document.getElementById("TA6_2_4").value==""){
                                    document.getElementById("ch624").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch624").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet624.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>



    <div class="col-sm-12" onclick='rotate("tg624"); $("#d624").slideToggle("slow");'>

        <div class="col-sm-1" id="ch624">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h624" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.2.4<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Effectiveness of various bodies/cells/committees is evident through minutes of meetings and implementation of their resolutions.
                <br>
                <br>* Paste link for additional information
                <br>* Upload Any additional information
            </div>
        </div>

        <div id="to624" class="col-sm-1">
            <br><img class="image flip"  id="tg624" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d624">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_2_4" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_2_4" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_2_4" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save624( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>



                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">6.3 Faculty Empowerment Strategies</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    6.3.1
-->

        <script>

            function save631(ta)
        	{
                link =  document.getElementById("link6_3_1").value;
               // ta = ta.value;
                var vu= document.getElementById("TA6_3_1").value;
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
                               $("#d631").slideToggle("slow");
                               rotate("tg631");

                               if(document.getElementById("TA6_3_1").value==""){
                                    document.getElementById("ch631").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch631").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet631.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg631"); $("#d631").slideToggle("slow");'>

        <div class="col-sm-1" id="ch631">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h631" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.3.1<br> <br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            The institution has effective welfare measures for teaching and nonteaching staff.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Paste link for additional information
                <br>* Upload Any additional information
            </div>
        </div>

        <div id="to631" class="col-sm-1">
            <br><img class="image flip"  id="tg631" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d631">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_3_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_3_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_3_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save631( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<!--
    6.3.2
-->
<script>
        	function save632(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();
                        var i6 = $($(rows[i]).find('input')[4]).val();

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

                               alert(this.responseText);

                               //alert("Please make sure to cross check with data in 2.2.2");

                               $("#d632").slideToggle("slow");
                               rotate("tg632");
                               num_rows("tab632","ch632");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet632.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_632()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab632').find('tr');
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
                    num_rows("tab632","ch632");
        		};
          			   			 xhttp.open("GET", "fetch632.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);

                     select_NA();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg632"); $("#d632").slideToggle("slow");'>

        <div class="col-sm-1" id="ch632">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h632" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.3.2 <br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of teachers provided with financial support to attend conferences / workshops and towards membership fee of professional bodies during the last five years.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Upload Any additional information
                <br>* Details of teachers provided with financial support to attend conferences, workshops etc. during the last five years
            </div>
        </div>

        <div id="to632" class="col-sm-1">
            <br><img class="image flip"  id="tg632" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d632">
            <br>
    <script>

    	function addRow632()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Teacher Name" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="PAN No." style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="conference/workshop name" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="text" placeholder="Name" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="number" placeholder="Amount(RS)" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

    		var x = $('#tab632').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab632">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Name of Teacher</th>
                <th style="width:200px; padding:20px;">PAN No.</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Name of conference/ workshop attended for which financial support provided</th>
                <th style="width:200px; padding:20px;">Name of the professional body for which membership fee is provided</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Amount of support (in RS)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow632()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow632()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save632($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>



<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>






<!--
    6.3.3
-->
<script>


        	function save6331(table)
        	{

        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();

                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','"+ i5 + "','" + idd +"')";
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

                               alert(this.responseText);

                               //$("#d633").slideToggle("slow");
                               //rotate("tg633");
                               num_rows_633("tab6331","tab6332","ch633");
        		  			}
        		  		};
                                //alert(rowss);

          			   			 xhttp.open("POST", "savet6331.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

            }





        	function save6332(table)
        	{
                save6331(document.getElementById("tab6331"));

        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();

                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','"+ i5 + "','" + idd +"')";
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

                               alert(this.responseText);

                               $("#d633").slideToggle("slow");
                               rotate("tg633");
                               num_rows_633("tab6331","tab6332","ch633");
        		  			}
        		  		};
                                //alert(rowss);

          			   			 xhttp.open("POST", "savet6332.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_6332()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab6332').find('tr');
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
                        num_rows_633("tab6331","tab6332","ch633");
        			}
        		};
          			   			 xhttp.open("GET", "fetch6332.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}



        	function fetch_rows_6331()
        	{
                fetch_rows_6332();

        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab6331').find('tr');
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
                        num_rows_633("tab6331","tab6332","ch633");
        			}

        		};
          			   			 xhttp.open("GET", "fetch6331.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg633"); $("#d633").slideToggle("slow");'>

        <div class="col-sm-1" id="ch633">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h633" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.3.3 <br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average number of professional development / administrative training Programmes organized by the university for teaching and non teaching staff during the last five years.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* Reports of the Human Resource Development Centres (UGC ASC or other relevant centres)
                <br>* Reports of Academic Staff College or similar centers
                <br>* Upload any additional information
                <br>* Details of professional development / administrative training Programmes organized by the University for teaching and non teaching staff
            </div>
        </div>

        <div id="to633" class="col-sm-1">
            <br><img class="image flip"  id="tg633" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d633">
            <br>
    <script>

    	function addRow6331()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="S.no" style="width:90px;" required></center></td>';
            var C31= '<td><center><input type="text" placeholder="TITLE" style="width:200px;" required></center></td>';
            var C32= '<td><center><input type="text" placeholder="TITLE" style="width:200px;" required></center></td>';
            var C41= '<td><center><input type="date" placeholder="DATE (FROM)" style="width:200px;" required></center></td>';
            var C42= '<td><center><input type="date" placeholder="DATE (TO)" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C31+C41+C42+C5+CR+'</tr>';

    		var x = $('#tab6331').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}


    	function addRow6332()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="S.no" style="width:90px;" required></center></td>';
            var C31= '<td><center><input type="text" placeholder="TITLE" style="width:200px;" required></center></td>';
            var C32= '<td><center><input type="text" placeholder="TITLE" style="width:200px;" required></center></td>';
            var C41= '<td><center><input type="date" placeholder="DATE (FROM)" style="width:200px;" required></center></td>';
            var C42= '<td><center><input type="date" placeholder="DATE (TO)" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C31+C41+C42+C5+CR+'</tr>';

    		var x = $('#tab6332').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}


    </script>
    <form>
            <br><br>
            <h4>TEACHING STAFF</h4>
        <table border="0" id="tab6331">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Title of the professional development program organised for Teaching staff</th>
                <th style="width:200px; padding:20px;">Date (From)</th>
                <th style="width:200px; padding:20px;">Date (To)</th>
                <th style="width:200px; padding:20px; padding-left:0px;">No. of participants (Teaching staff)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow6331()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow633()">Add a new Row</button></td> -->
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

<!--
        <input type="button" class="SAVE" onclick="save633($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:0px;">
-->

    </form>



    <form>
            <br><br>
            <h4>NON-TEACHING STAFF</h4>
        <table border="0" id="tab6332">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Title of the professional development program organised for Non-Teaching Staff</th>
                <th style="width:200px; padding:20px;">Date (From)</th>
                <th style="width:200px; padding:20px;">Date (To)</th>
                <th style="width:200px; padding:20px; padding-left:0px;">No. of participants (Non-Teaching staff)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow6332()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow633()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save6332($(this).parent().children()[3])" value="SAVE CHANGES" style="margin-left:0px;">

    </form>

        </div>
    </center>



<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>




<!--
    6.3.4
-->
<script>
        	function save634(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();

                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "" || i5 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','" + i5 + "','" + idd +"')";
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

                               //alert("Please make sure to cross check with data in 2.2.2");

                               $("#d634").slideToggle("slow");
                               rotate("tg634");
                               num_rows("tab634","ch634");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet634.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_634()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab634').find('tr');
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
                    num_rows("tab634","ch634");
        		};
          			   			 xhttp.open("GET", "fetch634.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg634"); $("#d634").slideToggle("slow");'>

        <div class="col-sm-1" id="ch634">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h634" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.3.4 <br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Average percentage of teachers attending professional development Programmes, viz., Orientation Programme, Refresher Course, Short Term Course, Faculty Development Programmes during the last five years.
                <br>
                <br>Please keep following and other relevant documents ready in hard copy:
                <br>* IQAC report summary
                <br>* Reports of the Human Resource Development Centres (UGC ASC or other relevant centers)
                <br>* Upload any additional information
                <br>* Details of teachers attending professional development Programmes during the last five years
            </div>
        </div>

        <div id="to634" class="col-sm-1">
            <br><img class="image flip"  id="tg634" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d634">
            <br>
    <script>

    	function addRow634()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="number" placeholder="Number" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Title" style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="date" placeholder="Dates (From)" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="date" placeholder="Dates (To)" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+CR+'</tr>';

    		var x = $('#tab634').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab634">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Number of teachers who attended</th>
                <th style="width:200px; padding:20px;">Title of the professional development program</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Date(From)</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Date(To)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow634()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow634()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save634($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>



<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>



<!--
    6.3.5
-->

        <script>

            function save635(ta)
        	{
                link =  document.getElementById("link6_3_5").value;
                //ta = ta.value;
                 var vu= document.getElementById("TA6_3_5").value;
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
                               $("#d635").slideToggle("slow");
                               rotate("tg635");

                               if(document.getElementById("TA6_3_5").value==""){
                                    document.getElementById("ch635").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch635").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet635.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg635"); $("#d635").slideToggle("slow");'>

        <div class="col-sm-1" id="ch635">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h635" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.3.5<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Institution has Performance Appraisal System for teaching and nonteaching staff.
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information

            </div>
        </div>

        <div id="to635" class="col-sm-1">
            <br><img class="image flip"  id="tg635" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d635">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_3_5" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_3_5" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_3_5" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save635( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">6.4 Financial Management and Resource Mobilization</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



    <!--
    6.4.1
-->

        <script>

            function save641(ta)
        	{
                link =  document.getElementById("link6_4_1").value;
               // ta = ta.value;
               var vu= document.getElementById("TA6_4_1").value;
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
                               $("#d641").slideToggle("slow");
                               rotate("tg641");

                               if(document.getElementById("TA6_4_1").value==""){
                                    document.getElementById("ch641").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch641").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet641.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg641"); $("#d641").slideToggle("slow");'>

        <div class="col-sm-1" id="ch641">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h641" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.4.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Institution conducts internal and external financial audits regularly.
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information
            </div>
        </div>

        <div id="to641" class="col-sm-1">
            <br><img class="image flip"  id="tg641" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d641">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_4_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_4_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_4_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save641( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>





<!--
    6.4.2
-->
<script>
        	function save642(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();

                        if(i1 == "" || i2 == "" || i3 == "" || i4 == "")
        				{
        					alert('Please input fields to save');
        					return false;
                        }else
        				{
                            var idd = $(rows[i]).attr('id');
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ i1 + "','"+ i2 + "','" + i3 + "','" + i4 + "','"+ idd +"')";
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

                               //alert("Please make sure to cross check with data in 2.2.2");

                               $("#d642").slideToggle("slow");
                               rotate("tg642");
                               num_rows("tab642","ch642");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet642.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_642()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab642').find('tr');
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
                    num_rows("tab642","ch642");
        		};
          			   			 xhttp.open("GET", "fetch642.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg642"); $("#d642").slideToggle("slow");'>

        <div class="col-sm-1" id="ch642">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h642" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;"><br>6.4.2 <br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
                Funds / Grants received from non-government bodies, individuals, philanthropers during the last five years (not covered in Criterion III) (INR in Crores).
			<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Annual statements of accounts
<br>* Any additional information
<br>* Details of Funds / Grants received from non-government bodies during the last
five years
            </div>
        </div>

        <div id="to642" class="col-sm-1">
            <br><img class="image flip"  id="tg642" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d642">
            <br>
    <script>

    	function addRow642()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Funding agencies" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="number" placeholder="FUNDS (IN CRORES INR)" style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Initiative" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+CR+'</tr>';

    		var x = $('#tab642').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab642">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">Name of the non government funding agencies/ individuals</th>
                <th style="width:200px; padding:20px;">Funds/ Grants received (in Crores)</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Initiative</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow642()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow642()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save642($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>



<div class="col-sm-12" style="height:50px;">
    <hr/>
</div>



<!--
    6.4.3
-->

        <script>

            function save643(ta)
        	{
                link =  document.getElementById("link6_4_3").value;
                //ta = ta.value;
                 var vu= document.getElementById("TA6_4_3").value;
              //  console.log(ta+"\n"+link);
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
                               $("#d643").slideToggle("slow");
                               rotate("tg643");

                               if(document.getElementById("TA6_4_3").value==""){
                                    document.getElementById("ch643").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch643").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet643.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>


    <div class="col-sm-12" onclick='rotate("tg643"); $("#d643").slideToggle("slow");'>

        <div class="col-sm-1" id="ch643">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h643" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;"><br>6.4.3<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>Institutional strategies for mobilisation of funds and the optimal utilisation of resources.
<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information

            </div>
        </div>

        <div id="to643" class="col-sm-1">
            <br><img class="image flip"  id="tg643" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d643">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_4_3" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_4_3" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_4_3" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save643( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




                <center><a style="color:black; ;;;; font-weight:normal; font-size:20px;">6.5 Internal Quality Assurance System</a></center>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    6.5.1
-->

        <script>

            function save651(ta)
        	{
                link =  document.getElementById("link6_5_1").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA6_5_1").value;
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
                               $("#d651").slideToggle("slow");
                               rotate("tg651");

                               if(document.getElementById("TA6_5_1").value==""){
                                    document.getElementById("ch651").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch651").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet651.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg651"); $("#d651").slideToggle("slow");'>

        <div class="col-sm-1" id="ch651">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h651" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.5.1<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the quality assurance strategies and processes.
	<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information
            </div>
        </div>

        <div id="to651" class="col-sm-1">
            <br><img class="image flip"  id="tg651" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d651">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_5_1" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_5_1" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_5_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save651( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>


<!--
    6.5.2
-->
<script>
        	function save654(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
                        var i1 = $($(rows[i]).find('select')[0]).val();
                        var i2 = $($(rows[i]).find('input')[0]).val();
                        var i3 = $($(rows[i]).find('input')[1]).val();
                        var i4 = $($(rows[i]).find('input')[2]).val();
                        var i5 = $($(rows[i]).find('input')[3]).val();
                        var i6 = $($(rows[i]).find('input')[4]).val();

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

                               alert(this.responseText);

                               //alert("Please make sure to cross check with data in 2.2.2");

                               $("#d654").slideToggle("slow");
                               rotate("tg654");
                               num_rows("tab654","ch654");
        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet654.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}
        	}


        	function fetch_rows_654()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){


         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab654').find('tr');
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
                    num_rows("tab654","ch654");
        		};
          			   			 xhttp.open("GET", "fetch654.php", true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);

                     select_NA();
        	}
		</script>

    <div class="col-sm-12" onclick='rotate("tg654"); $("#d654").slideToggle("slow");'>

        <div class="col-sm-1" id="ch654">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="h654" class="col-sm-10" >
            <div class="col-sm-1"  style="font-size:18px;">6.5.2 <br> <br>Q<sub>N</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            <br>
            Institution has adopted the following for Quality assurance.
		<br><br>1. Academic Administrative Audit (AAA) and follow up action taken <br>
            2. Conferences, Seminars, Workshops on quality conducted <br>
            3. Collaborative quality initiatives with other institution(s) <br>
            4. Orientation programme on quality issues for teachers and students <br>
            5. Participation in NIRF <br>
            6. Any other quality audit recognized by state, national or
            international agencies (ISO Certification, NBA)
            </div>
        </div>

        <div id="to654" class="col-sm-1">
            <br><img class="image flip"  id="tg654" src="../images/toggle2.png" width="28" height="28">
        </div>

    </div>

<center>
        <div class="col-sm-12" id="d654">
            <br>
    <script>

    	function addRow654()
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

            var C1 = '<td><center><select placeholder="Year" style="width:185px;" id="'+ay+'"></select></center></td>';
            var C2 = '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>';
            var C3 = '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>';
            var C4 = '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>';
            var C5 = '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>';
            var C6 = '<td><center><input type="text" placeholder="Yes/No" style="width:200px;" required></center></td>';
            var CR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

            var html = '<tr id="'+i+'">'+C1+C2+C3+C4+C5+C6+CR+'</tr>';

    		var x = $('#tab654').find('tr');
            $(x[x.length-1]).before(html);

            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab654">
            <tr>
                <th style="width:200px; padding:20px;">Year</th>
                <th style="width:200px; padding:20px;">AQARs prepared/ submitted. (Yes /No)</th>
                <th style="width:200px; padding:20px;">Academic Administrative Audit (AAA) and initiation of follow up action</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Participation in NIRF. (Yes /No)</th>
                <th style="width:200px; padding:20px;">ISO Certification. (Yes /No)</th>
                <th style="width:200px; padding:20px; padding-left:0px;">NBA or any other certification received. (Yes /No)</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow654()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow654()">Add a new Row</button></td> -->
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


        <input type="button" class="SAVE" onclick="save654($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">

    </form>

        </div>
    </center>


<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



<!--
    6.5.3
-->

        <script>

            function save655(ta)
        	{
                link =  document.getElementById("link6_5_5").value;
               // ta = ta.value;
                 var vu= document.getElementById("TA6_5_5").value;
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
                               $("#d655").slideToggle("slow");
                               rotate("tg655");

                               if(document.getElementById("TA6_5_5").value==""){
                                    document.getElementById("ch655").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch655").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }

        		  			}
        		  		};
          			   			 xhttp.open("POST", "savet655.php?desc="+vu+"&link="+link, true);
         			   			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                     xhttp.send("rows="+rowss);
        		}

        </script>

    <div class="col-sm-12" onclick='rotate("tg655"); $("#d655").slideToggle("slow");'>

        <div class="col-sm-1" id="ch655">
            <img src="../images/filled.png" width="52" height="52"> Filled
        </div>

        <div id="h655" class="col-sm-10">
            <div class="col-sm-1"  style="font-size:18px;">6.5.3<br><br>Q<sub>L</sub>M</div>
            <div class="col-sm-11" style="font-size:18px;">
            Incremental improvements made during the preceding five years (in case of first cycle).
		<br><br>Please keep following and other relevant documents ready in hard copy:
<br>* Paste link for additional information
<br>* Upload any additional information
            </div>
        </div>

        <div id="to655" class="col-sm-1">
            <br><img class="image flip"  id="tg655" src="../images/toggle2.png" width="28" height="28" >
        </div>

    </div>


    <div class="col-sm-12" id="d655">

<center>

        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>

    <form>

        <textarea id="TA6_5_5" style="margin-left:80px; width:930px;height:200px;  opacity:.82;">

        </textarea>

        <br>

        <input type="text" id="link6_5_5" placeholder="Link of the relevant document" style="margin-left:80px; width:930px;" required>

        <br>

        <div style="height:10px; visibility:hidden; height:0px;">

        <div style="margin-left:-615px; font-weight:bold;">
            File Description :
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link6_5_5" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>

        </div>

        <input type="button" class="SAVE" onclick="save655( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:80px; width:920px;">

    </form>
</center>
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>




<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>



    <script>
        function load_time_func(){

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_1_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.1.1
            document.getElementById("TA6_1_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_1_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_1_1").placeholder = "Describe the vision and mission statement of the institution on the nature of governance, perspective plans and participation of the teachers in the decision making bodies of the university within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_1_1").value==""){
               document.getElementById("ch611").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch611").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_1_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.1.2
            document.getElementById("TA6_1_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_1_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_1_2").placeholder = "Describe a case study showing decentralisation and participative management in the institution in practice within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_1_2").value==""){
               document.getElementById("ch612").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch612").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_2_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.2.1
            document.getElementById("TA6_2_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_2_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_2_1").placeholder = "Describe one activity successfully implemented based on the strategic plan within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_2_1").value==""){
               document.getElementById("ch621").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch621").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }





<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_2_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.2.2
            document.getElementById("TA6_2_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_2_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_2_2").placeholder = "Describe one activity successfully implemented based on the strategic plan within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_2_2").value==""){
               document.getElementById("ch622").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch622").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_2_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row_num = mysqli_num_rows($res);
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.2.3

            fetch_academic_year("t62322",'<?php echo $row["PD_Y"]; ?>');
            fetch_academic_year("t62332",'<?php echo $row["AD_Y"]; ?>');
            fetch_academic_year("t62342",'<?php echo $row["FA_Y"]; ?>');
            fetch_academic_year("t62352",'<?php echo $row["SA_Y"]; ?>');
            fetch_academic_year("t62362",'<?php echo $row["EX_Y"]; ?>');

            document.getElementById("t623m").innerHTML = '<option value="">Select</option><option value="A All 5 of the above">A All 5 of the above</option><option value="B Any 4 of the above">B Any 4 of the above</option><option value="C Any 3 of the above Opt one">C Any 3 of the above Opt one</option><option value="D Any 2 of the above">D Any 2 of the above</option><option value="E ≤ 1 of the above">E ≤ 1 of the above</option>';

            document.getElementById("t623m").value = "<?php echo $row['CHOICE']; ?>";

            document.getElementById("t62321").value = '<?php echo $row["PD_C"]; ?>';
            document.getElementById("t62331").value = '<?php echo $row["AD_C"]; ?>';
            document.getElementById("t62341").value = '<?php echo $row["FA_C"]; ?>';
            document.getElementById("t62351").value = '<?php echo $row["SA_C"]; ?>';
            document.getElementById("t62361").value = '<?php echo $row["EX_C"]; ?>';

            document.getElementById("lt62323").value = '<?php echo $row["PD_L"]; ?>';
            document.getElementById("lt62333").value = '<?php echo $row["AD_L"]; ?>';
            document.getElementById("lt62343").value = '<?php echo $row["FA_L"]; ?>';
            document.getElementById("lt62353").value = '<?php echo $row["SA_L"]; ?>';
            document.getElementById("lt62363").value = '<?php echo $row["EX_L"]; ?>';

            //alert("++"+document.getElementById("yt62322")+"++");

            var z = <?php echo $row_num; ?>

            if(z==0){
               document.getElementById("ch623").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch623").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }




<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_2_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.2.4
            document.getElementById("TA6_2_4").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_2_4").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_2_4").placeholder = "Describe one activity successfully implemented based on the Minutes of the meetings of various Bodies/ Cells and Committees within a minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_2_4").value==""){
               document.getElementById("ch624").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch624").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.3.1
            document.getElementById("TA6_3_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_3_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_3_1").placeholder = "Provide the list of existing welfare measures for teaching and nonteaching staff minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_3_1").value==""){
               document.getElementById("ch631").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch631").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_3_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.3.5
            document.getElementById("TA6_3_5").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_3_5").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_3_5").placeholder = "Describe the functioning status of the Performance Appraisal System for teaching and non-teaching staff within minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_3_5").value==""){
               document.getElementById("ch635").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch635").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }



<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_4_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.4.1
            document.getElementById("TA6_4_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_4_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_4_1").placeholder = "Describe the functioning status of the Performance Appraisal System for teaching and non-teaching staff within minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_4_1").value==""){
               document.getElementById("ch641").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch641").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_4_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.4.3
            document.getElementById("TA6_4_3").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_4_3").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_4_3").placeholder = "Describe the functioning status of the Performance Appraisal System for teaching and non-teaching staff within minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_4_3").value==""){
               document.getElementById("ch643").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch643").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_5_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.5.1
            document.getElementById("TA6_5_1").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_5_1").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_5_1").placeholder = "Describe the functioning status of the Performance Appraisal System for teaching and non-teaching staff within minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_5_1").value==""){
               document.getElementById("ch651").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch651").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_5_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.5.2
            document.getElementById("TA6_5_2").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_5_2").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_5_2").placeholder = "Describe the functioning status of the Performance Appraisal System for teaching and non-teaching staff within minimum of 500 characters and maximum of 500 words.";

            if(document.getElementById("TA6_5_2").value==""){
               document.getElementById("ch652").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch652").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }

<?php

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m6_5_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();
            //echo $row['Description'];
?>
        // 6.5.5
            document.getElementById("TA6_5_5").value = '<?php echo urldecode(str_replace("%0A","\\n",$row["Description"])); ?>';
            document.getElementById("link6_5_5").value = '<?php echo urldecode($row["Link"]); ?>';
            document.getElementById("TA6_5_5").placeholder = "Describe quality enhancement initiatives in the academic and administrative domains successfully implemented during the last five years within a minimum of 500 characters and Maximum of 500 words each.";

            if(document.getElementById("TA6_5_5").value==""){
               document.getElementById("ch655").innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"> Not Filled</a>';
            }else{
               document.getElementById("ch655").innerHTML = '<img src="../images/filled.png" width="52" height="52"><a style="font-size:15px;color:#000;"> Filled</a>';
            }


         fetch_rows_632();
         fetch_rows_6331();
         fetch_rows_634();
         fetch_rows_642();
         fetch_rows_653();
         fetch_rows_654();

         select_NA();

            //setTimeout(num_rows_633("tab6331","tab6332","ch633"),3000);

        }

        function select_NA(){

        <?php

          $sql_na = "Select * from not_applicable WHERE Username LIKE '".$_SESSION['username']."'";
          $res  = mysqli_query($connection,$sql_na) ; //or die(mysqli_error($connection));

          while ($row = $res->fetch_assoc()){
            if($row['section'][1]!=6){
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

        function escapeHtml(text) {
          return text
              .replace(/&/g, "%26")
              .replace(/</g, "%3C")
              .replace(/>/g, "%3E")
              .replace(/"/g, "\\%22")
              .replace(/'/g, "\\%27")
              .replace(/#/g, "%23");
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
                     xhttp.open("GET", "../profile/maintain_session.php?page=c6.php", true);
                   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                 xhttp.send("rows="+rowss);
        }

        setInterval(function() { maintain_session(); }, 800000);

    </script>

</body>
</html>
