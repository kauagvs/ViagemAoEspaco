<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Array Enterprises - Elemento X</title>

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="view/css/style.css">
		<script type="text/javascript" src="controller/verificar_user.js"></script>

	</head>

	<body>

		<?php include ("view/menu_inicial.php"); ?>

	    <div class="container">
				<div id="home">
					<div class="row">
		      	<div class="jumbotron col-md-12">
							<div class="col-md-4"></div>
							<div class="banner col-md-4">
							</div>
							<div class="col-md-4"></div>
		      	</div>
					</div>
				</div>

					<div id="descricao" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<h1>Elemento X</h1>
						<p>O produto elemento X, foi desenvolvido especialmente para pessoas que se cuidam, e que querem restaurar a juventude.</p>
						<p>Desenvolvido pelos melhores especialistas, ele utiliza tecnologia de ponta com os últimos avanços em celulas tronco.</p>
						<p>Venha experimentar você também, e desfrute da vida de uma forma mais bela!</p>
					</div>



					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6 botao_home">
							<button type="buttom" class="btn btn-danger"><a href = 'view/comentarios.php'>Acompanhe os Comentários </a></button>
						<div class="col-md-3"></div>
						</div>
					</div>
				</div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
