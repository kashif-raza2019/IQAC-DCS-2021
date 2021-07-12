<?php

    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t5_2_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >

		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" required></select></center></td>

		<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['number_students_enrolled_higher_education'].'" placeholder="Percentage" style="width:120px;" required></center></td>

		<td><center><select onchange="fetch_course_code(this.value,this.id);" value = "'.$row['program_graduated_from'].'" id="pid'.$row['id_time'].'" placeholder="Year" style="width:165px;" required></select></center></td>

		<td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['dept_graduated_from'].'" placeholder="Percentage" readonly style="width:220px;" required></center></td>

		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['name_of_institution_joined'].'" placeholder="Percentage" style="width:120px;" required></center></td>

		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['name_of_program_admitted_to'].'" placeholder="Percentage" style="width:120px;" required></center></td>



		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }

?>
