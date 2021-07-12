<?php
        session_start();
        include("../credential.php");

        $cc = '';
        $cn = '';
        // $cc = $_GET['cc'];
        // $cn = $_GET['cn'];
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
    <title>Information Gathering System</title>

    <style>
            html{
        scroll-behavior: smooth;
    }
    body{
        padding: 0px;
        margin: 0px;
    }
    #topBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50px;
            z-index: 99;
            height: 39px;
            width: 39px;
            font-size: 15px;
            border: none;
            outline: none;
            background-color: #0E3778;
            color: white;
            cursor: pointer;
            padding: 3px;
            border-radius: 50%;
        }
    #header{
        width: 100%;
        background-color: #0E3778;
        padding-bottom: 20px;
        height: 160px;
        color: #fff;
        font-size: 28px;
        font-weight: bold;
    }
    #topLink{
        width: 100%;
        background-color: #0E3778;
        padding-bottom: 5px;
        height: 30px;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding-left: 0px;

    }
    #topLink a{
        color: #fff;
        text-decoration: none;
        margin-left: 35px;
        
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
            background-color: #0E3778;
        }

        input[type=button]:hover {
            background-color:#0E3778;
        }


        button:hover {
            background-color: #0E3778;
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

<div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
    <!-- Don't Remove ../../ it is inserted for two level ups in the directory! -->
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
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
    <div id="topLink">
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Log-Out">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <script>
    // To go back where user came from
      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>

    <center>


        <div class="col-sm-12"  style="margin-top:0px;">
            <br>
            <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">ADD COURSES</a></center>
        </div>

        <div class="col-sm-12">
          <hr/>
        </div>

        <div class="col-sm-12">
          <br>

          <form action="add_handler.php" method="POST" style="font-size:15px; border:solid 2px gray; width:600px; ">

            <?php

              $connection = mysqli_connect($servername, $username, $password, $dbname);
        	    $query = "Select * from programme where Username like '".$_SESSION['username']."';";
        	    $res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

            ?>


            PROGRAMME &nbsp;&nbsp;&nbsp;

            <select id="Prog_code" name="Prog_code" style="width:300px;">
              <?php
                while($row  = $res ->fetch_assoc()){
                  ?>
                    <option value="<?php echo $row['Prog_code']?>"><?php echo $row['Prog_code']." ( ".$row['Prog_name']." ) "; ?></option>
                  <?php
                }
              ?>
            </select>

            <br>

            COURSE CODE &nbsp;&nbsp;

            <input required style="height:40px; width:300px;" type="text" id="Course_code" name="Course_code" placeholder="COURSE CODE" value="<?php echo $cc; ?>">

            <br>

            COURSE NAME &nbsp;

            <input required style="height:40px; width:300px;" type="text" id="Course_name" name="Course_name" placeholder="COURSE NAME" value="<?php echo $cn; ?>">

            <br><br>

            <input type="submit" class="SAVE" value="ADD COURSE TO THE PROGRAMME">

          </form>

            <br>

            <a href="view.php">
              <input type="button" style="width:300px;" class="SAVE" value="VIEW EXISTING LIST"/>
            </a>

        </div>

</center>

    <script>
        function load_time_func(){
          <?php
            if($_GET['pc']!=""){
          ?>
            $("#Prog_code").val("<?php echo $_GET['pc']; ?>");
          <?php
            }
          ?>
        }
    </script>

</body>
</html>
