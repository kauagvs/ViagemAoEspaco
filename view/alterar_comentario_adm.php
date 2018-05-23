
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="../controller/funcoes.js"></script>'

<?php

session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php?erro=1');
}

$idComent = $_POST['id_comentario'];


  echo '<!DOCTYPE HTML>';
  echo '<html lang="pt-br">';

  echo '<head>';
  echo  '<meta charset="UTF-8">';

  echo '<title>Array Enterprises - Elemento X</title>';

  echo '</head>';

  echo '<body>';

    include ("menu_logado_adm_2.php");

  echo '<div class="container">';

  echo  '<br /><br />';

      echo '<div class="col-md-4"></div>';
      echo '<div class="col-md-4">';
        echo '<h3>Alterar Comentário</h3>';
        echo '<br />';
      echo '<form method="post" action="../model/editar_comentario_adm.php">';
        echo  '<div class="form-group">';
          echo  '<input type="text" class="form-control" id="comentario" name="comentario" required="requiored">';
        echo  '</div>';
        echo "<input type ='hidden' id='id_comentario' name ='id_comentario' value = ".$idComent."> ";
        echo  '<button class="btn btn-info botao_padrao form-control" id="btn_alterar" type="submit">Alterar</button>';
      echo  '</form>';
    echo  '</div>';
    echo  '<div class="col-md-4"></div>';

  echo '</div>';
  echo  '</div>';

echo '</body>';

echo '</html>';



  ?>
