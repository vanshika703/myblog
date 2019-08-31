<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Sign Up Page</title>
</head>
<body>
	<div class="topbar">
		<img src="imgs/topimg.jfif">
		<div class="box">
			<h1>W A N D E R <span>G</span> R A M</h1>
		</div>
	</div>
	<div class="login">
		<h2>SI<span>G</span>N UP</h2>
		<form name="signup" action="input.php" onsubmit="return validateForm()" method="post" >
			<input type="text" name="email" placeholder="Enter email" required><br>
			<input type="text" name="username" placeholder="Enter username" required><br>
			<input type="password" name="password" placeholder="Enter password" required><br>
			<input type="password" name="confirm_password" placeholder="Enter password again" required><br>
			<input type="number" name="number" placeholder="Enter phone number"><br>
			<button class="signinpage-button" type="submit">SIGN UP</button>
		</form>
		<p class="error" id="eAlert"></p>
		<p class="error" id="uAlert"></p>
		<p class="error" id="pAlert"></p>
		<p class="error" id="cpAlert"></p>
		<p class="error" id="nAlert"></p>
		<p class="error">
			<?php 
				if(isset($_GET['error'])) {
					echo $_GET['error']; 
				}
				else {
					echo " ";
				}
			?>
		</p>
		
	</div>
	<script type="text/javascript">
		function validateForm() {
			var email = document.signup.email.value;
			var i = email.indexOf('@');
			var j = email.lastIndexOf('.');
			if ( i<0 || j<0 || (j-i)<2 ) {
				document.getElementById("eAlert").innerHTML = "Enter a valid email.";
				event.preventDefault();
				return false;
			}
			else
			{
				document.getElementById("eAlert").innerHTML = "";
			}
			var username = document.signup.username.value;
			if (username.length<3) {
				document.getElementById("uAlert").innerHTML = "Username should have at least 3 characters.";
				event.preventDefault();
				return false;
			}
			else
			{
				document.getElementById("uAlert").innerHTML = "";
			}
			var password = document.signup.password.value;
			if (password.length<8) {
				document.getElementById("pAlert").innerHTML = "Password should contain at least 8 characters.";
				event.preventDefault();
				return false;
			}
			else
			{
				document.getElementById("pAlert").innerHTML = ""
			}
			var cpassword = document.signup.confirm_password.value;
			if (password != cpassword) {
				document.getElementById("cpAlert").innerHTML = "Passwords don't match.";
				event.preventDefault();
				return false;
			}
			else
			{
				document.getElementById("cpAlert").innerHTML = "";
			}

			var number = document.signup.number.value;
			if(number.length != 10)
			{
				document.getElementById("nAlert").innerHTML = "Number should contain 10 digits.";
				event.preventDefault();
				return false;
			}
			else
			{
				document.getElementById("nAlert").innerHTML = "";
			}
			return true;

		}
	</script>
</body>
</html>