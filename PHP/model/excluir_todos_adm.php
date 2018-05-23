<?php

session_start();

require_once("db.class.php");


$objDb = new db();
$link = $objDb->conecta_mysql();

    $sql = "DELETE FROM comentario";

      if (mysqli_query($link, $sql)) {
      header("Location: ../view/adm_comentarios.php");
      }

  ?>
