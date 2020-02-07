<?php 
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];

	// var_dump($_FILES);

	// GET IMAGE PROPERTIES
	$filename = $_FILES['image']['name'];
	$filesize = $_FILES['image']['size'];

	$file_tmpname = $_FILES['image']['tmp_name'];
	// sets all text to lowercase.
	// Sanitize user input
	$file_type = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

	// var_dump($file_type);
	// Validation
	$hasDetails = false;
	$isImg = false;

	// check if the form is incomplete or empty
	if($name != "" && $price > 0 && $description != ""){
		$hasDetails = true;
	}

	//Check if the file is an image
	if($file_type === "jpg" || $file_type === "png" || $file_type=== "jpeg" || $file_type ==="gif" || $file_type==="svg" || $file_type==="webp" || $file_type==="bitmap" || $file_type==="tif"){
		$isImg = true;
	}

	if($filesize > 0 && $isImg===true && $hasDetails == true){
		$imgToSave = "images/" .$filename;
		$final_path = "../assets/lib/" . $imgToSave;
		move_uploaded_file($file_tmpname, $final_path);
		$newProduct =[
			"name" => $name,
			"price" => $price,
			"description" => $description,
			"image" => $imgToSave
		];
		$products = file_get_contents("../assets/lib/products.json");
		$products_array = json_decode($products, true);
		
		array_push($products_array, $newProduct);

		// open the file we want to edit
		$to_write = fopen("../assets/lib/products.json", "w");
		fwrite($to_write, json_encode($products_array, JSON_PRETTY_PRINT));
		fclose($to_write);

		header("Location: ../views/catalog.php");
	}else{
		echo "Please upload an image!";

	}

?>