<?php

session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php?erro=1');
}


?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Array Enterprises - Elemento X</title>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

	<?php include ("menu_logado_adm_2.php"); ?>

	<div class="container">

		<br /><br />

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Alterar senha:</h3>
			<br />
			<form method='post' action='../model/editar_senha.php'>
				<div class="form-group">
					<input type="password" class="form-control" id="senha" name="senha" required="requiored">
				</div>


				<button type="submit" class="btn btn-danger form-control">Alterar</button>
			</form>
		</div>
		<div class="col-md-4"></div>



	</div>

	</div>

</body>

</html>
