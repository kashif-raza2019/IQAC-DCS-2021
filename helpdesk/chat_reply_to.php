<?php
session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(!isset($_SESSION['names'])){
		header("Location: ../index.php");
}

$_SESSION['to'] = $_GET['to'];

header("Location: superuser_msg.php");

?>
