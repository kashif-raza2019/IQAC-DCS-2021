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

  $query = "Insert INTO course VALUES('".$_SESSION['username']."','".$_POST['Prog_code']."','".str_replace("&","and",$_POST['Course_code'])."','".str_replace("&","and",$_POST['Course_name'])."')";

  //echo $query."<br>";

  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "<script>alert('Successfully Added');</script>";
    ?>

    <script>
      window.location.href = "view.php?cc=<?php echo str_replace("&","and",$_POST['Course_code']) ?>";
    </script>

    <?php

  }else{
    $r ="add.php?pc=".$_POST['Prog_code']."&cc=".str_replace("&","and",$_POST['Course_code'])."&cn=".str_replace("&","and",$_POST['Course_name']);

    $r = str_replace(" ","+",$r);

    echo "<script>alert('Course not Added, you have added the same course code previously, course code need to be unique , Check and Try Again....!!!');</script> ";


    ?>

    <script>
      window.location.href = <?php echo "'".$r."'"; ?>;
    </script>

    <?php
  }

?>
