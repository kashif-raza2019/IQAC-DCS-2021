<?php

    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><input id="ncid'.$row['id_time'].'" type="text"  value = "'.$row['mem'].'" style="width:160px;" ></center></td><td><center><input type="text" id="pid'.$row['id_time'].'" required   style="width:200px;" value="'.$row['sub'].'"></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['name'].'"  style="width:120px;" ></center></td><td><center><input id="" type="number" value="'.$row['eres'].'" style="width:120px;" ></center></td><td><center><input type="number" value = "'.$row['validityf'].'" id="y'.$row['id_time'].'" placeholder=" from Year" style="width:100px;" ></center></td><td><center><input type="number" value = "'.$row['validityt'].'" id="y'.$row['id_time'].'" placeholder=" to Year" style="width:100px;" ></center></td><td><center><input type="text"  style="width:150px;" value="'.$row["report"].'" ></center></td><td><center><input type="text" value="'.$row['access'].'" id="y'.$row['id_time'].'"  style="width:100px;" ></center></td>  <td><center><input id="l'.$row['id_time'].'" type="text" value="'.$row['Link'].'" placeholder="Link of the relevant document" style="width:250px;"></center></td>  <td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }

?>
