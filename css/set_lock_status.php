<?php
session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
  header("Location: ../login.php");
}

$connection = mysqli_connect($servername, $username, $password, $dbname);

if($_GET['ps']!=2){
  $query = "UPDATE status SET superuser = ".$_GET['ps']."";
  $res1  = mysqli_query($connection,$query) or die(mysqli_error($connection));
}
if($_GET['pa']!=2){
  $query = "UPDATE status SET admin = ".$_GET['pa']."";
  $res2  = mysqli_query($connection,$query) or die(mysqli_error($connection));
}

echo "success";

//$row  = $res ->fetch_assoc();
?>
