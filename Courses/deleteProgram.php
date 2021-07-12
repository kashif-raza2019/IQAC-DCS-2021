<?php
            session_start();
            include("../credential.php");
            $user = $_SESSION['username'];
            $date = date_create();
            save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
            $msgNotice = "";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $progCode = $_GET['progCode'];

            $query = mysqli_query($connection, "DELETE FROM programme WHERE Username = '$user' AND Prog_code = '$progCode'");
            if($query){
                echo "<script>alert('Programme Deleted Succesfully!')</script>";

            }

            if(!isset($_SESSION['username'])){
                header("Location: ../login.php");
            }
        $connection->close();
?>
<script>
  window.location.href="programmeView.php";
</script>