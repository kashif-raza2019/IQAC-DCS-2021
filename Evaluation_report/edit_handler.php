<?php
  session_start();
  include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


  $_SESSION['msg']='';

  if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
  }

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $query = "UPDATE sub_department SET sub_dept = '".str_replace("&","and",$_POST['sub_dept'])."' WHERE id = ".$_POST['sid']." AND Username LIKE '".$_SESSION['username']."' ";
  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "<script>alert('Successfully Updated');</script>";
    ?>

    <script>
      window.location.href = "sub_department.php";
    </script>

    <?php

  }else{

    echo "<script>alert(' There was some problem updating, Please Try Again...!!!');</script> ";


    ?>

    <script>
    window.location.href = "sub_department.php";
    </script>

    <?php
  }

?>
