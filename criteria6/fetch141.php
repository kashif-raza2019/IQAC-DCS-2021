<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t1_4_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$radioNumber122 = 1000;
	while($row = $res->fetch_assoc()){
		echo '<tr id = "'.$row["id_time"].'"><td><center><select style="width:200px" value = "'.$row["opt"].'"><option value = "4">A. Any 4 of the above</option><option value = "3"> B. Any 3 of the above</option><option value = "2"> C. Any 2 of the above</option><option value = "1"> D. Any 1 of the above</option><option value = "0"> E. None of the above</option></select></center></td><td><center><input type="text" value="'.$row["url"].'" style="width:250px"></center></td></tr>';
	}
	
?>
