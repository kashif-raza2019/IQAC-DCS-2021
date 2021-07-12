<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from ssr_m1_3_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'"  value="'.$row['Prog_code'].'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><select id="cid'.$row['id_time'].'" onchange="fetch_course_name(this.value,this.id)" value="'.$row['Course_code'].'"  text="Course Code" style="width:150px;" required></select></center></td><td><center><input id="ncid'.$row['id_time'].'" value="'.$row['Course_name'].'"  type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select id="y'.$row['id_time'].'" value="'.$row['Year_offering'].'"  placeholder="Year Offering" style="width:165px;" required></select></center></td><td><center><input value="'.$row['Frequency_in_year'].'"  type="number" onkeypress="return event.charCode >= 48" style="width:80px;" required></center></td><td><center><select id="yy'.$row['id_time'].'" value="'.$row['Year_discontinuation'].'"  placeholder="Year Discontinued" style="width:170px;" required></select></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" style="width:80px;" value="'.$row['Number_of_students_offered'].'" required></center></td><td><center><input style="width:80px;" type="number" onkeypress="return event.charCode >= 48" value="'.$row['Number_of_students_completing'].'" required></center></td><td class="remove" style="width:40px;"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
