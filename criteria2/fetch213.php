<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_1_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="y'.$row['id_time'].'" value="'.$row['Year'].'"  placeholder="Year Offering" style="width:175px;" required></select></center></td><td><center><select id="pid'.$row['id_time'].'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" value="'.$row['Prog_code'].'" style="width:150px;" required></select></center></td><td><center><input id="npid'.$row['id_time'].'" value="'.$row['Prog_name'].'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['SC_1'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['ST_1'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['OBC_1'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['GEN_1'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['OTH_1'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['SC_2'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['ST_2'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['OBC_2'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['GEN_2'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['OTH_2'].'" required></center></td><td class="remove" style="width:20px;"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
