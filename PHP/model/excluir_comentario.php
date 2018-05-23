<?php

session_start();

require_once("db.class.php");

$id_usuario = $_SESSION['id_usuario'];

$idComent = $_POST['id_comentario'];

include ("get_comentario.php");


$objDb = new db();
$link = $objDb->conecta_mysql();

    $sql = "DELETE FROM comentario WHERE id_usuario = $id_usuario AND id_comentario = $idComent";

    if (mysqli_query($link, $sql)) {
    header("Location: ../view/meus_comentarios.php");

  }else {
    echo "Erro";
  }



  ?>
