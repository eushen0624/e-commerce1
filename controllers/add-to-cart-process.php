<?php
	// var_dump($_POST);
	session_start();
	$name = $_POST['name'];
	$quantity = intval($_POST['quantity']);


	if(isset($_POST['fromCartPage']) && $quantity < 1){
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}else if(isset($_POST['fromCartPage'])){
		$_SESSION['cart'][$name] = $quantity;
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}else{
		if(!isset($_SESSION['cart'][$name])){
		$_SESSION['cart'][$name] = $quantity;
		// var_dump("hello");
		}else{
		$_SESSION['cart'][$name] += $quantity;
		// var_dump("hi");
		}

	// var_dump($_SESSION['cart']);
	header("Location: ". $_SERVER['HTTP_REFERER']);
	}
?>