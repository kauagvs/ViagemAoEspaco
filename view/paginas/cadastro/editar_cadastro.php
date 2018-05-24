
<?php include ("../../includes/cabecalho/cabecalho.php"); ?>
	
	<body>	  
		<?php include ("../../includes/navbar/menu.php"); ?>

	<div class="container">


		<div class="col-md-4"></div>
		<div class="col-md-4">
		<br><br>
			<h3><center>Opa! você precisa mudar alguma coisa?</h3></center>
			<br>
			<form method="post" action="" id="formCadastrarse" enctype = "multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" value="" placeholder="Nome" required="requiored">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="idade" value="" name="idade" placeholder="Idade" required="requiored">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" id="senha" value="" name="senha" placeholder="Senha" required="requiored">
				</div>

				<!-- (Coloquei esses value's pra depois que enserir isso no banco trazer os valores devolta e apresentar no front) -->

				<button type="submit" class="btn btn-danger form-control">Alterar</button>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


	</div>
</body>

</html>
