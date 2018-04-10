

    <?php

    session_start();

    if (!isset($_SESSION['email'])) {
      header ('Location: ../index.php?erro=1');
    }

    require_once("db.class.php");

    $id_usuario = $_SESSION['id_usuario'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(c.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, DATE_FORMAT(c.data_alteracao, '%d %b %Y %T') AS data_alteracao_formatada, c.id_comentario, c.comentario, u.nome, u.foto ";
    $sql .= "FROM comentario AS c JOIN usuario AS u ON (c.id_usuario = u.id) ";
    $sql .= "WHERE id_usuario = $id_usuario ORDER BY data_alteracao DESC";


    $resultado_id = mysqli_query($link, $sql);

    if ($resultado_id ) {

      while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {

        echo '<div class="list-group-item col-md-12">';
            echo '<h4 class="list-group-item-heading">' . $registro['nome'] . ' <small> - Comentário Inserido: ' . $registro['data_inclusao_formatada'] . '</small><small> / Ultima Alteração:  ' . $registro['data_alteracao_formatada'] . '</small></h4>';
            echo '<p class="list-group-item-text">' . $registro['comentario'] . '</p>';
            echo '<br />';
          echo  '<table>';
            echo  '<tr>';
              echo   '<td width = 100>';
              echo "<form method='post' id='form_exclui' action = '../model/excluir_comentario.php'>";
                echo "<input type ='hidden' id='id_comentario' name ='id_comentario' value = ". $registro['id_comentario']."> ";
                echo '<button class="btn btn-danger botao_padrao" id="btn_excluir" type="submit">Excluir</button>';
              echo "</form>";
              echo '</td>';
              echo '<td>';
              echo "<form method='post' id='form_exclui' action = '../view/alterar_comentario.php'>";
                echo "<input type ='hidden' id='id_comentario' name ='id_comentario' value = ". $registro['id_comentario']."> ";
                echo '<button class="btn btn-info botao_padrao" id="btn_alterar" type="submit">Alterar</button>';
              echo "</form>";
              echo '</td>';
            echo  '</tr>';
          echo '</table>';
        echo '</div>';
      }

    } else {
      echo "Erro na Consulta";
    }

    ?>
