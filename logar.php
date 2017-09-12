<?php 
	session_start();

	$login = $_GET['login'];

	if(!$_SESSION["usuario"] == $login){
		header("location:index.php");
	} else {
		header("location:listagem.php");
	}

?>