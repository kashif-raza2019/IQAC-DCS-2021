<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

$connection = mysqli_connect($servername, $username, $password, $dbname);

// if(isset($_POST['submit2']){
//     $department = $_POST['department'];
//     $notice = $_post['noticeTxt'];
    
// }

if(!isset($_SESSION['names'])){
		header("Location: ../index.php");   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../ssrstyle.css">
    <link rel="icon" href="../assets/images/davvlogo.png">


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

        #notice{
            text-align: center;
        }
        #tableContainer{
           margin-top: 50px;
           padding-left: 5%;
           padding-right: 5%;

        }

        </style>
<title>Notice | Information Gathering System</title>
</head>
<body style="background-color: #fff;">
    <script>
    // To go back where user came from
            // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            })

      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>

    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
    <!-- Don't Remove ../../ it is inserted for two level ups in the directory! -->
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
    </div>
    <div id="topLink">
        <a onclick="window.location.href='index.php'"  data-toggle="tooltip" data-placement="bottom" title="Go to Previous Page">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <style>
     #f2{
         display: none;
     }
    </style>
    <!-- NOTICE Instructions here -->
    <h4 style="text-align: center">Please refer to the Instructions:</h4><br>
    <button type="button" style="margin-left: 46%; margin-right: auto;" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">HERE</button>

    <div class="modal fade bd-example-modal-lg" style="margin-top: 10%;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding-left: 20px;padding-right: 20px; padding-bottom: 10px;">
          <h3 style="text-align: center;">INSTRUCTIONS FOR NOTICE DELIVERY SYSTEM</h3><br>
          <p style="margin-left: 30px; margin-right: 10px; margin-bottom: 20px; margin-top: 10px;">
           <h4 style="color: red">NOTE: </h4><br>
           The Notice when Saved, gets added to the previous notice hence, if you want to change the notice completely first delete the previous notice before proceeding to save changes.
         </p>
        </div>
    </div>
    </div>
    <style>
     .noticeMsgData{
       width: 100%;
       height: 30px;
       text-align: center;
     }
    </style>
    <div class="noticeMsgData">
      <h4 id="msgContainer" style="text-align: center;"></h4>
    </div>
     <div id="tableContainer">
        <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="3" style="text-align: center; font-size: 18px;">SELECT INSTITUTE or ALL</th>
        </tr>
        <tr>
          <td style="text-align: center;"><button class="btn btn-success" id="selectAll">SELECT ALL</button></td>
          <td style="text-align: center;"><button class="btn btn-info" id="selectOne">SELECT DEPT.</button></td>
        </tr>
        </thead>
        <tbody>
         <tr id="f1">
            <td colspan="2" >
            <form method="POST" id="form1">
                <div class="selectAll">
                 <h3 style="text-align: center;">NOTICE FOR ALL DEPARTMENT</h3>
                <label for="noticeTxt">NOTICE HERE</label>
                <textarea name="noticeTxt" id="noticeTxtAll" cols="10" rows="5" maxlength="400" class="form-control" style="resize: none;" placeholder="Notice Here"></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="SAVE CHANGES" style="margin-right: 20px;">
                <input type="button" class="btn btn-danger" onclick="forAll()" value="DELETE NOTICE" data-toggle="tooltip" data-placement="right" title="Delete Notice For All Departments">
                </div>    
            </form>     
            </td>
         </tr>
         <tr id="f2">
            <td colspan="2" >
            <form id="form2">
                <div class="selectDep">
                <h3 style="text-align: center;">NOTICE FOR  DEPARTMENT</h3>
                <label for="department">DEPARTMENT: </label><br>
                <select id="department" class="form-control">
                 <option value="0" disabled selected>SELECT DEPARTMENT</option>
                 <?php
                   $getQuery = "SELECT*FROM admins ORDER BY sno";
                   $get = mysqli_query($connection, $getQuery);
                   if($get){
                       while($res = $get->fetch_assoc()){
                           $rowName = $res['name'];
                           $rowValue = $res['username'];
                           echo "<option value='$rowValue'>$rowName</option>";
                       }
                   } 
                 ?>
                </select><br>
                <script>
                //   Script Here
                </script>
                <label for="noticeTxt">NOTICE HERE</label>
                <textarea name="noticeTxt" id="noticeTxtDept" cols="10" rows="5" maxlength="400" class="form-control" style="resize: none;" placeholder = "NOTICE HERE"></textarea><br>
                <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
                <input type="button" onclick="forDept()" class="btn btn-danger" style="margin-left: 20px;" value="DELETE NOTICE FOR DEPT." data-toggle="tooltip" data-placement="right" title="Delete Notice For Selected Department">
                </div>    
            </form>     
            </td>
         </tr>


        </tbody>
        </table>
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th colspan="3" style="text-align: center;">NOTICE: SENT TO ALL DEPARTMENTS</th>
            </tr>
            <tr>
              <th>S.No</th>
              <th>NOTICE</th>
              <th>DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $get = mysqli_query($connection, "SELECT*FROM prev_noticeall");
              if(mysqli_num_rows($get) >0){
                $i = 0;
                while($res = $get->fetch_assoc()){
                $i++;
                $notice = $res['notice'];
                $date = $res['start_date'];
                echo "<tr><td>$i</td><td>$notice</td><td>$date</td></tr>";
                }  
              }else{
                  echo "<tr><td colspan='3'>No Notice Data Available</td></tr>";
              }
            ?>
          </tbody>
        
        </table>
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th colspan="3" style="text-align: center;">NOTICE: SENT TO SPECIFIC DEPARTMENT</th>
            </tr>
            <tr>
              <th>DEPARTMENT USERNAME</th>
              <th>NOTICE</th>
              <th>DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $get = mysqli_query($connection, "SELECT*FROM prev_notice");
              if(mysqli_num_rows($get) >0){
                while($res = $get->fetch_assoc()){
                $username = $res['username'];
                $notice = $res['notice'];
                $date = $res['start_date'];
                echo "<tr><td>$username</td><td>$notice</td><td>$date</td></tr>";
                }  
              }else{
                  echo "<tr><td colspan='3'>No Notice Data Available</td></tr>";
              }
            ?>
          </tbody>
        
        </table>

     </div>

      <script>
         
       
        $("#selectAll").on("click", function(){
           $("#f2").fadeOut("fast");
           $("#f1").fadeIn("slow");
           
        });
        $("#selectOne").on("click", function(){
           $("#f1").fadeOut("fast");
           $("#f2").fadeIn("slow")
        });

        function forAll(){
            var confirmDelete = confirm('Are you Sure?');
            if(confirmDelete){
                $.ajax({
                    url: "deleteNoticeAll.php",
                    method: "POST",
                    success: function(){
                        $("#msgContainer").html("<p style='color: orange;'>Deleted Succesfully</p>");
                    },
                    error: function(){
                        $("#msgContainer").html("<p style='color: red;'>Error Deleting Data!</p>");
                    }
                });
            }
        }
        function forDept(){
            var confirmDelete = confirm('Are you Sure?');
            if(confirmDelete == true){
                var dept = $("#department").val();
                $.ajax({
                    url: "deleteNoticeDept.php",
                    method: "POST",
                    data: {dept: dept},
                    success: function(){
                        $("#msgContainer").html("<p style='color: orange;'>Deleted Succesfully</p>");
                    },
                    error: function(){
                        $("#msgContainer").html("<p style='color: red;'>Error Deleting Data!</p>");
                    }

                });
            }
        }

        $("#form2").on("submit", function(event){
            event.preventDefault();
            var department = $("#department").val();
            var noticeDept = $("#noticeTxtDept").val();
            $.ajax({
                url: "saveNoticeDept.php",
                method: "POST",
                data: {department: department, noticeDept: noticeDept},
                success: function(){
                    $("#msgContainer").html("<p style='color: green;'>Notice Saved Successfully</p>");
                    window.reload();
                },
                error: function(){
                    $("#msgContainer").html("<p style='color: red;'>Error Saving Data</p>");
                }
            });
        });

        $("#form1").on("submit", function(event){
            event.preventDefault();
            var noticeData = $("#noticeTxtAll").val();
            $.ajax({
                url: "saveNoticeAll.php",
                method: "POST",
                data: {noticeData: noticeData},
                success: function(){
                    $("#msgContainer").html("<p style='color: green;'>Notice Saved Successfully</p>");
                    window.reload();
                },
                error: function(){
                    $("#msgContainer").html("<p style='color: red;'>Error Saving Data</p>");
                }
            });
        });


      </script>






        <?php //header("Location: progress.php"); ?>

        <div id="right"></div>

</body>
</html>
