<?php

session_start();

require_once("db.class.php");


$idade = $_POST["idade"];
$nome = $_POST["nome"];
$senha = md5($_POST["senha"]);

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "select id, idade, nome, from usuario where nome = '$nome' and senha = '$senha' ";

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {
  $dados_usuario = mysqli_fetch_array($resultado_id);
  if (isset ($dados_usuario['email'])) {
    $_SESSION['id_usuario'] = $dados_usuario['id'];
    $_SESSION['nome'] = $dados_usuario['nome'];
    
    
    if ($_SESSION['id_usuario'] == $dados_usuario['id']){
      header('Location: ../view/pagina_inicial.php');
    }

  }else {
    header('Location: ../index.php');
  }
}

?>
