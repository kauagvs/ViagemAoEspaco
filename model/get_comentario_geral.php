
<?php
session_start();

require_once("db.class.php");

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "SELECT DATE_FORMAT(c.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, c.id_comentario, c.comentario, u.nome, u.foto ";
$sql .= "FROM comentario AS c JOIN usuario AS u ON (c.id_usuario = u.id) ";
$sql .= "ORDER BY data_inclusao DESC";


$resultado_id = mysqli_query($link, $sql);

if ($resultado_id ) {

  while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {

    echo '<a href="" class="list-group-item col-md-12">';
		    echo '<div class="col-md-2">';
          echo '<img src="../upload/'.$registro['foto'].'" height="70" width="70">';
        echo '</div>';
        echo '<div class="col-md-8">';
          echo '<h4 class="list-group-item-heading">' . $registro['nome'] . ' <small> - ' . $registro['data_inclusao_formatada'] . '</small></h4>';
          echo '<p class="list-group-item-text">' . $registro['comentario'] . '</p>';
        echo '</div>';
    echo '</a>';
  }

} else {
  echo "Erro na Consulta ";
}
?>
