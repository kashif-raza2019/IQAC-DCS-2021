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

  $query = "Insert INTO t_additional_data VALUES('".$_SESSION['username']."','".$_POST['section']."','".$_POST['type']."','".$_POST['link']."',0,0)";

  //echo $query."<br>";

  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "success";
  }else{
    echo "fail";
  }

?>
