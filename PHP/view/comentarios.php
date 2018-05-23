<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Array Enterprises - Elemento X</title>



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="../view/css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controller/funcoes.js"></script>
	<script type="text/javascript" src="../controller/verificar_user.js"></script>



</head>

<body>

	<?php include ("menu_nao_logado.php"); ?>


	<div class="container">

		<div class="col-md-1 "> </div>

		<div class="col-md-3 painel"> </div>

		<div class="col-md-2 "> </div>


		<div class="col-md-6 col-">
      <div id="lista_comentarios" class="list-group">
      </div>
    </div>

</div>



</body>

</html>
