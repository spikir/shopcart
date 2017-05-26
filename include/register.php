<?php
	include ('db.php');
	if ($_POST['inputUsername']!= '' && $_POST['inputPassword']!='' && $_POST['inputEmail']!='') {
		$username = trim(mysqli_escape_string($conn,$_POST['inputUsername']));
		$password = trim(mysqli_escape_string($conn,$_POST['inputPassword']));
		$email = trim(mysqli_escape_string($conn,$_POST['inputEmail']));
		
		$query_verify_user = "SELECT * FROM users WHERE user_email = '$email' or user_username='$username'";
		
		$result = mysqli_query($conn, $query_verify_user);
		
		if(mysqli_num_rows($result) == 0) {
			$query_create_user = "INSERT INTO users (user_username, user_password, user_email) VALUES  ('$username', '$password', '$email')";
			$result = mysqli_query($conn, $query_create_user);
			Header ("Location: ../index.php?page=register_success");
		} else {
			Header ("Location: ../index.php?page=registered");
		}
	} else {
		Header ("Location: ../index.php?page=fillform");
	}
?>