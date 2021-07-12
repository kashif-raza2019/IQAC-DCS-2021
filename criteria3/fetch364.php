<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_6_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){

        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" placeholder="Name" value = "'.$row["Name"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Agency" value = "'.$row["Award"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Scheme" value = "'.$row["Scheme"].'" style="width:200px;" required></center></td>'.
              '<td><center><select placeholder="Year" class="year" style="width:165px;" value = "'.$row["Year"].'" required></select></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Period"].'"  style="width:200px;" required></select></center></td>'.
              '<td><center><input type="number" placeholder="Teachers" style="width:160px;" value = "'.$row["Teachers"].'" required></center></td>'.
              '<td><center><input type="number" placeholder="Students" style="width:160px;" value = "'.$row["Students"].'" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    }
?>
