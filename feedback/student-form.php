<?php
    session_start();
    $user = $_SESSION['username'];
    $deptName = $_SESSION['name'];
    include('../credential.php');
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

    $connection  = mysqli_connect($servername, $username, $password, $dbname);
    if($connection){
        if(isset($_POST['submit'])){
            $fullName = strtoupper($_POST['fullName']);
            $gender = $_POST['gender'];
            $year = $_POST['year'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $program = $_POST['program'];
            $branch = strtoupper($_POST['branch']);
            $address = strtoupper($_POST['address']);
            $semester = $_POST['semester'];
            $dayHostel = $_POST['hostelorday'];
            if($gender == "" || $year == "" || $program == "" || $dayHostel == "" || $semester == ""){
                echo "<script>alert('Please Fill the Form Completely')</script>";
            }
                // Check if User is Male or Female to go through respective Feedbacks
                if($gender == 'Female'){
                        header("Location: StudentFemale.php?branch=$branch&name=$fullName&year=$year&email=$email&program=$program&contact=$contact&address=$address&semester=$semester&hostelorday=$dayHostel");
                    
                }else{
                        header("Location: StudentMale.php?branch=$branch&name=$fullName&year=$year&email=$email&program=$program&contact=$contact&address=$address&semester=$semester&hostelorday=$dayHostel&gender=$gender");
                }
        }
    }else{
        echo "<script>alert('Problem Connecting Database, Please Try again!')</script>";
    }
?>
<!Doctype>
<html>
    <head>
        <title>Feedback | Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstarp 4 Integration -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="../assets/images/davvlogo.png">
    </head>
    <body>
        <!-- Header Starts -->
        <header>
            <p><a href="../selection-page.php"><img src="../assets/images/davvlogo.png" height="100px" width="100px" style="margin: 10px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA</p>
            <h5 class="dcsSystem">Data Capturing System - 2021</h5>
        
        </header>
        <script>
            // Enabling Tooltip Everywhere
                $(function () {
                $('[data-toggle="tooltip"]').tooltip();
                })
            // To go back where user came from
            function goBack() {
            window.history.back();
            }
            function goForward() {
            window.history.forward();
            }
        </script>
        <div id="topLink">
            <a onclick="goBack()" class="backBtn"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            <h4 class="departmentName"><?php echo strtoupper($deptName);?></h4>
        </div>
        <!-- Header Ends -->

        <!-- MAIN CONTENT PAGE -->
        <h2 class="feedBackTitle">Feedback For Students</h2>
        <div class="formWrapper">
        <div class="card">
            <div class="card-header">
            PLEASE ENTER THE REQUIRED DETAILS CAREFULLY:
            </div>
            <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION['name'];?></h5>
            <table class="table table-borderless">
                <form id="form" method="POST">
                <thead>
                    <tr>
                        <th>Student's Full Name (as per Institute's I.D)</th>
                        <th>Gender</th>
                        <th>Year</th>
                        <th>Programme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="fullName"  class="form-control" placeholder="Please Enter Full Name Here" required/></td>
                        <td><select name="gender"  class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Undisclosed">Not To Disclose</option>
                            </select>
                        </td>
                        <td><select name="year" class="form-control" required>
                                <option value=""disabled selected>Select</option>
                                <option value="1">1<sup>st</sup></option>
                                <option value="2">2<sup>nd</sup></option>
                                <option value="3">3<sup>rd</sup></option>
                                <option value="4">4<sup>th</sup></option>
                                <option value="5">5<sup>th</sup></option>
                                </select>
                        </td>
                        <td><select name="program" class="form-control" required>
                            <option value="" disabled selected>SELECT PROGRAMME</option>
                            <?php
                                $query = mysqli_query($connection, "SELECT*FROM programme WHERE username = '$user'");
                                while($fetch = $query->fetch_assoc()){
                                    $fetchProgramName = $fetch['Prog_name'];
                                    $fetchProgramCode = $fetch['Prog_code'];
                                    echo "<option value='$fetchProgramCode'>$fetchProgramName</option>";
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Day Scholar/ Hostler</th>
                        <th>Contact Number</th>
                    </tr>
                    <tr>
                        
                        <td><input type="text" class="form-control" name="branch" placeholder="Your Complete Branch Name" required/></td>
                        <td>
                            <select name="semester" class="form-control" required>
                                <option value="" disabled selected>SELECT</option>
                                <option value="0">No Semester System</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                                <option value="9">Semester 9</option>
                                <option value="10">Semester 10</option>
                            </select>
                        </td>
                        <td>
                            <select name="hostelorday" class="form-control" required>
                                <option value="" disabled selected>SELECT</option>
                                <option value="Hosteller">Hosteller</option>
                                <option value="Day-Scholar">Day-Scholar</option>
                            </select>
                        </td>
                        <td><input type="tel" name="contact" class="form-control" placeholder="Enter Contact Number" required></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <th>Email Id</th>
                    </tr>
                    <tr>
                    <td><input type="text" name="address" class="form-control" placeholder="Enter Your Current Address" autocomplete = "off" required/></td>
                        <td><input type="email" name="email" class="form-control" placeholder="Enter Email Address" autocomplete = "off" required/></td>
                        <td><input type="button" class="btn btn-primary" value="SUBMIT" style="width: 150px;" data-toggle="modal" data-target=".bd-example-modal-lg"/></td>
                    </tr>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="margin-top: 18%;">
                            <div class="modal-content">
                                <h3 style="margin-left: 14px; margin-right: 14px; margin-top: 20px; text-align: center;"><b>Confirm Submission</b></h3><br>
                                <h6 style="margin-left: 10px; margin-right: 10px; margin-bottom: 8px; text-align: center;">Are you sure that the details filled are correct to the best of your knowledge?</h6><br>
                                <div class="container">
                                    <div class="row">
                                    <div class="col-lg" style="margin: 10px;">
                                        <button class="btn btn-danger" data-dismiss="modal" style="margin-left: 10px; float: right;">No</button>
                                        <button class="btn btn-success" type="submit" name="submit" id="formSubmit" style="margin-left: 10px; margin-right: 40px; float; right;">Yes, I Understand</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        
                </tbody>
                </form>
                </table>
            </div>
        </div>
        </div><br>


        <!-- Footer -->
        <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p><br>
		</footer>
        <!-- JavaScript Integration -->
        <script src="script.js"></script>
        <?php $connection->close();?>
    </body>

</html>