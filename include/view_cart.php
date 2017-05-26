<table>
	<?php
		if (isset($_SESSION['user_id'])) {
			echo '<table>';
				foreach($_SESSION['cart_products'] as $cart_item) {
					echo '<tr>';
						echo '<td>';
							echo $cart_item['product_name'];
						echo '</td>';
						echo '<td>';
							echo $cart_item['product_quantity'];
						echo '</td>';
						echo '<td>';
							echo $cart_item['product_price'];
						echo '</td>';
						echo '<td>';
							echo $cart_item['product_id'];
						echo '</td>';
					echo '</tr>';
				}
			echo '</table>';
			echo '<div class="buttons">';
				echo '<form action="include/place_order.php" method="POST">';
					echo '<input type="submit" name="checkout" value="Place Order"/>';
				echo '</form>';
			echo '</div>';
		} else {
			echo '<p>Please log in!</p>';
		}
	?>
</table>