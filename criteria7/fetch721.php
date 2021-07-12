<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t7_2_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){


	

	    $Ti1 = '<tr class="no_border"><th class="no_border">Title of the Practice</th> <td class="no_border"> <input type="text" placeholder="Title of the Practice" value="'.$row['title'].'"> </td></tr>';

	    $Ti2 = '<tr class="no_border"><th class="no_border">Objectives of the Practice</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="What are the objectives / intended outcomes of this “best practice” and what are the underlying principles or concepts of this practice (in about 100 words)?">'.$row['objective'].'</textarea> </td></tr>';
	    
	    $Ti3 = '<tr class="no_border"><th class="no_border">The Context</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="What were the contextual features or challenging issues that needed to be addressed in designing and implementing this practice (in about 150 words)?">'.$row['context'].'</textarea> </td></tr>';

	    $Ti4 = '<tr class="no_border"><th class="no_border">The Practice</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:200px;" placeholder="Describe the practice and its uniqueness in the context of India higher education. What were the constraints / limitations, if any, faced (in about 400 words)?">'.$row['practice'].'</textarea> </td></tr>';
	    
	    $Ti5 = '<tr class="no_border"><th class="no_border">Evidence of Success</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Provide evidence of success such as performance against targets and benchmarks, review results. What do these results indicate? Describe in about 200 words.">'.$row['evidence'].'</textarea> </td></tr>';

	    
	    $Ti6 = '<tr class="no_border"><th class="no_border">Problems Encountered <br>and Resources Required</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Please identify the problems encountered and resources required to implement the practice (in about 150 words).">'.$row['problem'].'</textarea> </td></tr>';

	    
	    $Ti7 = '<tr class="no_border"><th class="no_border">Notes (Optional)</th> <td class="no_border" style="width:800px;"> <textarea style="width:800px; height:150px;" placeholder="Please add any other information that may be relevant for adopting/ implementing the Best Practice in other institutions (in about 150 words).">'.$row['notes'].'</textarea> </td></tr>';


	    $TiR = '<tr class="no_border"><td class="remove no_border" colspan="2"><center><button style="width:1000px;" onclick="remove_tab(this);" type="button" >Remove</button></center></td></tr>';

	echo '<table style="margin-bottom:30px;" border="1" id="'.$row['id_time'].'">'.$Ti1.$Ti2.$Ti3.$Ti4.$Ti5.$Ti6.$Ti7.$TiR.'</table>';

  }
	
?>
