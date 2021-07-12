<?php

    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t2_3_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

	while($row = $res->fetch_assoc()){

            $c1 = '<td><center><input type="number" placeholder="Number" style="width:200px;" value="'.$row['Number_of_teachers_using_ICT'].'" required></center></td>';
            $c2 = '<td><center><input type="number" placeholder="Number" style="width:200px;" value="'.$row['Teacher_number'].'" required></center></td>';
            $c3 = '<td><center><input type="text" placeholder="Resources" style="width:200px;" value="'.$row['ICT_tools'].'" required></center></td>';
            $c4 = '<td><center><input type="number" placeholder="Number" style="width:200px;" value="'.$row['ICT_class_numbers'].'" required></center></td>';
            $c5 = '<td><center><input type="number" placeholder="Number" style="width:200px;" value="'.$row['smart_classroom_number'].'" required></center></td>';
            $c6 = '<td><center><input type="text" placeholder="E-Resources" style="width:200px;" value="'.$row['Eresources_used'].'" required></center></td>';
						$c7 = ' <td><center><input id="l'.$row['id_time'].'" type="text" value="'.$row['Link'].'" placeholder="Link of the relevant document" style="width:250px;"></center></td> ';
            $cR = '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td>';

        echo '<tr id="id'.$row['id_time'].'" >'.$c1.$c2.$c3.$c4.$c5.$c6.$c7.$cR.'</tr>';    	
    }
?>
