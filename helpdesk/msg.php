<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(strtolower($_SESSION['username'])=="iqac"){
  echo "<script> alert('You are superuser, you should choose via some Department to reply them'); </script>";
  echo "<script> window.location.href='../superuser/progress.php' </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <style>
    input[type=text],input[type=password], select,textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        input[type=button],input[type=submit],input[type=reset] {
            width: 220px;
            background-color: #0E3778;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .container{
            height: 100%;
            width: 100%;
        }

        #left, #middle, #right, .x {
            display: inline-block;
            *display: inline; zoom: 1;
            vertical-align: top;
            font-size: 12px;
            padding: 0px;
        }

        #left{
            width: 22%;
        }

        #middle{
            width: 67%;
        }

        #right{
            width: 10%;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
            padding-top: 14px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 30px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
      

        </style>
<link rel="icon" href="./logo.png">
<title>Help-Desk DCS</title>
</head>
<body class="BACK" onload="main_func()">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System -2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>




    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a onclick="window.history.back();" style="cursor: pointer;"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name'])." | HELP-DESK";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a onclick="logOut()"  style="cursor: pointer;"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <script>
        function logOut(){
          var confirmLogOut = confirm("Are you sure to log-out?");
          if(confirmLogOut){
            window.location.href='../logout.php';
          }
        }
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader1").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader2").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader3").style.backgroundColor = "#0E3778";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader1").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader2").style.backgroundColor = "#0E3778";
                document.getElementById("myHeader3").style.backgroundColor = "#0E3778";
            }
        }

    </script>

    <style>

      .mine{
        margin-top:7px; float:right; background-color:#343434; color:white; border-radius:10px 0px 10px 10px; padding:8px; width:70%;
      }

      .other{
        margin-top:7px; float:left; background-color:#0084ff; color:white; border-radius:0px 10px 10px 10px; padding:8px; width:70%;
      }

      .timestamp{
        font-size:10px; font-weight:bold; float:right; margin-top:4px;
      }

    </style>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

  <?php

    //include("links.php");

  ?>


		<?php

				$query = "Select * from help_desk WHERE msg_from LIKE '".strtolower($_SESSION['username'])."' or  msg_to LIKE '".strtolower($_SESSION['username'])."'";
        //echo $query;
				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$res = mysqli_query($connection,$query);

		?>

<br><br><br>

    <div id="msg_div"  style="width:600px; border:solid 2px black; background-color:white; height:550px; border-radius:20px; position:absolute; margin-bottom:50px;">

      <div id="show" style=" padding-left:14px; padding-right:14px; padding-top:10px; margin-top:8px; border:solid 0px gray; overflow-y:scroll; height:414px; width:594px; border-radius:20px 20px 0px 0px;">

        <center style="color:grey;">
          <img src="../images/helpdesk.png" style="width:400px; " >
          <br>Post your queries Here...!!!<br><Br>
        </center>

          <?php

            while ($row = $res->fetch_assoc()) {

          ?>

          <?php if( strtolower($row['msg_to']) == strtolower($_SESSION['username'])){ ?>
<?php
              $query_s = "Update help_desk SET seen = 1 WHERE id LIKE ".$row['id'];
              $connection_s = mysqli_connect($servername, $username, $password, $dbname);
              $res_s = mysqli_query($connection_s,$query_s);
?>
            <div class="other">
                <?php echo urldecode($row['msg']); ?>
                <br>
                <c class="timestamp"><?php echo $row['timestamp']; ?> </c>
            </div>

          <?php } ?>

          <?php if( strtolower($row['msg_from']) == strtolower($_SESSION['username'])){ ?>

              <div class="mine">
                  <?php echo urldecode($row['msg']); ?>
                  <br>
                  <c class="timestamp"><?php echo $row['timestamp']; ?> <d style="color: <?php if($row['seen']==1){ ?> skyblue; <?php } ?> ">&#x2714;&#x2714;</d> </c>
              </div>

          <?php } ?>

          <?php

        }

          ?>

      </div>

      <div style="position: absolute;bottom:-14px;left:-1px;width: 550px;" >
        <textarea id="msg" style="border-radius:10px 10px 0px 20px; width:530px; height:120px; resize:none; border:solid 2px black;">
        </textarea>
      </div>

      <style>

        .send:hover{
          background-color: gray;
        }

      </style>

      <div class="send" style="float:right; width:80px; height:120px; margin-top:5px;  padding-top:35px; padding-left:15px; border-radius:0px 0px 10px 10px; cursor:pointer; z-index:2;" onclick="send_msg()">
        <img src="../images/send.png" style="width:50px; height:50px; z-index:2;">
      </div>

    </div>


<script>

  function export_csv(){
    alert("exporting");
    var x = $("#tbl_name").val();
    window.open('export.php?table='+x, '_blank');
  }

  function main_func(){
  $(document).ready(function(){
    $("#msg").val("");
    $("#msg").attr({placeholder:"Write your message here...!!!"});
    window.scrollTo(0, document.body.scrollHeight);
    //$("#show").scrollTo(0, document.getElementById("show").scrollHeight);
    //alert('ddfk');
    $('#show').scrollTop($('#show')[0].scrollHeight);
  });
  }

  $(document).ready(function() {
    $.fn.center = function () {
       this.css("position","absolute");
       //this.css("top", ( $(window).height() - this.height() ) / 2  + "px");
       this.css("left", ( $(window).width() - this.width() ) / 2 + "px");
       return this;
    }
    $('#msg_div').center();
  });

  function send_msg(){
    var msg = $("#msg").val();
    //alert(msg);

    if(msg=="") return false;

    var xhttp,res;
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){

           if (this.readyState == 4 && this.status == 200) {
                     //alert(this.responseText+"==");
                     $("#show").append(this.responseText);
                     $('#show').scrollTop($('#show')[0].scrollHeight);
                     $("#msg").val("");
          }
        };
               xhttp.open("POST", "send_msg_handler.php", true);
             xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
           xhttp.send("msg="+msg+"&to="+"iqac");
  }

  function maintain_session(){
  	var xhttp,res;
  				xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function(){

  				 if (this.readyState == 4 && this.status == 200) {
  						 console.log(this.responseText);
  									// alert(this.responseText);
  				}
  			};
  						 xhttp.open("GET", "../profile/maintain_session.php?page=msg.php", true);
  					 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  				 xhttp.send();
  }

  setInterval(function() { maintain_session(); }, 800000);


</script>
<br><br>
</body>
</html>
