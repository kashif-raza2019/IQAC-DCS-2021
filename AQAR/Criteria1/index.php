<?php
    //---------------------NOT TO BE CHANGED------------------------------
    session_start();
    include('../../credential.php');
    // $adminname = $_SESSION['username'];
    // $name = $_SESSION['name'];

    /*
    
        Log tracker which saves Logs at criteria_iqac_log DB
    
    */
    //   $date = date_create();
    //   save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    
    /*
    
    --------------------------------------------------------------------
    
    */


    // Updating Time Zone to Local
        if(function_exists('date_default_timezone_set'))
            {
                date_default_timezone_set("Asia/Kolkata");
            }

        // Connection '$connection'
        // $connection = mysqli_connect($servername, $username, $password, $dbname);

        // If there is problem in connecting to MySQL Database.
        // if(!$connection){
        //     die('Error Connecting Database, Please try after sometime:<br />'.mysqli_connect_error());
        // }
        
        /* 
            --------------------------------------------------------------
                        Checking First & Last Date for 
                            checking deadlines.
        */
        $first = '';
        $last = '';
        $dateCheck = true;
        $todayDate = date("Y-m-d");
        // $getDateQuery = "SELECT * FROM deadline WHERE id = '7'";
        // $getStartDate = mysqli_query($connection, $getDateQuery);
        // while($row = $getStartDate->fetch_assoc()){
        //     $first = $row['startdate'];
        //     $last = $row['enddate'];
        // }

        // Checking the Form Filling Date is Available or Not
            if(($todayDate >= $first) && ($todayDate< $last)){
                $dateCheck = false;//If User have sufficient Date Time

            }else{
                $dateCheck = true;//if User is out of Time to fill this form
                echo "<script>alert('Date to Fill this Form is Over, Please contact to the Administrator!')</script>";
            }
        
        /* 
                            Date Checking Ends Here
            --------------------------------------------------------------

            Function to check if File Exists or Not at the given link!
            File Link Validator
        */
        
        function does_url_exists($url) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
            if ($code == 200) {
                $status = true;
            } else {
                $status = false;
            }
            curl_close($ch);
            return $status;
        }

        //----------------TEMPLATIZED FUNCTIONS ENDS HERE----------------------------------


        //  ******  WRITE FUNCTIONS HERE ******




    
    // If Session Failed or Expired
    // if(!isset($_SESSION['names'])){
    //     header("Location: ../homepage.php");  
    // }
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
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" href="../../assets/images/davvlogo.png">
    <title>Criteria I</title>
</head>
<body>
    <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            })
    </script>
    <!-- Top Heading Starts From Here -->
            <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
            <!-- Don't Remove ../../ it is inserted for two level ups in the directory! -->
                <img src="../../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
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
            <div class="noticeContainer">
            <h4><i class="fa fa-calendar"></i>
            <?php
                //   Notice Text
                if($dateCheck){
                    echo " Date to fill this Form is Over, Please Contact Administrator";
                }else{
                    echo " Please fill this form before last date i.e. ".$last." as delay may cause serious problems";
                }
            ?>
            </h4>
            </div>
    <!-- !!Heading Ends!! -->

    <!-- Main Criteria Heading -->
    <div class="criteriaTitle1">
       <h3>Criteria I - Curricular Aspects</h3>
    </div>
    <!-- Sub Criteria Headings -->
    <div class="criteriaTitle2">
       <h4>1.1 Curriculum Design and Development</h4>
    </div>

    <!-- Criteria Container -->
    <div class="containerForm">

        <!--

            1. For each question container it has class='questionContainer' and id='q###' where ### is the name of 
                Criteria 1.1.1 i.e. q111 (same in 'answerContainer' and id='ans###' class) which has question.
            2. Each Question has Six (6) parts containing i. top msgContainer class with its id msg### showing data saved 
                or changed success or error, ii. Image for Criteria Filled or Not Applicable or Unfilled, iii. Question 
                Name and Type i.e. 1.1.1 and QLM or QNM, iv. Question Text (Criteria ), v. Downside Arrow (font-awesome),
                vi. Question Sub Parts as provided in Data Template or Criteria Booklet
            3.  After every question it's answer part is there as class='answerContainer' with it's unique id = 'a###',
                containing either QLM type Form or QNM Type Table Form.

         -->
            <div id="q111" class="questionContainer">
                <p class="msgContainer" id="msg111"></p>
                <img
                    <?php 
                        
                        /*
                            Ajax Call to fetch data and if it exists in row 
                            Inserts Filled Image or Not Applicable or Unfilled as per the case.
                            Below are the links to getting the images
                            if for multi-table number of rows>0 count the rows and print for 
                            example below refer to 'echo-2' with temporary value $i=2 (Use if-else):

                            (../../assets/images/filled.png), (../../assets/images/unfilled.png), 
                            (../../assets/images/na.png) 
                            for example: 
                                echo "src='../../assets/images/filled.png'";(Which is used for idle state below)
                        */
                        echo "src='../../assets/images/filled.png'";
                        //echo-2
                        $i = 2;
                        echo "data-toggle='tooltip' data-placement='bottom' title='$i Filled'";
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>1.1.1</p>
                <p class="question">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    Write description in maximum of 500 words<br>
                    <b>File description</b>
                    <ul>
                        <li>Upload Additional information.</li>
                        <li>Link for Additional information</li>
                    </ul>
                </p>
            </div>
            <div class="answerContainer answerWithoutTable" id="a111">
                <!-- Form Starts from here for Criteria 1.1.1 with id f### -->
                    <form method="post" id="f111">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control description" rows="6" maxlength="550" placeholder="<?php echo "Text Here (Text in this placeholder)";?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" class="form-control link"placeholder="<?php echo "www.example.com/ (Link in this placeholder)";?>" autocomplete="off" required /><br>
                        <button type="submit" name="submit" class="btn btn-primary saveBtn" 
                            <?php
                                // For Enabling or Disabling Button
                                if($dateCheck){
                                    echo "disabled";
                                }else{
                                    echo "enabled";
                                }
                            ?>
                        required>Save</button>
                    </form>
                <!-- Form Ends Here for Criteria 1.1.1-->
            </div>
            <!-- New Metric Here -->

    </div>

    
    <!-- Script (MAIN) -->
    <script src="../main.js"></script>
    <!-- Bottom Section -->
    <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya, Indore (M.P.)</p>
	</footer><br>

    <!-- Back to Top Button -->
    <button onclick="topFunction()" id="topBtn" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fa fa-arrow-up" style="color: white;font-size: 20px;"></i></button>
        <script>
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

</body>
<?php //$connection->close();?>
</html>
