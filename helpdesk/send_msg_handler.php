<?php

session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

$connection = mysqli_connect($servername, $username, $password, $dbname);

//$_POST['msg'] = mysqli_real_escape_string($connection, $_POST['msg']);
//$_POST['msg'] = "Ram & Shyam";

$query = "Insert into help_desk VALUES (0, '".strtolower($_SESSION['username'])."' , '".$_POST['to']."' , '".urlencode($_POST['msg'])."' , '".date_format($date, 'Y-m-d H:i:s')."' , 0 , 0 )";
$connection = mysqli_connect($servername, $username, $password, $dbname);
$res = mysqli_query($connection,$query);

if($res){
  ?>

  <div class="mine">
      <?php echo urldecode(urlencode($_POST['msg'])); ?>
      <br>
      <c class="timestamp"> <?php echo date_format($date, 'Y-m-d H:i:s'); ?> <d style="color:;">&#x2714;&#x2714;</d> </c>
  </div>


  <?php
}

?>
