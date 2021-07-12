<?php

    session_start();
    include("../credential.php");

$date = date_create();
save_log($_SESSION['username'], getUserIP(), $_SERVER['REQUEST_URI'], urlencode(http_build_query($_POST,  '',  '&amp;')), date_format($date,  'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername,  $username,  $password,  $dbname);

		mysqli_autocommit($connection, FALSE);
		try{
		mysqli_begin_transaction($connection);

	$query = "Delete from eval_report where Username like '".$_SESSION['username']."' AND sid LIKE ".$_POST['sid'].";";

//  echo "<br>".$query."<br>";

  $res  = mysqli_query($connection, $query);// or die(mysqli_error($connection));

	$res  = mysqli_query($connection, $query);

  $D1 = "('".$_SESSION['username']."', ".urlencode($_POST['sid']).", '".urlencode($_POST['sub_dept'])."', '".urlencode($_POST['f1'])."', '".urlencode($_POST['f2'])."', '".urlencode($_POST['f3'])."', ".urlencode($_POST['f41']).", ";
  $D2 = "".urlencode($_POST['f42']).", ".urlencode($_POST['f43']).", ".urlencode($_POST['f44']).", ".urlencode($_POST['f51']).", ".urlencode($_POST['f52']).", '".urlencode($_POST['f61'])."', '".urlencode($_POST['f62'])."', ".urlencode($_POST['f71']).", ";
  $D3 = "".urlencode($_POST['f72']).", ".urlencode($_POST['f8']).", ".urlencode($_POST['f91']).", ".urlencode($_POST['f92']).", '".urlencode($_POST['f931'])."', ".urlencode($_POST['f932']).", '".urlencode($_POST['f941'])."', ".urlencode($_POST['f942']).", ";
  $D4 = "".urlencode($_POST['f95']).", '".urlencode($_POST['f10'])."', '".urlencode($_POST['f11'])."', ".urlencode($_POST['f121']).", ".urlencode($_POST['f122']).", ".urlencode($_POST['f123']).", ".urlencode($_POST['f13']).", ";
  $D5 = "'".urlencode($_POST['f141'])."', '".urlencode($_POST['f142'])."', ".urlencode($_POST['f15']).", '".urlencode($_POST['save'])."')";

//  echo $D1.$D2.$D3.$D4.$D5;

	$query = "Insert into eval_report Values  ".$D1.$D2.$D3.$D4.$D5;
	//echo ("alert('{$query}')");

  //echo "<br>".$query."<br>";

	$res  = mysqli_query($connection, $query);// or die(mysqli_error($connection));
	//echo urlencode($_POST["table"];

//  echo "<br>".$query."<br>";

	if($res){
		echo "Changes Saved Successfully";
		mysqli_commit($connection);
	}else{
		throw new Exception('Last query failed');
	}

}
catch (Exception $e) {
	mysqli_rollback($connection);

$date = date_create();
save_log($_SESSION['username'], getUserIP(), $_SERVER['REQUEST_URI'], "SAVING DATA FAILED", date_format($date,  'Y-m-d H:i:s'));

	echo "There was some problem with your data,  Last changes were not saved, Fill All Fields & Try Again...!!!";
}

mysqli_autocommit($connection, TRUE);


?>
