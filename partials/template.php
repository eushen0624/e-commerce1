<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="../index.php">Coffee Favorites</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="catalog.php">Products Menu <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="add-product.php">Add Product</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="cart.php">Cart</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>
		    </ul>
		  </div>
	</nav>

	<!-- PAGE CONTENT -->
	<?php 
		get_body_content();
	?>

	<!-- FOOTER -->

	<footer class="page-footer font-small bg-dark navbar-dark">
		<div class="footer-copyright text-center py-3">2020 Made By 1:B55
			
		</div>
	</footer>
</body>
</html>