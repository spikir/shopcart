<?php
	include ('db.php');
	
	if ($_POST['inputUsername']!= '' && $_POST['inputPassword']!='' && $_POST['inputEmail']!='') {
		$username = trim(mysqli_escape_string($conn,$_POST['inputUsername']));
		$password = trim(mysqli_escape_string($conn,$_POST['inputPassword']));
		$email = trim(mysqli_escape_string($conn,$_POST['inputEmail']));
		
		if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
			Header ("Location: ../index.php?page=invalidemail");
		} else {
			$hash = password_hash($password, PASSWORD_DEFAULT);
			
			$stmt = mysqli_prepare($conn, "SELECT user_id FROM users WHERE user_username = ? or user_email = ?");
		
			if($stmt) {
				mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt, $userid);
				mysqli_stmt_fetch($stmt);
			}
			
			if (!$userid) {
				$stmt = mysqli_prepare($conn, "INSERT INTO users (user_username, user_password, user_email) VALUES (?, ?, ?)");
				mysqli_stmt_bind_param($stmt, 'sss', $username, $hash, $email);
				mysqli_stmt_execute($stmt);
				Header ("Location: ../index.php?page=register_success");
			} else {
				Header ("Location: ../index.php?page=registered");
			}
		}
		/*$query_verify_user = "SELECT * FROM users WHERE user_email = '$email' or user_username='$username'";
		
		$result = mysqli_query($conn, $query_verify_user);
		
		if(mysqli_num_rows($result) == 0) {
			$query_create_user = "INSERT INTO users (user_username, user_password, user_email) VALUES  ('$username', '$password', '$email')";
			$result = mysqli_query($conn, $query_create_user);
			Header ("Location: ../index.php?page=register_success");
		} else {
			Header ("Location: ../index.php?page=registered");
		}*/
	} else {
		Header ("Location: ../index.php?page=fillform");
	}
?>