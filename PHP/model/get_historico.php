

    <?php

    session_start();

    if (!isset($_SESSION['email'])) {
      header ('Location: ../index.php?erro=1');
    }

    require_once("db.class.php");

    $id_usuario = $_SESSION['id_usuario'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $sql = "SELECT DATE_FORMAT(h.data_alteracao, '%d %b %Y %T') AS data_alteracao_formatada, h.id_comentario, h.comentario, u.nome ";
    $sql .= "FROM historico AS h JOIN usuario AS u ON (h.id_usuario = u.id) ";
    $sql .= "WHERE id_usuario = $id_usuario ORDER BY data_alteracao DESC";


    $resultado_id = mysqli_query($link, $sql);

    if ($resultado_id ) {

      while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {

        echo '<div class="list-group-item col-md-12">';
            echo '<h4 class="list-group-item-heading">Editado por: ' . $registro['nome'] . ' <small>  Alteração:  ' . $registro['data_alteracao_formatada'] . '</small></h4>';
            echo '<p class="list-group-item-text"> Comentário alterado para: ' . $registro['comentario'] . '</p>';
        echo '</div>';
      }

    } else {
      echo "Erro na Consulta";
    }

    ?>
