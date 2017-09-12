<?php include('header.php') ?>
<div class="container">

	<div class="panel panel-primary">
		<div class="panel-heading"><h2 class="panel-title">Cadastro de Usuario</h2></div>
		<div class="panel-body">
			<form action="cadastrar-banco.php" method="POST">
				<div class="form-group">
					<label>Login</label>
					<input type="text" name="login" class="form-control" placeholder="login">
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" class="form-control " placeholder="password">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include('footer.php') ?>