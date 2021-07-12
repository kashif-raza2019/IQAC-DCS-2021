<?php
//Changes on 1:04 AM 03-04-2021 for Server name as error 1049 connecting to criteria_iqac_nac_common.sql 
   
$username_n = "";
$password_n = "";
//error_reporting(E_ERROR | E_PARSE | E_NOTICE);
if(isset($_POST["submit"])){
	 include('credential.php');
	$connection = mysqli_connect($servername, $username, $password, $dbname);
        var_dump($connection);

	if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	if(isset($_POST["username"])){
		$username_n=$_POST["username"];
		$username = strtolower($username_n);
	}else{
		$username="";
	}
	if(isset($_POST["password"])){
		$password_n=$_POST["password"];
                $password = strtolower($password_n);
	}else{
		$password="";
	}

	$query1="select * from admins where username='$username' and password='$password'";
	$result1 = mysqli_query($connection,$query1);
	$number_of_rows1 = mysqli_num_rows($result1);

	$query2="select * from superusers where username='$username' and password='$password'";
	$result2 = mysqli_query($connection,$query2);
	$number_of_rows2 = mysqli_num_rows($result2);

	if($number_of_rows1>0){
		session_start();
		$_SESSION['username']=strtolower($username);
		$_SESSION['login']="YES";
		$row = mysqli_fetch_assoc($result1);
		$_SESSION['name']=$row['name'];


			$date = date_create();
			save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


		header("Location: accept_notice.php");

	}else if($number_of_rows2>0){
		session_start();
		$_SESSION['login']="YES";
		$_SESSION['username']=strtolower($username);
		$row = mysqli_fetch_assoc($result2);
		$_SESSION['name']=$row['name'];
		$_SESSION['names']=$row['name'];
        //echo $_SESSION['name'];
		echo"<script>alert('success');";


			$date = date_create();
			save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


		header("Location: superuser\index.php");
	}
	else{ session_start();
		$_SESSION['login']="NO";

		$_POST['rows'] = "ATTEMPT WITH INCORRECT LOGIN CREDENTIAL";

		$date = date_create();
		save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

		echo"<script>alert('Wrong username/password combination');
					 window.location='login.php';</script>";
	}

}else{

	$_POST['rows'] = "ERROR CONNECTING DATABASE";
        var_dump($connection);
	$date = date_create();
	// save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


	die('sorry, there was a problem connecting to database, Pleasse try again!');
}

?>
