<?php
session_start();
include '../credential.php';
$user = $_SESSION['username'];
$year = $_GET['year'];
$month = strtoupper($_GET['month']);
$conn = mysqli_connect($servername , $username, $password, $dbname);

    
    if(isset($_POST['submit']))
    { 
        $question = "Scholary Acheivement of Students";
        $questionId = "q30";
        $answer = $_POST['ans'];

        $file = "$user-$year-$month-$questionId-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../upload_data/";
        
        /* new file size in KB */
        $new_size = $file_size/1024;  
        /* new file size in KB */
        
        /* make file name in lower case */
        $new_file_name = strtolower($file);
        /* make file name in lower case */
        
        $final_file=str_replace(' ','-',$new_file_name);

        $file_new_loc = $folder.$final_file;
     
     if(move_uploaded_file($file_loc,$folder.$final_file))
     {
        $searchQuery = "SELECT * FROM monthly_report_q30 WHERE username = '$user'";
        $search = mysqli_query($conn, $searchQuery);
        $res = mysqli_fetch_assoc($search);
        $row = $res['username'];
        if($row == $user){
         $updateQuery = "UPDATE monthly_report_q30 SET answer = '$answer', file_name = '$final_file', file_location = '$file_new_loc', month='$month', year = '$year' WHERE username = '$user'";
         $update = mysqli_query($conn, $updateQuery);
         if($update){
            echo "<script>alert('File Updated Successfully!')</script>";
            header("Location: index.php?year=$year&month=$month");
         }else{
            echo "<script>alert('Some Problem with MYSQLI QUERY UPDATE')</script>";
         }
        }else{
            $sql="INSERT INTO monthly_report_q30(username, question, answer, file_name, file_location, month, year) VALUES('$user', '$question', '$answer', '$final_file', '$file_new_loc', '$month', '$year')";
            $query = mysqli_query($conn,$sql);
            var_dump($query);
            if($query){
                echo "<script>alert('File Added Successfully!')</script>";
                header("Location: index.php?year=$year&month=$month");
            }else{
                echo "<script>alert('Some Problem with MYSQLI QUERY INSERT')</script>";
            }
    
        }
        
        
     }
     else if(empty($_FILES['file']['name']) && $answer !='')
                {
                    $searchQuery = "SELECT * FROM monthly_report_q30 WHERE username = '$user'";
                    $search = mysqli_query($conn, $searchQuery);
                    $res = mysqli_fetch_assoc($search);
                    $row = $res['username'];
                    if($row == $user){
                    $updateQuery = "UPDATE monthly_report_q30 SET answer = '$answer',month='$month', year = '$year' WHERE username = '$user'";
                    $update = mysqli_query($conn, $updateQuery);
                    if($update){
                        echo "<script>alert('File Updated Successfully!')</script>";
                        header("Location: index.php?year=$year&month=$month");
                    }else{
                        echo "<script>alert('Some Problem with MYSQLI QUERY UPDATE')</script>";
                    }
                    }else{
                        $sql="INSERT INTO monthly_report_q30(username, question, answer, month, year) VALUES('$user', '$question', '$answer', '$month', '$year')";
                        $query = mysqli_query($conn, $sql);
                        var_dump($query);
                        if($query){
                            echo "<script>alert('File Added Successfully!')</script>";
                            header("Location: index.php?year=$year&month=$month");
    
                        }else{
                            echo mysqli_error($conn);
                            echo "<script>alert('Some Problem with MYSQLI QUERY INSERT')</script>";
                        }
    
                    }
                        
                }
            else{
                echo "<script>alert('No Response Added!')</script>";
            }
    }
    
?>
