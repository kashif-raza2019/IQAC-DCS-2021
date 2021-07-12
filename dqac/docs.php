<?php
session_start();
include '../credential.php';
$user = $_SESSION['username'];

$conn = mysqli_connect($servername , $username, $password, $dbname);
if(isset($_POST['submit']))
{       
        $row = "";
        $remark = $_POST['remark'];
        if($remark != ''){
            $file = "DQAC-".$user."-".$_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="../upload_data/";
            
            /* new file size in KB */
            $new_size = $file_size/1024;  
            /* new file size in KB */
            
            /* make file name in lower case */
            $new_file_name = strtolower($file);
            /* make file name in lower case */
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                $searchQuery = "SELECT * FROM dqac_remark WHERE user = '$user'";
                $search = mysqli_query($conn, $searchQuery);
                if(mysqli_num_rows($search)>0){
                   $res = mysqli_fetch_assoc($search);
                   $row = $res['user'];
		$updateQuery = "UPDATE dqac_remark SET remark = '$remark', file_name = '1101', type='FILE', size = '$new_size' WHERE user='$user'";
                $update = mysqli_query($conn, $updateQuery);
                if($update){
                    echo "<script>alert('File Updated Successfully!')</script>";
                }else{
                    echo "<script>alert('Some Problem with MYSQLI QUERY UPDATE')</script>";
                }
                 }else{
                    $sql="INSERT INTO dqac_remark (user,remark, file_name,type,size) VALUES('$user', '$remark', '1101', 'FILE', '$new_size')";
                    $query = mysqli_query($conn, $sql);
                    var_dump($query);
                    if($query){
                        echo "<script>alert('File Added Successfully!')</script>";
                    }else{
                        echo mysqli_error($conn);
                        echo "<script>alert('Some Problem with MYSQLI QUERY INSERT')</script>";
                    }

                }  
            }
            else
            {
            
                echo "Error.Please try again";
                    
            }
        }else{
            echo "<script>alert('No Response Added!')</script>";
        }
}
 $conn->close();
?>
<script>
    window.location.href = '../dqac/index.php#show7';
</script>