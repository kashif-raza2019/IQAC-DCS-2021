<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_7_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){

	    $f1 = '<td><center><input type="text" value="'.$row['Student_Name'].'" placeholder="Name" style="width:200px;" required></center></td>';
	    $f2 = '<td><center><input type="text" value="'.$row['Gender'].'" placeholder="Gender" style="width:100px;" required></center></td>';
	    $f3 = '<td><center><input type="text" value="'.$row['Category'].'" placeholder="Category" style="width:80px;" required></center></td>';
	    $f4 = '<td><center><input type="text" value="'.$row['State_of_Domicile'].'" placeholder="State of Domicile" style="width:120px;" required></center></td>';
	    $f5 = '<td><center><input type="text" value="'.$row['Nationality'].'" placeholder="Nationality" style="width:120px;" required></center></td>';
	    $f6 = '<td><center><input type="text" value="'.$row['Email_ID'].'" placeholder="Email ID" style="width:120px;" required></center></td>';
            
	    $f7 = '<td><center><select id="pid'.$row['id_time'].'" value="'.$row['Prog_code'].'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td>';
	    $f8 = '<td><center><input id="npid'.$row['id_time'].'" value="'.$row['Prog_name'].'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';

	    $f9 = '<td><center><input type="text" value="'.$row['Enrollment_ID'].'" placeholder="Enrollment ID" style="width:120px;" required></center></td>';
	    $f10= '<td><center><input type="text" value="'.$row['Mobile_No'].'" placeholder="Mobile Number" style="width:120px;" required></center></td>';
	    $f11= '<td><center><select placeholder="Year" value="'.$row['Year'].'" style="width:175px;" id="y'.$row['id_time'].'"></select></center></td>';


	    $fR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

        echo '<tr id="id'.$row['id_time'].'" >'.$f1.$f2.$f3.$f4.$f5.$f6.$f7.$f8.$f9.$f10.$f11.$fR.'</tr>';
    }
?>
