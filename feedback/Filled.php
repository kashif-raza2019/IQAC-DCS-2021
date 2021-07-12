<?php
    $name = strtoupper($_GET['name']);
    $gender = $_GET['gender'];
    $desigName = "";
    if($gender == 'Female'){
        $desigName = "Ms./Mrs. ".$name;
    }else if($gender == 'Male' || $gender == 'Not To Disclose'){
        $desigName = "Mr. ".$name;
    }else{
        $desigName = "Dear ".$name;
    }

?>
<!Doctype>
    <html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Student Satisfaction Survey, SSS By Devi Ahilya Vishwavidyalaya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
          float: left;
      }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title><?php echo $name;?></title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="bottom" title="Devi Ahilya University" >
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
        <a href="../logout.php" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Go Back">Back</a>
        <h4 style="text-align: center; color: #fff; font-weight: bold;"><?php echo $_SESSION['name'];?></h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <br>
                <h2 style="color: green; font-weight: bold;text-align: center;">Feedback Filled Succesfully</h2><br><br>
                <h4 style="text-align: center;">Thanks for filling out this form <i><b style="color: skyblue;"><?php echo $desigName;?></b></i></h4>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <br><br><br>
     <footer>
		<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
	</footer><br>

