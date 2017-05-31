<?php
	include ('db.php');
	
	session_start();
	
	$user_email = trim(mysqli_escape_string($conn,$_POST['inputUseremail']));
	$user_id = $_SESSION['user_id'];
	
	$stmt = mysqli_prepare($conn, "UPDATE users SET user_email = ? WHERE user_id = ? ");
	
	if($stmt) {
		mysqli_stmt_bind_param($stmt, 'si', $user_email, $user_id);
		mysqli_stmt_execute($stmt);
	}
	
	/*$query_user = "UPDATE users SET user_email = '$user_email' WHERE user_id = '$user_id' ";
	
	echo $query_user;
	
	$result = mysqli_query($conn,$query_user);*/
	
	Header('Location: ../index.php?page=home');
?>