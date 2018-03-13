<?php

	// FunÃ§Ã£o para estabelecer conexÃ£o com o BD
	function conexao(){
		$conexao = mysqli_connect("localhost", "root", "", "dbceli");
		if (!$conexao){
			echo "ERROR! failure to connect to the database.";
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit();
		}
		return $conexao;
	};

	// FunÃ§Ã£o para adicionar candidato no BD
	function insert ($nome, $documento, $telefone, $email, $ie, $idcurso){
		$conexao = conexao();
		$qtd = procurar("documento",$documento);
		if($qtd==0){
			$sql = "INSERT INTO candidato (nome, documento, telefone, email, ie, idcurso) VALUES ( '$nome', '$documento' ,  '$telefone', '$email', '$ie' , '$idcurso');";
			$query = mysqli_query($conexao, $sql) or die("ERRO: Insert nÃ£o concluido (".mysqli_error($conexao).")");
		}
		else{
			echo "Já existe este documento";
		}
	};
	function procurar ($indice, $obj){
		$conexao = conexao();
		$sql = "SELECT * FROM candidato WHERE ".$indice." = ".$obj.";";
		$query = mysqli_query($conexao, $sql);
		$qtdelinha = mysqli_fetch_row($query);
		   
		return $qtdelinha;
	}
?>
