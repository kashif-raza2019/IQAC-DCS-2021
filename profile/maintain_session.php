<?php
session_start();
$_SESSION['msg']='';
include("../credential.php");

$_POST['Maintaing_session_on'] = $_GET['page'];

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

echo "Successfully Mainaintaing Session";

?>
