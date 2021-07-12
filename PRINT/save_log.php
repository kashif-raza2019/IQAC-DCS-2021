<?php session_start();
$_SESSION['msg']='';

include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],"PRINTED CRITERIA-".$_GET['criteria'],date_format($date, 'Y-m-d H:i:s'));
?>
