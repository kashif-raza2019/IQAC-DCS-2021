<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
		header("Location: ../index.php");
}
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

        </style>
<link rel="icon" href="./logo.png">
<title>Access Log - Information Gathering System</title>
</head>
<body class="BACK">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>




    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a onclick="window.history.back();"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names'])." | ACCESS LOG";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

    <?php

      include("links.php");

    ?>

    <br><Br><Br>

<style>

  table{
    background-color: black;
    color: white;
    border-radius: 20px;
  }

  .heads_t{
    text-align: center;
  }

  th{
    border: 1px solid white;
    padding: 5px;
    width: 200px;
  }

  td{
    border: 1px solid white;
    padding: 5px;
  }

	tr:hover{
		background-color: #050505;
		cursor:default;
	}

</style>

  <center style="font-size:20px; font-weight:bold;">
    ACCESS LOG
  </center>



      <table style="margin:20px;">

<center>
        <tr class="heads_t">
          <th style="width:40px;">id</th>
          <th style="width:100px;">Username</th>
          <th style="width:100px;">IP Address</th>
          <th style="width:400px;">URL</th>
          <th style="width:400px;">POST DATA</th>
          <th>Timestamp</th>
        </tr>
        </center>

		<?php

				$query = "SELECT * FROM criteria_iqac_log.log order by id desc";
				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$res = mysqli_query($connection,$query);

//        print_r($res);


				while($row = $res->fetch_assoc()){

          ?>

        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['Username']; ?></td>
          <td><?php echo str_replace(":",": ",$row['ip']); ?></td>
					<td><?php
										$URL_AR = explode("/",$row['url']);
										//print_r($URL_AR);
										//echo count($URL_AR);
										for($uu = 2; $uu<count($URL_AR); $uu++){

											if($uu == count($URL_AR)-1){
												echo "<t style='color:orange; font-weight:bold;'>";
											}

											echo urldecode(str_replace("&","<br>",str_replace("?","<br><br><b style='color:red; font-weight:100; font-family:italic;'>",$URL_AR[$uu])));
											echo "<br>";

											if($uu == count($URL_AR)-1){
												echo "</t>";
											}
										}

//										echo [];
						   ?>
				  </td>
<?php /*
          <td><?php echo str_replace("&","<br>",str_replace("/","<br><t style='color:orange;'>",  str_replace("?","<br><br><b style='color:red;'>",urldecode($row['url']))) ); ?></td>
*/ ?>
          <td title="<?php echo str_replace("&amp;","<br>",urldecode(urldecode($row['post_rows']))); ?>"><?php echo str_replace("&amp;","<br>",substr(urldecode(urldecode($row['post_rows'])),0,400));?>  </td>
          <td><?php echo $row['timestamp']; ?></td>
        </tr>


          <?php
				}
		?>

      </table>


        <?php //header("Location: progress.php"); ?>

        <div id="right"></div>

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
						 xhttp.open("GET", "../profile/maintain_session.php?page=log.php", true);
					 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				 xhttp.send();
}

setInterval(function() { maintain_session(); }, 800000);

</script>

</body>
</html>
