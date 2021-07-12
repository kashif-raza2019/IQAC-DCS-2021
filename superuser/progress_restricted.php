<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));



if(!isset($_SESSION['username'])){
		header("Location: ../index.php");   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <style>

		a{
			background-color: transparent;
		}

		a:hover{
			background-color: lightgray;
		}

		.complete{
			background-color: #009900;
			color: white;
		}

		w{
			color: red;
		}

		x{
			color: green;
		}

		y{
			color: orange;
		}

		z{
			color: black;
			font-size: 19px;
		}

		w,x,y{
			font-weight: bold;
			font-size: 25px;
		}

		c{
			color: pink;
			border-radius: 10%;
		}

		.shaped{
			border-radius: 4px;
		}

		.partial{
			background-color: skyblue;
			color: white;
		}

    input[type=text],input[type=password], select,textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }


        input[type=button],input[type=submit],input[type=reset] {
            width: 220px;
            background-color: #424242;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .container{
            height: 100%;
            width: 100%;
        }

        #left, #middle, #right, .x {
            display: inline-block;
            *display: inline; zoom: 1;
            vertical-align: top;
            font-size: 12px;
            padding: 0px;
        }

        #left{
            width: 22%;
        }

        #middle{
            width: 67%;
        }

        #right{
            width: 10%;
        }

        th{
            font-size: 14px;
            padding:15px;
        }

        td{
						border: 3px solid #343434;
            font-size: 22px;
            padding: 8px;
            text-align: center;
        }

        </style>
<link rel="icon" href="./logo.png">
<title>Progress - Information Gathering System</title>
</head>
<body >


        <div class="col-sm-1"></div>

<!--
                   <center><a style="color:black; ;;;; font-weight:normal; font-size:25px;">PROGRESS</a></center>
-->

	<br>

    <table border="0" style="" id="progress">

        <tr>
            <th>CRITERIA 1</th>
            <th>CRITERIA 2</th>
            <th>CRITERIA 3</th>
            <th>CRITERIA 4</th>
            <th>CRITERIA 5</th>
            <th>CRITERIA 6</th>
            <th>CRITERIA 7</th>
						<th>EVALUATIVE REPORT</th>
						<th>EXTENDED PROFILE</th>
        </tr>

        <?php

            $query = "SELECT * FROM admins ORDER BY sno";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $res = mysqli_query($connection,$query);

            while($row = $res->fetch_assoc()){
        ?>

			<?php if( strtolower($row['username']) == strtolower($_SESSION['username']) ){
				?>

        <tr id="<?php echo $row['username']; ?>">

							<th style="display:none;"> <?php echo $row['name']; ?> </th>

            <td
                <?php

                    $c1 = "select distinct * from t1_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t1_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t1_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t1_2_1 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t1_2_2 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t1_3_1 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t1_3_2 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t1_3_4 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t1_4_1 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t1_4_2 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't1%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										$tt = 10;

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}

										?>

										<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
											<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
								<center>
										<?php


										if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
										if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
													echo "<z>/".$tt."</z>";


			                ?>
										</a>
										<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
											<a href="criteria1/c1.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch111" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch112" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch113" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.2.1 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch121" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.2.2 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch122" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.3.1 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch131" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.3.2 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch132" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.3.4 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch134" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.4.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria1/c1.php#ch131" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">1.4.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
										</div>
									</center>
									</div>

<?php
/*
									if($q+$na==10){
										echo ' class="complete"> '.$q."+".$na."/".$tt;
									}else if($q+$na>0){
										echo ' class="partial"> '.$q."+".$na."/".$tt;
									}else{
										echo ' class="blank"> '.$q."/".$tt;
									}
*/
/*
										if($q==10){
											echo ' class="complete"> '.$q.'/10';
										}else if($q>0){
											echo ' class="partial"> '.$q."+".$na.'/10';
										}else{
											echo ' class="blank"> '.$q.'/10';
										}
*/
//                    echo $q."/10";

                ?>
            </td>
            <td
                <?php

                    $c1 = "select distinct * from t2_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t2_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t2_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t2_2_1 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t2_2_2 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t2_2_3 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t2_3_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t2_3_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t2_3_3 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t2_4_1 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t2_4_2 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t2_4_3 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t2_4_4 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t2_4_5 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t2_5_1 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t2_5_2 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t2_5_3 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t2_5_4 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t2_5_5 where Username LIKE '".$row['username']."'";
                    $c20= "select distinct * from t2_6_1 where Username LIKE '".$row['username']."'";
                    $c21= "select distinct * from t2_6_2 where Username LIKE '".$row['username']."'";
                    $c22= "select distinct * from t2_6_3 where Username LIKE '".$row['username']."'";
										$c23= "select distinct * from t2_7_1 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20= mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    $r22= mysqli_query($connection,$c22);
										$r23= mysqli_query($connection,$c23);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                    $a22 = mysqli_num_rows($r22);
										$a23 = mysqli_num_rows($r23);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    if($a22>=1){
                        $q++;
                    }
										if($a23>=1){
                        $q++;
                    }

										$tt = 23;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't2%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}

			/*
										if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
										if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
													echo "<z>/".$tt."</z>";
			*/

			?>

			<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
				<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
			<center>
			<?php


			if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
			if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
						echo "<z>/".$tt."</z>";


				?>
			</a>
			<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
				<a href="criteria2/c2.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch211" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch212" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch213" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.2.1 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch221" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.2.2 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch222" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.2.3 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch223" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.3.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch231" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.3.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch232" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.3.3 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch233" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.4.1 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch241" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.4.2 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch242" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.4.3 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch243" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.4.4 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch244" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.4.5 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch245" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.5.1 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch251" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.5.2 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch252" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.5.3 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch253" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.5.4 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch254" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.5.5 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch255" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.6.1 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch261" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.6.2 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch262" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.6.3 => <?php $temp = $a22; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
				<a href="criteria2/c2.php#ch263" target="_blank"  style="text-decoration:none; color:black;" class="w3-bar-item w3-button">2.7.1 => <?php $temp = $a23; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
			</div>
			</center>
			</div>

			<?php

/*
										if($q==23){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
//                    echo $q."/22";

                ?>
            </td>
            <td
                <?php

								$c1 = "select distinct * from t3_1_1 where Username LIKE '".$row['username']."'";
								$c2 = "select distinct * from t3_1_2 where Username LIKE '".$row['username']."'";
								$c3 = "select distinct * from t3_1_3 where Username LIKE '".$row['username']."'";
								$c4 = "select distinct * from t3_1_4 where Username LIKE '".$row['username']."'";
								$c5 = "select distinct * from t3_1_5 where Username LIKE '".$row['username']."'";
								$c6 = "select distinct * from t3_1_6 where Username LIKE '".$row['username']."'";
								$c7 = "select distinct * from t3_2_2 where Username LIKE '".$row['username']."'";
								$c8 = "select distinct * from t3_2_3 where Username LIKE '".$row['username']."'";
								$c9 = "select distinct * from t3_3_1 where Username LIKE '".$row['username']."'";
								$c10= "select distinct * from t3_3_2 where Username LIKE '".$row['username']."'";
								$c11= "select distinct * from t3_3_3 where Username LIKE '".$row['username']."'";
								$c12= "select distinct * from t3_3_4 where Username LIKE '".$row['username']."'";
								$c13= "select distinct * from t3_4_1 where Username LIKE '".$row['username']."'";
								$c14= "select distinct * from t3_4_2 where Username LIKE '".$row['username']."'";
								$c15= "select distinct * from t3_4_3 where Username LIKE '".$row['username']."'";
								$c16= "select distinct * from t3_4_4 where Username LIKE '".$row['username']."'";
								$c17= "select distinct * from t3_4_5 where Username LIKE '".$row['username']."'";
								$c18= "select distinct * from t3_4_6 where Username LIKE '".$row['username']."'";
								$c18b= "select distinct * from t3_4_6b where Username LIKE '".$row['username']."'";
								$c18c= "select distinct * from t3_4_6c where Username LIKE '".$row['username']."'";
								$c19= "select distinct * from t3_4_7 where Username LIKE '".$row['username']."'";
								$c20= "select distinct * from t3_4_8 where Username LIKE '".$row['username']."'";
								$c21= "select distinct * from t3_5_1 where Username LIKE '".$row['username']."'";
								$c22= "select distinct * from t3_5_2 where Username LIKE '".$row['username']."'";
								$c23= "select distinct * from t3_5_3 where Username LIKE '".$row['username']."'";
								$c24= "select distinct * from t3_6_1 where Username LIKE '".$row['username']."'";
								$c25= "select distinct * from t3_6_2 where Username LIKE '".$row['username']."'";
								$c26= "select distinct * from t3_6_3 where Username LIKE '".$row['username']."'";
								$c27= "select distinct * from t3_6_4 where Username LIKE '".$row['username']."'";
								$c28= "select distinct * from t3_7_1 where Username LIKE '".$row['username']."'";
								$c29= "select distinct * from t3_7_2 where Username LIKE '".$row['username']."'";
								$c30= "select distinct * from t3_7_3 where Username LIKE '".$row['username']."'";

								$r1 = mysqli_query($connection,$c1);
								$r2 = mysqli_query($connection,$c2);
								$r3 = mysqli_query($connection,$c3);
								$r4 = mysqli_query($connection,$c4);
								$r5 = mysqli_query($connection,$c5);
								$r6 = mysqli_query($connection,$c6);
								$r7 = mysqli_query($connection,$c7);
								$r8 = mysqli_query($connection,$c8);
								$r9 = mysqli_query($connection,$c9);
								$r10= mysqli_query($connection,$c10);
								$r11 = mysqli_query($connection,$c11);
								$r12 = mysqli_query($connection,$c12);
								$r13 = mysqli_query($connection,$c13);
								$r14 = mysqli_query($connection,$c14);
								$r15 = mysqli_query($connection,$c15);
								$r16 = mysqli_query($connection,$c16);
								$r17 = mysqli_query($connection,$c17);
								$r18 = mysqli_query($connection,$c18);
								$r18b = mysqli_query($connection,$c18b);
								$r18c = mysqli_query($connection,$c18c);
								$r19 = mysqli_query($connection,$c19);
								$r20= mysqli_query($connection,$c20);
								$r21 = mysqli_query($connection,$c21);
								$r22 = mysqli_query($connection,$c22);
								$r23 = mysqli_query($connection,$c23);
								$r24 = mysqli_query($connection,$c24);
								$r25 = mysqli_query($connection,$c25);
								$r26 = mysqli_query($connection,$c26);
								$r27 = mysqli_query($connection,$c27);
								$r28 = mysqli_query($connection,$c28);
								$r29 = mysqli_query($connection,$c29);
								$r30 = mysqli_query($connection,$c30);

								$a1 = mysqli_num_rows($r1);
								$a2 = mysqli_num_rows($r2);
								$a3 = mysqli_num_rows($r3);
								$a4 = mysqli_num_rows($r4);
								$a5 = mysqli_num_rows($r5);
								$a6 = mysqli_num_rows($r6);
								$a7 = mysqli_num_rows($r7);
								$a8 = mysqli_num_rows($r8);
								$a9 = mysqli_num_rows($r9);
								$a10= mysqli_num_rows($r10);
								$a11 = mysqli_num_rows($r11);
								$a12 = mysqli_num_rows($r12);
								$a13 = mysqli_num_rows($r13);
								$a14 = mysqli_num_rows($r14);
								$a15 = mysqli_num_rows($r15);
								$a16 = mysqli_num_rows($r16);
								$a17 = mysqli_num_rows($r17);
								$a18 = mysqli_num_rows($r18);
								$a18b = mysqli_num_rows($r18b);
								$a18c = mysqli_num_rows($r18c);
								$a19 = mysqli_num_rows($r19);
								$a20 = mysqli_num_rows($r20);
								$a21 = mysqli_num_rows($r21);
								$a22 = mysqli_num_rows($r22);
								$a23 = mysqli_num_rows($r23);
								$a24 = mysqli_num_rows($r24);
								$a25 = mysqli_num_rows($r25);
								$a26 = mysqli_num_rows($r26);
								$a27 = mysqli_num_rows($r27);
								$a28 = mysqli_num_rows($r28);
								$a29 = mysqli_num_rows($r29);
								$a30 = mysqli_num_rows($r30);

								$q=0;

								if($a1>=1){
										$q++;
								}
								if($a2>=1){
										$q++;
								}
								if($a3>=1){
										$q++;
								}
								if($a4>=1){
										$q++;
								}
								if($a5>=1){
										$q++;
								}
								if($a6>=1){
										$q++;
								}
								if($a7>=1){
										$q++;
								}
								if($a8>=1){
										$q++;
								}
								if($a9>=1){
										$q++;
								}
								if($a10>=1){
										$q++;
								}
								if($a11>=1){
										$q++;
								}
								if($a12>=1){
										$q++;
								}
								if($a13>=1){
										$q++;
								}
								if($a14>=1){
										$q++;
								}
								if($a15>=1){
										$q++;
								}
								if($a16>=1){
										$q++;
								}
								if($a17>=1){
										$q++;
								}
								if($a18>=1){
										$q++;
								}
								if($a18b>=1){
										$q++;
								}
								if($a18c>=1){
										$q++;
								}
								if($a19>=1){
										$q++;
								}
								if($a20>=1){
										$q++;
								}
								if($a21>=1){
										$q++;
								}
								if($a22>=1){
										$q++;
								}
								if($a23>=1){
										$q++;
								}
								if($a24>=1){
										$q++;
								}
								if($a25>=1){
										$q++;
								}
								if($a26>=1){
										$q++;
								}
								if($a27>=1){
										$q++;
								}
								if($a28>=1){
										$q++;
								}
								if($a29>=1){
										$q++;
								}
								if($a30>=1){
										$q++;
								}

								$tt = 32;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't3%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}


										?>

										<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
											<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
										<center>
										<?php


										if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
										if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
													echo "<z>/".$tt."</z>";


											?>
										</a>
										<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
											<a href="criteria3/c3.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch311" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch312" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch313" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch314" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch315" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch316" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.2.2 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch322" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.2.3 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch323" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.3.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch331" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.3.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch332" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.3.3 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch333" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.3.4 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch334" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.1 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch341" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.2 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch342" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.3 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch343" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.4 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch344" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.5 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch345" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.6 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch346" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.6(b) => <?php $temp = $a18b; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch346b" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.6(c) => <?php $temp = $a18c; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch346c" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.7 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch347" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.4.8 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch348" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.5.1 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch351" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.5.2 => <?php $temp = $a22; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch352" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.5.3 => <?php $temp = $a23; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch353" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.6.1 => <?php $temp = $a24; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch361" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.6.2 => <?php $temp = $a25; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch362" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.6.3 => <?php $temp = $a26; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch363" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.6.4 => <?php $temp = $a27; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch364" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.7.1 => <?php $temp = $a28; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch371" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.7.2 => <?php $temp = $a29; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria3/c3.php#ch372" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">3.7.3 => <?php $temp = $a30; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
										</div>
										</center>
										</div>

										<?php


/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
              //      echo $q."/30";

                ?>
            </td>
            <td
                <?php

                    $c1 = "select distinct * from t4_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t4_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t4_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t4_2_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t4_2_1 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t4_2_2 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t4_2_3 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t4_2_4 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t4_2_5 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t4_2_6 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t4_2_7 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t4_3_1 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t4_3_2 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t4_3_3 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t4_3_4 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t4_4_1 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t4_4_2 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }

										$tt = 17;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't4%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}


																	?>

																	<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
																		<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
																	<center>
																	<?php


																	if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
																	if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																				echo "<z>/".$tt."</z>";


																		?>
																	</a>
																	<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
																		<a href="criteria4/c4.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch411" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch412" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch413" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch414" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.1 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch421" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.2 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch422" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.3 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch423" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.4 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch424" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.5 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch425" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.6 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch426" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.2.7 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch427" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.3.1 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch431" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.3.2 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch432" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.3.3 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch433" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.3.4 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch434" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.4.1 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria4/c4.php#ch441" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">4.4.2 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																	</div>
																	</center>
																	</div>

																	<?php



/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
              //      echo $q."/17";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t5_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t5_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t5_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t5_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t5_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t5_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t5_2_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t5_2_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t5_2_3 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t5_3_1 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t5_3_2 where Username LIKE '".$row['username']."'";
										$c12= "select distinct * from t5_3_3 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t5_4_1 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t5_4_2 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t5_4_3 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
										$r15 = mysqli_query($connection,$c15);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
										$a15 = mysqli_num_rows($r15);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
										if($a15>=1){
                        $q++;
                    }

										$tt = 15;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't5%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}

										?>

										<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
											<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
										<center>
										<?php


										if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
										if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
													echo "<z>/".$tt."</z>";


											?>
										</a>
										<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
											<a href="criteria5/c5.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch511" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch512" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch513" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch514" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch515" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch516" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.2.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch521" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.2.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch522" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.2.3 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch523" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.3.1 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch531" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.3.2 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch532" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.3.3 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch533" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.4.1 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch541" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.4.2 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria5/c5.php#ch542" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">5.4.3 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
										</div>
										</center>
										</div>

										<?php



/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank" > '.$q.'/';
										}

										echo $tt;
*/


//                    echo $q."/14";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t6_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t6_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t6_2_1 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t6_2_2 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t6_2_3 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t6_2_4 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t6_3_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t6_3_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t6_3_3_1 where Username LIKE '".$row['username']."'";
										$c9b = "select distinct * from t6_3_3_2 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t6_3_4 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t6_3_5 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t6_4_1 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t6_4_2 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t6_4_3 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t6_5_1 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t6_5_2 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t6_5_3 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t6_5_4 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t6_5_5 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
										$r9b = mysqli_query($connection,$c9b);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
										$a9b = mysqli_num_rows($r9b);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1 || $a9b>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }

										$tt = 19;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't6%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}

										?>

										<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
											<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
										<center>
										<?php


										if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
										if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
													echo "<z>/".$tt."</z>";


											?>
										</a>
										<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
											<a href="criteria6/c6.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch611" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch612" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.2.1 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch621" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.2.2 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch622" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.2.3 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch623" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.2.4 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch624" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.3.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch631" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.3.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch632" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.3.3 => <?php $temp = $a9+$a9b; if($temp>0) echo "<x>".$a9."+".$a9b."</x>"; else echo "<w>".$a9."+".$a9b."</w>"; ?></a>
											<a href="criteria6/c6.php#ch633" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.3.4 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch633" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.3.5 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch634" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.4.1 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch641" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.4.2 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch642" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.4.3 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch643" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.5.1 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch651" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.5.2 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch652" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.5.3 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch653" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.5.4 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
											<a href="criteria6/c6.php#ch654" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">6.5.5 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
										</div>
										</center>
										</div>

										<?php

/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;

*/

//                    echo $q."/19";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t7_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t7_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t7_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t7_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t7_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t7_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t7_1_7 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t7_1_8 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t7_1_9 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t7_1_10 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t7_1_11 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t7_1_12 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t7_1_13 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t7_1_14 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t7_1_15 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t7_1_16 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t7_1_17 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t7_1_18 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t7_1_19 where Username LIKE '".$row['username']."'";
                    $c20= "select distinct * from t7_2_1 where Username LIKE '".$row['username']."'";
                    $c21= "select distinct * from t7_3_1 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20 = mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
										if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }

										$tt = 21;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't7%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										if($q+$na>=$tt){
											echo ' class="complete"> ';
										}else if($q+$na>0){
											echo ' class="partial"> ';
										}else{
											echo ' class="blank"> ';
										}


																	?>

																	<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
																		<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
																	<center>
																	<?php


																	if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
																	if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																				echo "<z>/".$tt."</z>";


																		?>
																	</a>
																	<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
																		<a href="criteria7/c7.php" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch711" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch712" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch713" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch714" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch715" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch716" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.7 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch717" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.8 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch718" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.9 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch719" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.10 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7110" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.11 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7111" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.12 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7112" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.13 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7113" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.14 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7114" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.15 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7115" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.16 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7116" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.17 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7117" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.18 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7118" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.1.19 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch7119" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.2.1 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																		<a href="criteria7/c7.php#ch731" target="_blank" style="text-decoration:none; color:black;" class="w3-bar-item w3-button">7.3.1 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
																	</div>
																	</center>
																	</div>

																	<?php


/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/


//                    echo $q."/20";

                ?>
            </td>



						<td style="display:none;"
		<?php

				$c1 = "select distinct * from t6_1_1 where Username LIKE '".$row['username']."'";
				$c2 = "select distinct * from t6_1_2 where Username LIKE '".$row['username']."'";
				$c3 = "select distinct * from t6_2_1 where Username LIKE '".$row['username']."'";
				$c4 = "select distinct * from t6_2_2 where Username LIKE '".$row['username']."'";
				$c5 = "select distinct * from t6_2_3 where Username LIKE '".$row['username']."'";
				$c6 = "select distinct * from t6_2_4 where Username LIKE '".$row['username']."'";
				$c7 = "select distinct * from t6_3_1 where Username LIKE '".$row['username']."'";
				$c8 = "select distinct * from t6_3_2 where Username LIKE '".$row['username']."'";
				$c9 = "select distinct * from t6_3_3 where Username LIKE '".$row['username']."'";
				$c10= "select distinct * from t6_3_4 where Username LIKE '".$row['username']."'";
				$c11= "select distinct * from t6_3_5 where Username LIKE '".$row['username']."'";
				$c12= "select distinct * from t6_4_1 where Username LIKE '".$row['username']."'";
				$c13= "select distinct * from t6_4_2 where Username LIKE '".$row['username']."'";
				$c14= "select distinct * from t6_4_3 where Username LIKE '".$row['username']."'";
				$c15= "select distinct * from t6_5_1 where Username LIKE '".$row['username']."'";
				$c16= "select distinct * from t6_5_2 where Username LIKE '".$row['username']."'";
				$c17= "select distinct * from t6_5_3 where Username LIKE '".$row['username']."'";
				$c18= "select distinct * from t6_5_4 where Username LIKE '".$row['username']."'";
				$c19= "select distinct * from t6_5_5 where Username LIKE '".$row['username']."'";

				$r1 = mysqli_query($connection,$c1);
				$r2 = mysqli_query($connection,$c2);
				$r3 = mysqli_query($connection,$c3);
				$r4 = mysqli_query($connection,$c4);
				$r5 = mysqli_query($connection,$c5);
				$r6 = mysqli_query($connection,$c6);
				$r7 = mysqli_query($connection,$c7);
				$r8 = mysqli_query($connection,$c8);
				$r9 = mysqli_query($connection,$c9);
				$r10= mysqli_query($connection,$c10);
				$r11 = mysqli_query($connection,$c11);
				$r12 = mysqli_query($connection,$c12);
				$r13 = mysqli_query($connection,$c13);
				$r14 = mysqli_query($connection,$c14);
				$r15= mysqli_query($connection,$c15);
				$r16 = mysqli_query($connection,$c16);
				$r17 = mysqli_query($connection,$c17);
				$r18 = mysqli_query($connection,$c18);
				$r19 = mysqli_query($connection,$c19);

				$a1 = mysqli_num_rows($r1);
				$a2 = mysqli_num_rows($r2);
				$a3 = mysqli_num_rows($r3);
				$a4 = mysqli_num_rows($r4);
				$a5 = mysqli_num_rows($r5);
				$a6 = mysqli_num_rows($r6);
				$a7 = mysqli_num_rows($r7);
				$a8 = mysqli_num_rows($r8);
				$a9 = mysqli_num_rows($r9);
				$a10= mysqli_num_rows($r10);
				$a11 = mysqli_num_rows($r11);
				$a12 = mysqli_num_rows($r12);
				$a13 = mysqli_num_rows($r13);
				$a14 = mysqli_num_rows($r14);
				$a15 = mysqli_num_rows($r15);
				$a16 = mysqli_num_rows($r16);
				$a17 = mysqli_num_rows($r17);
				$a18 = mysqli_num_rows($r18);
				$a19 = mysqli_num_rows($r19);

				$q=0;

				if($a1>=1){
						$q++;
				}
				if($a2>=1){
						$q++;
				}
				if($a3>=1){
						$q++;
				}
				if($a4>=1){
						$q++;
				}
				if($a5>=1){
						$q++;
				}
				if($a6>=1){
						$q++;
				}
				if($a7>=1){
						$q++;
				}
				if($a8>=1){
						$q++;
				}
				if($a9>=1){
						$q++;
				}
				if($a10>=1){
						$q++;
				}
				if($a11>=1){
						$q++;
				}
				if($a12>=1){
						$q++;
				}
				if($a13>=1){
						$q++;
				}
				if($a14>=1){
						$q++;
				}
				if($a15>=1){
						$q++;
				}
				if($a16>=1){
						$q++;
				}
				if($a17>=1){
						$q++;
				}
				if($a18>=1){
						$q++;
				}
				if($a19>=1){
						$q++;
				}

				$tt = 19;

//				$prog_na = "select * FROM help_desk WHERE (msg_from LIKE '".$row['username']."' AND msg_to LIKE 'iqac') OR (msg_to LIKE '".$row['username']."' AND msg_from LIKE 'iqac') ";

				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$prog_na = "select * FROM help_desk WHERE msg_from LIKE '".$row['username']."' AND msg_to LIKE 'iqac' ";
				$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

				$unseen = 0;
				$seen = 0;
				$replied = 0;

				while ($row_na = $res_na->fetch_assoc()) {
					$na = $row_na['seen'];
					//$rep = $[];

					if($na==1){
						$seen++;
					}else{
						$unseen++;
					}
				}




				echo ' class="blank"> ';

				$urg = "";
//				echo $prog_na;

				//echo $prog_na;

				if($unseen>0){
					$urg = "<d style='font-weight:bold; color:red;'>unseen*</d>";
				}else if($seen>0){
					$urg = "<d style='font-weight:bold; color:green;'>seen</d>";
				}

				echo "<a style='font-size:15px;' href='../helpdesk/chat_reply_to.php?to=".$row['username']."'> "." chat "."$urg"." </a>";

/*
	if($q+$na==$tt){
		echo ' class="complete"> ';
	}else if($q+$na>0){
		echo ' class="partial"> ';
		}else{
		echo ' class="blank"> ';
	}

	if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
	if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
				echo "<z>/".$tt."</z>";

*/
/*
				if($q==$tt){
					echo ' class="complete"> '.$q.'/';
				}else if($q>0){
					echo ' class="partial"> '.$q.'/';
				}else{
					echo ' class="blank"> '.$q.'/';
				}

				echo $tt;

*/

//                    echo $q."/19";

		?>
</td>


<td


	<?php

	$eval1 = "SELECT COUNT(*) FROM eval_report WHERE Username LIKE '".$row['username']."' ";
	$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

	while ($eval_row1 = $eval_res1->fetch_assoc()) {
		$total_filled = $eval_row1['COUNT(*)'];
	}

	$eval1 = "SELECT COUNT(*) FROM sub_department WHERE Username LIKE '".$row['username']."' ";
	$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

	while ($eval_row1 = $eval_res1->fetch_assoc()) {
		$total_added = $eval_row1['COUNT(*)'];
	}



	$eval1 = "SELECT * FROM eval_report AS ER RIGHT OUTER JOIN sub_department AS SD ON SD.id = ER.sid WHERE SD.Username LIKE '".$row['username']."'";
	$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

	//echo $eval1."<br>";

	$hover_data = "";

//							$x = '<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">7.1.1</a>';

$eval_c=0;
$r_t=0;

	while ($eval_row1 = $eval_res1->fetch_assoc()) {
		//print_r($eval_row1);
		$eval_c=0;
		$r_t=0;
		foreach ($eval_row1 as $mm) {
			$r_t++;
			//echo $mm."<br>";
			if($mm==""){

			}else{
				$eval_c++;
			}
		}

		$eval_c--;
		$r_t -= 2;
		if($eval_c>=33){
			$x = "<x>".$eval_c."</x>/<z>".$r_t."</z>";
		}else{
			$x = "<w>".$eval_c."</w>/<z>".$r_t."</z>";
		}
		//echo $eval_row1[2];
		$hover_data .= '<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="'.urldecode($eval_row1['sub_dept']).'">'.$x.'</a>';
		//echo "(".$eval_c."/".$r_t.")";
		//$hover_data = $eval_row1['COUNT(*)'];
	}

	if($r_t==0){
		echo ">";
	}else if($total_filled>=$total_added){
		echo "class='complete' >";
	}else{
		echo "class='partial' >";
	}


	?>
	<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
		<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
	<center>
	<?php

	if($total_filled==0){
		echo "<w>".$total_filled."</w>";
	}else if($total_filled>=$total_added){
		echo "<x>".$total_filled."</x>";
	}else{
		echo "<w>".$total_filled."</w>";
	}

	echo "<z> / ".$total_added."</z>";

	?>

	<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
		<?php echo $hover_data; ?>
	</div>
	</center>
	</div>


</td>




						<td
							<?php

									$c1 = "select distinct * from t9_1_1 where Username LIKE '".$row['username']."'";
									$c2 = "select distinct * from t9_1_2 where Username LIKE '".$row['username']."'";
									$c3 = "select distinct * from t9_2_1 where Username LIKE '".$row['username']."'";
									$c4 = "select distinct * from t9_2_2 where Username LIKE '".$row['username']."'";
									$c5 = "select distinct * from t9_2_3 where Username LIKE '".$row['username']."'";
									$c6 = "select distinct * from t9_3_2a where Username LIKE '".$row['username']."'";
									$c7 = "select distinct * from t9_3_2b where Username LIKE '".$row['username']."'";
									$c8 = "select distinct * from t9_3_3 where Username LIKE '".$row['username']."'";
									$c9 = "select distinct * from t9_4_1 where Username LIKE '".$row['username']."'";
									$c10= "select distinct * from t9_4_2 where Username LIKE '".$row['username']."'";

									$r1 = mysqli_query($connection,$c1);
									$r2 = mysqli_query($connection,$c2);
									$r3 = mysqli_query($connection,$c3);
									$r4 = mysqli_query($connection,$c4);
									$r5 = mysqli_query($connection,$c5);
									$r6 = mysqli_query($connection,$c6);
									$r7 = mysqli_query($connection,$c7);
									$r8 = mysqli_query($connection,$c8);
									$r9 = mysqli_query($connection,$c9);
									$r10= mysqli_query($connection,$c10);

									$a1 = mysqli_num_rows($r1);
									$a2 = mysqli_num_rows($r2);
									$a3 = mysqli_num_rows($r3);
									$a4 = mysqli_num_rows($r4);
									$a5 = mysqli_num_rows($r5);
									$a6 = mysqli_num_rows($r6);
									$a7 = mysqli_num_rows($r7);
									$a8 = mysqli_num_rows($r8);
									$a9 = mysqli_num_rows($r9);
									$a10= mysqli_num_rows($r10);

									$q=0;

									if($a1>=1){
											$q++;
									}
									if($a2>=1){
											$q++;
									}
									if($a3>=1){
											$q++;
									}
									if($a4>=1){
											$q++;
									}
									if($a5>=1){
											$q++;
									}
									if($a6>=1){
											$q++;
									}
									if($a7>=1){
											$q++;
									}
									if($a8>=1){
											$q++;
									}
									if($a9>=1){
											$q++;
									}
									if($a10>=1){
											$q++;
									}

									$tt = 10;

									$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't7%' ";
									$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

									while ($row_na = $res_na->fetch_assoc()) {
										$na = 0;
									}

						if($q+$na>=$tt){
							echo ' class="complete"> ';
						}else if($q+$na>0){
							echo ' class="partial"> ';
						}else{
							echo ' class="blank"> ';
						}


													?>

													<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
														<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
													<center>
													<?php


													if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
													if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																echo "<z>/".$tt."</z>";


														?>
													</a>
													<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.2.1 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.2.2 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.2.3 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.3.2(a) => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.2.3(b) => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.3.3 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.4.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button" title="">9.4.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
													</div>
													</center>
													</div>

													<?php

/*
									if($q==$tt){
										echo ' class="complete"> '.$q.'/';
									}else if($q>0){
										echo ' class="partial"> '.$q.'/';
									}else{
										echo ' class="blank"> '.$q.'/';
									}

									echo $tt;
*/


//                    echo $q."/20";

							?>

						</td>




        </tr>

				<?php
							} ?>


        <?php
            }
        ?>

    </table>


<script>
function maintain_session(){
	var xhttp,res;
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){

				 if (this.readyState == 4 && this.status == 200) {
						 console.log(this.responseText);
									// alert(this.responseText);
				}
			};
						 xhttp.open("GET", "../profile/maintain_session.php?page=progress.php", true);
					 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				 xhttp.send();
}

setInterval(function() { maintain_session(); }, 800000);

</script>

</body>
</html>
