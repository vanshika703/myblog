<?php

	include 'config.php';

	$query = "SELECT * FROM posts";
	$result = mysqli_query($con,$query);
	
	
	while ($row = mysqli_fetch_array($result)) {
		$username = $row['username'];
		$post = $row['post'];

		header("location:welcome.php");
		
}

?>