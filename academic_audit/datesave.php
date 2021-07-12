<?php
    session_start();
    include("../credential.php");
     /*
       THIS PAGE IS FOR:
                    'ACADEMIC AUDIT'
       Table Name: 'date_generate': Columns: 'id', 'form_name', 'date_save'
       Rows: 1 Academic Audit id='1'
             2 Monthly Report id='2'
             3 SSR/AQAR       id='3'
             4 Feedback       id='4'
             5 DQAC           id='5'
             6 S.S.S          id='6'
    */
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if(isset($_POST['submit'])){
    //   echo "<script>alert('Query Succesful!')</script>";
     $date = $_POST['updateDate'];
     $query = "UPDATE date_generate SET date_save = '$date' WHERE id = '1'";
     $runQuery = mysqli_query($connection, $query);
    if($runQuery){
      echo "<script>alert('Date Set Successfully!')</script>";
    }else{
      echo "<script>alert('Problem Updating Date!')</script>";
      var_dump($runQuery);
    }
    }else{
      echo "<script>alert('Something Went Wrong!')</script>";
      
    }


?>
<script>
  window.location.href = "index.php";
</script>