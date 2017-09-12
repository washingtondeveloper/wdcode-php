<?php include('./header.php') ?>

	<div class="container">
		
		<table class="table table-bordered table-hover">
			<tr>
				<th>Nome</th>
				<th>Telefone</th>
				<th>E-mail</th>
			</tr>
			<?php foreach ($banco->getContatos() as $value) {?>
			<tr>
				<td><?php echo $value->nome?></td>
				<td><?php echo $value->telefone; ?></td>
				<td><?php echo $value->email; ?></td>
			</tr>
			<?php }?>
		</table>

	</div>

<?php include('./footer.php') ?>