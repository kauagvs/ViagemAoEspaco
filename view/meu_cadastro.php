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



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  


</head>

<body>

	<?php include ("menu_logado_2.php"); ?>


	<div class="container">

    <div class="col-md-3"></div>
		<div class="col-md-6">
		  <div class="panel panel-default">
		    <div class="panel-body">

            <div class="col-md-10">
              <h4>Nome: <?= $_SESSION['nome'] ?></h4>
            </div>
            <div class="col-md-2">
              <h4><a href="alterar_nome.php">  Editar</a></h4>
            </div>

            <div class="col-md-10">
              <h4>E-mail: <?= $_SESSION['email'] ?></h4>
            </div>
          <div class="col-md-2">
            <h4><a href="alterar_email.php">  Editar</a></h4>
          </div>
          <div class="col-md-10">
            <h4>Senha: </h4>
          </div>
          <div class="col-md-2">
          <h4><a href="alterar_senha.php">  Editar</a></h4>
          </div>
        </div>
		   </div>
		  </div>
      <div class="col-md-3"></div>

	</div>
</body>

</html>
