

    <?php

    session_start();


    require '../../model/conexao/db.class.php';

    $id_usuario = $_SESSION['id_usuario'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "select a.comentario, b.* from comentario AS a JOIN usuario AS b ON (a.id_usuario = b.id)";

    $resultado_id = mysqli_query($link, $sql);

    

    if ($resultado_id ) {

      while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {

        echo '<div class="list-group-item col-md-7">';
            echo '<h4 class="list-group-item-heading">' . $registro['nome'] . ' <small> - Idade: ' . $registro['idade'] . '</small></h4>';
            echo '<p class="list-group-item-text">' . $registro['comentario'] . '</p>';
            echo '<br />';
        echo '</div>';
      }

    } else {
      echo "Erro na Consulta";
    }

    ?>
