<?php session_start();
    include('credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    $notice = "";
    $year = date("Y");
    
    if(!isset($_SESSION['name'])){
        header("Location: homepage.php");  
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <style>
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

      .tableContainer{
          padding-right: 15%;
          padding-left: 15%;
          text-align: center;
      }

      footer{
            margin-top: 30px;
            text-align: center;
           }
    </style>
<link rel="icon" href="assets/images/davvlogo.png">
<title>Uploaded Data</title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">DEVI AHILYA VISHWAVIDYALAYA <br><span style="font-size: 22px;">DATA CAPTURING SYSTEM-2021</span></p>
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
        <a href='homepage.php' style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Home Page">Home</a>
    </div>
    <br>
        <h2 style="text-align: center;">UPLOADED DATA FOR MONTHLY REPORT AND DQAC</h2>
        <h3 style="text-align: center;"><u><?php echo $_SESSION['name'];?></u></h3>
        <div class="tableContainer">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="4" style="text-align: center;">Uploaded Doocuments (Naming as: deptusername-year-month-questionNum-fileName)</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">S No</th>
                        <th style="text-align: center;">Document Name</th>
                        <th style="text-align: center;">View</th>
                        <th style="text-align: center;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $mydir = "upload_data/";
                    $myfiles = array_diff(scandir($mydir), array('.', '..')); 
                    $i = 0;
                    //$prefix = "localhost/NAC/upload_data/";
                    $prefix = "http://www.iqac.dauniv.ac.in/DCS/";
                    foreach($myfiles as $value){
                        if(strpos($value, "dqac-$user") === 0 || strpos($value, "Monthly_Report-$user") === 0 || strpos($value, "$user-monthly_report") === 0){
                            $i++;

                       ?>
                        <tr>
                           <td><?php echo $i;?></td>
                           <td><?php echo $value;?></td>
                           <td><?php echo "<a href='upload_data/$value'>View File</a>";?></td>
                           <td><form method='POST' onsubmit="return confirm('Are You Sure to delete this file?');" action="deleteDoc.php"><input type='hidden' name="doc" value='<?php echo $value; ?>' class='inputValue'><button type='submit' name='submit'  class='btn btn-danger'>Delete</button></form></td>
                        </tr>
                 <?php 
                               }                    }
                ?>
                </tbody>
            </table>
            <script>
                   $(".form1").on("submit", function(e){
                       e.preventDefault();
                    var confirmDelete = confirm('Are you sure to delete this file?, once deleted cannot be retreived!');
                    if(confirmDelete){
                        var doc = [];
                        $(".inputValue").each(function(){
                            doc.push($(this).val());
                        })
                        $.ajax({
                            url: "deleteDoc.php",
                            method: "GET",
                            data: {doc: doc},
                            success: function(){
                                alert("File Deleted Succesfully!");
                                window.location.reload();
                            },
                            error: function(){
                                alert("Error deleting this file!");
                            }
                        })
                    }

                   });
            
            </script>
        </div>
        <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore (M.P.)</p>
       </footer>
    </body>
</html>
