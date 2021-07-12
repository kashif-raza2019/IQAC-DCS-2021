<?php
        session_start();
        include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


		if(!isset($_SESSION['username'])){
		  header("Location: ../../login.php");
        }
?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/w3.css">

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <link rel="icon" href="../logo.png">
    <title>Information Gathering System</title>

    <style>
        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
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
            min-width: 200px;

            background-color: #424242;
            color: #EEEEEE;

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

<style>

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 140px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: 50%;
    margin-left: -75px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>


</head>
<body class="BACK" onload="load_time_func();" style="font-family:ubuntu;">

    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
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
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px;"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "";?></h4></a></div></center>
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


          function upload_and_generate_link(){
            //var doc = $("#doc").val();
            //alert(doc);

            if($("#doc").val()==""){
              alert("You need to browse file/document to generate link");
              return false;
            }

            $("#uploader").toggle("slow");
            $("#u_g_l").toggle("slow");

            $.ajax({
              url: "ajax_file_upload.php",      // Url to which the request is send
              type: "POST",                       // Type of request to be send, called as method
              data: new FormData($("#f1")[0]),       // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              contentType: false,                 // The content type used when sending data to the server.
              cache: false,
              enctype: 'multipart/form-data',     // To unable request pages to be cached
              processData:false,                  // To send DOMDocument or non processed data file it is set to false

              success: function(data){             // A function to be called if request succeeds
                var link = data;
                //$("#uploader").hide();
                $("#u_g_l").toggle("slow");
                $("#after").toggle("slow");

                $("#p_heading").toggle("slow");
                $("#p_heading").toggle("slow");

                $("#p_heading").html("LINK GENERATED");
                $("#generated_link").val(data);

                $("#view_link").attr({"href":data});

                //alert(link);
              }
            });


          }

          function cont(){

          }

          function copy_link(){
            var copyText = $("#generated_link");
            copyText.select();
            document.execCommand("copy");
            //alert("copied");
          }

    </script>

<!--
    <center>
-->

        <div class="col-sm-12"  style="margin-top:0px;">
            <br>
            <a id="p_heading" style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 1 – CURRICULAR ASPECTS</a>
        </div>

        <div class="col-sm-12">
          <hr/>
        </div>


        <div class="col-sm-12"  style="margin-top:0px;">
            <a id="p_heading" style="color:black; ;;;; font-weight:normal; font-size:22px;">CRITERIA 1 – CURRICULAR ASPECTS</a>
        </div>


<!--
        <div class="col-sm-12" id="u_g_l" style="display:none;">
          <img src="../imgs/processing.gif" width="100" height="100">
          <br>
          Uploading and Generating Link, Please wait...!!!
        </div>

        <div class="col-sm-12" id="after" style="padding:20px;display:none; font-size:20px; padding-top:40px;">
          <div class="col-sm-12" id="" >
            <input type="text" readonly id="generated_link">
          </div>

          <br><br>

          <div class="col-sm-12">
            <a id="view_link" href="" target="_blank"> <input type="button" value="VIEW LINK" > </a>
            <input id="copy_btn" type="button" value="COPY TO CLIP BOARD" onclick="copy_link()">
            <input id="" type="button" value="CLOSE WINDOW" onclick="window.close()">
          </div>

        </div>


        <div class="col-sm-12" id="uploader" style="font-size:20px; padding-top:40px;">


          <div class="col-sm-3"></div>

          <div class="col-sm-3"> Upload Document </div>

            <div class="col-sm-3">
              <form id="f1">
                <input type="file" id="doc" name="doc">
              </form>
            </div>

          <div class="col-sm-3"></div>

          <div class="col-sm-12">
            <br><br>
            <input type="button" value="GENERATE LINK" onclick="upload_and_generate_link()">
          </div>

        </div>
-->
<!--
</center>
-->

<script>

$(document).ready(function(){
  $("#copy_btn").hover(function(){
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Link copied to clipboard";
  });
});

function display_copied(){

}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>

    <script>
        function load_time_func(){

        }
    </script>

</body>
</html>
