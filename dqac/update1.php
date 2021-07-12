<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
  if($connection){
        $name = $_POST['nameHead'];
        $desig = $_POST['designationHead'];
        $aff = $_POST['affiliationHead'];
        $email = $_POST['emailHead'];
        $contact = $_POST['contactHead'];

       

                $queryCheck = "SELECT * FROM dqac_1 WHERE user = '$user'";
                $insertQuery = "INSERT INTO dqac_1(user, name_head, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";
                $updateQuery = "UPDATE dqac_1 SET name_head = '$name', designation = '$desig', affiliation = '$aff', email = '$email', contact = '$contact' WHERE user = '$user'";
                $runCheck = mysqli_query($connection, $queryCheck);
                if(mysqli_num_rows($runCheck)>0){
                    $row = mysqli_fetch_assoc($runCheck);
                    $admin = $row['user'];
                        if($admin == $user){
                            $update = mysqli_query($connection, $updateQuery);
                            if($update){
                                echo "<script>alert('Successfully Updated!')</script>";
                            }else{
                                var_dump($update);
                            }
                        }else{
                            $insert = mysqli_query($connection, $insertQuery);
                            if($insert){
                                echo "<script>alert('Successfully Inserted!')</script>";
                            }else{
                                var_dump($insert);
                            }
                        }

                }else{
                  $insertQuery = "INSERT INTO dqac_1(user, name_head, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";

                  $insert = mysqli_query($connection, $insertQuery);
                            if($insert){
                                echo "<script>alert('Successfully Inserted!')</script>";
                            }else{
                                var_dump($insert);
                                echo "<br>";
                                echo mysqli_error($connection);
                            }
                }
            $connection->close();
  }else{
      echo "Some Problem while connecting to Data Base";
      var_dump($connection);
  }

?>
<script>
  window.location.href = "../dqac/index.php#show1";
</script>