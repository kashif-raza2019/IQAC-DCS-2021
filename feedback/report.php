<?php
    session_start();
    $user = $_SESSION['username'];
    $deptName = $_SESSION['name'];
    include('../credential.php');
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

    $connection  = mysqli_connect($servername, $username, $password, $dbname);
?>
<!Doctype>
<html>
    <head>
        <title>Feedbacks Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstarp 4 Integration -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="../assets/images/davvlogo.png">
    </head>
    <body>
        <!-- Header Starts -->
        <header>
            <p><a href="../selection-page.php"><img src="../assets/images/davvlogo.png" height="100px" width="100px" style="margin: 10px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA</p>
            <h5 class="dcsSystem">Data Capturing System - 2021</h5>
        
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
        <div id="topLink">
            <a onclick="goBack()" class="backBtn"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            <h4 class="departmentName"><?php echo strtoupper($deptName);?></h4>
        </div>
        <!-- Header Ends -->

        <!-- MAIN CONTENT PAGE -->
        <h2 class="feedBackTitle">Feedbacks</h2>
        <div class="formWrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Feedback: Student (Female)</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_student_female_2021'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>
                    <tr>
                        <th>Feedback: Student (Male)</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_student_male_2021'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>
                    <tr>
                        <th>Feedback: Alumni</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_alumni'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>

                    <tr>
                        <th>Feedback: Faculty</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_teachers'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>
                    <tr>
                        <th>Feedback: Parents</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_parents'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>
                    <tr>
                        <th>Feedback: Hosteller</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_employer'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>
                    <tr>
                        <th>Feedback: Employer</th>
                        <th style="text-align: center;"><a  style="cursor: pointer" href="fetch-report.php?username=<?php echo $user;?>&table='feedback_hosteller'" class='btn btn-primary'>View & Analyse</a></th>
                    </tr>

                </thead>
            </table>
        </div><br>


        <!-- Footer -->
        <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p><br>
		</footer>
        <!-- JavaScript Integration -->
        <script>
        
        </script>
        <?php $connection->close();?>
    </body>

</html>