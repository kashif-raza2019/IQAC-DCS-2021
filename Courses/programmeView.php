<?php
            session_start();
            include("../credential.php");
            $user = $_SESSION['username'];
            $date = date_create();
            save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

            $connection = mysqli_connect($servername, $username, $password, $dbname);

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
            <p><a href=""><img src="../assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
        </header>
        <script>
            // To go back where user came from
            function goBack() {
                window.history.back();
                }
            </script>
            <div id="topLink">
                <a href="../homepage.php"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            </div>

        <!-- Main Content -->
        <h2 style="font-family: 'Calibri', 'serif';"><?php echo $_SESSION['name'];?></h2>
        <h2>MANAGE PROGRAMME</h2><br>

        <div class="tableContainer">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S No</th>
                    <th>Programme Name</th>
                    <th>Programme Code</th>
                    <th>Programme Type</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                       $viewQuery = "SELECT * FROM programme WHERE Username = '$user' ORDER BY Prog_name";

                       $query1 = mysqli_query($connection, $viewQuery);
                    //    var_dump($query1);
                        if(mysqli_num_rows($query1)>0){
                           $i = 0;
                           while($data = $query1->fetch_assoc()){
                               $i++;
                               $programCode = $data['Prog_code'];
                               $programName = $data['Prog_name'];
                               $progType = $data['Prog_type'];
                              
                    ?>
                     <tr>
                     <td><?php echo $i;?></td>
                     <td><?php echo $programCode;?></td>
                     <td><?php echo $progType; ?></td>
                     <td><?php echo $programName; ?></td>
                     <td><a style='cursor: pointer;' href='editProgram.php?user=<?php echo $user;?>&progCode=<?php echo $programCode;?>' class='btn btn-secondary'>EDIT</a></td>
                     <td><form  method='GET' onsubmit="return confirm('Do you really want to Remove the Course?');" action='deleteProgram.php'><input type='hidden' name='progCode' value='<?php echo $programCode;?>'><button type='submit' class='btn btn-danger'>REMOVE</button></form></td>
                     </tr>

                    <?php
                           }
                        }else{
                            echo "<tr><td style='text-align: center;' colspan='6'>No Programme Added Till Now!</td></tr>";
                        }
                    ?>
                    <tr>
                      <td colspan="6" style="text-align: center"><a href="addProgramme.php" style="cursor: pointer;" class="btn btn-success">Add Programme</a>
            </td>
                    </tr>
                </tbody>
            </table>
        </div><br><br>
        <!-- Footer -->
        <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore(M.P.)</p>
        </footer>
    
    </body>

</html>