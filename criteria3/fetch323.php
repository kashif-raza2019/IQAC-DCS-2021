<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_2_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["Principal"].'" placeholder="Name of Principal Investigator" style="width:250px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Designation" value = "'.$row["Department"].'" style="width:250px;" required></center></td>'.
              '<td><center><input type="number" placeholder="Duration" style="width:160px;" value = "'.$row["Duration"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Project Name" style="width:250px;" value = "'.$row["Project"].'" required></center></td>'.
			  '<td><center><input type="number" placeholder="Funds" style="width:160px;" value = "'.$row["Funds"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Agency Name" style="width:250px;" value = "'.$row["Agency"].'" required></center></td>'.
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" value = "'.$row["Year"].'" required></select></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Period"].'"  style="width:200px;" required></select></center></td>'.
'<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>
