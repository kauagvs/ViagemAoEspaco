<?php

session_start();

require_once("db.class.php");


$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "select id, email, nome, nivel from usuario where email = '$email' and senha = '$senha' ";

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {
  $dados_usuario = mysqli_fetch_array($resultado_id);
  if (isset ($dados_usuario['email'])) {
    $_SESSION['id_usuario'] = $dados_usuario['id'];
    $_SESSION['email'] = $dados_usuario['email'];
    $_SESSION['nome'] = $dados_usuario['nome'];
    $_SESSION['nivel'] = $dados_usuario['nivel'];
    if ($_SESSION['nivel'] == 1){
      header('Location: ../view/home.php');
    }
    if ($_SESSION['nivel'] == 2){
      header('Location: ../view/home_adm.php');
    }

  }else {
    header('Location: ../index.php?erro=1');
  }
}else{
  echo "Erro na Execução da Consulta, Contatar o Suporte";
}

?>
