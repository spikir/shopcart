<?php

	include ('db.php');
	
	session_start();
	
	if(isset($_POST['type']) && $_POST['type']=='add' && $_POST['product_quantity'] > 0) {
		foreach($_POST as $key => $value) {
			$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
		}
		unset($new_product['type']);
		
		$query_products = 'SELECT product_id, product_name, product_desc, product_price FROM products WHERE product_id = '.$new_product["product_id"].'';
		
		$result = mysqli_query($conn,$query_products);
		
		while($row = mysqli_fetch_assoc($result)) {
			$new_product['product_name'] = $row['product_name'];
			$new_product['product_price'] = $row['product_price'];
			if(isset($_SESSION['cart_products'][$new_product['product_id']])) {
				unset($_SESSION['cart_products'][$new_product['product_id']]);
			}
			$_SESSION['cart_products'][$new_product['product_id']] = $new_product;
			Header ("Location: ../index.php?page=home");
		}
		//echo $_SESSION['cart_products'][$new_product['product_id']];
	}
	if (isset($_POST['product_quantity']) || isset($_POST['remove_id'])) {
		if(isset($_POST['product_quantity']) && is_array($_POST['product_quantity'])) {
			foreach ($_POST['product_quantity'] as $key => $value){
				if(is_numeric($value)) {
					$_SESSION['cart_products'][$key]['product_quantity'] = $value;
				}
			}
		}
		
		if(isset($_POST['remove_id']) && is_array($_POST['remove_id'])) {
				foreach($_POST['remove_id'] as $key) {
					unset($_SESSION['cart_products'][$key]);
				}
		}
		Header ("Location: ../index.php?page=home");
	}
?>