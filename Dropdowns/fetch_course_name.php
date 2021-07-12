<?php
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Course_name FROM course WHERE Course_code LIKE '".$_GET['Course_code']."' AND Username LIKE '".$_SESSION['username']."' AND Prog_code = '".$_GET['Prog_code']."'";
    $res  = mysqli_query($connection,$prog);

    $row = $res->fetch_assoc();
        echo $row['Course_name'];
?>
