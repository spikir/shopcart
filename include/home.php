<?php
	include ('include/db.php');
	
	$stmt = mysqli_prepare($conn, "SELECT product_id, product_name, product_desc, product_price FROM products ORDER BY product_id ASC");
	
	
	
	if($stmt) {
		//mysqli_stmt_bind_param($stmt, 's', $productid);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $product_id, $product_name, $product_desc, $product_price);
		
		while (mysqli_stmt_fetch($stmt)) {
			echo '<div class="buttons" style="border: 1px solid;" id="'.$product_id.'">';
				echo '<form action="include/update_cart.php" method="POST">';
					echo '<strong>Product: </strong>'.$product_name;
					echo '<br>';
					echo '<strong>Description</strong>: '.$product_desc;
					echo '<br>';
					echo '<strong>Price: </strong>'.$product_price;
					echo '<br>';
					echo 'Quantity: ';
					echo '<input type="text" size="2" maxlength="2" name="product_quantity" value="1" />';
					echo '<input type="hidden" name="product_id" value="'.$product_id.'" />';
					echo '<input type="hidden" name="type" value="add" />';
					echo '<input type="submit" name="submitButton" value="Add to cart"/>';
				echo '</form>';
			echo '</div>';
		}
	}
		
	/*$query_products = "SELECT product_id, product_name, product_desc, product_price FROM products ORDER BY product_id ASC";
	
	$result = mysqli_query($conn,$query_products);
	
	while($row = mysqli_fetch_assoc($result)) {
		echo '<div class="buttons" style="border: 1px solid;" id="'.$row['product_id'].'">';
			echo '<form action="include/update_cart.php" method="POST">';
				echo '<strong>Product: </strong>'.$row['product_name'];
				echo '<br>';
				echo '<strong>Description</strong>: '.$row['product_desc'];
				echo '<br>';
				echo '<strong>Price: </strong>'.$row['product_price'];
				echo '<br>';
				echo 'Quantity: ';
				echo '<input type="text" size="2" maxlength="2" name="product_quantity" value="1" />';
				echo '<input type="hidden" name="product_id" value="'.$row['product_id'].'" />';
				echo '<input type="hidden" name="type" value="add" />';
				echo '<input type="submit" name="submitButton" value="Add to cart"/>';
			echo '</form>';
		echo '</div>';
		
	}*/
?>

<!--<p>
	Welcome to our online-shop!
</p>-->