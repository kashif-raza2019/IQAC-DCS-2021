<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m4_1_4  where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><input id="ncid'.$row['id_time'].'" type="number" placeholder="Course Name" value = "'.$row['budgeta'].'" style="width:250px;" ></center></td><td><center><input id="ncid'.$row['id_time'].'" type="number" placeholder="Course Name" value = "'.$row['budgetu'].'" style="width:250px;" ></center></td><td><center><select value = "'.$row['yeara'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" ></select></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
