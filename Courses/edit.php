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
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
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
            <br>
            <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">ADD COURSES</a></center>
        </div>

        <div class="col-sm-12">
          <hr/>
        </div>

        <div class="col-sm-12">
          <br>

          <form action="edit_handler.php" method="POST" style="font-size:15px; border:solid 2px gray; width:600px; ">

            <?php

              $connection = mysqli_connect($servername, $username, $password, $dbname);
        	    $query = "Select * from programme where Username like '".$_SESSION['username']."';";
        	    $res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

            ?>

<br>
            PROGRAMME &nbsp;&nbsp;&nbsp;

            <input readonly style="height:40px; width:300px;" name="Prog_code" type="text" value="<?php echo $_POST['pc'];?>" name="<?php echo $_POST['pc'];?>">



<?php /*?>

            <select id="Prog_code" name="Prog_code" style="width:300px;">
              <?php
                while($row  = $res ->fetch_assoc()){
                  ?>
                    <option value="<?php echo $row['Prog_code']?>"><?php echo $row['Prog_code']." ( ".$row['Prog_name']." ) "; ?></option>
                  <?php
                }
              ?>
            </select>
<?php */ ?>
            <br>

            COURSE CODE &nbsp;&nbsp;

            <input type="hidden" name="cc" value="<?php echo $_POST['cc']; ?>">

            <input required style="height:40px; width:300px;" type="text" id="Course_code" name="Course_code" placeholder="COURSE CODE" value="<?php echo $_POST['cc']; ?>">

            <br>

            COURSE NAME &nbsp;

            <input required style="height:40px; width:300px;" type="text" id="Course_name" name="Course_name" placeholder="COURSE NAME" value="<?php echo $_POST['cn']; ?>">

            <br><br>

            <input type="submit" class="SAVE" value="UPDATE COURSE">

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

            if($_POST['pc']!=""){
          ?>
            $("#Prog_code").val("<?php echo $_POST['pc']; ?>");
          <?php
            }
          ?>
        }
    </script>

</body>
</html>
