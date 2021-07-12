<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_1_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" placeholder="Name of Fellow" value = "'.$row["Name"].'" style="width:250px;" required></center></td>'.
			  '<td><center><select value = "'.$row["Year"].'" placeholder="Year" class="year" style="width:165px;" required></select></center></td>'.
			  '<td><center><input type="text" value = "'.$row["Link"].'" placeholder="Link" style="width:300px;" required></center></td>'.
              '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>'.
			  '<td class="remove"><center><input type="hidden" value = "'.$row["Choice"].'" style="width:0px;"></center></td></tr>';
    }
	
?>
