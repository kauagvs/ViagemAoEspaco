<?php

class db {

//Host
private $host = "localhost";

//Usuário
private $usuario = "root";

//Senha
private $senha = "";

//banco de dados
private $database = "arrayenterprises";

  public function conecta_mysql(){
    //criar conexão
    $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

    //Ajustar o charset de comunicação entre a aplicação e o banco de dados
    mysqli_set_charset($con, "utf8");

    //Verificar Erro
    if (mysqli_connect_errno()) {
      echo "Erro ao conectar com o banco de dados: " .mysqli_connect_error();
    }
    return $con;
  }
}


?>
