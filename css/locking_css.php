<html>
<body>
<?php
//session_start();
//include("../credential.php");

//$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

/*
if(!isset($_SESSION['username'])){
  header("Location: ../login.php");
}
*/

$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "select * from `status` where 1";
//echo $query;
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
$row  = $res ->fetch_assoc();

$ps = $row['superuser'];
$pa = $row['admin'];

//echo $ps."  ".$pa;

if($pa==1 && $_SESSION['names']==""){
  ?>
<style>
input[type=button],.add,button,input[type=submit]{
  display: none;
}
</style>
  <?php
}else if($ps==1 && $_SESSION['names']!=""){
  ?>
<style>
input[type=button],.add,button,input[type=submit]{
  display: none;
}
</style>
  <?php
}


?>
</body>
</html>
