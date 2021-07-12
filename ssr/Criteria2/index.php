<?php 
    session_start();
      include('../../credential.php');
      $adminname = $_SESSION['username'];
      $name = $_SESSION['name'];
 
    //   inculde('../fetch_na.php');
      $date = date_create();
      save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    //   Updating Time Zone
      if(function_exists('date_default_timezone_set'))
        {
            date_default_timezone_set("Asia/Kolkata");
        }
        $first = '';
        $last = '';
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        $dateCheck = true;
        $todayDate = date("Y-m-d");
        $getDateQuery = "SELECT * FROM deadline WHERE id = '7'";
        $getStartDate = mysqli_query($connection, $getDateQuery);
        while($row = $getStartDate->fetch_assoc()){
        $first = $row['startdate'];
        $last = $row['enddate'];
        }
        //  Filled Unfilled Image Source
        // Filled/ Unfilled/NA images goes here
        $filled = '../../assets/images/filled.png';
        $unfilled = '../../assets/images/unfilled.png';
        $notapplicableimg = '../../assets/images/na.png';
        if(($todayDate >= $first) && ($todayDate< $last)){
        $dateCheck = false;//If User have sufficient Date Time
        // $alertString = "Hurry! Only Few Days Left to Fill this Form";

        }else{
        $dateCheck = true;//if User is out of Time to fill this form
        echo "<script>alert('Date to Fill this Form is Over, Please contact to the Administrator!')</script>";
        }
        
        // File Exists or not 
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
        // Assigning Variables
         $msg213 = '';
         $msg221 = '';
         $link221 = '';
         $ans221 = '';
         $get221 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_1 WHERE username = '$adminname'");
             while($ans = $get221->fetch_assoc()){
                $link221 = $ans['link'];
                $ans221 = $ans['description'];
             }
        $msg222 = '';
        $link222 = '';
        $msg223 = '';
        $msg224 = '';
        $msg231 = '';
        $msg232 = '';
        $msg233 = '';
        $msg234 = '';
        $msg235 = '';
        $link231 = '';
        $ans231 = '';
        $get231 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_1 WHERE username = '$adminname'");
            while($ans = $get231->fetch_assoc()){
               $link231 = $ans['link'];
               $ans231 = $ans['description'];
        }
        $link232 = '';
        $ans232 = '';
        $get232 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_2 WHERE username = '$adminname'");
            while($ans = $get232->fetch_assoc()){
               $link232 = $ans['link'];
               $ans232 = $ans['description'];
        }
        $link233 = '';
        $ans233 = '';
        $get233 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_3 WHERE username = '$adminname'");
            while($ans = $get233->fetch_assoc()){
               $link233 = $ans['link'];
               $ans233 = $ans['description'];
        }
        $link234 = '';
        $ans234 = '';
        $get234 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_4 WHERE username = '$adminname'");
            while($ans = $get234->fetch_assoc()){
               $link234 = $ans['link'];
               $ans234 = $ans['description'];
        }
        $msg236 = '';
        $link236 = '';
        $ans236= '';
        $get236 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_6 WHERE username = '$adminname'");
            while($ans = $get236->fetch_assoc()){
               $link236 = $ans['link'];
               $ans236 = $ans['description'];
        }



         
         if(isset($_POST['submit213'])){

            if($_SESSION['name'] == 'Directorate of Distance Education'){
                $year1 = $_POST['year1'];
                $year2 = $_POST['year2'];
                $year3 = $_POST['year3'];
                $year4 = $_POST['year4'];
                $year5 = $_POST['year5'];
                $fresh_enroll1  = $_POST['fresh_enroll1'];
                $fresh_enroll2  = $_POST['fresh_enroll1'];
                $fresh_enroll3  = $_POST['fresh_enroll1'];
                $fresh_enroll4  = $_POST['fresh_enroll1'];
                $fresh_enroll5  = $_POST['fresh_enroll1'];
                $nextsem1 = $_POST['next_sem_1'];
                $nextsem2 = $_POST['next_sem_2'];
                $nextsem3 = $_POST['next_sem_3'];
                $nextsem4 = $_POST['next_sem_4'];
                $nextsem5 = $_POST['next_sem_5'];
                $totalenroll1 = $_POST['total_enroll1'];
                $totalenroll2= $_POST['total_enroll2'];
                $totalenroll3= $_POST['total_enroll3'];
                $totalenroll4 = $_POST['total_enroll4'];
                $totalenroll5 = $_POST['total_enroll5'];
               //  
                $incdec1 = $_POST['inc_dec_1'];
                $incdec2 = $_POST['inc_dec_2'];
                $incdec3 = $_POST['inc_dec_3'];
                $incdec4 = $_POST['inc_dec_4'];
                $incdec5 = $_POST['inc_dec_5'];

                $getQuery = "SELECT*FROM ssr_m2_1_3 WHERE";
                $get = mysqli_query($connection, $getQuery);
                if(mysqli_num_rows($get)>0 && $_SESSION['name'] == 'Distance of Directorate Education'){
                    $updatequery ="UPDATE ssr_m2_1_3 SET  year1 = '$year1', year2 = '$year2', year3 = '$year3', year4 = '$year4', year5 = '$year5', fresh_enroll1 = '$fresh_enroll1', fresh_enroll2 = '$fresh_enroll2', fresh_enroll3 = '$fresh_enroll3', fresh_enroll4 = '$fresh_enroll4', fresh_enroll5 = '$fresh_enroll5', next_sem_1 = '$nextsem1', next_sem_2 = '$nextsem2', next_sem_3 = '$nextsem3', next_sem_4 = '$nextsem4', next_sem_5 = '$nextsem5', total_enroll1 = '$totalenroll1', total_enroll2 = '$totalenroll2', total_enroll3 = '$totalenroll3', total_enroll4 = '$totalenroll4', total_enroll5 = '$totalenroll5', inc_dec_1 = '$incdec1', inc_dec_2 = '$incdec2', inc_dec_3 = '$incdec3', inc_dec_4 = '$incdec4', inc_dec_5 = '$incdec5' WHERE username = '$adminname' ";   
                    $update = mysqli_query($connection, $updatequery);
                    if($update){
                        $msg213 = "<h5 style='text-align: center; color: green;'>Data Updated!</h5>";
                    }else{
                        $msg213 = "<h5 style='text-align: center; color: red;'>Error Updating Data</h5>";
                    }
                }else{
                    $insertquery = "INSERT INTO ssr_m2_1_3(username, year1, year2, year3, year4, year5, fresh_enroll1, fresh_enroll2, fresh_enroll3, fresh_enroll4, fresh_enroll5, next_sem_1, next_sem_2, next_sem_3, next_sem_4, next_sem_5, total_enroll) VALUES('$adminname', '$year1', '$year2', '$year3', '$year4', '$year5', '$fresh_enroll1', '$fresh_enroll2', '$fresh_enroll3','$fresh_enroll4', '$fresh_enroll5', '$nextsem1', '$nextsem2', '$nextsem3', '$nextsem4', '$nextsem5', '$totalenroll1', '$totalenroll2', '$totalenroll3', '$totalenroll4', '$totalenroll5')";
                    $insert = mysqli_query($connection, $insertquery);
                    if($insert){
                        $msg213 = "<h5 style='text-align: center; color: green;'>Data Saved Succesfully</h5>";

                    }else{
                        $msg213 = "<h5 style='text-align: center; color: red;'>Error Inserting Data</h5>";

                    }

                }
            }else{
                $msg213 = "<h5 style='text-align: center; color: red;'>You Are Not Allowed To Fill This Metric, Only to be filled by Directorate of Distance Education (DDE's).</h5>";

            }

         }else if(isset($_POST['submit221'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m2_2_1 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m2_2_1 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg221 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        $msg221 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m2_2_1 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg221 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        $msg221 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                    }
                }


            }else{
                $msg221 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
            }


         }else if(isset($_POST['submit222'])){
            $numberTeachers = $_POST['numberTeachers'];
            $numberStudents = $_POST['numberStudents'];
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m2_2_2 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m2_2_2 SET Full_Time_Students = '$numberStudents', Full_Time_Teachers = '$numberTeachers', Link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg221 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        $msg221 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m2_2_2 (username, Full_Time_Students, Full_Time_Teachers, link) VALUES('$adminname', '$numberStudents', '$numberTeachers', '$link')");
                    if($insert){
                        $msg222 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        $msg222 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                    }
                }


            }else{
                $msg222 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
            }


         }else if(isset($_POST['submit223'])){
            if($_SESSION['name'] == 'Directorate of Distance Education'){
                $year1 = $_POST['year1'];
                $year2 = $_POST['year2'];
                $year3 = $_POST['year3'];
                $year4 = $_POST['year4'];
                $year5 = $_POST['year5'];

                $numEmployed1 = $_POST['numEmployed1'];
                $numEmployed2 = $_POST['numEmployed2'];
                $numEmployed3 = $_POST['numEmployed3'];
                $numEmployed4 = $_POST['numEmployed4'];
                $numEmployed5 = $_POST['numEmployed5'];

                $numNotEmployed1 = $_POST['numNotEmployed1'];
                $numNotEmployed2 = $_POST['numNotEmployed2'];
                $numNotEmployed3 = $_POST['numNotEmployed3'];
                $numNotEmployed4 = $_POST['numNotEmployed4'];
                $numNotEmployed5 = $_POST['numNotEmployed5'];

                $numTotal1 = $_POST['numTotal1'];
                $numTotal2 = $_POST['numTotal2'];
                $numTotal3 = $_POST['numTotal3'];
                $numTotal4 = $_POST['numTotal4'];
                $numTotal5 = $_POST['numTotal5'];

                $getQuery = "SELECT*FROM ssr_m2_2_3 WHERE";
                $get = mysqli_query($connection, $getQuery);
                if(mysqli_num_rows($get)>0 && $_SESSION['name'] == 'Distance of Directorate Education'){
                    $updatequery ="UPDATE ssr_m2_2_3 SET Year_1 = '$year1', Number_of_Employed_learners_including_self_employed_Y1 = '$numEmployed1', Number_of_learners_who_are_not_employed_Y1 = '$numNotEmployed1', Total_number_of_learners_enrolled_Y1 = '$numTotal1', Year_2 = '$year2', Number_of_Employed_learners_including_self_employed_Y2 = '$numEmployed2', Number_of_learners_who_are_not_employed_Y2 = '$numNotEmployed2', Total_number_of_learners_enrolled_Y2 = '$numTotal2', Year_3 = '$year3', Number_of_Employed_learners_including_self_employed_Y3 = '$numEmployed3', Number_of_learners_who_are_not_employed_Y3 = '$numNotEmployed3', Total_number_of_learners_enrolled_Y3 = '$numTotal3', Year_4 = '$year4', Number_of_Employed_learners_including_self_employed_Y4 = '$numEmployed4', Number_of_learners_who_are_not_employed_Y4 = '$numNotEmployed4', Total_number_of_learners_enrolled_Y4 = '$numTotal4', Year_5 = '$year5', Number_of_Employed_learners_including_self_employed_Y5 = '$numEmployed5', Number_of_learners_who_are_not_employed_Y5 = '$numNotEmployed5', Total_number_of_learners_enrolled_Y5 = '$numTotal5'  WHERE username = '$adminname'";   
                    $update = mysqli_query($connection, $updatequery);
                    if($update){
                        $msg223 = "<h5 style='text-align: center; color: green;'>Data Updated!</h5>";
                    }else{
                        $msg223 = "<h5 style='text-align: center; color: red;'>Error Updating Data</h5>";
                    }
                }else{
                    $insertquery = "INSERT INTO ssr_m2_2_3(username, Year_1, Number_of_Employed_learners_including_self_employed_Y1	, Number_of_learners_who_are_not_employed_Y1, Total_number_of_learners_enrolled_Y1, Year_2, Number_of_Employed_learners_including_self_employed_Y2	, Number_of_learners_who_are_not_employed_Y2, Total_number_of_learners_enrolled_Y2, Year_3, Number_of_Employed_learners_including_self_employed_Y3	, Number_of_learners_who_are_not_employed_Y3, Total_number_of_learners_enrolled_Y3, Year_4, Number_of_Employed_learners_including_self_employed_Y4	, Number_of_learners_who_are_not_employed_Y4, Total_number_of_learners_enrolled_Y4, Year_5, Number_of_Employed_learners_including_self_employed_Y5	, Number_of_learners_who_are_not_employed_Y5, Total_number_of_learners_enrolled_Y5) VALUES('$adminname', '$year1', '$numEmployed1', '$numNotEmployed1', '$numTotal1', '$year2', '$numEmployed2', '$numNotEmployed2', '$numTotal2', '$year3', '$numEmployed3', '$numNotEmployed3', '$numTotal3', '$year4', '$numEmployed4', '$numNotEmployed4', '$numTotal4', '$year5', '$numEmployed5', '$numNotEmployed5', '$numTotal5' )";
                    $insert = mysqli_query($connection, $insertquery);
                    if($insert){
                        $msg223 = "<h5 style='text-align: center; color: green;'>Data Saved Succesfully</h5>";

                    }else{
                        $msg223 = "<h5 style='text-align: center; color: red;'>Error Inserting Data</h5>";

                    }

                }
            }else{
                $msg223 = "<h5 style='text-align: center; color: red;'>You Are Not Allowed To Fill This Metric, Only to be filled by Directorate of Distance Education (DDE's).</h5>";

            }


         }else if(isset($_POST['submit224'])){
            if($_SESSION['name'] == 'Directorate of Distance Education'){
                $year1 = $_POST['year1'];
                $year2 = $_POST['year2'];
                $year3 = $_POST['year3'];
                $year4 = $_POST['year4'];
                $year5 = $_POST['year5'];

                $numSpecial1 = $_POST['numSpecial1'];
                $numSpecial2 = $_POST['numSpecial2'];
                $numSpecial3 = $_POST['numSpecial3'];
                $numSpecial4 = $_POST['numSpecial4'];
                $numSpecial5 = $_POST['numSpecial5'];


                $numTotal1 = $_POST['numTotal1'];
                $numTotal2 = $_POST['numTotal2'];
                $numTotal3 = $_POST['numTotal3'];
                $numTotal4 = $_POST['numTotal4'];
                $numTotal5 = $_POST['numTotal5'];

                $getQuery = "SELECT*FROM ssr_m2_2_4 WHERE";
                $get = mysqli_query($connection, $getQuery);
                if(mysqli_num_rows($get)>0 && $_SESSION['name'] == 'Distance of Directorate Education'){
                    $updatequery ="UPDATE ssr_m2_2_4 SET Year_1 = '$year1', Number_Learners_1 = '$numSpecial1', Total_Number_Students_1 = '$numTotal1', Year_2 = '$year2', Number_Learners_2 = '$numSpecial2', Total_Number_Students_2 = '$numTotal2', Year_3 = '$year3', Number_Learners_3 = '$numSpecial3', Total_Number_Students_3 = '$numTotal3', Year_4 = '$year4', Number_Learners_4 = '$numSpecial4', Total_Number_Students_4 = '$numTotal4', Year_5 = '$year5', Number_Learners_5 = '$numSpecial5', Total_Number_Students_5 = '$numTotal5'  WHERE username = '$adminname'";   
                    $update = mysqli_query($connection, $updatequery);
                    if($update){
                        $msg224 = "<h5 style='text-align: center; color: green;'>Data Updated!</h5>";
                    }else{
                        $msg224 = "<h5 style='text-align: center; color: red;'>Error Updating Data</h5>";
                    }
                }else{
                    $insertquery = "INSERT INTO ssr_m2_2_4(username, Year_1, Number_Learners_1, Total_Number_Students_1, Year_2, Number_Learners_2, Total_Number_Students_2, Year_3, Number_Learners_3, Total_Number_Students_3, Year_4, Number_Learners_4, Total_Number_Students_4, Year_5, Number_Learners_5, Total_Number_Students_5) VALUES('$adminname', '$year1', '$numSpecial1', '$numTotal1', '$year2', '$numSpecial2', '$numTotal2', '$year3', '$numSpecial3', '$numTotal3', '$year4', '$numSpecial4', '$numTotal4', '$year5', '$numSpecial5', '$numTotal5')";
                    $insert = mysqli_query($connection, $insertquery);
                    if($insert){
                        $msg224 = "<h5 style='text-align: center; color: green;'>Data Saved Succesfully</h5>";

                    }else{
                        $msg224 = "<h5 style='text-align: center; color: red;'>Error Inserting Data</h5>";

                    }

                }
            }else{
                $msg224 = "<h5 style='text-align: center; color: red;'>You Are Not Allowed To Fill This Metric, Only to be filled by Directorate of Distance Education (DDE's).</h5>";

            }


         }else if(isset($_POST['submit231'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m2_3_1 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m2_3_1 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg231 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        $msg231 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m2_3_1 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg231 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        $msg231 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                    }
                }


            }else{
                $msg231 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
            }


         }else if(isset($_POST['submit232'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m2_3_2 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m2_3_2 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg232 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        $msg232 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m2_3_2 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg232 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        $msg232 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                    }
                }


            }else{
                $msg232 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
            }


         }else if(isset($_POST['submit234'])){
            if($name != 'Directorate of Distance Education'){
                $msg234 = "<h5 style='color: red;text-align: center;'>You Are Not Allowed To Fill This Criteria</h5>";
            }else{
                $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
                $link = $_POST['doclink'];
                if(does_url_exists($link)){
                    // echo "<script>alert('Horrah!')</script>";
                    $checkDataQuery = "SELECT*FROM ssr_m2_3_4 WHERE username = '$adminname'";
                    $checkData = mysqli_query($connection, $checkDataQuery);
                    if(mysqli_num_rows($checkData)>0){
                        $update = mysqli_query($connection, "UPDATE ssr_m2_3_4 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                        if($update){
                            $msg234 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                        }else{
                            $msg234 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                        }
                    }else{
                        $insert = mysqli_query($connection, "INSERT INTO ssr_m2_3_4 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                        if($insert){
                            $msg234 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                        }else{
                            var_dump($insert);
                            $msg234 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                        }
                    }
    
    
                }else{
                    $msg234 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
                }
    
            }
         }else if(isset($_POST['submit235'])){
            if($_SESSION['name'] == 'Directorate of Distance Education'){
                $year1 = $_POST['year1'];
                $year2 = $_POST['year2'];
                $year3 = $_POST['year3'];
                $year4 = $_POST['year4'];
                $year5 = $_POST['year5'];

                $numPrograms1 = $_POST['numPrograms1'];
                $numPrograms2 = $_POST['numPrograms2'];
                $numPrograms3 = $_POST['numPrograms3'];
                $numPrograms4 = $_POST['numPrograms4'];
                $numPrograms5 = $_POST['numPrograms5'];


                $numTotal1 = $_POST['numTotal1'];
                $numTotal2 = $_POST['numTotal2'];
                $numTotal3 = $_POST['numTotal3'];
                $numTotal4 = $_POST['numTotal4'];
                $numTotal5 = $_POST['numTotal5'];

                $getQuery = "SELECT*FROM ssr_m2_3_5 WHERE";
                $get = mysqli_query($connection, $getQuery);
                if(mysqli_num_rows($get)>0 && $_SESSION['name'] == 'Distance of Directorate Education'){
                    $updatequery ="UPDATE ssr_m2_3_5 SET Year_1 = '$year1', Programmes_with_digitized_content_Year_1= '$numPrograms1', Total_Programmes_Year_1 = '$numTotal1', Year_2 = '$year2', Programmes_with_digitized_content_Year_2= '$numPrograms2', Total_Programmes_Year_2 = '$numTotal2', Year_3 = '$year3', Programmes_with_digitized_content_Year_3= '$numPrograms3', Total_Programmes_Year_3 = '$numTotal3', Year_4 = '$year4', Programmes_with_digitized_content_Year_4= '$numPrograms4', Total_Programmes_Year_4 = '$numTotal4', Year_5 = '$year5', Programmes_with_digitized_content_Year_5= '$numPrograms5', Total_Programmes_Year_5 = '$numTotal5'  WHERE username = '$adminname'";   
                    $update = mysqli_query($connection, $updatequery);
                    if($update){
                        $msg235 = "<h5 style='text-align: center; color: green;'>Data Updated!</h5>";
                    }else{
                        $msg235 = "<h5 style='text-align: center; color: red;'>Error Updating Data</h5>";
                    }
                }else{
                    $insertquery = "INSERT INTO ssr_m2_3_5(username, Year_1, Programmes_with_digitized_content_Year_1, Total_Programmes_Year_1, Year_2, Programmes_with_digitized_content_Year_2, Total_Programmes_Year_2, Year_3, Programmes_with_digitized_content_Year_3, Number_Learners_3, Total_Programmes_Year_3, Year_4, Programmes_with_digitized_content_Year_4, Total_Programmes_Year_4, Year_5, Programmes_with_digitized_content_Year_5, Total_Programmes_Year_5) VALUES('$adminname', '$year1', '$numPrograms1', '$numTotal1', '$year2', '$numPrograms2', '$numTotal2', '$year3', '$numPrograms3', '$numTotal3', '$year4', '$numPrograms4', '$numTotal4', '$year5', '$numPrograms5', '$numTotal5')";
                    $insert = mysqli_query($connection, $insertquery);
                    if($insert){
                        $msg235 = "<h5 style='text-align: center; color: green;'>Data Saved Succesfully</h5>";

                    }else{
                        $msg235 = "<h5 style='text-align: center; color: red;'>Error Inserting Data</h5>";

                    }

                }
            }else{
                $msg235 = "<h5 style='text-align: center; color: red;'>You Are Not Allowed To Fill This Metric, Only to be filled by Directorate of Distance Education (DDE's).</h5>";

            }


         }else if(isset($_POST['submit236'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m2_3_6 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m2_3_6 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg236 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        $msg236 = "<h5 style='color: red;text-align: center;'>Error Updating Data</h5>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m2_3_6 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg236 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        $msg236 = "<h5 style='color: red;text-align: center;'>Error Inserting Data</h5>";
                    }
                }


            }else{
                $msg236 = "<h5 style='color: red;text-align: center;'>Incorrect Link, Please Check Again!</h5>";
            }


         }

    

    if(!isset($_SESSION['names'])){
        // header("Location: ../homepage.php");  
    }
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
    <link rel="icon" href="../../assets/images/davvlogo.png">
    <title>Criteria II</title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            })
        </script>
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
    <div class="criteriaTitle1">
       <h3>Criteria II - Teaching-Learning and Evaluation</h3>
    </div>
    <div class="criteriaTitle2">
       <h4>2.1 Student Enrolment and Profile</h4>
    </div>

        <!-- Metric 2.1.1 -->
                <div id="q211" class="questionContainer">
                <p class="msgContainer" id="msg211"></p>
                <img
                    <?php 
                       $queryCheck211  = "SELECT*FROM ssr_m2_1_1 WHERE username = '$adminname'";
                       $query211 = mysqli_query($connection, $queryCheck211);
                       if(mysqli_num_rows($query211)>0){
                           $n = mysqli_num_rows($query211);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query211) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.1.1</p>
                <p class="question">
                Number of seats available year wise during the last five years. 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Number of seats available in all the Programmes</li>
                    <li>Any additional information</li>
                    <li>Total number of eligible applications received</li>
                    <li>Total number of Seats filled against sanctioned seats</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a211">
                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 1</h3>
                        <form id="f211Y1">
                        <table class="table table-bordered" id="table211Y1">
                           <thead>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Number of seats available/ sanctioned</th>
                             <th>Number of eligible applications received</th>
                             <th>Number of Students admitted</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                              <?php
                                $query = "SELECT * FROM ssr_m2_1_1 WHERE username = '$adminname' and yearCollage = 'Y1'";
                                $getData = mysqli_query($connection, $query);
                                if(mysqli_num_rows($getData) == 0){
                                    echo "<tr><td colspan = '6' style='text-align: center'>No Previous Data Available</td></tr>";
                                }else{
                                    while($res = $getData->fetch_assoc()){
                                          $id = $res['id'];
                                          $pcode = strtoupper($res['programCode']);
                                          $pname = strtoupper($res['programName']);
                                          $numberSeats = $res['numberSeats'];
                                          $numberEligible = $res['numberEligible'];
                                          $numberAdmit = $res['numberAdmit'];
                                          echo "<tr><td>$pcode</td><td>$pname</td><td>$numberSeats</td><td>$numberEligible</td><td>$numberAdmit</td><td><a href='delete211.php?id=$id' class='btn btn-danger' >Delete</a></td></tr>";
                                    }
                                }
                              ?>
                           </tbody>
                        </table><br>
                        <p id="msg211_1"></p>
                        <button id="addRow211Y1" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save211Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 2</h3>
                        <form id="f211Y2">
                        <table class="table table-bordered" id="table211Y2">
                           <thead>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Number of seats available/ sanctioned</th>
                             <th>Number of eligible applications received</th>
                             <th>Number of Students admitted</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                           <?php
                                $query = "SELECT * FROM ssr_m2_1_1 WHERE username = '$adminname' and yearCollage = 'Y2'";
                                $getData = mysqli_query($connection, $query);
                                if(mysqli_num_rows($getData) == 0){
                                    echo "<tr><td colspan = '6' style='text-align: center'>No Previous Data Available</td></tr>";
                                }else{
                                    while($res = $getData->fetch_assoc()){
                                          $id = $res['id'];
                                          $pcode = strtoupper($res['programCode']);
                                          $pname = strtoupper($res['programName']);
                                          $numberSeats = $res['numberSeats'];
                                          $numberEligible = $res['numberEligible'];
                                          $numberAdmit = $res['numberAdmit'];
                                          echo "<tr><td>$pcode</td><td>$pname</td><td>$numberSeats</td><td>$numberEligible</td><td>$numberAdmit</td><td><a href='delete211.php?id=$id' class='btn btn-danger' >Delete</a></td></tr>";
                                    }
                                }
                              ?>

                           </tbody>
                        </table><br>
                        <p id="msg211_2"></p>
                        <button id="addRow211Y2" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save211Y2" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 3</h3>
                        <form id="f211Y3">
                        <table class="table table-bordered" id="table211Y3">
                           <thead>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Number of seats available/ sanctioned</th>
                             <th>Number of eligible applications received</th>
                             <th>Number of Students admitted</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                           <?php
                                $query = "SELECT * FROM ssr_m2_1_1 WHERE username = '$adminname' and yearCollage = 'Y3'";
                                $getData = mysqli_query($connection, $query);
                                if(mysqli_num_rows($getData) == 0){
                                    echo "<tr><td colspan = '6' style='text-align: center'>No Previous Data Available</td></tr>";
                                }else{
                                    while($res = $getData->fetch_assoc()){
                                          $id = $res['id'];
                                          $pcode = strtoupper($res['programCode']);
                                          $pname = strtoupper($res['programName']);
                                          $numberSeats = $res['numberSeats'];
                                          $numberEligible = $res['numberEligible'];
                                          $numberAdmit = $res['numberAdmit'];
                                          echo "<tr><td>$pcode</td><td>$pname</td><td>$numberSeats</td><td>$numberEligible</td><td>$numberAdmit</td><td><a href='delete211.php?id=$id' class='btn btn-danger' >Delete</a></td></tr>";
                                    }
                                }
                              ?>

                           </tbody>
                        </table><br>
                        <p id="msg211_3"></p>
                        <button id="addRow211Y3" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save211Y3" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 4</h3>
                        <form id="f211Y4">
                        <table class="table table-bordered" id="table211Y4">
                           <thead>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Number of seats available/ sanctioned</th>
                             <th>Number of eligible applications received</th>
                             <th>Number of Students admitted</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                           <?php
                                $query = "SELECT * FROM ssr_m2_1_1 WHERE username = '$adminname' and yearCollage = 'Y4'";
                                $getData = mysqli_query($connection, $query);
                                if(mysqli_num_rows($getData) == 0){
                                    echo "<tr><td colspan = '6' style='text-align: center'>No Previous Data Available</td></tr>";
                                }else{
                                    while($res = $getData->fetch_assoc()){
                                          $id = $res['id'];
                                          $pcode = strtoupper($res['programCode']);
                                          $pname = strtoupper($res['programName']);
                                          $numberSeats = $res['numberSeats'];
                                          $numberEligible = $res['numberEligible'];
                                          $numberAdmit = $res['numberAdmit'];
                                          echo "<tr><td>$pcode</td><td>$pname</td><td>$numberSeats</td><td>$numberEligible</td><td>$numberAdmit</td><td><a href='delete211.php?id=$id' class='btn btn-danger' >Delete</a></td></tr>";
                                    }
                                }
                              ?>

                           </tbody>
                        </table><br>
                        <p id="msg211_4"></p>
                        <button id="addRow211Y4" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save211Y4" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 5</h3>
                        <form id="f211Y5">
                        <table class="table table-bordered" id="table211Y5">
                           <thead>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Number of seats available/ sanctioned</th>
                             <th>Number of eligible applications received</th>
                             <th>Number of Students admitted</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                           <?php
                                $query = "SELECT * FROM ssr_m2_1_1 WHERE username = '$adminname' and yearCollage = 'Y5'";
                                $getData = mysqli_query($connection, $query);
                                if(mysqli_num_rows($getData) == 0){
                                    echo "<tr><td colspan = '6' style='text-align: center'>No Previous Data Available</td></tr>";
                                }else{
                                    while($res = $getData->fetch_assoc()){
                                          $id = $res['id'];
                                          $pcode = strtoupper($res['programCode']);
                                          $pname = strtoupper($res['programName']);
                                          $numberSeats = $res['numberSeats'];
                                          $numberEligible = $res['numberEligible'];
                                          $numberAdmit = $res['numberAdmit'];
                                          echo "<tr><td>$pcode</td><td>$pname</td><td>$numberSeats</td><td>$numberEligible</td><td>$numberAdmit</td><td><a href='delete211.php?id=$id' class='btn btn-danger' >Delete</a></td></tr>";
                                    }
                                }
                              ?>

                           </tbody>
                        </table><br>
                        <p id="msg211_5"></p>
                        <button id="addRow211Y5" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save211Y5" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

                        


              
    </div>
            <!-- Metric 2.1.2 -->
            <div id="q212" class="questionContainer">
                <p class="msgContainer" id="msg212"></p>
                <img
                    <?php 
                       $queryCheck212  = "SELECT*FROM ssr_m2_1_2 WHERE username = '$adminname'";
                       $query212 = mysqli_query($connection, $queryCheck212);
                       if(mysqli_num_rows($query212)>0){
                           $n = mysqli_num_rows($query212);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query212) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.1.2</p>
                <p class="question">
                Average percentage of seats filled against reserved categories 
                (SC, ST, OBC, Divyangjan, etc.) as per applicable reservation policy 
                during the last five years (Excluding Supernumerary Seats).
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Total number of seats earmarked for reserved category as per GOI or State Government rule</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a212">
                        <form id="f212">
                        <table class="table table-bordered" id="table212">
                           <thead>
                            <tr>
                             <th>Year</th>
                             <th colspan="4">Number of seats earmarked for reserved category as per GOI or State Government rule</th>
                             <th colspan="4">Number of students admitted from the reserve category</th>
                             <th>Update</th>
                            </tr>
                            <tr>
                              <th></th>
                              <th>SC</th>
                              <th>ST</th>
                              <th>OBC</th>
                              <th>Others</th>
                              <th>SC</th>
                              <th>ST</th>
                              <th>OBC</th>
                              <th>Others</th>
                              <th></th>
                            </tr>

                           </thead>
                           <tbody>
                              <?php
                                $query = "SELECT * FROM ssr_m2_1_2 WHERE username = '$adminname'";
                                $getData = mysqli_query($connection, $query);
                                     while($res = $getData->fetch_assoc()){
                                         $id = $res['id'];
                                         $year = $res['year'];
                                         $reserve_sc = $res['reserve_sc'];
                                         $reserve_st = $res['reserve_st'];
                                         $reserve_obc = $res['reserve_obc'];
                                         $reserve_other = $res['reserve_other'];
                                         $admit_sc = $res['admit_sc'];
                                         $admit_st = $res['admit_st'];
                                         $admit_obc = $res['admit_obc'];
                                         $admit_other = $res['admit_other'];
                                         echo "<tr><td>$year</td><td>$reserve_sc</td><td>$reserve_st</td><td>$reserve_obc</td><td>$reserve_other</td><td>$admit_sc</td><td>$admit_st</td><td>$admit_obc</td><td>$admit_other</td><td><a href='delete212.php?id=$id' class='btn btn-danger'>Delete</a></td></tr>";
                                     }
                              ?>
                           </tbody>
                        </table><br>
                        <button id="addRow212" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save212" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count212 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow212').on('click', function () {
                      count212++;
                      var output = "<tr id='row"+count212+"'><td ><input type='number' class='form-control year' required/></td>";
                      output+= "<td><input type='number' class='form-control reserve_sc'  required/></td>";
                      output+= "<td><input type='number' class='form-control reserve_st' required /></td>";
                      output+= "<td><input type='number' class='form-control reserve_obc'  required/></td>";
                      output+= "<td><input type='number' class='form-control reserve_other'  required/></td>";
                      output+= "<td><input type='number' class='form-control admit_sc'  required/></td>";
                      output+= "<td><input type='number' class='form-control admit_st'  required/></td>";
                      output+= "<td><input type='number' class='form-control admit_obc'  required/></td>";
                      output+= "<td><input type='number' class='form-control admit_other'  required/></td>";
                      output+= "<td><input type='button' class='btn btn-danger delete' value='Delete'data-toggle='tooltip' data-row='row"+count212+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output+= "</tr>";
                      tableBody = $("#table212 tbody");
                      tableBody.append(output);             
                    });

                    $("#table212 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f212").on("submit", function(event){
                    var year = [];
                    var reserve_sc = [];
                    var reserve_st = [];
                    var reserve_obc= [];
                    var reserve_other = [];
                    var admit_sc = [];
                    var admit_st = [];
                    var admit_obc = [];
                    var admit_other = [];
                     event.preventDefault();
                    $('.year').each(function(){
                        year.push($(this).val());
                    });
                    $('.reserve_sc').each(function(){
                        reserve_sc.push($(this).val());
                    });
                    $('.reserve_st').each(function(){
                        reserve_st.push($(this).val());
                    });
                    $('.reserve_obc').each(function(){
                        reserve_obc.push($(this).val());
                    });
                    $('.reserve_other').each(function(){
                        reserve_other.push($(this).val());
                    });
                    $('.admit_sc').each(function(){
                        admit_sc.push($(this).val());
                    });
                    $('.admit_st').each(function(){
                        admit_st.push($(this).val());
                    });
                    $('.admit_obc').each(function(){
                        admit_obc.push($(this).val());
                    });
                    $('.admit_other').each(function(){
                        admit_other.push($(this).val());
                    });

                
                    $.ajax({
                        url: "save212.php",
                        method:"POST",
                        data: {year: year, reserve_sc: reserve_sc,reserve_st: reserve_st , reserve_obc: reserve_obc, reserve_other: reserve_other, admit_sc: admit_sc, admit_st: admit_st, admit_obc: admit_obc, admit_other: admit_other},
                        success: function(){
                            $("#msg212").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg212").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
                <!-- Metric 2.1.3 DDE ONLY -->
                <div id="q213" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                <?php 
                      $check213 = mysqli_query($connection, "SELECT*FROM ssr_m2_1_3 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check213);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.1.3</p>
                <p style="text-align: center;"><?php echo $msg213;?></p>
                <p class="question">
                <b>Increase in the enrolment at DDE</b>
                Average percentage increase in the enrolment of learners in the DDE year wise over the last five years 
                Number of increase in the enrolment of learners in the DDE year wise over the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br><br><br>
                    <ul style="list-style-type: none;">
                    <li>*Admission into 2nd year (3rd semester & 4th semester) / 3rd year (5th& 6th semester) for UG level learners</li>
                    <li>*Admission into 2nd year (3rd semester & 4th semester) for PG level learners</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a213">
                        <form method = "POST">
                        <table class="table table-bordered" id="table213">
                           <tbody>
                              <tr>
                                  <th scope="row" style="text-align: center;">Year</th>
                                  <td><select name="year1" class="form-control" id="year1" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year2" class="form-control" id="year2" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year3" class="form-control" id="year3" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year4" class="form-control" id="year4" required>
                                      <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year5" class="form-control" id="year5" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Fresh Enrolment</th>
                                  <td><input type="number" class="form-control" name="fresh_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">*Admission into next semester (re-registration)</th>
                                  <td><input type="number" class="form-control" name="next_sem_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Total enrolment</th>
                                  <td><input type="number" class="form-control" name="total_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Increase / Decrease over preceding academic year</th>
                                  <td><input type="number" class="form-control" name="inc_dec_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_5" placeholder="<?php ?>" required/></td>
                              </tr>


                           </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit213" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
      </div><br>
      <div class="criteriaTitle2">
       <h4>2.1 Catering to Student Diversity</h4>
      </div><br>
      <!-- Metric 2.2.1 -->
      <form method="post">
                <div id="q221" class="questionContainer">
                <p class="msgContainer"><?php echo $msg221;?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m2_2_1 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.2.1</p>
                <p class="question">
                The institution assesses the learning levels of the students and organises special Programmes 
                for advanced learners and slow learners.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a221">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans221;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link221;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit221" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
      <!-- Metric 2.2.2 -->
      <form method="post">
                <div id="q222" class="questionContainer">
                <p class="msgContainer"><?php echo $msg222;?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m2_2_2 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.2.2</p>
                <p class="question">
                 <b>Student - Full time Teacher ratio (Data for the latest completed academic year)</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Total number of students enrolled in the institution.</li><br>
                    <li>Total number of full time teachers in the institution.</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a222">
                     <?php
                        $getQuery = "SELECT*FROM ssr_m2_2_2 WHERE username = '$adminname'";
                        $get = mysqli_query($connection, $getQuery);
                        $getData = mysqli_fetch_assoc($get);
                        $students = $getData['Full_Time_Students'];
                        $teachers = $getData['Full_Time_Teachers'];
                        $documentLink = $getData['Link'];
                     
                     ?>
                        <label for="numberTeachers">Total number of students enrolled in the institution</label>
                        <input type="number" name="numberTeachers" class="form-control" placeholder = '<?php echo $students;?>' required/><br>
                        <label for="numberStudents">Total number of full time teachers in the institution.</label>
                        <input type="number" name="numberStudents" class="form-control" placeholder = '<?php echo $teachers;?>' required/><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $documentLink;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit222" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>

        <!-- Metric 2.2.3 DDE ONLY -->
            <div id="q223" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                <?php 
                      $check223 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_3 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check223);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.2.3</p>
                <p style="text-align: center;"><?php echo $msg223;?></p>
                <p class="question">
                <b>DDE reaching out to employed persons</b>
                Average percentage of the enrolled learners at DDE who are employed year wise over the last five years 
                Number of are employed learners at DDE year wise over the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                </p>
                </div>
                    <div class="answerContainer" id="a223">
                        <form method = "POST">
                        <table class="table table-bordered" id="table223">
                           <thead>
                              <tr>
                                <th>Year</th>
                                <th>Number of Employed learners including self-employed </th>
                                <th>Number of learners who are not employed</th>
                                <th>Total number of learners enrolled</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  
                                <td>
                                   <select name="year1" class="form-control" id="select223_1">
                                     <option value="0">YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numEmployed1" class="form-control" required/></td>
                                <td><input type="number" name="numNotEmployed1" class="form-control" required/></td>
                                <td><input type="number" name="numTotal1" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year2" class="form-control"  id="select223_2">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numEmployed2" class="form-control" required/></td>
                                <td><input type="number" name="numNotEmployed2" class="form-control" required/></td>
                                <td><input type="number" name="numTotal2" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year3" class="form-control" id="select223_3">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numEmployed3" class="form-control" required/></td>
                                <td><input type="number" name="numNotEmployed3" class="form-control" required/></td>
                                <td><input type="number" name="numTotal3" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year4" class="form-control" id="select223_4">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numEmployed4" class="form-control" required/></td>
                                <td><input type="number" name="numNotEmployed4" class="form-control" required/></td>
                                <td><input type="number" name="numTotal4" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year5" class="form-control" id="select223_5">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numEmployed5" class="form-control" required/></td>
                                <td><input type="number" name="numNotEmployed5" class="form-control" required/></td>
                                <td><input type="number" name="numTotal5" class="form-control" required/></td>
                              </tr>

                            </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit223" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
      </div>

        <!-- Metric 2.2.4 DDE ONLY -->
        <div id="q224" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                <?php 
                      $check224 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_4 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check224);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.2.4</p>
                <p style="text-align: center;"><?php echo $msg224;?></p>
                <p class="question">
                <b>DDE reaching out to employed persons</b>
                Average percentage of the enrolled learners at DDE who are employed year wise over the last five years 
                Number of are employed learners at DDE year wise over the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                </p>
                </div>
                    <div class="answerContainer" id="a224">
                        <form method = "POST">
                        <table class="table table-bordered" id="table224">
                           <thead>
                              <tr>
                                <th>Year</th>
                                <th>Number of learners from special target groups enrolled at DDE</th>
                                <th>Total number of learners enrolled</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  
                                <td>
                                   <select name="year1" class="form-control" id="select224_1">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numSpecial1" class="form-control" required/></td>
                                <td><input type="number" name="numTotal1" class="form-control" required/></td>
                              </tr>
                              <tr>  
                              <td>
                                   <select name="year2" class="form-control" id="select224_2">
                                     <option value="0">YEAR</option>
                                     <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numSpecial2" class="form-control" required/></td>
                                <td><input type="number" name="numTotal2" class="form-control" required/></td>
                              </tr>
                              <tr>  
                              <td>
                                   <select name="year3" class="form-control" id="select224_3">
                                     <option value="0">YEAR</option>
                                     <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numSpecial3" class="form-control" required/></td>
                                <td><input type="number" name="numTotal3" class="form-control" required/></td>
                              </tr>
                              <tr>  
                              <td>
                                   <select name="year4" class="form-control" id="select224_4">
                                     <option value="0">YEAR</option>
                                     <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numSpecial4" class="form-control" required/></td>
                                <td><input type="number" name="numTotal4" class="form-control" required/></td>
                              </tr>
                              <tr>  
                              <td>
                                   <select name="year5" class="form-control" id="select224_5">
                                     <option value="0">YEAR</option>
                                     <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numSpecial5" class="form-control" required/></td>
                                <td><input type="number" name="numTotal5" class="form-control" required/></td>
                              </tr>

                            </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit224" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
        </div><br>

        <div class="criteriaTitle2">
            <h4>2.3 Teaching - Learning Process </h4>
        </div><br>

            <!-- Metric 2.3.1  QLM-->
        <form method="post">
                <div id="q231" class="questionContainer">
                <p class="msgContainer"><?php echo $msg231;?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m2_3_1 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.3.1</p>
                <p class="question">
                Student centric methods, such as experiential learning, participative learning and problem solving 
                methodologies are used for enhancing learning experiences.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Any Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a231">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans231;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link231;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit231" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
        <!-- Metric 2.3.2 -->
        <form method="post">
                <div id="q232" class="questionContainer">
                <p class="msgContainer"><?php echo $msg232;?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m2_3_2 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.3.2</p>
                <p class="question">
                Teachers use ICT enabled tools including online resources for effective teaching and learning processes.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Any Additional information.</li>
                    <li>Provide link for webpage describing the " LMS/ Academic management system"</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a232">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans232;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link232;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit232" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>

        <!-- Metric 2.3.3 -->
        <form method="post" action="save233.php" enctype="multipart/form-data">
                <div id="q233" class="questionContainer">
                <p class="msgContainer"><?php echo $msg233;?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m2_3_3 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.3.3</p>
                <p class="question">
                Ratio of students to mentor for academic and other related issues (Data for the latest completed academic year data).
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload year wise, number of students enrolled and full time teachers on roll.</li>
                    <li>Circulars pertaining to assigning mentors to mentees mentor/mentee ratio</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a233">
                        <label for="answer">Description</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans233;?>" required></textarea><br>
                        <input type="file" name="file" class="form-control" style="width: 300px; margin: 10px;" required/>
                        <input type="submit" name="submit233" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>

        <!-- Metric 2.3.4 -->
        <form method="post">
                <div id="q234" class="questionContainer ddeOnly">
                <p class="msgContainer"><?php echo $msg234;?></p>
                <img
                    <?php 
                      $check234 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_4 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check234);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.3.4</p>
                <p class="question">
                Development of Self-Learning Material (SLM) at DDE.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Any Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a234">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans234;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link234;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit234" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>

        <!-- Metric 2.3.5 DDE ONLY -->
        <div id="q235" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                <?php 
                      $check235 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_5 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check235);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.3.5</p>
                <p style="text-align: center;"><?php echo $msg235;?></p>
                <p class="question">
                Average percentage of the learning material of the DDE digitized and the SLMs uploaded on the website / Online Repository/ e-content app / LMS for 
                their availability to the learners year wise over the last five years. <br>
                Number of learning material of the DDE digitized and the SLMs uploaded on the website / Online Repository/ e-content app / 
                LMS for their availability to the learners year wise over the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                </p>
                </div>
                    <div class="answerContainer" id="a235">
                        <form method = "POST">
                        <table class="table table-bordered" id="table235">
                           <thead>
                              <tr>
                                <th>Year</th>
                                <th>Total number of Programmes for which the digitized content is available at DDE for the learners</th>
                                <th>Total number of Programmes on offer</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  
                                <td>
                                   <select name="year1" class="form-control" id="select235_1">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numPrograms1" class="form-control" required/></td>
                                <td><input type="number" name="numTotal1" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year2" class="form-control" id="select235_2">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numPrograms2" class="form-control" required/></td>
                                <td><input type="number" name="numTotal2" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year3" class="form-control" id="select235_3">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numPrograms3" class="form-control" required/></td>
                                <td><input type="number" name="numTotal3" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year4" class="form-control" id="select235_4">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numPrograms4" class="form-control" required/></td>
                                <td><input type="number" name="numTotal4" class="form-control" required/></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="year5" class="form-control" id="select235_5">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="numPrograms5" class="form-control" required/></td>
                                <td><input type="number" name="numTotal5" class="form-control" required/></td>
                              </tr>
                            </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit235" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
        </div>
        <!-- Metric 2.3.6 -->
        <form method="post">
                <div id="q236" class="questionContainer ddeOnly">
                <p class="msgContainer"><?php echo $msg236;?></p>
                <img
                    <?php 
                      $check236 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_6 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check236);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.3.6</p>
                <p class="question">
                 <b>Mechanism to provide academic counselling support at DDE</b><br>
                    A mechanism is in place at DDE to provide academic counselling support to
                    learners enrolled in different programmes including strategies for learner
                    participation and engagement as well as development of required competencies and
                    skills.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <b>Provide web-link to</b><br>
                    <ul><br>
                    <li>Schedules of different counselling activities.</li>
                    <li>Any other relevant information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a236">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $ans236;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link236;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit236" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form><br>

        <!-- Metric Title -->
        <div class="criteriaTitle2">
            <h4>2.4 Teacher Profile and Quality </h4>
        </div><br>
        
        <!-- Pending save.php & table view  from hereon-->
        <!-- Metric 2.4.1 -->
         <form method="post" id="f241">
                <div id="q241" class="questionContainer">
                <p class="msgContainer" id="msg241"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m2_4_1 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.1</p>
                <p class="question">
                 <b>Average percentage of full time teachers against sanctioned posts during the last five years</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Number of full time teachers.</li><br>
                    <li>Number of sanctioned posts.</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a241">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table241">
                           <thead>
                                <tr>
                                    <th>Name of the Full-time teacher</th>
                                    <th>PAN</th>
                                    <th>Designation</th>
                                    <th>Year of appointment</th>
                                    <th>Nature of appointment (Against Sanctioned post, temporary, permanent)</th>
                                    <th>Name of the Department</th>
                                    <th>Total years of
                                        Experience in
                                        the same
                                        institution
                                    </th>
                                    <th>Is the teacher still serving the institution/If not last year of the service of Faculty to the Institution</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow241"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit241" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>


        <!-- Metric 2.4.2 -->
        <form method="post" id="f242">
            <div id="q242" class="questionContainer">
                <p class="msgContainer" id="msg242"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m2_4_2 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.2</p>
                <p class="question">
                 <b>Average percentage of full time teachers with Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit. during the last five years</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Number of full time teachers with Ph.D./D.M/M.Ch./D.N. Superspeciality/D.Sc./D’Lit.</li><br>
                    <li>Total number of full time teachers.</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a242">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table242">
                           <thead>
                                <tr>
                                    <th>Name of full time teacher with Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit. </th>
                                    <th>Qualification
                                        (Ph.D./D.M/M.Ch./D.N.B
                                        Superspeciality/D.Sc./D’Lit.
                                        ) and Year of obtaining
                                    </th>
                                    <th>Whether recognised as research Guide for
                                        Ph.D./D.M/M.Ch./D.N.B
                                        Superspeciality/D.Sc./D’Lit.
                                    </th>
                                    <th>Year of Recognition as Research Guide</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow242"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit242" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        <!-- Metric 2.4.3 -->
        <form method="post" id="f243">
                <div id="q243" class="questionContainer">
                <p class="msgContainer" id="msg243"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m2_4_3 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.3</p>
                <p class="question">
                 <b>Average teaching experience of full time teachers in the same institution (Data for the latest completed academic year in number of years) </b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                    <b>Data Requirement</b>
                    <ul>
                    <li>Name and Number of full time teachers with years of teaching experiences</li><br>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a243">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table243">
                           <thead>
                                <tr>
                                    <th>Name of the Full-time teacher</th>
                                    <th>PAN</th>
                                    <th>Designation</th>
                                    <th>Year of appointment</th>
                                    <th>Nature of appointment (Against Sanctioned post, temporary, permanent)</th>
                                    <th>Name of the Department</th>
                                    <th>Total years of
                                        Experience in
                                        the same
                                        institution
                                    </th>
                                    <th>Is the teacher still serving the institution/If not last year of the service of Faculty to the Institution</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow243"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit243" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        <!-- Metric 2.4.4 -->
        <form method="post" id="f244">
                <div id="q244" class="questionContainer">
                <p class="msgContainer" id="msg244"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m2_4_4 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.4</p>
                <p class="question">
                 <b>Average percentage of full time teachers who received awards, recognition, fellowships at State, National, International level from Government/Govt. recognised bodies during the last five years</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Number of full time teachers receiving awards from State, National, International level</li><br>
                    <li>Number of full time teachers.</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a244">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table244">
                           <thead>
                                <tr>
                                    <th>Name of full time teachers receiving awards from state level, national level, international level</th>
                                    <th>Year of Award</th>
                                    <th>PAN</th>
                                    <th>Designation</th>
                                    <th>Name of the award, fellowship, received from Government or Government recognised bodies</th>
                                    <th>Name of the Awarding Agency</th>
                                    <th>Incentives/Type
                                        of the incentive
                                        given by the
                                        HEI in
                                        recognition of
                                        the award
                                    </th>
                                    <th>Link to the relevant documents</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow244"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit244" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        <!-- Metric 2.4.5 DDE ONLY -->
        <div id="q245" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                <?php 
                    //   $check223 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_5 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check223);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0 && $name =='Directorate of Distance Education'){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else if($name !='Directorate of Distance Education'){
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.5</p>
                <p style="text-align: center;" id="msg245"></p>
                <p class="question">
                <b>Full-time teachers and other academics in position at DDE</b>
                Average percentage of the sanctioned posts occupied by full-time teachers and
                other academics respectively at DDE during the last five years.
                Number of the sanctioned posts occupied by full-time teachers and other academics
                respectively at DDE year wise during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i><br><br>
                <p class="questionPart">
                    <br><br>
                    <ul>
                        <li>Number of full time teachers and other academics in position</li>
                        <li>Number of sanctioned posts of full time teachers and other academics</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a245">
                        <form method = "POST" id="f245">
                        <table class="table table-bordered" id="table245">
                           <thead>
                              <tr>
                                <th>Year</th>
                                <th colspan="2">Number of Teachers</th>
                                <th colspan="2">Number of other Academics</th>
                                <th colspan="2">Total</th>
                              </tr>
                              <tr>
                                  <th></th>
                                  <th>Sanctioned Posts</th>
                                  <th>In position</th>
                                  <th>Sanctioned Posts</th>
                                  <th>In position</th>
                                  <th>Sanctioned Posts</th>
                                  <th>In position</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>  
                                <td>
                                   <select class="form-control year1" id="select245_1">
                                     <option value="0">YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="" class="form-control q1" required/></td>
                                <td><input type="number" name="" class="form-control q2" required/></td>
                                <td><input type="number" name="" class="form-control q3" required/></td>
                                <td><input type="number" name="" class="form-control q4" required/></td>
                                <td><input type="number" name="" class="form-control q5" /></td>
                                <td><input type="number" name="" class="form-control q6" /></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select class="form-control year2"  id="select245_2">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="" class="form-control q7" required/></td>
                                <td><input type="number" name="" class="form-control q8" required/></td>
                                <td><input type="number" name="" class="form-control q9" required/></td>
                                <td><input type="number" name="" class="form-control q10" required/></td>
                                <td><input type="number" name="" class="form-control q11" /></td>
                                <td><input type="number" name="" class="form-control q12" /></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="" class="form-control year3" id="select245_3">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="" class="form-control q13" required/></td>
                                <td><input type="number" name="" class="form-control q14" required/></td>
                                <td><input type="number" name="" class="form-control q15" required/></td>
                                <td><input type="number" name="" class="form-control q16" required/></td>
                                <td><input type="number" name="" class="form-control q17" /></td>
                                <td><input type="number" name="" class="form-control q18" /></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="" class="form-control year4" id="select245_4">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="" class="form-control q19" required/></td>
                                <td><input type="number" name="" class="form-control q20" required/></td>
                                <td><input type="number" name="" class="form-control q21" required/></td>
                                <td><input type="number" name="" class="form-control q22" required/></td>
                                <td><input type="number" name="" class="form-control q23" /></td>
                                <td><input type="number" name="" class="form-control q24" /></td>
                              </tr>
                              <tr>  
                                <td>
                                   <select name="" class="form-control year5" id="select245_5">
                                     <option value="0" selected disabled>YEAR</option>
                                    <?php    
                                        $query = "SELECT * FROM year_list ORDER BY year DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                    ?>
                                   </select>
                                </td>
                                <td><input type="number" name="" class="form-control q25" required/></td>
                                <td><input type="number" name="" class="form-control q26" required/></td>
                                <td><input type="number" name="" class="form-control q27" required/></td>
                                <td><input type="number" name="" class="form-control q28" required/></td>
                                <td><input type="number" name="" class="form-control q29" /></td>
                                <td><input type="number" name="" class="form-control q30" /></td>
                              </tr>

                            </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit245" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
        </div>

        <!-- Metric 2.4.6 DDE ONLY -->
        <form method="post" id="f246">
                <div id="q246" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <p class="msgContainer" id="msg246"></p>
                <img
                    <?php 
                    // $check223 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_6 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check223);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0 && $name =='Directorate of Distance Education'){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else if($name !='Directorate of Distance Education'){
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.4.6</p>
                <p class="question">
                 <b>Teaching Experience of Academic Counsellors at DDE</b>
                 Percentage of empanelled Academic Counsellors at DDE having more than five
                 years of teaching experience for the preceding academic year.
                 Number of empanelled Academic Counsellors at DDE having more than five years
                 of teaching experience for the preceding academic year.
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Total teaching experience in years of the empanelled Academic Counsellors for the preceding academic year</li><br>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a246">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table246">
                           <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Name of academic counsellor</th>
                                    <th>Year of Appointment</th>
                                    <th>Highest Educational Qualifications</th>
                                    <th>Teaching experience in years</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow246"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit246" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form><br>

        <div class="criteriaTitle2">
            <h4>2.5 Evaluation Process and Reforms</h4>
        </div><br>
        <!-- Metric 2.5.1 -->
        <form method="post" id="f251">
                <div id="q251" class="questionContainer">
                <p class="msgContainer" id="msg251"></p>
                <img
                    <?php 
                    //  $get = mysqli_query($connection, "SELECT*FROM ssr_m2_5_1 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.5.1</p>
                <p class="question">
                 <b>Average number of days from the date of last semester-end/ yearend examination till the declaration of results during the last five years</b>
                 Number of days from the date of last semester-end/ year- end examination
                 till the declaration of results year wise during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Semester wise/ year wise</li>
                    <li>Last date of the last semester-end/ year- end examination</li>
                    <li>Date of declaration of results of semester-end/ year- end examination</li>
                    <li>Number of days taken for declaration of the results</li>
                    <li>Average number of days for declaration of results during the last five years</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a251">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table251">
                           <thead>
                                <tr>
                                    <th>Programme Name</th>
                                    <th>Programme Code</th>
                                    <th>Semester/ year</th>
                                    <th>Last date of the last semester-end/year- end examination</th>
                                    <th>Date of declaration of results of semester-end/ year-end examination</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow251"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit251" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        <!-- Metric 2.5.2 -->
        <form method="post" id="f252">
                <div id="q252" class="questionContainer">
                <p class="msgContainer" id="msg252"></p>
                <img
                    <?php 
                    //  $get = mysqli_query($connection, "SELECT*FROM ssr_m2_5_2 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.5.2</p>
                <p class="question">
                 <b>Average number of days from the date of last semester-end/ yearend examination till the declaration of results during the last five years</b>
                 Number of days from the date of last semester-end/ year- end examination
                 till the declaration of results year wise during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Number of complaints/grievances about evaluation</li>
                    <li>Total number of students appeared in the examinations</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a252">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table252">
                           <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Number of Complaints / Grievances about evaluation</th>
                                    <th>Total number students appeared in the examination</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow252"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit252" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
        <!-- Metric 2.5.3 -->
        <form method="post" id="f253">
                <div id="q253" class="questionContainer">
                <p class="msgContainer" id="msg253"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m2_5_3 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.5.3</p>
                <p class="question">
                    IT integration and reforms in the examination procedures and
                    processes (continuous internal assessment and end-semester
                    assessment) have brought in considerable improvement in
                    examination management system of the institution.
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Year wise number of applications, students and revaluation cases</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a253">
                        <?php
                        //    $query = mysqli_query($connection, "SELECT * FROM ssr_m2_5_3 WHERE username = '$adminname'");
                        //    $fetch = mysqli_fetch_assoc($query);
                        //    $answer = $fetch['description'];
                        ?>
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <input type="submit" name="submit253" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>

        <!-- Metric 2.5.4 -->
        <form method="post" id="f254">
                <div id="q254" class="questionContainer">
                <p class="msgContainer" id="msg254"></p>
                <img
                    <?php 
                    //  $get = mysqli_query($connection, "SELECT*FROM ssr_m2_5_4 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.5.4</p>
                <p class="question">
                 <b>Status of automation of Examination division along with approved Examination Manual </b>
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>A. 100% automation of entire division & implementation of Examination Management System (EMS)</li>
                    <li>B. Only student registration, Hall ticket issue & Result Processing</li>
                    <li>C. Only student registration and result processing</li>
                    <li>D. Only result processing </li>
                    <li>E. Only manual methodology</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a254">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table254">
                           <thead>
                               <tr>
                                   <th><input type="radio" name="q1" class="qR"  value="A. 100% automation of entire division & implementation of Examination Management System (EMS)" /> A. 100% automation of entire division & implementation of Examination Management System (EMS)</th>
                                   <th ><input type="radio" name="q1" class="qR" value="B. Only student registration, Hall ticket issue & Result Processing" /> B. Only student registration, Hall ticket issue & Result Processing</th>
                                   <th><input type="radio" name="q1" class="qR" value="C. Only student registration and result processing"/> C. Only student registration and result processing</th>
                                   <th><input type="radio" name="q1" class="qR" value="D. Only result processing"/> D. Only result processing</th>
                                   <th><input type="radio" name="q1" class="qR" value="E. Only manual methodology"/> E. Only manual methodology</th>
                               </tr>
                               <tr>
                                   <th colspan="5" style="text-align: center;">Select Options</th>
                               </tr>
                                <tr>
                                    <th>100% automation of entire division & implementation of Examination Management System (EMS) (Yes/No)</th>
                                    <th>Student registration, Hall ticket issue & Result Processing are automated (Yes/No)</th>
                                    <th>Student registration and result processing are automated (Yes/No)</th>
                                    <th>Result processing is only automated (Yes/No)</th>
                                    <th>Follow manual methods (Yes/No)</th>
                                </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                       <select class="form-control q1" required>
                                           <option value="" selected disabled>Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select class="form-control q2" required>
                                       <option value="" selected disabled>Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select class="form-control q3" required>
                                       <option value="" selected disabled>Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select class="form-control q4" required>
                                       <option value="" selected disabled>Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                       </select>
                                   </td>
                                   <td>
                                       <select class="form-control q5" required>
                                       <option value="" selected disabled>Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                       </select>
                                   </td>
                               </tr>
                           </tbody>
                        </table>
                        <br>
                        <input type="submit" name="submit254" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        <!-- Metric 2.5.5 -->
        <form method="post" id="f255">
                <div id="q255" class="questionContainer ddeOnly">
                <p class="msgContainer" id="msg255"></p>
                <img
                    <?php 
                    //   $check236 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_5 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check236);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0 && $name =='Directorate of Distance Education'){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else if($name !='Directorate of Distance Education'){
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.5.5</p>
                <p class="question">
                 <b>Formative Assessment procedures at DDE</b><br>
                 Standard Operating Procedures employed for continuous (internal) assessment followed by the DDE.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <b>Provide web-link to</b><br>
                    <ul><br>
                    <li>Policy documents on Evaluation Methodology of DDE.</li>
                    <li>Any other relevant information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a255">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit"  class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form><br>
        <div class="criteriaTitle2">
            <h4>2.6 Student Performance and Learning Outcomes</h4>
        </div><br>
        <!-- Metric 2.6.1 -->
        <form method="post" id="f261">
                <div id="q261" class="questionContainer">
                <p class="msgContainer" id="msg261"></p>
                <img
                    <?php 
                    //   $check236 = mysqli_query($connection, "SELECT*FROM ssr_m2_6_1 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check236);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.6.1</p>
                <p class="question">
                 <b>The institution has stated learning outcomes (generic and
                    programme specific)/graduate attributes which are integrated into
                    the assessment process and widely publicized through the website
                    and other documents </b><br>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <b>Provide web-link to</b><br>
                    <ul><br>
                    <li>Paste link for Additional Information.</li>
                    <li>Any other relevant information</li>
                    <li>Upload COs for all courses (exemplars from Glossary)</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a261">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit"  class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
        <!-- Metric 2.6.2 -->
        <form method="post" id="f262">
                <div id="q262" class="questionContainer">
                <p class="msgContainer" id="msg262"></p>
                <img
                    <?php 
                    //   $check236 = mysqli_query($connection, "SELECT*FROM ssr_m2_6_2 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check236);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>2.6.2</p>
                <p class="question">
                 <b>Attainment of Programme outcomes, Programme specific outcomes and course outcomes are evaluated by the institution</b><br>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <b>File Description</b><br>
                    <ul><br>
                    <li>Paste link for Additional Information.</li>
                    <li>Upload any Additional Information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a262">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit"  class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
         <!-- Metric 2.6.3 -->
         <form method="post" id="f263">
                <div id="q263" class="questionContainer">
                <p class="msgContainer" id="msg263"></p>
                <img
                    <?php 
                    //  $get = mysqli_query($connection, "SELECT*FROM ssr_m2_6_3 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.6.3</p>
                <p class="question">
                 <b>Average pass percentage of students </b>
                 Total number of final year students who passed the university examination <br>Total number of final year students who appeared for theuniversity examination
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Programme Code</li>
                    <li>Name of the Programme</li>
                    <li>Number of students appeared</li>
                    <li>Number of students passed</li>
                    <li>Pass percentage</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a263">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table263">
                           <thead>
                                <tr>
                                    <th>Programme Code</th>
                                    <th>Programme Name</th>
                                    <th>Number of students appeared in the final year examination</th>
                                    <th>Number of students passed in final year examination</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow263"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit263" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form><br>
        <div class="criteriaTitle2">
            <h4>2.7 Student Satisfaction Survey</h4>
        </div><br>
        <!-- Metric 2.7.1 -->
        <form method="post" id="f271">
                <div id="q271" class="questionContainer" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <p class="msgContainer" id="msg271"></p>
                <img
                    <?php 
                    //  $get = mysqli_query($connection, "SELECT*FROM ssr_m2_7_1 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.7.1</p>
                <p class="question">
                 <b>Online student satisfaction survey regarding teaching learning
                    process. (for Conventional Students)
                    (Online survey to be conducted)
                </b>
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <b>Data Requirements</b>
                    <ul>
                    <li>Name/ Class/ Gender</li>
                    <li>Student Id number/ Adhar Id number</li>
                    <li>Mobile number</li>
                    <li>Email id</li>
                    <li>Degree Programme</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a271">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table271">
                           <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>State of Domicile</th>
                                    <th>Nationality if other than Indian</th>
                                    <th>Email ID</th>
                                    <th>Programme name</th>
                                    <th>Student Unique ID</th>
                                    <th>Mobile Number</th>
                                    <th>Year of joining</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow271"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit271" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
         <!-- Metric 2.7.2 -->
         <form method="post" id="f272">
                <div id="q272" class="questionContainer ddeOnly">
                <p class="msgContainer" id="msg272"></p>
                <img
                    <?php 
                    //  $check272 = mysqli_query($connection, "SELECT*FROM ssr_m2_7_2 WHERE username = '$adminname'");
                    //   $n = mysqli_num_rows($check272);
                    //   if($n > 0){
                    //       echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    //   }else if($n == 0 && $name =='Directorate of Distance Education'){
                    //       echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    //   }else if($name !='Directorate of Distance Education'){
                    //       echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    //   }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>2.7.2</p>
                <p class="question">
                 <b>Online Learner Satisfaction Survey regarding teaching-learning process (10)
                </b>
                </p>
                <i class="fa fa-angle-down iconRight"></i><br>
                <p class="questionPart"><br><br>
                    <b>Data Requirements</b>
                    <ul>
                    <li>Name/ Class/ Gender</li>
                    <li>Student Id number/ Adhar Id number</li>
                    <li>Mobile number</li>
                    <li>Email id</li>
                    <li>Degree Programme</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a272">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table272">
                           <thead>
                                <tr>
                                    <th>Name of the Learner</th>
                                    <th>Gender</th>
                                    <th>Category</th>
                                    <th>State of Domicile</th>
                                    <th>Nationality if other than Indian</th>
                                    <th>Email ID</th>
                                    <th>Programme name</th>
                                    <th>Student Unique ID</th>
                                    <th>Mobile Number</th>
                                    <th>Year of joining</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow272"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit272" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>

        
    </div>
    

    <!-- Important Script -->
    <script src="../essentialscript.js"></script>
    <script src="script.js"></script>
    <!-- Bottom Functionalities -->
    <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
	</footer><br>
    
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
</body>
<?php $connection->close();?>
</html>
