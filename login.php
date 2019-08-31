<?php
include 'config.php';
session_start();
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$myusername = mysqli_real_escape_string($con,$_POST['username']);
	$mypassword = mysqli_real_escape_string($con,$_POST['password']);

	$query = "SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

	if($count == 1){
		$_SESSION['login_user'] = $myusername;
		header("location: welcome.php");
		$error="";
	}
	else
	{
		$error = "Invalid username or password";
	}
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<title>WANDERGRAM</title>
</head>
<body>
	<div class="topbar">
		<img src="imgs/topimg.jfif">
		<div class="box">
			<h1>w a n d e r <span>g</span> r a m</h1>
		</div>
	</div>

	<div class="login">
		<h2>LO<span>G</span>IN</h2>
		<form name="myForm" action="" onsubmit="return validateForm()" method="post">
			<input type="text" name="username" placeholder="Enter username"><br>
			<input type="password" name="password" placeholder="Enter password"><br>
			<button class="login-button" type="submit">LOGIN</button><br>
		</form>
		<p class="error">
			<?php echo $error; ?>
		</p>
			<p class="formtext">New here?</p><br>
			<a href="signin.php"><button class="signin-button" type="submit">SIGN UP</button></a>
	</div>
	
</body>
</html>