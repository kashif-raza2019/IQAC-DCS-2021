<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_1_10 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >
		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" required></select></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['name'].'" placeholder="" style="width:150px;" required></center></td>
	

		<td><center><input id="per'.$row['id_time'].'" type="date" value="'.$row['date_from'].'" placeholder="dd/mm/yy" style="width:150px;" required></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="date" value="'.$row['date_to'].'" placeholder="dd/mm/yy" style="width:150px;" required></center></td>
		
		
	<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['issue'].'" placeholder="" style="width:150px;" required></center></td>
	
	<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['num_participants'].'" placeholder="" style="width:150px;" required></center></td>
		
		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
