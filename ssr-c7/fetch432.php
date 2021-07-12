<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m4_3_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id3" ><td><center><input type="number" id="pid"  value="'.$row['numbers'].'" style="width:150px;" required></center></td><td><center><input type="number" id="cid"  value="'.$row['numberc'].'"  style="width:150px;" required></select></center></td><td class="remove" style="width:40px;"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
