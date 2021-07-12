<?php session_start();
    include('../credential.php');
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    
    $user = '';
    $_SESSION['msg']='';
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            padding: 0px;
            margin: 0px;
        }
        #header{
            width: 100%;
            background-color: #0E3778;
            padding-bottom: 20px;
            height: 160px;
            color: #fff;
            font-size: 28px;
            font-weight: bold;
        }
        #topLink{
            width: 100%;
            background-color: #0E3778;
            padding-bottom: 5px;
            height: 30px;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            padding-left: 0px;

        }
        #topLink a{
            color: #fff;
            text-decoration: none;
            margin-left: 35px;
            
        }
        .Hidden{
            display: none;
        }
        .containerTable{
            margin-left: 7px;
            margin-right: 7px;
        }
        .deptName{
            text-align: center;
            color: #0E3778;
            font-weight: bold;
        }
        .deptName:hover{
            text-decoration: underline;
        }
        #topBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				left: 50px;
				z-index: 99;
				height: 39px;
				width: 39px;
				font-size: 15px;
				border: none;
				outline: none;
				background-color: #0E3778;
				color: white;
				cursor: pointer;
				padding: 3px;
				border-radius: 50%;
            }

             .filled{
			color: green;
			font-weight: bold;
		}
		 .notfilled{
			color: red;
			font-weight: bold;
		}
		 .notApplicable{
			color: orange;
			font-weight: bold;
		}

    </style>
<link rel="icon" href="./logo.png">
<title>SSR | REPORT</title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
    </div>
    <script>
    // To go back where user came from
      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>
    <div id="topLink">
        <a onclick="goBack()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Go to Previous Page">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Go to Next Page">NEXT</a>
    </div>
    <br><br>
    <h2 style="font-weight: bold; text-align: center; background-color: #fff; position: sticky; top: 0;">Self Study Report</h2><br>
    <div class="containerTable">
        <!-- 

                               $query = "SELECT*FROM admins ORDER BY username";
                               $retreive = mysqli_query($connection, $query);
                               while($result = $retreive->fetch_assoc() ){
                                   $row = $result['name'];
                                   $val = $result['username'];
                                   echo "<option value='$val'>$row</option>";
                            }
         -->
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="10">DEPARTMENT WISE PROGRESS REPORT</th>
                </tr>
                <tr>
                    <th style='text-align: center;'>DEPARTMENT NAME</th>
                    <th>CRITERIA 1</th>
                    <th>CRITERIA 2</th>
                    <th>CRITERIA 3</th>
                    <th>CRITERIA 4</th>
                    <th>CRITERIA 5</th>
                    <th>CRITERIA 6</th>
                    <th>CRITERIA 7</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query = "SELECT*FROM admins ORDER BY username DESC";
                    $retreiveAdmin = mysqli_query($connection, $query);               
                    while($getAdmin = $retreiveAdmin->fetch_assoc()){
                        $name = $getAdmin['name'];
                        $user = $getAdmin['username'];
                        $count1 = 0;
						$count2 = 0;
					    $count3 = 0;
					    $count4 = 0;
					    $count5 = 0;
					    $count6 = 0;
					    $count7 = 0;
					    $count8 = 0;
						$count1Filled = 0;
						$count1NotFilled = 0;
						$count1NotApplicable = 0;

						$count2Filled = 0;
						$count2NotFilled = 0;
						$count2NotApplicable = 0;
						$count3Filled = 0;
						$count3NotFilled = 0;
						$count3NotApplicable = 0;
						$count4Filled = 0;
						$count4NotFilled = 0;
						$count4NotApplicable = 0;
						$count5Filled = 0;
						$count5NotFilled = 0;
						$count5NotApplicable = 0;
						$count6Filled = 0;
						$count6NotFilled = 0;
						$count6NotApplicable = 0;
						$count7Filled = 0;
						$count7NotFilled = 0;
						$count7NotApplicable = 0;

						$count8Filled = 0;
						$count8NotFilled = 0;
						$count8NotApplicable = 0;

						$nac111 = 0;
						$nac112 = 0;
						$nac113 = 0;
						$nac114 = 0;
						$nac121 = 0;
						$nac122 = 0;
						$nac131 = 0;
						$nac132 = 0;
						$nac133 = 0;
						$nac134 = 0;
						$nac141 = 0;
						$nac142 = 0;

				        $query = "SELECT table_name  FROM information_schema.tables  WHERE table_schema = '$dbname'";
						$fetch = mysqli_query($connection, $query);
						while($fetchData = $fetch->fetch_assoc()){
							$fetchName = $fetchData['table_name'];
							if(strpos($fetchName, 'ssr_m1') === 0){
								$count1++;
							}else if(strpos($fetchName, 'ssr_m2') === 0){
								$count2++;
							}else if(strpos($fetchName, 'ssr_m3') === 0){
								$count3++;
							}else if(strpos($fetchName, 'ssr_m4') === 0){
								$count4++;
							}else if(strpos($fetchName, 'ssr_m5') === 0){
								$count5++;
							}else if(strpos($fetchName, 'ssr_m6') === 0){
								$count6++;
							}else if(strpos($fetchName, 'ssr_m7') === 0){
								$count7++;
							}else if(strpos($fetchName, 'ssr_m8') === 0){
								$count8++;
							}
						}
					  $getc111 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc111)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc112 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc112)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc113 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc113)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc114 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc114)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc121 = mysqli_query($connection, "SELECT*FROM ssr_m1_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc121)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc122 = mysqli_query($connection, "SELECT*FROM ssr_m1_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc122)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc131 = mysqli_query($connection, "SELECT*FROM ssr_m1_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc131)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc132 = mysqli_query($connection, "SELECT*FROM ssr_m1_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc132)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc133 = mysqli_query($connection, "SELECT*FROM ssr_m1_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc133)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc134 = mysqli_query($connection, "SELECT*FROM ssr_m1_3_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc134)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc141 = mysqli_query($connection, "SELECT*FROM ssr_m1_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc141)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }
					  $getc142 = mysqli_query($connection, "SELECT*FROM ssr_m1_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc142)>0){
						$count1Filled+=1;
					  }else{
						  $count1NotFilled+=1;
					  }

					  $getc211 = mysqli_query($connection, "SELECT*FROM ssr_m2_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc211)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc212 = mysqli_query($connection, "SELECT*FROM ssr_m2_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc212)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc213 = mysqli_query($connection, "SELECT*FROM ssr_m2_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc213)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc221 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc221)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc222 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc222)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc223 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc223)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc224 = mysqli_query($connection, "SELECT*FROM ssr_m2_2_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc224)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc231 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc231)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc232 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc232)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc233 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc233)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc234 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc234)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc235 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc235)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc236 = mysqli_query($connection, "SELECT*FROM ssr_m2_3_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc236)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc241 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc241)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc242 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc242)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc243 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc243)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc244 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc244)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc245 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc245)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc246 = mysqli_query($connection, "SELECT*FROM ssr_m2_4_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc246)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc251 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc251)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc252 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc252)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc253 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc253)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc254 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc254)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc255 = mysqli_query($connection, "SELECT*FROM ssr_m2_5_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc255)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc261 = mysqli_query($connection, "SELECT*FROM ssr_m2_6_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc261)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc262 = mysqli_query($connection, "SELECT*FROM ssr_m2_6_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc262)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc263 = mysqli_query($connection, "SELECT*FROM ssr_m2_6_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc263)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc271 = mysqli_query($connection, "SELECT*FROM ssr_m2_7_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc271)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc272 = mysqli_query($connection, "SELECT*FROM ssr_m2_7_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc272)>0){
						$count2Filled+=1;
					  }else{
						  $count2NotFilled+=1;
					  }
					  $getc311 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc311)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc312 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc312)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc313 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc313)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc314 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc314)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc315 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc315)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc316 = mysqli_query($connection, "SELECT*FROM ssr_m3_1_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc316)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc321 = mysqli_query($connection, "SELECT*FROM ssr_m3_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc321)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc322 = mysqli_query($connection, "SELECT*FROM ssr_m3_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc322)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc323 = mysqli_query($connection, "SELECT*FROM ssr_m3_2_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc323)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc331 = mysqli_query($connection, "SELECT*FROM ssr_m3_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc331)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc332 = mysqli_query($connection, "SELECT*FROM ssr_m3_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc332)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc333 = mysqli_query($connection, "SELECT*FROM ssr_m3_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc333)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc334 = mysqli_query($connection, "SELECT*FROM ssr_m3_3_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc334)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc335 = mysqli_query($connection, "SELECT*FROM ssr_m3_3_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc335)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc341 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc341)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc342 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc342)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc343 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc343)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc344 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc344)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc345 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc345)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc346 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc346)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc347 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_7 WHERE username = '$user'");
					  if(mysqli_num_rows($getc347)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc348 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_8 WHERE username = '$user'");
					  if(mysqli_num_rows($getc348)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc349 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_9 WHERE username = '$user'");
					  if(mysqli_num_rows($getc349)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc3410 = mysqli_query($connection, "SELECT*FROM ssr_m3_4_10 WHERE username = '$user'");
					  if(mysqli_num_rows($getc3410)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc351 = mysqli_query($connection, "SELECT*FROM ssr_m3_5_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc351)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc352 = mysqli_query($connection, "SELECT*FROM ssr_m3_5_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc352)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc361 = mysqli_query($connection, "SELECT*FROM ssr_m3_6_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc361)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc362 = mysqli_query($connection, "SELECT*FROM ssr_m3_6_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc362)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc363 = mysqli_query($connection, "SELECT*FROM ssr_m3_6_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc363)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc364 = mysqli_query($connection, "SELECT*FROM ssr_m3_6_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc364)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc371 = mysqli_query($connection, "SELECT*FROM ssr_m3_7_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc371)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc372 = mysqli_query($connection, "SELECT*FROM ssr_m3_7_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc372)>0){
						$count3Filled+=1;
					  }else{
						  $count3NotFilled+=1;
					  }
					  $getc411 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc411)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc412 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc412)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc413 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc413)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc414 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc414)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc415 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc415)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc416 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc416)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc417 = mysqli_query($connection, "SELECT*FROM ssr_m4_1_7 WHERE username = '$user'");
					  if(mysqli_num_rows($getc417)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc421 = mysqli_query($connection, "SELECT*FROM ssr_m4_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc421)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc422 = mysqli_query($connection, "SELECT*FROM ssr_m4_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc422)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc423 = mysqli_query($connection, "SELECT*FROM ssr_m4_2_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc423)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc424 = mysqli_query($connection, "SELECT*FROM ssr_m4_2_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc424)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc431 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc431)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc432 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc432)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc433 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc433)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc434 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc434)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc435 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc435)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc436 = mysqli_query($connection, "SELECT*FROM ssr_m4_3_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc436)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc441 = mysqli_query($connection, "SELECT*FROM ssr_m4_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc441)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc442 = mysqli_query($connection, "SELECT*FROM ssr_m4_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc442)>0){
						$count4Filled+=1;
					  }else{
						  $count4NotFilled+=1;
					  }
					  $getc511 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc511)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc512 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc512)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc513 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc513)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc514 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc514)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc515 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc515)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc516 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc516)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc517 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_7 WHERE username = '$user'");
					  if(mysqli_num_rows($getc517)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc518 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_8 WHERE username = '$user'");
					  if(mysqli_num_rows($getc518)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc519 = mysqli_query($connection, "SELECT*FROM ssr_m5_1_9 WHERE username = '$user'");
					  if(mysqli_num_rows($getc519)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc521 = mysqli_query($connection, "SELECT*FROM ssr_m5_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc521)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc522 = mysqli_query($connection, "SELECT*FROM ssr_m5_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc522)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc523 = mysqli_query($connection, "SELECT*FROM ssr_m5_2_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc523)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc524 = mysqli_query($connection, "SELECT*FROM ssr_m5_2_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc524)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc525 = mysqli_query($connection, "SELECT*FROM ssr_m5_2_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc525)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc531 = mysqli_query($connection, "SELECT*FROM ssr_m5_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc531)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc532 = mysqli_query($connection, "SELECT*FROM ssr_m5_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc532)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc533 = mysqli_query($connection, "SELECT*FROM ssr_m5_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc533)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc541 = mysqli_query($connection, "SELECT*FROM ssr_m5_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc541)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc542 = mysqli_query($connection, "SELECT*FROM ssr_m5_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc542)>0){
						$count5Filled+=1;
					  }else{
						  $count5NotFilled+=1;
					  }
					  $getc611 = mysqli_query($connection, "SELECT*FROM ssr_m6_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc611)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc612 = mysqli_query($connection, "SELECT*FROM ssr_m6_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc612)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc621 = mysqli_query($connection, "SELECT*FROM ssr_m6_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc621)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc622 = mysqli_query($connection, "SELECT*FROM ssr_m6_2_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc622)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc623 = mysqli_query($connection, "SELECT*FROM ssr_m6_2_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc623)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc631 = mysqli_query($connection, "SELECT*FROM ssr_m6_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc631)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc632 = mysqli_query($connection, "SELECT*FROM ssr_m6_3_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc632)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc633 = mysqli_query($connection, "SELECT*FROM ssr_m6_3_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc633)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc634 = mysqli_query($connection, "SELECT*FROM ssr_m6_3_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc634)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc641 = mysqli_query($connection, "SELECT*FROM ssr_m6_4_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc641)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc642 = mysqli_query($connection, "SELECT*FROM ssr_m6_4_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc642)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc643 = mysqli_query($connection, "SELECT*FROM ssr_m6_4_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc643)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc644 = mysqli_query($connection, "SELECT*FROM ssr_m6_4_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc644)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc651 = mysqli_query($connection, "SELECT*FROM ssr_m6_5_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc651)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc652 = mysqli_query($connection, "SELECT*FROM ssr_m6_5_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc652)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc653 = mysqli_query($connection, "SELECT*FROM ssr_m6_5_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc653)>0){
						$count6Filled+=1;
					  }else{
						  $count6NotFilled+=1;
					  }
					  $getc711 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc711)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc712 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_2 WHERE username = '$user'");
					  if(mysqli_num_rows($getc712)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc713 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_3 WHERE username = '$user'");
					  if(mysqli_num_rows($getc713)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc714 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_4 WHERE username = '$user'");
					  if(mysqli_num_rows($getc714)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc715 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_5 WHERE username = '$user'");
					  if(mysqli_num_rows($getc715)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc716 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_6 WHERE username = '$user'");
					  if(mysqli_num_rows($getc716)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc717 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_7 WHERE username = '$user'");
					  if(mysqli_num_rows($getc717)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc718 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_8 WHERE username = '$user'");
					  if(mysqli_num_rows($getc718)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc719 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_9 WHERE username = '$user'");
					  if(mysqli_num_rows($getc719)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc7110 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_10 WHERE username = '$user'");
					  if(mysqli_num_rows($getc7110)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc7111 = mysqli_query($connection, "SELECT*FROM ssr_m7_1_11 WHERE username = '$user'");
					  if(mysqli_num_rows($getc7111)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc721 = mysqli_query($connection, "SELECT*FROM ssr_m7_2_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc721)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }
					  $getc731 = mysqli_query($connection, "SELECT*FROM ssr_m7_3_1 WHERE username = '$user'");
					  if(mysqli_num_rows($getc731)>0){
						$count7Filled+=1;
					  }else{
						  $count7NotFilled+=1;
					  }

                      
					  $getNA111 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_1_1'");
					  $nac111 = mysqli_num_rows($getNA111);
					  $getNA112 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_1_2'");
					  $nac112 = mysqli_num_rows($getNA112);
					  $getNA113 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_1_3'");
					  $nac113 = mysqli_num_rows($getNA113);
					  $getNA114 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_1_4'");
					  $nac114 = mysqli_num_rows($getNA114);
					  $getNA121 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_2_1'");
					  $nac121 = mysqli_num_rows($getNA121);
					  $getNA122 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_2_2'");
					  $nac122 = mysqli_num_rows($getNA122);
					  $getNA131 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_3_1'");
					  $nac131 = mysqli_num_rows($getNA131);
					  $getNA132 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_3_2'");
					  $nac132 = mysqli_num_rows($getNA132);
					  $getNA133 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_3_3'");
					  $nac133 = mysqli_num_rows($getNA133);
					  $getNA134 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_3_4'");
					  $nac134 = mysqli_num_rows($getNA134);
					  $getNA141 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_4_1'");
					  $nac141 = mysqli_num_rows($getNA141);
					  $getNA142 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section = 'ssr_m1_4_2'");
					  $nac111 = mysqli_num_rows($getNA142);
					  $fetchna2 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m2%'");
					  $na2 = mysqli_num_rows($fetchna2);
					  $fetchna3 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m3%'");
					  $na3 = mysqli_num_rows($fetchna3);
					  $fetchna4 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m4%'");
					  $na4 = mysqli_num_rows($fetchna4);
					  $fetchna5 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m5%'");
					  $na5 = mysqli_num_rows($fetchna5);
					  $fetchna6 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m6%'");
					  $na6 = mysqli_num_rows($fetchna6);
					  $fetchna7 = mysqli_query($connection, "SELECT*FROM not_applicable WHERE username = '$user' AND section LIKE 'ssr_m7%'");
					  $na7 = mysqli_num_rows($fetchna7);

					  if($name != 'Directorate of Distance Education'){
						  $count1NotApplicable++;
					  }else if($nac111>0){
						  $count1NotApplicable++;
					  }else if($nac112>0){
						$count1NotApplicable++;
					}else if($nac113>0){
						$count1NotApplicable++;
					}else if($nac114>0){
						$count1NotApplicable++;
					}else if($nac121>0){
						$count1NotApplicable++;
					}else if($nac122>0){
						$count1NotApplicable++;
					}else if($nac131>0){
						$count1NotApplicable++;
					}else if($nac132>0){
						$count1NotApplicable++;
					}else if($nac133>0){
						$count1NotApplicable++;
					}else if($nac134>0){
						$count1NotApplicable++;
					}else if($nac141>0){
						$count1NotApplicable++;
					}else if($nac142>0){
						$count1NotApplicable++;
					}else if($na2>0){
						$count2NotApplicable = $count2NotApplicable + $na2;
					}else if($na3>0){
						$count3NotApplicable = $count3NotApplicable + $na3;
					}else if($na4>0){
						$count4NotApplicable = $count4NotApplicable + $na4;
					}else if($na5>0){
						$count5NotApplicable = $count5NotApplicable + $na5;
					}else if($na6>0){
						$count6NotApplicable = $count6NotApplicable + $na6;
					}else if($na7>0){
						$count7NotApplicable = $count7NotApplicable + $na7;
					}


                        echo "<tr><td class='deptName'>$name</td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='Criteria1/index.php''>$count1Filled</span>+<span class='notApplicable'>$count1NotApplicable</span>/$count1</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='Criteria2/index.php''>$count2Filled</span>+<span class='notApplicable'>$count2NotApplicable</span>/$count2</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='Criteria3/index.php''>$count3Filled</span>+<span class='notApplicable'>$count3NotApplicable</span>/$count3</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='Criteria4/index.php''>$count4Filled</span>+<span class='notApplicable'>$count4NotApplicable</span>/$count4</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='Criteria5/index.php''>$count5Filled</span>+<span class='notApplicable'>$count5NotApplicable</span>/$count5</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='ssr-c6/index.php''>$count6Filled</span>+<span class='notApplicable'>$count6NotApplicable</span>/$count6</a></td><td><span class='filled'><a href='gotodept.php?username=$user&name=$name&sec='ssr-c7/index.php''>$count7Filled</span>+<span class='notApplicable'>$count7NotApplicable</span>/$count7</a></td></tr>";
                    }
            ?>
            </tbody>
            </table>
        <br><br>
    </div>
    <?php $connection->close(); ?>
    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
    <button onclick="topFunction()" id="topBtn" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fa fa-arrow-up" style="color: white;font-size: 20px;"></i></button>
				<script>
				/*BACK TO TOP BUTTON */
					var mybutton = document.getElementById("topBtn");
					window.onscroll = function() {scrollFunction()};
					function scrollFunction() {
					if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
						mybutton.style.display = "block";
					} else {
						mybutton.style.display = "none";
					}
					}
					function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
					}
				</script>

</body>
</html>
