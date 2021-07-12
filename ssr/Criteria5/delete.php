<?php
    session_start();
    include("../../credential.php");
    $user = $_SESSION['username'];
    $table_name = $_GET['tab'];
    $id = $_GET['id'];
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    echo "<script>alert('Are You Sure?')</script>";
        $deleteQuery = "DELETE FROM $table_name WHERE username='$user' AND id='$id'";
        $delete = mysqli_query($connection, $deleteQuery);
        if($delete){
            echo "<script>alert('Data Deleted')</script>";
        }else{
        echo "<script>alert('Please try again!')</script>";
    
        }
    $connection->close();
    ?>
    <script>
        window.location.href="index.php#q511";
    </script>