<?php

    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_7 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><input type="text" id="pid'.$row['id_time'].'"  value="'.$row['teacher'].'" style="width:150px;" required></select></center></td><td><center><input type="text" id="cid'.$row['id_time'].'"  value="'.$row['module'].'"  style="width:150px;" required></select></center></td><td><center><input id="ncid'.$row['id_time'].'" value="'.$row['platform'].'"  type="text" style="width:250px;" ></center></td><td><center><select id="y'.$row['id_time'].'" value="'.$row['datel'].'"   style="width:175px;" required></select></center></td>  <td><center><input id="l'.$row['id_time'].'" type="text" value="'.$row['Link'].'" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove" style="width:40px;"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }

?>
