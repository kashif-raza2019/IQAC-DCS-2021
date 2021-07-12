<?php
  session_start();
  $user = $_SESSION['username'];
  include('../credential.php');
  $date = date_create();
  save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

  
  $connection  = mysqli_connect($servername, $username, $password, $dbname);
  $output = "";
  $err='';
  if($connection){
     if(isset($_POST['submitA'])){
         $arr = strtoupper($_POST['studentData']);
         $array = explode("\r\n", $arr);
         $data_array = array_unique($array);
        //  for($i=0; $i<count($data_array); $i++){
        //      echo $data_array[$i] ;
        //  }
        
         for($i = 0; $i<count($data_array); $i++){
            $value = $data_array[$i];
            $query = "INSERT INTO student_applicable(username, Roll_Number) VALUES('$user', '$value')";
            $insert = mysqli_query($connection, $query);
            if($insert){
                $err = "<h5 style='color: green; text-align: center;'>Data Added Successfully</h5>";
            }else{
                $err = "<h5 style='color: red; text-align: center;'>Error Inserting Query</h5>";
            }
         }
         
     }else if(isset($_POST['submitN'])){
        $arr = strtoupper($_POST['studentData']);
        $array = explode("\r\n", $arr);
        $data_array = array_unique($array);
       //  for($i=0; $i<count($data_array); $i++){
       //      echo $data_array[$i] ;
       //  }
       $countArrayLen2 = count($data_array);
        for($i = 0; $i<count($data_array); $i++){
            $value = $data_array[$i];
           $query = "DELETE FROM student_applicable WHERE username = '$user' AND Roll_Number = '$value'";
           $delete = mysqli_query($connection, $query);
           if($delete){
            $err = "<h5 style='color: green; text-align: center;'>Not Applicable Query Successful</h5>";
            
           }else{
               $err = "<h5 style='color: red; text-align: center;'>Error Deleting Query</h5>";
           }
        }
     }

  }else{
      echo "<script>alert('Oops! Error Connecting Data')</script>";
  }

?>
<!Doctype>
<html>
    <head>
        <title>Set Students Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstarp 4 Integration -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
       <link rel="icon" type="image/png" href="../assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              height: 160px;
              margin-bottom: 40px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Bahnschriff', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              font-weight: bold;
              color: white;
           }
           .btnContainer{
               height: 50px;
               width: 100%;
               display: flex;
               justify-content: center;
               align-items: center;
               text-align: center;
           }
           .formContainer{
               height: 200px;
               width: 100%;
               padding-right: 30%;
               padding-left: 30%;
               margin-top: 5px;
               margin-bottom: 30px;
           }
           textarea{
               resize: none;
           }

           #applicableStudents{
               display: block;
           }
           #notApplicableStudents{
               display: none;
           }

        </style>
    </head>
    <body>
    <header>
       <p><a href="../homepage.php"><img src="../assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
       <p style="text-align: center; font-size: 16px;"><?php echo $_SESSION['name'];?></p>
    </header>
    <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            })
        // To go back where user came from
        function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
        </script>
        <button onclick="goBack()" class="btn btn-info" style="margin-left:20px; margin-top: -30px; float: left;">BACK</button>
     <h3 style="text-align: center; margin-top: 0px;">SET STUDENT DATA FOR FEEDBACK | <?php echo $_SESSION['name'];?></h3>
     <h6 style="text-align: center;">Those Students who are <b>Applicable</b> or <b>Not Applicable</b> to Fill Feedback and Student Satisfaction Survey</h6>
     <div class="btnContainer">
        <button id="applicable"  class="btn btn-success">Applicable Students</button>
        <button id="notapplicable" class="btn btn-warning" style="margin-left: 60px;color: #fff;">Not Applicable Students</button>
     </div><br>
     <p style="text-align: center; "><?php echo $err;?></p>
     <div id="applicableStudents" class="formContainer">
        <form id="formApplicable" method="POST">
           <label for="studentData" style="font-weight: bold;">Insert Roll Number of Applicable Students <u><i>Row Wise</i></u></label>
           <textarea name="studentData" class="form-control"  rows="8" required></textarea>
           <input type="submit" style="margin: 20px; " value="Add Roll Number" id="btnA" class="btn btn-primary" name="submitA" data-toggle="tooltip" data-placement="right" title="Add Data">
        </form>
     </div>
     <div id="notApplicableStudents" class="formContainer">
        <form id="formNotApplicable" method="POST">
           <label for="studentData" style="font-weight: bold;">Insert Roll Number of Not Applicable Students <u><i>Row Wise</i></u></label>
           <textarea name="studentData" class="form-control"  rows="8" required></textarea>
           <input type="submit" style="margin: 20px; " value="Add Roll Number" id="btnNa" class="btn btn-danger" name="submitN" data-toggle="tooltip" data-placement="right" title="Please Ensure Data">
        </form>
     </div>
    <script>
    $("#applicable").click(function(){
        $("#notApplicableStudents").fadeOut(800).css("display", "none");
         $("#applicableStudents").fadeIn(800).css("display", "block");
  
      });
      $("#notapplicable").click(function(){
        $("#applicableStudents").fadeOut(800).css("display", "none");
         $("#notApplicableStudents").fadeIn(800).css("display", "block");
  
      });
      $("h5").delay(2000).fadeOut("slow");
    </script>
    <br><br><br>
    <div class="formContainer">
     <table class="table table-bordered">
           <thead>
             <th style="text-align: center;">Get Current Data</th>
           </thead>
           <tbody>
             <tr>
              <td><button id="export" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSV FORMAT">Export Data</button></td>
             </tr>
           </tbody>
     </table>
     </div>
     <script>
       $("#export").click(function(){
            var conf = confirm("Sure Want To Export");
            if(conf == true){
                window.location.href="export.php";
            }
       });
     </script>
     
    <?php $connection->close();?>
    </body>

</html>