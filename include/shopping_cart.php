<div id="shopping_cart">
	<p>Your shopping cart</p>
	<?php
		if(isset($_SESSION['cart_products']) && count($_SESSION['cart_products'])>0) {
			echo '<div class="buttons" id="view_cart">';
				echo '<form action="include/update_cart.php" method="POST">';
					echo '<table>';
						echo '<tbody>';
						
							$total = 0;
							
							foreach ($_SESSION['cart_products'] as $cart_item) {
								$product_name = $cart_item['product_name'];
								$product_quantity = $cart_item['product_quantity'];
								$product_price = $cart_item['product_price'];
								$product_id = $cart_item['product_id'];
								
								echo '<tr>';
									echo '<td>';
										echo 'Quantity <input type="text" size="2" maxlength="2" name="product_quantity['.$product_id.']" value="'.$product_quantity.'" />';
									echo '</td>';
									echo '<td>';
										echo $product_name;
									echo '</td>';
									echo '<td>';
										echo '<input type="checkbox" name="remove_id[]" value="'.$product_id.'" /> Remove';
									echo '</td>';
							}
							echo '<td colspan="4">';
								//echo '<button type="submit">Update</button><a href="include/view_cart.php" class="button">Checkout</a>';
								echo '<input type="submit" name="Update" value="Update"/><a href="index.php?page=checkout" class="button">Checkout</a>';
							echo '</td>';
						echo '</tbody>';
					echo '</table>';
				echo '</form>';
			echo '</div>';
		} else {
			echo '<p>Your shopping cart is empty</p>';
		}
	?>
</div>