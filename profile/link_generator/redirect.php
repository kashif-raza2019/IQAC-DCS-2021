<?php

session_start();
include("../../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


  //echo $_GET['link'];
  header("Location: ".$_GET['link']);
?>
