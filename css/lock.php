<html>
  <body>

<style>

input[type=submit],input[type=button],.Save {
    width: 650px;
    /*
    background-color: #424242;
    color: #EEEEEE;
    */
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

 button {
    width: 200px;
    color: white;
    background-color: #424242;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #333333;
}

input[type=button]:hover {
    background-color: #333333;
}


button:hover {
    background-color: #333333;
}


</style>

<?php
session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
  header("Location: ../login.php");
}

$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "select distinct * from status where 1";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
$row  = $res ->fetch_assoc();
?>


<?php
if($row['superuser']==1){
?>
  <button onclick="lock(0,2)">Unlock Superuser</button>
<?php
}else if($row['superuser']==0){
?>
  <button onclick="lock(1,2)">Lock Superuser</button>
<?php
}
?>


<?php
if($row['admin']==1){
?>
  <button onclick="lock(2,0)">Unlock Admins</button>
<?php
}else if($row['admin']==0){
?>
  <button onclick="lock(2,1)">Lock Admins</button>
<?php
}
?>


<script>

    function lock(x,y){
      var xhttp,res;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            if(this.responseText=="success"){
              location.reload();
            }else{
              alert(this.responseText+"some problem try again");
            }
          }
      };
      xhttp.open("GET", "set_lock_status.php?ps="+x+"&pa="+y, true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send();
    }

</script>

</body>
<html>
