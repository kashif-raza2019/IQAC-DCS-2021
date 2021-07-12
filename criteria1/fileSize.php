<?php
session_start();

include("../credential.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "select Link from t1_1_1;";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
//$row  = $res ->fetch_assoc();

echo filesize('c1.php')."<br>";
while ($row = $res->fetch_assoc()){
  $link = urldecode($row['Link']);
  echo $link." : ".filesize("".$link)."<br/>";
  echo filesize($link);
}
?>
