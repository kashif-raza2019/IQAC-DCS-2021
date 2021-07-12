<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_2_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        
            $c1 = '<td><center><input type="text" placeholder="Student Name" style="width:200px;" value="'.$row['Name_of_student'].'" required></center></td>';
            $c2 = '<td><center><select id="g'.$row['id_time'].'" value="'.$row['Gender'].'" style="width:100px;" required><option value="">Select</option><option value="Male">Male</option><option value="Female">Female</option><option value="Transgender">Transgender</option></select></center></td>';
            $c3 = '<td><center><input type="text" placeholder="UDID Card Number" style="width:140px;" value="'.$row['UDID_card_number'].'" required></center></td>';
            $c4 = '<td><center><input type="text" placeholder="Type" style="width:150px;" value="'.$row['Disability_type'].'" required></center></td>';
            $c5 = '<td><center><input type="number" placeholder="%" style="width:80px;" value="'.$row['Disability_percent'].'" required></center></td>';
            $c6 = '<td><center><select id="pid'.$row['id_time'].'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" value="'.$row['Prog_code'].'" style="width:150px;" required></select></center></td>';
            $c7 = '<td><center><input id="npid'.$row['id_time'].'" value="'.$row['Prog_name'].'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>';
            $c8 = '<td><center><select style="width:175px;" id="y'.$row['id_time'].'" value="'.$row['Year_enrolled'].'"></select></center></td>';
            $c9 = '<td><center><select style="width:175px;" id="yy'.$row['id_time'].'" value="'.$row['Year_passed'].'" required></select></center></td>';
            $cR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';
        
        echo '<tr id="id'.$row['id_time'].'" >'.$c1.$c2.$c3.$c4.$c5.$c6.$c7.$c8.$c9.$cR.'</tr>';
    }
	
?>
