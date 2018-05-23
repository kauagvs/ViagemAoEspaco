<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$erro_email 	= isset ($_GET['erro_email']) 	? $_GET['erro_email']		 	: 0;
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Array Enterprises - Elemento X</title>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controller/funcoes.js"></script>
	<script type="text/javascript" src="../controller/verificar_user.js"></script>


</head>

<body>

	<?php include ("menu_nao_logado.php"); ?>

	<div class="container">


		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Faça seu Cadastro</h3>
			<br />
			<form method="post" action="../model/registro.php" id="formCadastrarse" enctype = "multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
				</div>

				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					<?php
						if ($erro_email) {
							echo '<font style = "color:#FF0000" >E-mail já Existe</font>';
						}
					?>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
				</div>

				<div class="form-group">
					<label for="exampleInputFile">Foto de Perfil</label>
					<input type="file" class="form-control-file" id="arquivo" name="arquivo" required="requiored">
					<small id="fileHelp" class="form-text text-muted">Selecione uma Foto</small>
				</div>



				<button type="submit" class="btn btn-danger form-control">Cadastre-se</button>
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
