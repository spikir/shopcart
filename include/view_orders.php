<?php
	include ('include/db.php');
	
	$user_id = $_SESSION['user_id'];
	
	$query_orders = "SELECT * FROM orders WHERE order_user_id = '$user_id'";
	
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
	
	} else {
		echo '<p>You dont have any orders';
	}
?>