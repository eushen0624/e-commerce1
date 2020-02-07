<?php 
	require "../partials/template.php";	
	function get_body_content(){

?>
	<h1 class="text-center py-3">Add Product</h1>
	<div class="col-lg-6 offset-lg-3">
		<form action="../controllers/add-product-process.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name" >
					Coffee Name:
				</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="price">Price: </label>
				<input type="number" name="price" class="form-control">
			</div>

			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" class="form-control"></textarea>

			</div>
			<div class="form-group">
				<label for="image">Image: </label>
				<input type="file" name="image" class="form-control">
			</div>
			<button  type = "submit "class="btn btn-primary">Add Product</button>
		</form>
	</div>
<?php	
	}
?>