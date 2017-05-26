<div id="newArticle" class="buttons">
	<form action="add_article.php" method="POST">
		<div id="productName">
			<label for="login">Product Name: </label>
			<input type="text" name="productName" />
		</div>
		<div id="productDescription">
			<label for="password">Product Description: </label>
			<input type="text" name="productDescription" />
		</div>
		<div id="productPrice">
			<label for="password">Price: </label>
			<input type="text" name="productPrice" />
		</div>
		<br>
		<input type="submit" name="add" value="Add Article"/>
	</form>
</div>