<?php
	require "../partials/template.php";	
	function get_body_content(){
?>

<h1 class="text-center">Products Menu</h1>
<div class="container">
	<div class="row">
		<?php 
			// GET ALLL PRODUCTS FROM THE FILE
			$products = file_get_contents("../assets/lib/products.json");
			// TRANSFORM JSON INTO  READABLE FORMAT IN PHP
			$products_array = json_decode($products, true);

			foreach ($products_array as $indiv_product) {
		?>
		<div class="col-lg-4 py-2">
			<div class="card">
				<img class="card-img-top" src="../assets/lib/<?php echo $indiv_product["image"]; ?>" height="400px" >
			</div>
			<div class="card-body">
				
				<h5 class="card-title"><?php echo $indiv_product["name"]?></h5>
	 	 			<p class="card-text">Price: Php <?php echo $indiv_product["price"]?></p>
	 	 			<p class="card-text">Description: <?php echo $indiv_product["description"]?></p>
			</div>
			<!-- delete button -->
			<div class="card-footer text-center">
				<a href="../controllers/delete-product-process.php?name=<?php echo $indiv_product["name"]?>" class="btn btn-danger">Delete Product</a>			
			</div>
			<div class="card-footer">
				<form action="../controllers/add-to-cart-process.php" method="POST">
					<input type="hidden" name="name" class="form-control" value="<?php echo $indiv_product['name'];?>">
					<input type="number" name="quantity" value="1" class="form-control">
					<button type="submit" class="btn btn-success btn-block">Add to Cart
					</button>
				</form>
			</div>
		</div>
		<?php
		}
		?>

	</div>
</div>

<?php
	}
?>
