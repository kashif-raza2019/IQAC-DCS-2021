<?php
  session_start();
  if(isset($_SESSION['username'])){                             
    header("Location: homepage.php");
} 
?>
<!Doctype>
<html>
    <head>
       <title>Login: DCS</title>
       <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
       <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
       <link rel="shortcut icon" type="image/png" href="assets/images/davvlogo.png">
        <style type="text/css">
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
            }
        </style>
    </head>
    <body class="text-center">
       <main class="form-signin">
        <form name="f1" action="attemptlogin.php" method="post">
            <img class="mb-4" src="assets/images/davvlogo.png"  width="150px" height="150px">
            <h1 class="h3 mb-3 fw-normal">Department Login</h1>
            <br>
            <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required/>
            <label for="floatingInput">Department Username</label><br>
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required />
            <label for="floatingPassword">Password</label><br>
            </div>
            <h4 class="validNotice"></h4>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="login">Sign In</button>
            <p class="mt-5 mb-3 text-muted">&copy; Devi Ahilya Vishwavidyalaya, Indore (M.P.) <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script></p>
        </form>
       </main>
    </body>

</html>