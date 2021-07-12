<?php
            session_start();
            include("../credential.php");
            $user = $_SESSION['username'];
            $date = date_create();
            save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
            $msgNotice = "";
            $getName = "";
            $getCode = "";
            $getType = "";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $progCode = $_GET['progCode'];
            if(isset($_POST['submit'])){
                $programName = strtoupper($_POST['programName']);
                $programCode = strtoupper($_POST['programCode']);
                $progType = strtoupper($_POST['programType']);
                        $query = mysqli_query($connection, "UPDATE programme SET Prog_Name = '$programName', Prog_type='$progType' WHERE Prog_code = '$programCode' AND Username = '$user'");
                        if($query){
                            echo "<script>alert('Programme Updated Successfully!');</script>";
                            header("Location: programmeView.php");
                        }else{
                            echo "<script>alert('Error Editing Programme');</script>";
                        }                
            }

            if(!isset($_SESSION['username'])){
                header("Location: ../login.php");
            }
?>
<!Doctype>
<html>
    <head>
        <title><?php
           echo "EDIT $progCode";
        ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/png" href="../assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              height: 140px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Bahnschriff', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              font-weight: bold;
              color: white;
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

           h2{
               text-align: center;
               margin: 10px;
           }

           .tableContainer{
               padding-right: 20%;
               padding-left: 20%;
           }
          
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <p><a href="#"><img src="../assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
        </header>
        <script>
            // To go back where user came from
            function goBack() {
                window.history.back();
                }
            </script>
            <div id="topLink">
                <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            </div>

        <!-- Main Content -->
        <h2 style="font-family: 'Calibri', 'serif';"><?php echo $_SESSION['name'];?></h2>
        <h2>EDIT PROGRAMME</h2><br>

        <div class="tableContainer">
        <form  method="POST">
            <table class="table table-bordered">
            <?php
                    $getQuery = "SELECT * FROM programme WHERE Username = '$user' AND Prog_code = '$progCode'";
                    $getD = mysqli_query($connection, $getQuery);
                    while($getData = mysqli_fetch_assoc($getD)){
                        $getName = $getData['Prog_name'];
                        $getCode = $getData['Prog_code'];
                        $getType = $getData['Prog_type'];
                    }
                    
                ?>

                <tbody>
                    <tr>
                        <th style="font-size: 20px;" scope="row">PROGRAMME NAME</th>
                        <td  style="font-size: 20px;" ><input type="text" name="programName" class="form-control" placeholder="<?php echo $getName;?>" required/></td>
                    </tr>
                    <tr>
                        <th  style="font-size: 20px;"  scope="row">PROGRAMME CODE</th>
                        <td  style="font-size: 20px;" ><input type="text" name="programCode" class="form-control" placeholder="<?php echo $getCode;?>" required/></td>
                    </tr>
                    <tr>
                    <th  style="font-size: 20px;"  scope="row">PROGRAMME CODE</th>
                    <th><select name="programType" class="form-control" required>
                        <option value="Under-Graduate" <?php if($getType == 'UNDER-GRADUATE'){echo " selected" ;}?>>Under-Graduate (UG)</option>
                        <option value="Post-Graduate" <?php if($getType == 'POST-GRADUATE'){echo " selected"; }?>>Post-Graduate (PG)</option>
                        <option value="M Phil" <?php if($getType == 'M PHIL'){echo " selected"; }?>>M Phil.</option>
                        <option value="PhD" <?php if($getType == 'PHD'){echo " selected"; }?>>PhD</option>
                        <option value="Diploma" <?php if($getType == 'DIPLOMA'){echo " selected"; }?>>Diploma</option>
                        <option value="Certificate" <?php if($getType == 'CERTIFICATE'){echo " selected"; }?>>Certificate</option>
                    </select></th>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Programme Name</th>
                    <th>Programme Code</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table> -->
        </div><br><br>
        <!-- Footer -->
        <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
        </footer>
    <?php  $connection->close();?>
    </body>

</html>