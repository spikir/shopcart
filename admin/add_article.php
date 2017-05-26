<?php

	include ('../include/db.php');

	if ($_POST['productName']!= '' && $_POST['productDescription']!='' && $_POST['productPrice']!='') {
		$product_name = trim(mysqli_escape_string($conn,$_POST['productName']));
		$product_description = trim(mysqli_escape_string($conn,$_POST['productDescription']));
		$product_price = trim(mysqli_escape_string($conn,$_POST['productPrice']));
		
		$query_create_product = "INSERT INTO products (product_name, product_desc, product_price) VALUES  ('$product_name', '$product_description', '$product_price')";
		$result = mysqli_query($conn, $query_create_product);
		Header ("Location: new_article.php");
	}

?>