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

  $query = "Delete FROM course WHERE Username LIKE '".$_SESSION['username']."' AND Course_code LIKE '".$_POST['cc']."' ";

  //echo $query."<br>";

  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "<script>alert('Successfully Removed ".$_POST['cc']."');</script>";
    ?>

    <script>
      window.location.href = "view.php";
    </script>

    <?php

  }else{
    $r ="add.php?pc=".$_POST['Prog_code']."&cc=".urlencode($_POST['Course_code'])."&cn=".urlencode($_POST['Course_name']);

    $r = str_replace(" ","+",$r);

    echo "<script>alert('There was a problem removing the course".urlencode($_POST['cc']).", Check and Try Again....!!!');</script> ";


    ?>

    <script>
      window.location.href = <?php echo "view.php"; ?>;
    </script>

    <?php
  }

?>
