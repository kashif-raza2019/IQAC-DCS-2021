<?php
  include("../credential.php");

  /*
       Created By Kashif Raza on 23-04-2021 
       Table is named as 'deadline' 
       Entries: i. id , ii. form , iii. startdate , iv. enddate| 
       Currently Fixed Number of forms i.e 6 hence rows upto id 6
  */
  $connection = mysqli_connect($servername, $username, $password, $dbname);
   $retreive =  "SELECT * FROM deadline";
   $getdata = mysqli_query($connection, $retreive);
   $date_regex = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
        if(isset($_POST['submit'])){
          $id = $_POST['formlist'];
          $firstdate = $_POST['first'];
          $lastdate = $_POST['last'];
          $query = "UPDATE deadline SET startdate = '$firstdate', enddate = '$lastdate' WHERE id='$id'";
          
          if(preg_match($date_regex, $firstdate) && preg_match($date_regex, $lastdate)){

              $update = mysqli_query($connection, $query);
              if($update){
                echo "<script>alert('Updated!')</script>" ;
                // For updating the table 
                header("Refresh:0");
              }else{
                echo "<script>alert('Some Problem Occur')</script>" ;
              }
           }else{
             echo "<script>alert('Please Fill Correct Details!')</script>" ;
           }
          }else{
            echo "<script>alert('You haven't Updated Date')</script>" ;
          }

        
?>
<!Doctype>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/w3_l.css">
  <link rel="icon" href="../logo.png">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Date Limit</title>
 <style>
    body{
         background-color: #fff!important;

		}
		.DAVV{
			background-color:#0E3778 !important;
		}

		.Username{
			background-color:#0E3778;
		}

		.BACK{
			background-color:#0E3778;
		}
        #heading{
          width: auto;
          height:60px;
          margin-top: 2px;
          background-color: #E0E0E0;
          color: black;
          font-size: 30px;
          padding-top: 10px;
          padding-bottom: 10px;
          text-align: center;
          font-family: 'Bahnschrift', 'Roboto';
          font-weight: bold;
        }
        .dateBox{
            height: 70px;
            width: 200px;
            margin: 20px;
            float: left;
            /* border: 1px solid grey; */
        }
        #contentOne{
          padding-left: 35%;
          padding-right: 30%;
          margin-top: 3px;
          margin-bottom: 3px;
          font-size: 20px;
        }
        #prevDateContainer{
          width: 90%;
          margin: auto;
          height: 110px;
          /* border: 1px solid grey; */
          padding-top: 5px;
          padding-left: 40%;
        }
        #mainContent{
          align-items: center;
          justify-content: center;
          margin: auto;
          height: 200px;
          padding-right: 50px;
          padding-left: 50px;
          padding-bottom: 10px;
          padding-top: 5px;
          width: 63%;
          font-size: 20px;
          /* border: 1px solid grey; */
        }
        .dateCard{
          float: left;
          margin: 20px;
          margin-left: 30px;
        }
        #endDate{
          margin-left: 50px;
        }
        #startDate{
          margin-left: 50px;
        }
        #prevSt{
         width: 120px;
         margin-left: 10px;
        }

        #prevEnd{
          width: 120px;
         margin-left: 10px;
        }
        #btnContainer{
          height: 60px;
          width: 80%;
          margin: auto;
          /* border: 1px solid grey; */
          padding-left: 30%;
          padding-top: 20px;
        }
        .btnDate{
          width: 115px;
          float: left;
          margin-left: 20px;
        }
        #deleteDate{
          width: 150px;
        }
        #saveDate{
          width: 150px;
        }
        #selectForm{
          width: 100px;
          margin-left: 42%;
          margin-top: 5px;
        }
        #table-container{
          padding-left: 180px;
          padding-right: 180px
        }
        footer{
          width: 100%;
          margin: auto;
          background-color: #fff;
          height: 20px;
          text-align: center;
          font-size: 15px;
          font-family: 'verdana', 'sans serif';
          color: #A5A5A5;
        }
        #backContainer{
          height: 30px;
          width: 100%;
          text-align: left;
          padding-left: 25px;
          padding-bottom: 10px;
          background-color: #0E3778;
          font-size: 20px;
          font-family: 'verdana', 'sans-serif';
          position: sticky;
          top: 0;
        }
 </style>
  
  </head>
  <body>
  <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>
    </div>
    <script>
      function goBack(){
        window.history.back();
      }
    </script>
    <div id="backContainer"><a onclick="goBack()" style=" text-decoration: none; color: #fff;">BACK</a></div>
    <div id="heading">
     <p>DEADLINE &nbsp; DATE  &nbsp; SETTING</p>
    </div>
    <div id="contentOne">
    <h3 style="float:left;">For Form:&nbsp;</h3>
    <form method="POST">
      <select class="form-control" name="formlist">
       <option value="1">Annual Quality Assurance Report (A.Q.A.R.)</option>
       <option value="2">Academic Audit</option>
       <option value="3">Monthly Report</option>
       <option value="4">Feedback</option>
       <option value="5">Student Satisfaction Survey</option>
       <option value="6">DQAC</option>
       <option value="7">Self-Study Report (S.S.R.)</option>
      </select>
    </div>
    <!-- Table for Previous Dates -->
    <br>
    <h3 style="text-align: center;">Current Date Limits</h3>
    <div id="table-container">
      <table class="table table-bordered" >
        <thead>
          <tr>
            <th scope="col">Forms</th>
            <th scope="col">Start Date</th>
            <th scope="col">Last Date</th>
          </tr>
        </thead>
        <tbody>
        <?php
           while($row = $getdata->fetch_assoc()){
        ?>
          <tr>
            <th scope="row"><?php echo $row['form'];?></th>
            <td><?php echo $row['startdate'];?></td>
            <td><?php echo $row['enddate'];?></td>
          </tr>
          <?php 
           }
          ?>
          </tbody>
      </table>
      <?php 
      
      ?>
    </div>
  <script>
   $(function(){
      $("#endDate").datepicker({dateFormat: "yy-mm-dd", minDate: 0});
      $("#startDate").datepicker({dateFormat: "yy-mm-dd", minDate: 0});
    
   }); 
    
  </script>
  <br>
  <h2 style="text-align: center">Update Date Limit<h2>
    <div id="mainContent" class="card text-center">
        <div class="card text-center dateCard" style="width: 26rem;padding: 10px;">
                <div class="card-body">
                    <h3 class="card-title">Start Date:</h3>
                    <input type="text"  class="form-control" id="startDate" name="first" placeholder="YYYY-MM-DD" AutoCompleteType = "Disabled" autocomplete="off">
                </div>
        </div>
        <div class="card text-center dateCard" style="width: 26rem;padding: 10px;">
                <div class="card-body">
                    <h3 class="card-title">End Date:</h3>
                    <input type="text"  class="form-control" id="endDate" name="last" placeholder="YYYY-MM-DD" AutoCompleteType = "Disabled" autocomplete="off">
                </div>
        </div> 
        
    </div><br><br><br>
    <div id="btnContainer">
        <button type="submit" id="saveDate" name = "submit" class="form-control btn btn-primary btnDate"><p style="text-align: center;">Update Date</p></button>
      </div>
  </form><br><br>
    <!-- Footer -->
    <footer>
     <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore (M.P.)</p>
    </footer>
  </body>

</html>
