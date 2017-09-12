<?php 
	include_once('contato.class.php');
	include('banco.php');

	$c1 = new Contato();
	$c1->nome = "Felipe Silva";
	$c1->email = "felipesilva@exemplo.com";
	$c1->telefone="011-3232-6656";	

	$c2 = new Contato();
	$c2->nome = "Carla Mendes";
	$c2->email = "carlamendes@exemplo.com";
	$c2->telefone="011-7845-1256";

	$c3 = new Contato();
	$c3->nome = "Gustavo Henrique";
	$c3->email = "gustavo@exemplo.com";
	$c3->telefone="011-4578-5451";

	$banco = Banco::getInstance();
	$banco->addContato($c1);
	$banco->addContato($c2);
	$banco->addContato($c3);

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Agenda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Agenda</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="listagem.php">Listagem</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>