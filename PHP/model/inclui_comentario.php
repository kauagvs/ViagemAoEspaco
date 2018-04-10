<?php
session_start();

if (!isset($_SESSION['email'])) {
  header ('Location: ../index.php?erro=1');
}
require_once("db.class.php");

$texto_comentario = $_POST['comentario'];
$id_usuario = $_SESSION['id_usuario'];

if ($texto_comentario == '' || $id_usuario == '' ) {
  die();
}

$objDb = new db();
$link = $objDb->conecta_mysql();


$sql = "insert into comentario (id_usuario, comentario) values('$id_usuario', '$texto_comentario')";

mysqli_query($link, $sql);

?>
