<?php
    session_start();
    include('credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $doVal = $_POST['doc'];

    $documentPath ="upload_data/";
    $filepath = $documentPath.$doVal;
    unlink($filepath);
    $connection->close();

?>
<script>
 window.location.href="getData.php";
</script>