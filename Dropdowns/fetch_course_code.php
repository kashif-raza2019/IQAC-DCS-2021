<?php
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    //echo $_GET["Prog_code"];
    echo "<option value='".""."'>"."Select"."</option>";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $query = "SELECT DISTINCT Course_code FROM course WHERE Prog_code LIKE '%".$_GET['Prog_code']."%' AND Username LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$query);

    while($row = $res->fetch_assoc()){
        echo "<option value='".$row['Course_code']."'>".$row['Course_code']."</option>";
    }
?>
