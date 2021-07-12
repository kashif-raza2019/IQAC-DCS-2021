<?php session_start();
    include('../credential.php');
    $adminname = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    $notice = "";
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $newUser = mysqli_real_escape_string($connection, $user);
        $newPass = mysqli_real_escape_string($connection, $password);
        if($newUser == ""){
            if($newPass == ""){
                header("Location: main.php?from='SUPERUSER'");
            }else{
                $notice = "Username Field Cannot Be Empty!";
            }
        }else{
            if($newPass == ""){
                $notice = "Password Field Cannot Be Empty!";
            }else if($newUser == 'dcsdev@2021' && $newPass == 'dcs2021'){
                header("Location: main.php?from='Developer'");
            }else{
                $notice = "Wrong Username or Password";
            }
        }

    }


    if(!isset($_SESSION['name'])){
        header("Location: index.php");  
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
       html,
            body {
            height: 100%;
            }

            body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            }

            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            .validNotice{
                text-align: center;
                color: red;
                font-weight: bold;
                font-size: 14px;
            }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title>Developer's Login</title>
</head>
<body class="text-center">
    <script>
            // Enabling Tooltip Everywhere
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                })
    </script>
       <main class="form-signin">
        <form method="post">
            <img class="mb-4" src="../assets/images/davvlogo.png"  width="150px" height="150px">
            <h1 class="h3 mb-3 fw-normal">Developer Login</h1>
            <br>
            <div class="form-floating">
            <label for="username" style="font-weight: bold; text-align: left!important;" class="ghost">Username</label><br>
            <input name="username" type="text" class="form-control" id="username" placeholder="Developer's Username"/>
            </div>
            <div class="form-floating">
            <label for="password"  style="font-weight: bold; text-align: left!important;" class="ghost">Password</label><br>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password"/>
            </div>
            <h4 class="validNotice"><?php echo $notice;?></h4>
            <div class="form-floating">
                <input type="checkbox" name="loginAsIqac" id="radio-select" />
                <label for="loginAsIqac">Or Login As IQAC/Super-User</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="login">Sign In</button>
            <p class="mt-5 mb-3 text-muted">&copy; Devi Ahilya Vishwavidyalaya, Indore (M.P.) <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script></p>
        </form>
       </main>
        <script>
          $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
                if($(this).prop("checked") == true){
                    $(".ghost").css("display", "none");
                    $("#username").css("display", "none");
                    $("#password").css("display", "none");

                }
                else if($(this).prop("checked") == false){
                    $(".ghost").css("display", "block");
                    $("#username").css("display", "block");
                    $("#password").css("display", "block");

                }
            });
        });
        </script>
    </body>
</html>
