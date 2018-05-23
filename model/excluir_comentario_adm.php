<?php

session_start();

require_once("db.class.php");

$idComent = $_POST['id_comentario'];


$objDb = new db();
$link = $objDb->conecta_mysql();

    $sql = "DELETE FROM comentario WHERE id_comentario = '$idComent'";

      if (mysqli_query($link, $sql)) {
      header("Location: ../view/adm_comentarios.php");

    }else {
      echo "Erro";
    }


  ?>
