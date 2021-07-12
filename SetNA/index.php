<?php session_start();
    include('../credential.php');
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

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
    <h2 style="font-weight: bold; text-align: center; background-color: #fff; position: sticky; top: 0;">SET CRITERIA NOT APPLICABLE</h2><br>
     <h4 id="msg"></h4>
    <div class="containerTable">
        <table class="table table-borderless">
        <form method="POST">
            <tbody>
                <tr>
                    <th scope="row">SELECT METRIC TYPE</th>
                    <td>
                        <select name="matricType" class="form-control" id="type">
                            <option value="1">A.Q.A.R.</option>
                            <option value="2">S.S.R.</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">SELECT METRIC</th>
                    <td><select name="table" class="form-control" id="metric">
                        <?php
                            $query = "SELECT table_name  FROM information_schema.tables  WHERE table_schema = '$dbname'";
                            $fetch = mysqli_query($connection, $query);
                            while($fetchData = $fetch->fetch_assoc()){
                                $fetchName = $fetchData['table_name'];
                                if(strpos($fetchName, 'ssr') === 0 || strpos($fetchName, 't') === 0){
                                    echo "<option value='$fetchName'>$fetchName</option>";
                                }
                            }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <th scope="row">SET</th>
                    <td><input type="button" class="btn btn-warning" style="color: #fff;" onclick="checkAgain()" value="SAVE CHANGES"></td>
                </tr>
                </form>
            </tbody>
            <script>
                function checkAgain(){
                    var confirmNotice = confirm("Are You Sure To Set This Criteria as NOT APPLICABLE?");

                    if(confirmNotice){
                        var type = $("#type").val();
                        var metric = $("#metric").val();
                        $.ajax({
                            url: "setna.php",
                            method: "POST",
                            data: {type: type, metric: metric},
                            success: function(){
                                $("#msg").append("<p style='text-align: center; color: green'>Success</p>");
                            },
                            error: function(){
                                $("#msg").append("<p style='text-align: center; color: red'>Error</p>");
                            }

                        });
                    }

                };
                // $("#msg").delay(1000).fadeOut("slow");
            </script>

        </table>

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
