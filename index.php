<?php session_start() ?>
<?php include_once('header.php');?>

<div class="container">

	<div style="max-width: 360px; margin:0 auto;">
		<div class="jumbotron text-center">
			<h2>Login</h2>
			<form action="logar.php">
				<div class="form-group">
					<input type="text" name="login" class="form-control input-lg" placeholder="login">
					<input type="password" class="form-control input-lg" placeholder="password">
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-lg btn-primary">Logar</button>
				</div>
			</form>
			<div class="text-right">
				<a href="cadastro-usuario.php">Cadastra-se</a>
			</div>
		</div>

	</div>

</div>

<?php include_once('footer.php') ?>
