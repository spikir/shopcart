<?php
	include ('../include/db.php');
	session_start();
	
	foreach($_SESSION['cart_products'] as $cart_item) {
		$product_id = $cart_item['product_id'];
		$user_id = $_SESSION['user_id'];
		$date = date('Y-m-d H:i:s');
		$query_create_product = "INSERT INTO orders (order_date, order_product_id, order_user_id) VALUES  ('$date', '$product_id', '$user_id')";
		$result = mysqli_query($conn, $query_create_product);
	}
	unset($_SESSION['cart_products']);
	Header ("Location: ../index.php?page=home");

?>