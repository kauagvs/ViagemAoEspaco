<?php

  require '../../model/usuario/usuario_cadastro.php';

  $nome = $_POST["nome"];
  $senha = md5($_POST["senha"]);

  $objDb = new usuario_cadastro();
  $acesso = $objDb->acessar_cadastro($nome, $senha);

?>