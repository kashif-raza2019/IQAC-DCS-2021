<html>
<?php

session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(!isset($_SESSION['username'])){
  header("Location: ../login.php");
}

//  print_r($_POST);

$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_autocommit($connection,FALSE);
try{
mysqli_begin_transaction($connection);

$query = "Delete from not_applicable where Username like '".$_SESSION['username']."';";
$res  = mysqli_query($connection,$query);

$tabs = "";

for( $i=0; $i<count($_POST['na_list']); $i++){

  $tabs .= " [ ".$_POST['na_list'][$i]." ] ";

  $qqq111 = "select * FROM na_table_div_id WHERE `table` LIKE '".$_POST['na_list'][$i]."'";
  //echo $qqq."<br>";
  $res111  = mysqli_query($connection,$qqq111) or die(mysqli_error($connection));// or throw new Exception("Error Processing Request");

  while ($row111 = $res111->fetch_assoc()){
    $div_id = $row111['div_id'];
    // code...
  }



  $qqq = "Insert into not_applicable VALUES(0,'".$_SESSION['username']."', '".$_POST['na_list'][$i]."' , '".$div_id."' )";
  echo $qqq."<br>";
  $res  = mysqli_query($connection,$qqq) or die(mysqli_error($connection));// or throw new Exception("Error Processing Request");
}


//$query = "Insert into ".$_GET["table"]." Values".$_POST['rows']."";
//$res  = mysqli_query($connection,$query) ; //or die(mysqli_error($connection));

//if($res){
  echo "Changes Saved Successfully";

  ?>


  <script>
    alert(' { <?php echo $tabs; ?> } are Set as Not Applicable feilds for <?php echo $_SESSION['username']; ?> ');
    window.location.href = "set_not_applicable.php";
  </script>

  <?php

  mysqli_commit($connection);
//}else{
//  throw new Exception('Last query failed');
//}

}
catch (Exception $e) {
mysqli_rollback($connection);
echo "There was some problem with your data, Last changes were not saved, Try Again...!!!";
}

mysqli_autocommit($connection,TRUE);


?>
</html>
