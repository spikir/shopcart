<?php
	include ('db.php');
	
	session_start();
	
	$user_email = trim(mysqli_escape_string($conn,$_POST['inputUseremail']));
	$user_id = $_SESSION['user_id'];
	
	$query_user = "UPDATE users SET user_email = '$user_email' WHERE user_id = '$user_id' ";
	
	echo $query_user;
	
	$result = mysqli_query($conn,$query_user);
	
	Header('Location: ../index.php?page=home');
?>