<?php
	include ('db.php');
	
	$username = trim(mysqli_escape_string($conn,$_POST['inputUsername']));
	$password = trim(mysqli_escape_string($conn,$_POST['inputPassword']));
	
	$query_verify_user = "SELECT user_id, user_username, user_password FROM users WHERE user_username = '$username'";
	echo $query_verify_user;
	
	$result = mysqli_query($conn, $query_verify_user);
	  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	if(mysqli_num_rows($result) == 1) {
		if($row['user_username']==$username && $row['user_password']==$password){
			session_start();
			$_SESSION['user_id'] = $row['user_id'];
			Header('Location: ../index.php?page=login');
		} else {
			$message = "Invalid username or password!";
			Header('Location: ../index.php?page=invalid_login');
		}
	} else {
		Header('Location: ../index.php?page=invalid_login');

	}
	
?>