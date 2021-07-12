<?php
//   PHP Code Here
?>
<!Doctype>
<html>
    <head>
        <title>Important Links</title>
        <!-- Bootstarp 4 Integration -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/png" href="../assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              height: 140px;
              margin-bottom: 10px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Bahnschriff', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              font-weight: bold;
              color: white;
           }
           button{
               width: 100%;
           }
           a{
               width: 100%;
           }
           #mainPage{
               width: 100%;
               margin: auto;
               padding-left: 6%;
               padding-right: 6%;
           }

           footer{
            text-align: center;
           }
          
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
        <p><a href="progress.php"><img src="../assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
        </header>

        <script>
         //   Enabling Tooltip via Bootstrap on data-toggle, data-placement i.e 'Position of tooltip' and title
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
        </script>
        <!-- Main Content -->
        <div style="width: 100%; padding-left: 6%; padding-right: 86%;"><button class="btn btn-primary" onclick="location.href='index.php'">Back</button></div><br>
        <script>
            // To go back where user came from
            function goBack() {
                window.history.back();
                }
        </script>
        <div id="mainPage" class="container-fluid">
        <table class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Link Tabs</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='../date_set/index.php'">Date Limit</button></td>
                    <td>Set Time limit i.e. Number of Days to Fill Particular Forms</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='log.php'">Access Log</button></td>
                    <td>Contains all the Logs of Events happened in this Application</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='../not_applicable/set_not_applicable.php'">Set N.A</button></td>
                    <td>Set the Criteria as Not Applicable For any Dept.</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='get_data.php'">Export Data</button></td>
                    <td>Generate the Complete data in csv format of selected Departments</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='add_view.php'">Additional Data</button></td>
                    <td>View Additional Unspecified Data</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><a type="button" class="btn btn-primary"  target="_blank" href='../profile/link_generator/generate_alt_link.php'>Link Redirector</a></td>
                    <td>Links Generator for Files.</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='../PRINT/print.php?tab_id=t1_1_1'">Section Printer</button></td>
                    <td>Print the whole Metric consisting of all Departments</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='validate_links.php'">Invalid Links</button></td>
                    <td><p>Provide the Info about Invalid Links<br><b>Warning:</b><i> It only checks if some data is available in the given location or not the correctness should be checked by the provider itself.</p></i></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><button type="button" class="btn btn-primary" onclick="location.href='../old-data'" data-toggle="tooltip" data-placement="bottom" title="Currently Under Development">Archived Folder</button></td>
                    <td>Archived Folder containing Old and Unused data or any particular asset.</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><button type="button" class="btn btn-danger" onclick="location.href='../Password/index.php'" data-toggle="tooltip" data-placement="bottom" title="Update Password">Change Password</button></td>
                    <td>Change Password For Superuser and/ or Particular Department</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td><button type="button" class="btn btn-danger" onclick="location.href='../Developer/index.php'" target="_blank" data-toggle="tooltip" data-placement="top" title="Warning! Developer's Page">Developer Use</button></td>
                    <td>This is for Developers to create SQL Tables, Check Php/MySQL Error Logs, Create Templatized Forms</td>
                </tr>

            </tbody>
        </table>


        </div>
        <!-- Footer -->
        <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
        </footer>
    
    </body>

</html>