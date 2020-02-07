<?php 
	require "../partials/template.php";

	function get_body_content(){


?>
	<h1 class="text-center py-3"></h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<table class="table table-striped">
					<thead>
						<th>Product Name:</th>
						<th>Product Price:</th>
						<th>Product Quantity:</th>
						<th>Subtotal:</th>
						<th></th>
					</thead>
					<tbody>
						<?php
						session_start();
						$products = file_get_contents("../assets/lib/products.json");

						$products_array = json_decode($products, true);

						$total = 0;


						if(isset($_SESSION['cart'])){
							foreach ($_SESSION['cart'] as $name => $quantity) {
								foreach($products_array as $indiv_product){
									if($name == $indiv_product['name']){
										$subtotal = $indiv_product['price']*$quantity;
										$total += $subtotal;
										?>
										<tr>
										<td><?php echo $name ?></td>
										<td><?php echo $indiv_product['price'] ?></td>
										<td>
											<form action="../controllers/add-to-cart-process.php" method="POST">
												<input type="hidden" name="name" value="<?php  echo $name;?>">
												<input type="hidden" name="fromCartPage" value="fromCartPage">

												<div class="input-group">

													<input type="number" name="quantity" value="<?php echo $quantity?>" class="form-control">
													<div class="input-group-append">
														<button class="btn btn-sm btn-success" type="submit">Update
													</button>
														
													</div>
												</div>
												
												
											</form>
										</td>
										<td><?php echo number_format($subtotal, 2, ".", ",") ?></td>
										<td>
											<a href="../controllers/remove-from-cart-process.php?name=<?php echo $name; ?>" class="btn btn-danger">Delete</a>
										</td>
										</tr>
										<?php 
									}
								}
							}
						}
						?>
						<tr >
							<td></td>
							<td></td>
							<td>Total: </td>
							<td><?php echo number_format($total, 2, ".", ",") ?></td>
							<td>
								<a href="../controllers/empty-cart-process.php"
								class="btn btn-dark">Empty Cart</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
	}
?>	