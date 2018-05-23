<?php
session_start();

require_once("db.class.php");

$id_usuario = $_SESSION['id_usuario'];
$nome = $_POST["nome"];



$objDb = new db();
$link = $objDb->conecta_mysql();


$sql = " UPDATE usuario SET nome = '$nome' WHERE id = '$id_usuario'";

if (mysqli_query($link, $sql)) {
  header('Location: ../model/sair.php');

}else{
  header('Location: ../view/alterar_nome.php');
}
?>
