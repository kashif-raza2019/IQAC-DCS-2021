<?php
   session_start();
   $username = $_SESSION['username'];
        include("../credential.php");

?>
<!Doctype>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3_l.css">
    <link rel="icon" href="../logo.png">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="..assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title><?php echo strtoupper($_SESSION['name']);?></title>
    <style>
       header{
           width: 100%;
           height: 70px;
           color: #fff;
           padding-top: 5px;
           margin-bottom: 50px;
           background-color: #0E3778;
           text-align: center;
       }
       #table-container{
          padding-left: 15%;
          padding-right: 15%;
          margin-left: 40px;
          margin-right: 40px;
       }
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
  </head>
  <body>
    <header>
      <h1>Choose Academic Criteria</h1>
    </header>
    <h3 style="font-weight: bold; margin: 20px; text-align: center;">CSV EXPORT</h3>
    <div id="table-container">
      <table class="table table-bordered">
          <thead>
           
          </thead>
        <tbody>
            <tr>
                <td><button type="submit" class="btn btn-primary" onclick="Export1 ()">Academic Audit 1</button></td>
                <td><button type="submit" class="btn btn-primary" onclick="Export2 ()">Academic Audit 2</button></td>
                <td><button type="submit" class="btn btn-primary" onclick="Export3 ()">Academic Audit 3</button></td>
                <td><button type="submit" class="btn btn-primary" onclick="Export4 ()">Academic Audit 4</button></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary" onclick="Export5 ()">Academic Audit 5</button></td>
                <td><button type="submit" class="btn btn-primary" onclick="Export6 ()">Academic Audit 6</button></td>
                <td colspan="2"><button type="submit" class="btn btn-primary" onclick="Export7 ()">Academic Audit 7</button></td>
            </tr>
         

        </tbody>

      </table>
    </div>
      <script>
                    function Export1()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv1.php");
                          }
                      }
                      function Export2()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv2.php");
                          }
                      }
                      function Export3()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv3.php");
                          }
                      }
                      function Export4()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv4.php");
                          }
                      }
                      function Export5()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv5.php");
                          }
                      }
                      function Export6()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv6.php");
                          }
                      }
                      function Export7()
                      {
                          var conf = confirm("Export data to CSV?");
                          if(conf == true)
                          {
                              window.open("exportcsv7.php");
                          }
                      }
      </script>

    </div>
    <!-- Footer -->
    <footer>
     <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
    </footer>
  </body>

</html>