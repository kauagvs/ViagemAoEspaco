<?php

session_start();

require '../../model/conexao/db.class.php';

class usuario_cadastro {

	public function acessar_cadastro($nome, $senha){

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$sql = "select id, idade, nome from usuario where nome = '$nome' and senha = '$senha' ";

		$resultado_id = mysqli_query($link, $sql);

		if ($resultado_id) {
  			
  			$dados_usuario = mysqli_fetch_array($resultado_id);

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['nome'] = $dados_usuario['nome'];

			header('Location: /view/paginas/comentarios/comentario.php');
  		}

 	}

	public function adicionar_cadastro($nome, $idade, $senha){

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$sql = "insert into usuario (nome, idade, senha) values('$nome', '$idade', '$senha')";

		$resultado_id = mysqli_query($link, $sql);

		if ($resultado_id) {
  			$dados_usuario = mysqli_fetch_array($resultado_id);

  			header('Location: /view/paginas/comentarios/comentario.php');
  		}

  		$sql2 = "select id, idade, nome from usuario where nome = '$nome' and senha = '$senha' ";

		$resultado = mysqli_query($link, $sql2);

		if ($resultado) {
  			
  			$dados_usuario = mysqli_fetch_array($resultado);

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['nome'] = $dados_usuario['nome'];
  		}

 	}

	public function adicionar_comentario($comentario, $id_usuario){

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$sql = "insert into comentario (comentario, id_usuario) values('$comentario', '$id_usuario')";

		$resultado_id = mysqli_query($link, $sql);

		if ($resultado_id) {
  			$dados_usuario = mysqli_fetch_array($resultado_id);

  			header('Location: /view/paginas/comentarios/ver_comentarios.php');
  		}

 	}

}


?>


