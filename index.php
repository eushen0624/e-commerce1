<!DOCTYPE html>
<html>
<head>
	<title>Coffee Favorites</title>
	<!-- bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">
</head>
<body>
	<header>
			<!-- Nav bar Bootswatch -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="#">Coffee Favorites</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Products Menu <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Add Product</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Cart</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<div class="vh- d-flex justify-content-center align-items-center flex-column" style="height: 75vh;">
			<h1>Welcome to Coffee Favorites!</h1>
			<a href="views/catalog.php" class="btn btn-primary">View Menu</a>	
		</div>
		
	</header>

	<section>
	 	<h1 class="text-center p-5">Featured Coffees</h1>
	 		<div class="container">
	 			<div class="row">
	 				<?php
	 					$products = file_get_contents("assets/lib/products.json");

	 					// var_dump($products);
	 					$products_array = json_decode($products, true);
	 					// var_dump($products_array);
	 					for($i = 0; $i < 3; $i++){
	 	 				?>
	 	 				<div class="col-lg-4 py-2">
	 	 					<div class="card">
	 	 						<img src="assets/lib/<?php echo $products_array[$i]["image"]?>" class="card-img-top img-fluid" height="450px">
	 	 						<div class="card-body">
	 	 							<h5 class="card-title"><?php echo $products_array[$i]["name"]?></h5>
	 	 							<p class="card-text">Price: Php <?php echo $products_array[$i]["price"]?></p>
	 	 							<p class="card-text">Description: <?php echo $products_array[$i]["description"]?></p>
	 	 						</div>
	 	 					</div>
	 	 				</div>
	 	 				<?php
	 	 					}
	 	 				?>
	 			</div>
	 		</div>
	 	

	</section>
</body>
</html>