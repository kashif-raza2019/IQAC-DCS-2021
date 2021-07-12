<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_7_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){

        echo '<tr id = "'.$row["id_time"].'"><td><center><input type="text" placeholder="Organization Name" value = "'.$row["org"].'"  style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Institution Name"  value = "'.$row["inst"].'" style="width:200px;" required></center></td>'.
              '<td><center><select placeholder="Year" class="year" value = "'.$row["Year"].'"  style="width:175px;" required></select></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Period"].'"  style="width:200px;" required></select></center></td>'.
              '<td><center><input type="number" placeholder="Duration" style="width:160px;" value = "'.$row["duration"].'"  required></center></td>'.
              '<td><center><input type="text" placeholder="Activities" style="width:200px;" value = "'.$row["activities"].'"  required></center></td>'.
              '<td><center><input type="number" placeholder="Numbers" style="width:160px;"  value = "'.$row["nums"].'" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    }
?>
