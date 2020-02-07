<?php
	session_start();
	$name = $_GET['name'];

	unset($_SESSION['cart'][$name]);
	header("Location: ". $_SERVER['HTTP_REFERER']);
?>