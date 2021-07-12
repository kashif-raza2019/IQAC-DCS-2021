<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t3_4_6 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){

        echo '<tr id = "'.$row["id_time"].'"><td><center><input type="text" placeholder="Name" style="width:200px;" value = "'.$row["Name"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Book Title" value = "'.$row["BTitle"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Paper Title" value = "'.$row["PTitle"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Proceedings Title" value = "'.$row["ProTitle"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Conference Name" value = "'.$row["CTitle"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="National/International" value = "'.$row["Nation"].'" style="width:200px;" required></center></td>'.
              '<td><center><select placeholder="Year" class="year" value = "'.$row["Year"].'" style="width:165px;" required></select></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Period"].'"  style="width:200px;" required></select></center></td>'.
              '<td><center><input type="text" placeholder="ISBN/ISSN" style="width:200px;"  value = "'.$row["ISBN"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Institute Name" style="width:200px;" value = "'.$row["Inst"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Publisher Name" style="width:200px;" value = "'.$row["Publ"].'" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';

    }
?>
