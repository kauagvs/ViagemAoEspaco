<?php

session_start();


require_once("db.class.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);




$objDb = new db();
$link = $objDb->conecta_mysql();

$email_existe = false;


if (isset($_FILES["arquivo"])){

  $diretorio = "../upload/";
  $extensao = strtolower(substr($_FILES["arquivo"]['name'], -4));
  $arquivo = md5(time() + rand()) . $extensao;



  move_uploaded_file($_FILES["arquivo"]["tmp_name"], $diretorio.$arquivo);

}


//Verificar se o e-mail existe
$sql = "select email from usuario where email = '$email' ";

if ($resultado_id = mysqli_query($link, $sql)) {

  $dados_usuario = mysqli_fetch_array($resultado_id);

  if (isset($dados_usuario['email'])) {
    $email_existe = true;
  }

} else{
  echo "Erro ao localizar E-mail";
}

if ($email_existe) {

  $retorno_get ='';

  if($email_existe){
    $retorno_get.= "erro_email=1&";
  }

  header('Location: ../view/inscrevase.php?'.$retorno_get);
  die();
}



$sql = "insert into usuario (nome, email, senha, foto) values('$nome', '$email', '$senha', '$arquivo')";

//Executar a Query
if (mysqli_query($link, $sql)) {
  $sql = "select id, email, nome, foto from usuario where email = '$email' and senha = '$senha' ";

  $resultado_id = mysqli_query($link, $sql);

  if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    if (isset ($dados_usuario['email'])) {
      $_SESSION['id_usuario'] = $dados_usuario['id'];
      $_SESSION['email'] = $dados_usuario['email'];
      $_SESSION['nome'] = $dados_usuario['nome'];
      $_SESSION['foto'] = $dados_usuario['foto'];
      header('Location: ../view/home.php');
    }else {
      header('Location: ../view/inscrevase.php');
    }
  }else{
    echo "Erro na Execução da Consulta, Contatar o Suporte";
  }
}else{
  header('Location: ../view/inscrevase.php');
}



?>
