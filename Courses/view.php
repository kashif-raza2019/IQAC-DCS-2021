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
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <link rel="icon" href="logo.png">
    <title>MANAGE COURSES</title>

    <style>
        a{
          cursor: pointer;
        }
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
            width: 300px;
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
<body class="BACK" onload="load_time_func();" style="font-family:ubuntu;">

    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:130px; height:130px;">
                </div>

                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:38px; margin-top:20px; margin-left:30px; color:#FFF; font-family:  'Calibri';"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:25px; margin-top:10px; margin-left:30px; color:#FFF; font-family:  'Calibri';"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>
    <script>
    // To go back where user came from
      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a onclick="goBack()"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
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


    <center>


        <div class="col-sm-12"  style="margin-top:0px;">
            <br>
            <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">MANAGE COURSES</a></center>
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

            <?php

            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $query = "Select * FROM course WHERE Username LIKE '".$_SESSION['username']."' ORDER BY Course_code";
            //echo $query."<br>";
            $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));
            $bc = mysqli_num_rows($res);

            if($bc>0){
            ?>

            <tr style="font-weight:bold; font-size:16px;">
              <th style="width:60px;">S. no.</th>
              <th style="width:150px;">Course Code</th>
              <th style="width:250px;">Course Name</th>
              <th style="width:250px;">Programme Name</th>
              <th>Edit</th>
              <th>Remove</th>
            </tr>

            <?php
          }

            $c=0;
            while($row = $res->fetch_assoc()){
              $c++;
            ?>


            <tr id="<?php echo $row['Course_code']; ?>">
              <td style="text-align:center;"><?php echo $c; ?></td>

              <?php
              $query1 = "Select * FROM programme WHERE Username LIKE '".$_SESSION['username']."' AND Prog_code LIKE '".$row['Prog_code']."'";
              //echo $query1."<br>";
              $res1  = mysqli_query($connection,$query1);// or die(mysqli_error($connection));
              $pn = $res1->fetch_assoc();

              ?>
              <td><?php echo $row['Course_code']; ?></td>
              <td><?php echo $row['Course_name']; ?></td>
              <td><?php echo $pn['Prog_name']; ?></td>

              <td>
                <form action="edit.php" method="POST">
                  <input type="hidden" name="pc" value="<?php echo $row['Prog_code']; ?>">
                  <input type="hidden" name="cc" value="<?php echo $row['Course_code']; ?>">
                  <input type="hidden" name="cn" value="<?php echo $row['Course_name']; ?>">
                  <input type="submit" class="btn btn-primary" style="width:100px; padding:4px;" value="EDIT">
                </form>
              </td>
              <td>
                <form class="remove" action="remove.php" method="POST" onsubmit="return confirm('Do you really want to Remove the Course?');">
                  <input type="hidden" name="cc" value="<?php echo $row['Course_code']; ?>">
                  <input type="submit" class="btn btn-danger" style="width:100px; padding:4px;" value="REMOVE">
                </form>
              </td>
            </tr>

            <?php
            }

            if($c==0){
              echo "<script>alert('No Course added till now');</script>";
              echo "No Course added till now";
            }
            ?>

          </table>


<br><br>
            <a href="add.php">
              <input type="button" style="width:300px;" class="SAVE" value="ADD COURSE"/>
            </a><br>
<br><br><br><br><br><br><br>
        </div>

</center>

    <script>

        function load_time_func(){

          <?php
            if($_GET['cc']!=""){
          ?>
          $("#<?php echo $_GET['cc']; ?>").css({"background-color":"#4dabf5"});
          <?php
            }
          ?>


          <?php
            if($_GET['pc']!=""){
          ?>
            $("#Prog_code").val("<?php echo $_GET['pc']; ?>");
          <?php
            }
          ?>
        }
    </script>
            <!-- Footer -->
            <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore(M.P.)</p>
        </footer>

</body>
</html>
