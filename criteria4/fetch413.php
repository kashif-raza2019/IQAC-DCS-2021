<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_1_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr  ><td><center><td><center><input id="npid" type="number" value="'.$row['lcd'].'"  style="width:250px;" ></center></td><td><center><input type="number" value = "'.$row['lan'].'" id="y" style="width:165px;" required></select></center></td><td><center><input id="per" type="number" value="'.$row['semi'].'"  style="width:120px;" required></center></td><td><center><input id="per" type="number" value="'.$row['totalc'].'"  style="width:120px;" required></center></td><td><center><input id="per" type="number" value="'.$row['totals'].'"  style="width:120px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
