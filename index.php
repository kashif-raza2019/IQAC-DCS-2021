    <?php
        session_start();
        include('credential.php');
        // REST PHP HERE

        // IMP: SESSION STARTS FROM HERE !
    ?>
    <!Doctype>
    <html>
        <head>
            <title>Data Capturing System</title>
            <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/png" href="assets/images/davvlogo.png">
            <style type="text/css">
                header{
                    width: 100%;
                    background-color: #0E3778;
                    padding-bottom: 20px;
                    height: 180px;
                    color: #fff;
                    font-size: 28px;
                    font-weight: bold;
                }
                .top{
                    background-color: #0E3778;
                    height: 34px;
                    margin-bottom: 40px;
                    width: 100% auto;
                    align-items: center;
                    text-align: center;
                    font-family: 'Arial', 'sans-serif', 'roboto';
                    font-size: 24px;
                    font-stretch: 20px;
                    font-weight: bold;
                    color: white;
                }

                .hidden{
                    /* visibility: hidden; */
                    display: none!important;
                }

                .middleCard{
                    display: flex;
                    margin-left: auto;
                    margin-right: auto;
                    align-items: center;
                }
            </style>
        </head>
        <body>
        <!--
            -
            - DEVELOPED BY I.Q.A.C (INTERNAL QUALITY ASSURANCE CELL)
            - © Copyright 2021 By Devi Ahilya Vishwa Vidyalaya, Indore (M.P.)
            - DEVELOPERS FROM: INSTITUTE OF ENGINEERING & TECHNOLOGY, IET-DAVV INDORE

        -->
        <header>
                <img src="assets/images/davvlogo.png" height="150px" width="150px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
                <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
        </header>
        <div class="top">
            <p style="text-align: center; color: #fff; font-weight: normal; font-size: 26px;">INTERNAL QUALITY ASSURANCE CELL (IQAC)</p>
        </div>
            <div class="card text-center middleCard" style="width: 29rem;padding: 10px;">
                <div class="card-body">
                    <h5 class="card-title">Data Capturing System</h5>
                    <a href="login.php" class="btn btn-primary">Click Here</a>
                </div>
            </div>
            <div class="card text-center middleCard hidden" style="width: 29rem;padding: 10px;">
                <div class="card-body">
                    <h5 class="card-title">Feedbacks & Student Satisfaction Survey</h5>
                    <a href="login-staff.php" class="btn btn-primary">Click Here</a>
                </div>
            </div>
            <br><br>
            <p style="color: grey; font-family: 'sans-serif'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore (M.P.)<br>Version 2&nbsp; w.e.f. 01-07-2021</p>
        </body>

    </html>