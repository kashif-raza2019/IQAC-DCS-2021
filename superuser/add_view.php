<?php
        session_start();
        include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



		if(!isset($_SESSION['names'])){
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

    <link rel="icon" href="logo.png">
    <title>Data Capturing System</title>

    <style>
        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
          background-color: #0E3778;
        }

        textarea{
            resize:none;
        }

        td,th{
          text-align: center;
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
            width: 120px;

            background-color: #0E3778;
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
            /*
            background-color: #333333;
            */
        }

        input[type=button]:hover {
            /*
            background-color: #333333;
            */
        }


        button:hover {
            opacity: 0.8;
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
<body class="BACK" onload="load_time_func();" style="font-family:ubuntu;">

    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a onclick="window.history.back();"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names']);?></h4></div></center>
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
                document.getElementById("myHeader").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader1").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader2").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader3").style.backgroundColor = "#0E3778";
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
      include("links.php");
    ?>



    <center>


        <div class="col-sm-12"  style="margin-top:0px;">
            <br>
            <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">ADDITIONAL DATA</a></center>
        </div>

        <div class="col-sm-12">
          <hr/>
        </div>

        <div class="col-sm-12">
          <br>

          <style>

            th,tr,td{
              padding: 6px;
            }

          </style>

          <table border="2" style="padding:5px;">
            <tr style="font-weight:bold; font-size:16px;">
              <th style="width:60px;">S. no.</th>
              <th style="width:150px;">Department</th>
              <th style="width:150px;">Section</th>
              <th style="width:250px;">Type</th>
              <th style="width:150px;">Data</th>
            </tr>


            <?php

            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $query = "Select * FROM t_additional_data WHERE deactive = 0 ORDER BY Username";
            //echo $query."<br>";
            $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));
            $bc = mysqli_num_rows($res);

            if($bc>0){
            ?>

            <?php
          }

            $c=0;
            while($row = $res->fetch_assoc()){
              $c++;
            ?>


            <tr id="<?php echo $row['id']; ?>">
              <td style="text-align:center;"><?php echo $c; ?></td>
              <td style="text-align:center;"><?php echo $row['Username']; ?></td>
              <td><b style="font-size:20px;"><?php echo str_replace("t","",str_replace("_",".",$row['Section'])); ?></b></td>
              <td><?php echo strtoupper($row['Type']." DATA"); ?></td>
              <td><a href="<?php echo $row['Link']; ?>" target="_blank"> VIEW FILE </a> </td>
            </tr>

            <?php
            }

            ?>
</center>
          </table>


        </div>

</center>

    <script>

    function deactivate_data(x){

      var r_n = $($($($(x).parent()).siblings()[0])).html();

      var cnf = confirm("Are you sure you want to delete row no. "+ r_n );

      console.log(r_n);

      if(!cnf){
        return false;
      }

      var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

             if (this.readyState == 4 && this.status == 200) {
                 console.log(this.responseText);

                 if(this.responseText=="success"){
                   $("#"+$(x).val()).toggle("slow");
                   //$($($(x).parent).parent).toggle("slow");
                 }else{
                   alert("Some Problem occured refresh the page and try again..!!!");
                 }
                      // alert(this.responseText);
            }
          };
              data = "id="+$(x).val();
              //alert(data);
                 xhttp.open("POST", "deactive_handler.php", true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send(data);
    }


    function add_data(){
      var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){

             if (this.readyState == 4 && this.status == 200) {
                 console.log(this.responseText);

                 if(this.responseText=="success"){
                   $("#div_process").html('<img src="imgs/done.png" width="100" height="100"><br>Successfully added.');
                   location.reload();
                 }else{
                   alert("Some Problem occured refresh the page and try again..!!!");
                 }
                      // alert(this.responseText);
            }
          };
              data = "section="+$("#section").val()+"&type="+$("#type").val()+"&link="+$("#link").val();
              //alert(data);
                 xhttp.open("POST", "add_handler.php", true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             xhttp.send(data);
    }

    function upload_and_generate_link(){
      //var doc = $("#doc").val();
      //alert(doc);

      if($("#doc").val()==""){
        alert("You need to browse file/document to generate link");
        return false;
      }

      if($("#section").val()==""){
        alert("You need to select table no. to add data");
        return false;
      }

      if($("#type").val()==""){
        alert("You need to select type to add data");
        return false;
      }

      $("#add_div").toggle("slow");
      $("#div_process").html('<img src="imgs/processing.gif" width="100" height="100"><br>PROCESSING...!!!');

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
          $("#link").val(data);

          add_data();

        }
      });


    }


        function load_time_func(){

        }
    </script>

</body>
</html>
