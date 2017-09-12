<?php 
	include('banco.php');
	include_once('contato.class.php');

	$nome = $_GET['nome'];
	$telefone =$_GET['telefone'];
	$email = $_GET['email'];

	$contato = new Contato();
	$contato->nome = $nome;
	$contato->telefone = $telefone;
	$contato->email = $email;

	$novoBanco = Banco::getInstance();

	$novoBanco->addContato($contato);

	print_r($novoBanco->getContatos());

 ?>