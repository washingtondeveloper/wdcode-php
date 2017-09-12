<?php session_start();

	$login = $_POST['login'];
	$senha = $_POST['password'];

	
	$_SESSION["usuario"] = $login;

	header("location:index.php")
 ?>