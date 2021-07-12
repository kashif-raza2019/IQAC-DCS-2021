<?php session_start();
    include('../credential.php');
    $adminname = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    $notice = "";

    if(!isset($_SESSION['name'])){
        header("Location: index.php");  
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
        .col-sm{
            margin: 20px!important;
        }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title>Developer Mode</title>
</head>
<body>
    <script>
            // Enabling Tooltip Everywhere
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                })
    </script>
    <div class="container">
        <div class="row">
            <div class="col-xl" style="text-align: center; margin-top: 10px;">
                <img src="../assets/images/davvlogo.png" width="120px" height="120px" style="margin-right: 10px; margin-bottom: 10px;"><h4>DEVI AHILYA VISHWAVIDYALAYA, INDORE (M.P.)</h4>
            </div>
        </div>
    </div>
    <h5 style="text-align: center;">Latest Version: <span style='color: green;'>(Primary)</span> <i><u>"2021.1.0"</u></i>  running from 01-07-2021</h5>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <button class="btn btn-primary" onclick="createTable();">Create SQL Table</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Create Form SSR</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Create Form AQAR</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Template with Header & Footer Only</button>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <button class="btn btn-primary">New Chat Deployment</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Please be Cautious, Any mistake can hamper the working of whole application">Run SQL Command</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Documentation</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Works before Deployment</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-sm">
                <button class="btn btn-primary" onclick="location.href='../logout.php'">Log-Out</button>
            </div>
        </div>
    </div><br><br>
    <script>
        function createTable(){
            var confirmData = confirm('ALERT: These operation is performed directly to Database at your own risk, proceed with caution!');
            if(confirmData){
                window.location.href="createSQLTable.php";
            }else{
                alert("Phew!!");
            }
        }
    </script>
    <!-- Footer -->
			<style>
				footer{
					width: 100%;
					margin: auto;
					background-color: #fff;
					height: 20px;
					text-align: center;
					font-size: 15px;
					font-family: 'verdana', 'sans serif';
					color: #A5A5A5;
				}

			</style>
			<footer>
				<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya,  Indore (M.P.)<br>Version 2021.1&nbsp; w.e.f. 01-07-2021</p>
			</footer><br>
    </body>
</html>
