<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_4_8 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){

        echo '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["PTitle"].'" placeholder="Paper Title" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Name" value = "'.$row["Name"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Journal Title" value = "'.$row["JTitle"].'" style="width:200px;" required></center></td>'.
              '<td><center><select placeholder="Year" class="year" value = "'.$row["Year"].'" style="width:165px;" required></select></center></td>'.
              '<td><center><input type="text" placeholder="h-index" value = "'.$row["indx"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="number" placeholder="citations" value = "'.$row["cit"].'" style="width:160px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Institute name" value = "'.$row["inst"].'" style="width:200px;" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    }
?>
