<?php
session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
header("Location: ../login.php");
}

?>

  <style>
    table,td{
      border: 2px solid gray;
    }
  </style>

<?php

$connection = mysqli_connect($servername, $username, $password, $dbname_log);

$query = "SELECT SUBSTR(`timestamp`,1,10) AS `DATE` , count(*) AS `VISITS` FROM `log` GROUP BY `DATE`;";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

echo "<table>";

foreach ($res as $r) {
  echo "<tr>";
  foreach ($r as $v) {
    echo "<td>".$v."</td>";
  }
  echo "</tr>";
}

echo "</table>";

echo "<br><br><br><Br>";

$query = "SELECT `Username`,count(*) FROM `log` WHERE 1 GROUP BY `Username`;";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

echo "<table>";

foreach ($res as $r) {
  echo "<tr>";
  foreach ($r as $v) {
    echo "<td>".$v."</td>";
  }
  echo "</tr>";
}

echo "</table>";

echo "<br><br><br><Br>";

$query = "SELECT substr(`url`,6,9) AS `PAGE`,Username, count(*) AS `count` FROM `log` WHERE 1 GROUP BY `PAGE`,`Username`;";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

$last = "xxx";

echo "<br><br><Br>".json_encode($res)."<br><br><br>";

$AR = [];

echo "<table>";

foreach ($res as $r) {

  echo "<br><br><Br>".json_encode($r)."<br><br><br>";

  echo "<tr>";
  foreach ($r as $v=>$vv) {
    echo "<td>".$vv."</td>";
    if($v=='count'){
      //print_r($r);
      //echo $r['PAGE']." | ".$r['Username']."<br>";
      $AR[$r['PAGE']][$r['Username']] = $vv;
    }
  }
  echo "</tr>";
}

echo "</table>";

foreach ($AR as $k=>$SA) {
  echo "<b>".$k."</b>  ";
  print_r($SA);
  echo "<br><br>";
}
echo "<table>";

$b = 0;
/*
foreach ($AR as $SA) {
  $b++;
  echo "<tr><th>DEPT</th>";
  foreach ($SA as $key => $value) {
    echo "<th>".$key."</th>";
  }
  echo "</tr><tr></tr>";
  break;
}


foreach ($AR as $SA) {
  echo "<tr><td>".$z."</td>";
  foreach ($SA as $key => $value) {
    echo "<td>".$value."</td>";
  }
  echo "</tr>";
}

echo "</table>";
*/

echo json_encode($AR);

?>
