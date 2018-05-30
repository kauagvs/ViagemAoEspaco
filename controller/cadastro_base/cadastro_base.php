<?php

  require '../../model/usuario/usuario_cadastro.php';

  $nome = $_POST["nome"];
  $idade = $_POST["idade"];
  $senha = md5($_POST["senha"]);

  $objDb = new usuario_cadastro();
  $acesso = $objDb->adicionar_cadastro($nome, $idade, $senha);

?>