<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
		header("Location: ../index.php");
}

$_SESSION['username']=$_GET['username'];
$_SESSION['login']="YES";
$_SESSION['name']=$_GET['name'];

$section = $_GET['sec'];
$redirect = $_GET['red']."#".$section;

if($redirect=="#"){
	header("Location: ../homepage.php");
}else{
	header("Location: ../".$redirect);
}

?>
