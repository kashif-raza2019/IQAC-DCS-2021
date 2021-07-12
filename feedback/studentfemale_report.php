<?php 
    session_start();
    include('../credential.php');  
    $connection = mysqli_connect($servername, $username, $password, $dbname);


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
      html{
          scroll-behavior: smooth;
      }
      body{
          padding: 0px;
          margin: 0px;
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
      .Hidden{
          display: none;
      }
      footer{
            margin-top: 30px;
            text-align: center;
           }
       .tableContainer{
            padding-right: 9%;
            padding-left: 9%;
       }
       .deptName:hover{
           text-decoration: underline;
           cursor: pointer;
       }
       th{
           text-align: center;
           font-size: 19px;
           position: sticky;
           top: 0px;
           background-color: #fff;
       }
       td{
           text-align: center;
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
            a:hover{
                text-decoration: none;
                opacity: 0.8;
            }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title><?php echo "FEEDBACK REPORT";?></title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
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
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <h3 style="text-align: center; font-weight: bold;">FEEDBACK REPORT | FEMALE STUDENTS</h3><br>
    <!-- Main Page Startes From Here -->
    <div class="tableContainer">
        <table class="table table-bordered">
            <thead>
                    <th>DEPARTMENT NAME</th>
                    <th>STUDENTS GIVEN FEEDBACK</th>
                    <th>PDF DATA</th>
                    <th>CSV DATA</th>
            </thead>
            <tbody>
                <?php
                    $getQuery1 = mysqli_query($connection, "SELECT*FROM admins ORDER BY name DESC");
                          while($fetchData = $getQuery1->fetch_assoc()){
                              $username = $fetchData['username'];
                              $name = $fetchData['name'];
                        $getQuery = mysqli_query($connection, "SELECT*FROM feedback_student_female_2021 WHERE username = '$username'");
                        $studentCount = mysqli_num_rows($getQuery);
                        echo "<tr><td style='color: #0E3778; font-weight: bold' class='deptName'>$name</td><td style='font-weight: bold; text-align: center;'>$studentCount</td><td><a href='report.php?user=$username&type='female''><i class='fa fa-file-pdf-o' style='font-size: 26px; color: red;'></i></a></td><td><a href='feedback_student-csv.php?=$username'><i class='fa fa-file-excel-o' style='font-size: 26px; color: green;'></i></a></td></tr>";
                    }
                
                ?>

            </tbody>
        </table>
    </div>
    <button onclick="topFunction()" id="topBtn" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fa fa-arrow-up" style="color: white;font-size: 20px;"></i></button>
				<script>
				/*BACK TO TOP BUTTON */
					var mybutton = document.getElementById("topBtn");
					window.onscroll = function() {scrollFunction()};
					function scrollFunction() {
					if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
						mybutton.style.display = "block";
					} else {
						mybutton.style.display = "none";
					}
					}
					function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
					}
				</script>


    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
</body>
</html>
