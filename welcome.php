<?php

	include('session.php');
	include 'config.php';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Welcome</title>
</head>
<body>
	<div class="topbar">
		<img src="imgs/topimg.jfif">
		<div class="box">
			<h1>w a n d e r <span>g</span> r a m</h1>
		</div>
	</div>
	<a href = "logout.php"><button class="signout">Sign Out</button></a>
	<div class="postbox">
		<h1 id="welcome">Welcome <span><?php echo $login_session;?></span> ,</h1>
		<div class="float"></div>
			<form class="blogpost" action="post.php" method="post">
				<input type="text" name="writeup" placeholder="Write your thoughts......"><br>
				<button type="submit" class="post">Post</button>
			</form>
	</div>
	

		<div class="float"></div>
			<?php

				include 'config.php';

				$query = "SELECT * FROM posts";
				$result = mysqli_query($con,$query);
				
				while ($row = mysqli_fetch_array($result)) {
					$username = $row['username'];
					$post = $row['post'];
					echo '<div class="printposts">';
					echo "$username<br><br>$post<br><br>";
					echo '</div>';
					
				}

			?>
		</div>
</body>
</html> 