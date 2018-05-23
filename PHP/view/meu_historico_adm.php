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
    <link href="../view/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../controller/funcoes_meu_historico_adm.js"></script>

  </head>

    <body>


    <?php include ("menu_logado_adm_2.php"); ?>

    	<div class="container">

        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4><?= $_SESSION['nome'] ?></h4>
              <hr />
              <div class="col-md-4">
                <a href="adm_meu_cadastro.php">CADASTRO </a>
              </div>
              <div class="col-md-4">
                <a href="meu_historico_adm.php">HISTÓRICO </a>
              </div>
              <div class="col-md-4">
                <a href="adm_comentarios.php">COMENTÁRIOS</a>
              </div>
            </div>
           </div>
           <div class="col-md-12">
             <div class="painel">
             </div>
         </div>
        </div>

    		<div class="col-md-7">
          <div id="lista_historico" class="list-group">
          </div>


    	</div>
    </body>
</html>
