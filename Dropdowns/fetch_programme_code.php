<?php
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    echo "<option value='".""."'>"."Select"."</option>";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Prog_code FROM programme WHERE Username LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$prog);

    while($row = $res->fetch_assoc()){
        echo "<option value='".$row['Prog_code']."'>".$row['Prog_code']."</option>";
    }
?>
