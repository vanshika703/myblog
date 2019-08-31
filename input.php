<?php

include ("config.php");
$error="";


$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$number = $_POST['number'];


	$query = "SELECT id FROM login WHERE username = '$username' OR email = '$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

	if($count >0){
		$error = "Username or email is taken.";
		header("location:signin.php?error=$error");
	}
	else
	{
		$query = "INSERT INTO login(`email`,`username`,`password`,`number`) VALUES('$email','$username','$password','$number')";
		$runquery = mysqli_query($con,$query);

		header("location:login.php");
	}

?>