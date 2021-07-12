<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['username'])){
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
            background-color: #0E3778;
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
<title>DCS-2021</title>
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
                    <div style="font-size:26px; margin-top:20px; margin-left:30px; color:#FFF; font-family: 'Arial', 'Calibri';"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;font-family: 'Arial', 'Calibri';"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>




    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><!--<a href="../logout.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a>--></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name'])." | EXPORT DATA => (CSV/EXCEL FORMAT)";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><!--<a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a> --></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

<?php

?>



		<?php

				$query = "SHOW TABLES";
				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$res = mysqli_query($connection,$query);

		?>

<center>

      <script>
        var x=0;
      </script>


<br><br>
<!--
			<center style="font-size:20px;">

				To download/save data that you have filled select appropriate option among following and export it.

			</center>
-->

  <br>
        <select id="tbl_name" style="width:300px;" >
          <option value="programme">Programmes</option>
					<option value="course">Courses</option>
          <option value='dqac_1'>DQAC 1</option>
         <option value='dqac_2'>DQAC 2</option>
         <option value='dqac_3'>DQAC 3</option>
         <option value='dqac_4'>DQAC 4</option>
         <option value='dqac_5'>DQAC 5</option>
         <option value='dqac_6'>DQAC 6</option>
         <option value='dqac_remark'>DQAC REMARK</option>
          <option value='monthly_report_q1'> MONTHLY REPORT Q1</option>
          <option value='monthly_report_q2'> MONTHLY REPORT q2</option>
          <option value='monthly_report_q3'> MONTHLY REPORT q3</option>
          <option value='monthly_report_q4'> MONTHLY REPORT q4</option>
          <option value='monthly_report_q5'> MONTHLY REPORT q5</option>
          <option value='monthly_report_q6'> MONTHLY REPORT q6</option>
          <option value='monthly_report_q7'> MONTHLY REPORT q7</option>
          <option value='monthly_report_q8'> MONTHLY REPORT q8</option>
          <option value='monthly_report_q9'> MONTHLY REPORT q9</option>
          <option value='monthly_report_q10'> MONTHLY REPORT q10</option>
          <option value='monthly_report_q11'> MONTHLY REPORT q11</option>
          <option value='monthly_report_q12'> MONTHLY REPORT q12</option>
          <option value='monthly_report_q13'> MONTHLY REPORT q13</option>
          <option value='monthly_report_q14'> MONTHLY REPORT q14</option>
          <option value='monthly_report_q15'> MONTHLY REPORT q15</option>
          <option value='monthly_report_q16'> MONTHLY REPORT q16</option>
          <option value='monthly_report_q17'> MONTHLY REPORT q17</option>
          <option value='monthly_report_q18'> MONTHLY REPORT q18</option>
          <option value='monthly_report_q19'> MONTHLY REPORT q19</option>
          <option value='monthly_report_q20'> MONTHLY REPORT q20</option>
          <option value='monthly_report_q21'> MONTHLY REPORT q21</option>
          <option value='monthly_report_q22'> MONTHLY REPORT q22</option>
          <option value='monthly_report_q23'> MONTHLY REPORT q23</option>
          <option value='monthly_report_q24'> MONTHLY REPORT q24</option>
          <option value='monthly_report_q25'> MONTHLY REPORT q25</option>
          <option value='monthly_report_q26'> MONTHLY REPORT q26</option>
          <option value='monthly_report_q27'> MONTHLY REPORT q27</option>
          <option value='monthly_report_q28'> MONTHLY REPORT q28</option>
          <option value='monthly_report_q29'> MONTHLY REPORT q29</option>
          <option value='monthly_report_q30'> MONTHLY REPORT q30</option>
          <option value='monthly_report_q31'> MONTHLY REPORT q31</option>
          <option value='monthly_report_q32'> MONTHLY REPORT q32</option>
          <option value='monthly_report_q33'> MONTHLY REPORT q33</option>
          <option value='monthly_report_q34'> MONTHLY REPORT q34</option>
          <option value='monthly_report_q35'> MONTHLY REPORT q35</option>
          <option value='monthly_report_q36'> MONTHLY REPORT q36</option>
          <option value='monthly_report_q37'> MONTHLY REPORT q37</option>
          <option value='monthly_report_q38'> MONTHLY REPORT q38</option>
        
          <?php

          $h = 0;

          while($row = $res->fetch_assoc()){

            $h++;

            if($h<9){
              continue;
            }

            //echo "<br><br><br><br><br><br><br><br>";
            //print_r($row);
  					//$tbl = $row['Tables_in_NAC'];
            $tbl = $row['Tables_in_iqac_dcs'];

						if($tbl[0]!='t'){
							continue;
						}

          ?>
          <option value="<?php echo $tbl; ?>"><?php echo $tbl; ?></option>
          <?php
          }
          ?>
        </select>

        <script>

        </script>

<br><br>

					<!-- <input id="" type="button" value="BACK" onclick="window.history.back();"> -->

          <input type="button" value="EXPORT" onclick="export_csv()">

</center>

<script>

  function export_csv(){
    alert("exporting");
    var x = $("#tbl_name").val();
    window.open('export.php?table='+x, '_blank');
  }

</script>

</body>
</html>
