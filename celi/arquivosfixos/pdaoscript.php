<?php
	
	// Conexao com o Banco De Dados
	function conexaobd (){
		$conexao = mysqli_connect("localhost", "root", "", "dbceli");
		if (!$conexao){
			echo "ERROR! failure to connect to the database.";
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit();
		}
		return $conexao;
	};

	// Procurar no Banco De Dados
	function procurarbd ($tabela, $condicao){
		$conexao = conexaobd();
		$sql = "SELECT * FROM ".$tabela" WHERE ".$condicao.";";
		$query = mysqli_query($conexao, $sql);
		$qtdelinha = mysqli_fetch_row($query);
		   
		return $qtdelinha;
	}

	// Inserir no Banco De Dados
	function inserirbd ($tabela, $elementos, $conteudo){
		$conexao = conexaobd();
		$qtd = procurarbd("candidato","documento = ".");
		if($qtd==0){
			$sql = "INSERT INTO candidato (nome, documento, telefone, email, ie, idcurso) VALUES ( '$nome', '$documento' ,  '$telefone', '$email', '$ie' , '$idcurso');";
			$query = mysqli_query($conexao, $sql) or die("ERRO: Insert nÃ£o concluido (".mysqli_error($conexao).")");
		}
		else{
			echo "Já existe este documento";
		}
	}
?>