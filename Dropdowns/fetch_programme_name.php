<?php
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Prog_name FROM programme WHERE Prog_code LIKE '".$_GET['Prog_code']."' AND Username LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$prog);

    $row = $res->fetch_assoc();
        echo $row['Prog_name'];

?>
