<?php
session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


/* Attempt MySQL server connection. */
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$tt = date('d-m-Y_H-i-s');


$query = "SELECT count(*) FROM sub_department WHERE Username LIKE '".$_SESSION['username']."'";
$result = mysqli_query($connection, $query);

$dept_no = 0;
while ($row = $result->fetch_assoc()) {
  $dept_no = $row['count(*)'];
}


$query = "SELECT DISTINCT * FROM eval_report WHERE Username LIKE '".$_SESSION['username']."'";
//print_r($_SESSION);
//echo $query;

$result = mysqli_query($connection, $query);

$fp = fopen('php://output', 'w');

$number_of_fields = mysqli_num_fields($result);
$headers = array();

$data = [];

for ($i = 0; $i < $number_of_fields; $i++) {
    $headers[] = mysqli_field_name($result , $i);
    $data[0][] = mysqli_field_name($result , $i);
}

$ccc=1;

while ($row = $result->fetch_assoc()){
  foreach ($row as $dd) {
    $data[$ccc][] = urldecode($dd);
  }
  $ccc++;
}


/*
foreach ($data as $mm) {
  echo "<br><Br>";
  print_r($mm);
}
*/


$fin = [];

for($i=0; $i<count($data); $i++){
  for($j=0; $j<34; $j++){
    $fin[$i][] = $data[$i][$j];
//    echo "<br><Br>";
  }
}

$grand = [];

for($g=2; $g<33; $g++){
  //echo "<br><Br>";
  for($h=0; $h<count($data); $h++){
    //echo $fin[$h][$g]."    ";
    $grand[$g][] = $fin[$h][$g];
  }
}

if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="NAAC_DCS_EVALUATION_REPORT_'.$_SESSION['username']."_".$_GET['table']."(".$tt.")".'.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

    $qq1 = ['Name of University','Devi Ahilya Vishwavidyalaya, Indore'];

    $qq2 = ['Name of Department'];
    array_push($qq2,$_SESSION['name']);

    $qq3 = ['District','Indore'];
    $qq4 = ['State','Madhya Pradesh'];
    $qq5 = ['Number of Departments',$dept_no];

    fputcsv($fp,$qq1);
    fputcsv($fp,$qq2);
    fputcsv($fp,$qq3);
    fputcsv($fp,$qq4);
    fputcsv($fp,$qq5);

    foreach ($grand as $lines) {
      fputcsv($fp, array_values($lines));
    }

/*
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        for($cx=0; $cx<count($row); $cx++){
          $row[$cx] = urldecode($row[$cx]);
          $row[$cx] = str_replace("\\","",$row[$cx]);
        }
        array_push($data,$row);
        //fputcsv($fp, array_values($row));

    }
*/
    die;
}

//print_r($data);

function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

?>
