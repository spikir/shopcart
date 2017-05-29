<?php
	echo '<div class="buttons">';
		echo 'Your Profile';
		echo '<ul>';
			echo '<li><a href="index.php?page=vieworders">View Orders</a></li>';
			echo '<li><a href="index.php?page=viewprofile">View Profile</a></li>';
		echo '</ul>';
		echo '<form action="include/logout.php" method="POST">';
			echo '<input type="submit" name="submitButton" value="Logout"/>';
		echo '</form>';
	echo '</div>';
?>