<?php
	include ('include/db.php');
	
	$user_id = $_SESSION['user_id'];
		
	$stmt = mysqli_prepare($conn, "SELECT product_name, product_price, order_id, order_date FROM orders INNER JOIN products ON order_product_id = product_id and order_user_id = ?");
	
	if($stmt) {
		mysqli_stmt_bind_param($stmt, 'i', $user_id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $product_name, $product_price, $order_id, $order_date);
	
		echo '<table>';
			while (mysqli_stmt_fetch($stmt)) {
				echo '<tr>';
					echo '<td>';
						echo $order_id;
					echo '</td>';
					echo '<td>';
						echo $order_date;
					echo '</td>';
					echo '<td>';
						echo $product_name;
					echo '</td>';
					echo '<td>';
						echo $product_price;
					echo '</td>';
				echo '</tr>';
			}
		echo '</table>';
	}
	
	/*$query_orders = "SELECT * FROM orders WHERE order_user_id = '$user_id'";
	
	$resultOrder = mysqli_query($conn,$query_orders);
	
	if(mysqli_num_rows($resultOrder) > 0) {
		echo '<table>';
			while($rowOrder = mysqli_fetch_assoc($resultOrder)) {
				$product_id = $rowOrder['order_product_id'];
				$query_product = "SELECT * FROM products WHERE product_id = '$product_id'";
				$resultProduct = mysqli_query($conn, $query_product);
				$rowProduct = mysqli_fetch_array($resultProduct, MYSQLI_ASSOC);
				echo '<tr>';
					echo '<td>';
						echo $rowOrder['order_id'];
					echo '</td>';
					echo '<td>';
						echo $rowOrder['order_date'];
					echo '</td>';
					echo '<td>';
						echo $rowProduct['product_name'];
					echo '</td>';
					echo '<td>';
						echo $rowProduct['product_price'];
					echo '</td>';
				echo '</tr>';
			}
		echo '</table>';
	
	}*/ else {
		echo '<p>You dont have any orders';
	}
?>