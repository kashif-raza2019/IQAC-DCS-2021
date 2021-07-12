<?php


?>
<!Doctype>
<html lang="en">
  <head>
  <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>404 Page Error</title>
       <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
       <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
       <link rel="shortcut icon" type="image/png" href="assets/images/davvlogo.png">
  
    <style>
        
        #container{
            background-color: #fff;
            height: 100%;
            width: 100%;
            padding-top: 50px;
            padding-left: auto;
            padding-right: auto;
            color: #0E3778;
            text-align: center;
            align-items: center;
        }

        a{
          color: #0E3778;
          text-decoration: none;
          cursor: pointer;
        }
        a:hover{
          text-decoration: underline;
          transition: 0.8s;
        }
    </style>
  
  </head>

  <body>
      <div id="container">
      <img src="assets/images/davvlogo.png" alt="DAVV" height="150px" width="150px"><br><br>
        <h1>404 Error Page Not Found</h1><br>
        <h3>Sorry the Page You're Looking is not here!</h3><br>
        <h4>Please <a onclick="return goBack()"><i>"Go Back"</i></a></h4><br>
        <p>We would be thankful to you if you can report about this error here.</p><br>
        <button type="submit" onclick="location.href='mailto: 19btc037@ietdavv.edu.in?subject=404 Page Error Report'" name="report" class="btn btn-danger" title="Report Error" style="width: 190px; color: #fff">Report Error Page</button>
        <script>
          function goBack() {
            window.history.back();
            }
        </script>
      </div>

  </body>

</html>