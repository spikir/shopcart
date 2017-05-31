<?php
	include ('include/db.php');
	
	$user_id = $_SESSION['user_id'];
	$stmt = mysqli_prepare($conn, "SELECT user_email FROM users WHERE user_id = ?");
	
	if($stmt) {
		mysqli_stmt_bind_param($stmt, 'i', $user_id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $user_email);
		mysqli_stmt_fetch($stmt);
		echo '<div class="buttons">';
			echo '<form action="include/update_profile.php" method="POST">';
				echo '<input type="text" name="inputUseremail" value="'.$user_email.'" />';
				echo '<br>';
				echo '<input type="submit" name="updateProfile" value="Update Profile" />';
			echo '</form>';
		echo '</div>';
	}
	
	/*
	$query_user = "SELECT * FROM users WHERE user_id = '$user_id'";
	
	$resultUser = mysqli_query($conn,$query_user);
	
	$rowUser = mysqli_fetch_array($resultUser, MYSQLI_ASSOC);
	
	echo '<div class="buttons">';
		echo '<form action="include/update_profile.php" method="POST">';
			echo '<input type="text" name="inputUseremail" value="'.$rowUser['user_email'].'" />';
			echo '<br>';
			echo '<input type="submit" name="updateProfile" value="Update Profile" />';
		echo '</form>';
	echo '</div>';
	*/
?>