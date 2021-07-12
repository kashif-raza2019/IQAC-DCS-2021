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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
        .containerTable{
            padding-right: 10%;
            padding-left: 10%;
        }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title>Developer Mode | Create SQL Table</title>
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
    <h5 style="text-align: center;">Create SQL Table</h5>
    <br>
    <h5 is="msgNotice"></h5>
    <br>
    <div class="containerTable">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Table Name</th>
                    <th>Table Columns</th>
                    <th>Date of Creation</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><input type="text" name="table_name" class="form-control table_name" placeholder="SQL Table Name" required/></td>
                    <td><input type="number" name="num_cols" class="form-control num_cols" placeholder="INT Data" required /></td>
                    <td><input type="datetime-local" name="date_time" class="date_time" required /></td>
                </tr>
                <tr>
                    <td colspan="3"><button class="btn btn-info" id="set">SET</button></td>
                </tr>
            </tbody>
        </table><br>
        <form method="POST" id="form1">
        <table class="table table-bordered" id="table1">
            <thead>
                <tr>
                    <th>S No</th>
                    <th>Column's Name</th>
                    <th>Type</th>
                    <th>Key Type</th>
                    <th>Null/Not Null</th>
                    <th>Size</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    </form>
    <script>
            var numColumn = 0;
            var name = "";
            var date = '';
            var output = "";
            var i=0;
        $("#set").on("click", function(){
            // alert("Clicked!");
            var numColumn = $(".num_cols").val();
            var name = $(".table_name").val();
            var date = $(".date_time").val();
            for(let i=1; i<=numColumn; i++){
                output+="<tr><td>"+i+"</td><td><input type='text' class='form-control col_name' required/></td><td><select class='form-control type' required><option value='' selected disabled>Select Type</option><option value='INT'>INT</option><option value='TEXT'>TEXT</option><option value='VARCHAR'>VARCHAR</option><option value='YEAR'>YEAR</option><option value='DATE'>DATE</option><option value='TIME'>TIME</option><option value='JSON'>JSON</option></select></td><td><select class='form-control key_type'><option value=''>NONE</option><option value='PRIMARY KEY'>PRIMARY KEY</option><option value='UNIQUE KEY'>UNIQUE KEY</option></select></td><td><select class='form-control null_not_null'><option value=''>NULL</option><option value='NOT NULL'>NOT NULL</option></select></td><td><input type='number' class='form-control size' placeholder='Size Here' required/></td></tr>";
            }
            output+= "<tr><td colspan='6'><input type='submit' class='btn btn-primary submit' name='submit' value='CREATE TABLE' /></td></tr>";
            // alert(output);
            tableBody = $("#table1 tbody");
            tableBody.append(output);
        });
        $(document).ready(function(){
            $("#form1").on("submit", function(e){
                var col_name = [];
                var type = [];
                var key_type = [];
                var null_not_null = [];
                var size = [];

                $('.col_name').each(function(){
                        col_name.push($(this).val());
                });
                $('.type').each(function(){
                        type.push($(this).val());
                });
                $('.key_type').each(function(){
                    key_type.push($(this).val());
                });
                $('.null_not_null').each(function(){
                    null_not_null.push($(this).val());
                });
                $('.size').each(function(){
                        size.push($(this).val());
                });

                $.ajax({
                    url: "saveSQLTable.php?name="+name+"",
                    method: "POST",
                    data: {col_name: col_name, type: type, key_type: key_type, null_not_null: null_not_null, size: size},
                    success: function(){
                        $("#msgNotice").html("<span style='color: green'>Table Created Succesfully!</span>");
                        console.log("Call Success");
                    },
                    error: function(){
                        $("#msgNotice").html("<span style='color: red'>Error Creating Table!</span>");
                        console.log("Oops!");
                    }
                });
            })
        });
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
