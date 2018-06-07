<?php

  require '../../model/usuario/usuario_cadastro.php';

  $id_usuario = $_SESSION['id_usuario'];

  $comentario = $_POST["comentario"];

  $objDb = new usuario_cadastro();
  $acesso = $objDb->adicionar_comentario($comentario, $id_usuario);

?>