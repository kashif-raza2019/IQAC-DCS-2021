<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_4_6c where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id = "'.$row['id'].'"><td><center><input type="text" value="'. $row['tname'].'" placeholder="Name" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['wname'].'" placeholder="Name of Workshop" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['host'].'" placeholder="Name of Institute" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['nori'].'" placeholder="National/International" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['sdate'].'" placeholder="Start Date" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['edate'].'" placeholder="End Date" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['duration'].'" placeholder="Duration" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['year'].'" placeholder="Academic year" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['affinst'].'" placeholder="Institute" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['finance'].'" placeholder="Financial Assistance" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" value="'. $row['remarks'].'" placeholder="Remarks" style="width:200px;" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    }
?>
