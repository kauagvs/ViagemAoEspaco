<?php
session_start();

require_once("db.class.php");

$id_usuario = $_SESSION['id_usuario'];
$email = $_POST["email"];

$objDb = new db();
$link = $objDb->conecta_mysql();


$sql = " UPDATE usuario SET email = '$email' WHERE id = '$id_usuario'";

if (mysqli_query($link, $sql)) {
  header('Location: ../model/sair.php');
}else{
  header('Location: ../view/alterar_nome.php');
}

?>
