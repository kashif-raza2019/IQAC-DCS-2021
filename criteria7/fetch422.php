<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><input id="ncid'.$row['id_time'].'" type="text"  value = "'.$row['nameb'].'" style="width:160px;" ></center></td><td><center><input type="text" id="pid'.$row['id_time'].'" required   style="width:200px;" value="'.$row['namep'].'"></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['nameau'].'"  style="width:150px;" ></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['numc'].'"  style="width:150px;" ></center></td><td><center><select value = "'.$row['yearp'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
