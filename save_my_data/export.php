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

$query = "SELECT DISTINCT * FROM ".$_GET['table']." WHERE Username LIKE '".$_SESSION['username']."'";
//print_r($_SESSION);
//echo $query;

$result = mysqli_query($connection, $query);

$number_of_fields = mysqli_num_fields($result);
$headers = array();
for ($i = 0; $i < $number_of_fields; $i++) {
    $headers[] = mysqli_field_name($result , $i);
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="NAAC_DCS_'.$_SESSION['username']."_".$_GET['table']."(".$tt.")".'.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        for($cx=0; $cx<count($row); $cx++){
          $row[$cx] = urldecode($row[$cx]);
          $row[$cx] = str_replace("\\","",$row[$cx]);
        }
        fputcsv($fp, array_values($row));
    }
    die;
}

function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

?>
