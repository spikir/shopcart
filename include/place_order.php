<?php
	include ('../include/db.php');
	session_start();
	
	if($_SESSION['user_id']) {	
		foreach($_SESSION['cart_products'] as $cart_item) {
			$product_id = $cart_item['product_id'];
			$user_id = $_SESSION['user_id'];
			$date = date('Y-m-d H:i:s');
			$stmt = mysqli_prepare($conn, "INSERT INTO orders (order_date, order_product_id, order_user_id) VALUES (?, ?, ?)");
			mysqli_stmt_bind_param($stmt, 'sss', $date, $product_id, $user_id);
			mysqli_stmt_execute($stmt);
			/*$query_create_product = "INSERT INTO orders (order_date, order_product_id, order_user_id) VALUES  ('$date', '$product_id', '$user_id')";
			$result = mysqli_query($conn, $query_create_product);*/
		}
		unset($_SESSION['cart_products']);
		Header ("Location: ../index.php?page=home");
	} else {
		Header ("Location: ../index.php?page=login");
	}

?>