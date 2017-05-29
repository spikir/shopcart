<?php
	include ('include/db.php');
	
	$user_id = $_SESSION['user_id'];
	
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
?>