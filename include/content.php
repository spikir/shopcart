<?php
	if (! isset($_GET['page'])) {
		Header ('Location: index.php?page=home');
	} else {
		
		$page = $_GET['page'];
		session_start();
		
		switch ($page) {
			case 'computer';
				include ('computer.php');
				break;
			
			case 'mp3';
				include ('mp3.php');
				break;
			
			case 'others';
				include ('others.php');
				break;
				
			case 'register';
				include ( 'registration.php');
				break;
				
			case 'login';
				include ('login_success.php');
				break;
			
			case 'invalid_login';
				include ('invalid_login.php');
				break;
				
			case 'register_success';
				include ('registration_success.php');
				break;
			
			case 'registered';
				include ('registered.php');
				break;
			
			case 'fillform';
				include ("fillform.php");
				break;
				
			case 'home';
				include ('home.php');
				break;
				
			case 'checkout';
				include ('view_cart.php');
				break;
				
			case 'vieworders';
				include ('view_orders.php');
				break;
			
			case 'viewprofile';
				include ('view_profile.php');
				break;
		}
	}
?>