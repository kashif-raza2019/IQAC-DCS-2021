<?php
  session_start();
  include('../credential.php');
  $fetchProgramQuery = "SELECT*FROM programme where Username = '$adminname'";
  $fetchProgram = mysqli_query($connection, $fetchProgramQuery);
  if($fetchProgram){
    while($program = $fetchProgram->fetch_assoc()){
        echo "<option value='$program['prog_code']'>$program['prog_code']</option>";    
    }
?>