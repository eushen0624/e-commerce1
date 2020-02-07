<?php 
	var_dump($_GET);
	$name = $_GET['name'];

	$products = file_get_contents("../assets/lib/products.json");

	$products_array = json_decode($products, true);

	foreach ($products_array as $index => $indiv_product) {
		if($indiv_product['name']===$name){
			unset($products_array[$index]);
		}
	}

	// var_dump($products_array);
	$to_write = fopen("../assets/lib/products.json", "w");

	fwrite($to_write, json_encode($products_array, JSON_PRETTY_PRINT));

	
	fclose($to_write);

	header("Location: ".$_SERVER['HTTP_REFERER']);
?>