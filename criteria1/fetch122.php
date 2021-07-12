<?php

    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t1_2_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$sel1 = '';
	$sel2 = "";
	$radioNumber122 = 1000;
	while($row = $res->fetch_assoc()){

	if($row['Type'] == 'Elective') $sel2 = "checked";
	else $sel1 = "checked";
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" value="'.$row['Prog_code'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['Prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td><td width="300px"><center><input type="radio" name="type'.$radioNumber122.'" '.$sel1.' value="CBCS">CBCS  <input type="radio" '.$sel2.' name="type'.$radioNumber122.'" value="Elective"> Elective</center></td><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" ></select></center></td>    <td><center><input id="l'.$row['id_time'].'" type="text" value="'.$row['Link'].'" placeholder="Link of the relevant document" style="width:250px;"></center></td>    <td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
        $radioNumber122 += 1;

	$sel1 = "";
	$sel2 = "";
    }

?>
