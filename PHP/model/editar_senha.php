<?php
session_start();

require_once("db.class.php");

$id_usuario = $_SESSION['id_usuario'];
$senha = md5($_POST["senha"]);



$objDb = new db();
$link = $objDb->conecta_mysql();


$sql = " UPDATE usuario SET senha = '$senha' WHERE id = $id_usuario";

if (mysqli_query($link, $sql)) {
  header('Location: ../model/sair.php');
}else{
  header('Location: ../view/alterar_senha.php');
}

?>
