<?php
	include('config.php');
	session_start();

	$user_check = $_SESSION['login_user'];

	$ses_query = mysqli_query($con,"SELECT username FROM login WHERE username ='$user_check'");
	$row = mysqli_fetch_array($ses_query);

	$login_session = $row['username'];

	if(!isset($_SESSION['login_user'])){
		header("location:login.php");
		die();
	}
?>