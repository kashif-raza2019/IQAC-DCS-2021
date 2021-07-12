<?php session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

$user = $_SESSION['username']; 
$flag = false;
 if(isset($_POST['submit'])){
    
    // $header = "19btc037@ietdavv.edu.in";
    $mailto = "davv.naac@gmail.com";
    $adminName = $_POST['adminname'];
    $deptName = $_SESSION['name'];
    $deptMail = $_POST['deptmail'];
    $subject  = $_POST['subject'];
    $message = $_POST['message'];
    $body = "This is mail regarding Document Query From \n".$deptName."\n content is as follows".$message."\n Regards".$adminName."";
    if(mail($mailto,$subject,$message,$deptMail)){
        $flag =true;
    }else{
        echo "<script>alert('Something Went Wrong!')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo.png">
    <link rel="stylesheet" href="../css/w3_l.css">
    <script src="../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document Related Query</title>
    <style>
        body{
            background-color: #fff!important;
            
            }
            .DAVV{
                background-color:#0E3778 !important;
            }

            .Username{
                background-color:#0E3778;
            }

            .BACK{
                background-color:#0E3778;
            }
            #containerHead{
            width: auto;
            height:80px;
            margin-top: 15px;
            background-color: #E0E0E0;
            color: black;
            font-size: 30px;
            padding-top: 20px;
            text-align: center;
            font-family: 'Bahnschrift', 'Roboto';
            font-weight: bold;
            }
            .containerCriteria{
            width: auto;
            height:60px;
            margin-top: 1px;
            margin-bottom: 1px;
            background-color: #E0E0E0;
            color: black;
            font-size: 26px;
            padding-top: 10px;
            text-align: center;
            font-family: 'Bahnschrift', 'Roboto';
            
            }
            .questionBox{
                width: auto;
                height: 60px;
                background-color: #E0E0E0;
                color: slategrey;
                font-size: 20.3px;
                font-weight: normal;
                margin-top: 1px;
                padding-left: 30px;
                margin-bottom: 1px;
                padding-top: 15px;
                font-family: 'calibri', 'Roboto';
            }
            .selectAns{
                padding-top: 0;
                width: 200px;
                float: right;
                margin-right: 30px;
            }
            #reportGeneratBar{
                width: 100%;
                background-color: #e0e0e0;
                align-items: center;
                margin-top: 1px;
                margin-bottom: 1px;
                padding-top: 10px;
                padding-left: 45%;
                padding-right: 45%;
                height: 60px;
            }
            .modalHeading{
                font-weight: bold;
                font-size: 23px;
            }
            .imgLink{
                margin-left: 20%;
                margin-right: 20%;

            }
            .imgLink:hover{
                opacity: 0.9;
            }
            
            #myHeader{
                position: sticky;
                top: 0;
            }
            .containerDate{
                width: auto;
                height:60px;
                margin-top: 1px;
                margin-bottom: 1px;
                padding-left: 30px;
                background-color: #E0E0E0;
                color: black;
                font-size: 18px;
                padding-top: 10px;
                font-family: 'Bahnschrift', 'Roboto';  
            }
            #datepicker{
                width: 100px;
            }
            #dateTxt{
                float: left;
                width: 180px;
                margin-left: 100px;
                padding-top: 10px;
            }
            #datepick{
                float: left;
                width: 180px;
                margin-left: 50%;
                margin-top: 4px;
            }
            .reportGen{
                text-align: center;
            }
            .questionContainer{
         width: auto;
         height: 70px;
         background-color: #E0E0E0;
         font-size: 19.3px;
         font-family: 'Calibri', 'sans serif', 'verdana';
         cursor: pointer;
         margin-top: 1px;
         margin-bottom: 1px;
       }
       .questionContainer:hover{
           opacity: 0.9;
           
       }
       .answerContainer{
         width: auto;
         height: 150px;
         background-color: #fff;
         font-size: 19px;
         padding-left: 40px;
         padding-right: 40px;
         font-family: 'Calibri', 'sans serif', 'verdana';
         border: 0.1px #ABE8F7 solid;
         display: none;
       }

      .imageArrowDown{
          height: 40px;
          width:  40px;
          color: slategrey;
      }
        .imageArrowDown:hover{
            color: grey;
            transition: 0.4s;
        }
        .questions{
            font-size: 23px;
            color: slategrey;
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: 40px;
            float: left;
        }
        textarea{
            height: 30px;
            width: auto;
            resize: none;
            margin-left: 0px;
            margin-right: 0px;
        }
        .progressCheck{
            width: 35px;
            height: 35px;
            margin-left :30px;
            margin-right: 30px;
            margin-top: 15px;
            float: left;
        }
        .answerBoxBtn{
            height: 32px;
            width: 150px;
            font-size: 19px;
            position: relative;
            padding: 0px;
            text-align: center;
            float: right;
            margin-right: 30px;
            margin-top: 10px;
        }
        .saveChanges{
            width: 130px;
        }

        #noticeContainer{
          width: auto;
          height:45px;
          margin-top: 1px;
          background-color: #E0E0E0;
          color: black;
          font-size: 20px;
          padding-top: 10px;
          text-align: center;
          font-family: 'Arial', 'Verdana';
          font-weight: bold;
        }

        #noticetext{
          animation-name: notice;
          animation-duration: 1.5s;
          animation-iteration-count: infinite;
        }

        @keyframes notice {
          0%{
            opacity: 1.0;
            color: black;
          }
          50%{
            opacity: 0.2;
            color: slategrey;
          }
          100%{
            opacity: 1.0;
            color: black;
          }
        }

        .containerDate{
          width: auto;
          height:60px;
          margin-top: 1px;
          margin-bottom: 1px;
          padding-left: 30px;
          padding-right: 20px;
          background-color: #E0E0E0;
          color: black;
          font-size: 20px;
          padding-top: 10px;
          text-align: left;
          font-family: 'Bahnschrift', 'Roboto';
          
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
        #datepicker{
          float: right;
          margin-right: 100px;
          margin-top: -30px;
          font-size: 15px;
          width: 100px;
          text-align: center;
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

        #topBtn:hover {
        background-color: #555;
        }
        input[type="file"]{
            margin-top: 10px;
            float: left;
            margin-left: 40px;
        }
        



    </style>
  <body>
  <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>DEVI AHILYA VISHWAVIDYALAYA</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>DATA CAPTURING SYSTEM 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a onclick="window.history.back();" style="cursor: pointer;"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
</div>
<style>
  .contentContainer{
      padding: 20px;
      margin-left: 20%;
      margin-right: 20%;
      box-shadow: 0 4px 8px 3px rgba(0, 0, 0, 0.2), 0 6px 20px 3px rgba(0, 0, 0, 0.19);
  }
  .inputTxt{
      width: 160px;
      height: 50px;
      margin-top: 20px;
      margin-left: 20px;
      float:left;
  }
  
</style>
    <div id="containerHead">
        <p>Document Related Query</p>
    </div><br>
    <div class="contentContainer">
       <form method="POST">
            <h4 style="float:left;">Regarding:  &nbsp;</h4><input type="text" class="form-control" value="Document Related Query" disabled>
            <br>
            <h4 style="float:left;">Admin Name: &nbsp;</h4><input type="text" class="form-control" placeholder="Name" name="adminname" required>
            <br>
            <h4 style="float:left;">Department Mail Address: &nbsp;</h4><input type="email" class="form-control"  placeholder="example@davv.in" name="deptmail" required>
            <br>
            <h4 style="float:left;">Subject: &nbsp;</h4><input type="text" class="form-control"  placeholder="For example IET-DAVV" name="subject" required>
            <br>
            <h4 style="float:left;">Message: &nbsp;</h4><textarea name="message" class="form-control" rows="5" required></textarea>
            <button type="submit" class="btn btn-primary"  style="margin-top: 15px;" name="submit"><i class="fa fa-paper-plane" style="color: #fff; font-size: 19px"> Send</i></button><br>
       </form>
       <input type="text" style="border: none; background-color: #fff; font-size: 18px; color: green; float: left;" value="<?php
               if($flag){
                   echo "Sent Successfully!";
               }
            ?>" <?php
               if($flag){
                   echo "visible";
               }else{
                   echo "hidden";
               }
            ?>>

       <br>
       <h4 style="text-align: center;">Or Via</h4>
        <br>
          <a href="mailto: davv.naac@gmail.com?subject=Document Related Query&body=To IQAC," target="_blank" style="margin-bottom: 50px; padding-left: 45%;"><i class="fa fa-envelope" style="font-size: 98px; "></i></a>
        <br><br><br>
        
    </div>
    <br><br>
    <footer>
            <br><br>
            <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
    </footer>
  </body>
  
</html>