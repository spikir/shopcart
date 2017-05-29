<?php

?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1>OpenSource Cart</h1>
			</div>
			<div id="content">
				<div id="menu">
					<?php include "include/navi.php" ?>
				</div>
				<div id="article">
					<?php include "include/content.php" ?>
				</div>
				<div id="rightbox">
					<?php
						include ("include/shopping_cart.php");
						if(isset($_SESSION['user_id'])) {
							include ("include/profile.php");
						} else {
							include "include/login.php";
						}
						
					?>
				</div>
			</div>
			<div id="footer">
				Copyright by YourName
			</div>
		</div>
	</body>
</html>