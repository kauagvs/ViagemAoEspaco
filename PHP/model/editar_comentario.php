<?php

session_start();

require_once("db.class.php");


 $id_usuario = $_SESSION['id_usuario'];
 $idComent = $_POST['id_comentario'];
 $Coment = $_POST['comentario'];


$objDb = new db();
$link = $objDb->conecta_mysql();

    $sql = "UPDATE comentario SET comentario = '$Coment', data_alteracao = current_timestamp WHERE id_comentario = '$idComent'";

      if (mysqli_query($link, $sql)) {

          $sql2 = "insert into historico (id_usuario, data_alteracao, id_comentario, comentario) values('$id_usuario', current_timestamp(), '$idComent', '$Coment')";
          mysqli_query($link, $sql2);
          header("Location: ../view/meus_comentarios.php");

    }else {
      echo "Erro";
    }


  ?>
