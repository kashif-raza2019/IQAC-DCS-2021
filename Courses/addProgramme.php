<?php
            session_start();
            include("../credential.php");
            $user = $_SESSION['username'];
            $date = date_create();
            save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
            $msgNotice = "";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            if(isset($_POST['submit'])){
                $progName = $_POST['programName'];
                $programName = strtoupper($progName);
                $progCodeN = $_POST['programCode'];
                $programCode = strtoupper($progCodeN);
                $progTypeN = $_POST['programType'];
                $progType = strtoupper($progTypeN);
                $check = mysqli_query($connection, "SELECT*FROM programme WHERE Username = '$user' AND Prog_code = '$programCode'");
                if(mysqli_num_rows($check)>0){
                        $msgNotice = "<span style='color: red;'>PROGRAMME ALREADY EXISTS<span>";
                }else{
                        $add = "INSERT INTO programme(id, Username, Prog_code, Prog_name, Prog_type) VALUES('1' , '$user', '$programCode', '$programName', '$progType')";
                        $query = mysqli_query($connection, $add);
                        if($query){
                            echo "<script>alert('Programme Added Successfully!');</script>";
                            header("Location: programmeView.php");
                        }else{
                            echo "<script>alert('Error Adding Programme');</script>";
                            var_dump($query);
                            echo "<br>";
                            echo mysqli_error($connection);
                        }
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
           echo "MANAGE PROGRAMMES";
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
                <a href="programmeView.php"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            </div>

        <!-- Main Content -->
        <h2 style="font-family: 'Calibri', 'serif';"><?php echo $_SESSION['name'];?></h2>
        <h2>ADD PROGRAMME</h2><br>

        <div class="tableContainer">
        <form  method="POST">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="font-size: 20px;" scope="row">PROGRAMME NAME</th>
                        <td  style="font-size: 20px;" ><input type="text" name="programName" placeholder="Programme Name" class="form-control" required/></td>
                    </tr>
                    <tr>
                        <th  style="font-size: 20px;"  scope="row">PROGRAMME CODE</th>
                        <td  style="font-size: 20px;" ><input type="text" name="programCode" placeholder="Programme Code"  class="form-control" required/></td>
                    </tr>
                    <tr>
                    <th  style="font-size: 20px;"  scope="row">PROGRAMME CODE</th>
                    <th><select name="programType" class="form-control" required>
                        <option value="" selected disabled>-Select Programme Type-</option>
                        <option value="Under-Graduate">Under-Graduate (UG)</option>
                        <option value="Post-Graduate">Post-Graduate (PG)</option>
                        <option value="M Phil">M Phil.</option>
                        <option value="PhD">PhD</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Certificate">Certificate</option>
                    </select></th>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php $connection->close();?>
        </div><br><br>
        <!-- Footer -->
        <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore(M.P)</p>
        </footer>
    
    </body>

</html>