<?php include('./header.php') ?>

	<div class="container">
		
		<div class="panel panel-primary">
			<div class="panel-heading"><h2 class="panel-title">Cadastro</h2></div>
			<div class="panel-body">
				
				<form action="cadastrar.php">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="text" name="telefone" class="form-control" placeholder="000-00000-0000">
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="email" class="form-control" placeholder="email@....">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</form>

			</div>
		</div>

	</div>

<?php include('./footer.php') ?>