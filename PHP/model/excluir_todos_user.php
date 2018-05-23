<?php

session_start();

require_once("db.class.php");

$id_usuario = $_SESSION['id_usuario'];


$objDb = new db();
$link = $objDb->conecta_mysql();

    $sql = "DELETE FROM comentario WHERE id_usuario = '$id_usuario' ";

      if (mysqli_query($link, $sql)) {
      header("Location: ../view/meus_comentarios.php");
      }

  ?>
