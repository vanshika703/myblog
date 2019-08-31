<?php

	include ('config.php');
	include ('session.php');

	$username = $login_session;
	$writeup = $_POST['writeup'];

	$query = "INSERT INTO posts(`username`,`post`) VALUES('$username','$writeup')";
	$runquery = mysqli_query($con,$query);

		header("location:welcome.php");
?>