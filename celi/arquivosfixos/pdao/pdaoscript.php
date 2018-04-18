<?php
	
	// Conexao com o Banco De Dados
	function conexaobd (){
		$conexao = mysqli_connect("localhost", "root", "", "celi");
		if (!$conexao){
			echo "ERROR! failure to connect to the database.";
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		}
		return $conexao;
	};

	// Verificação a existencia de determinado elemento no Banco De Dados
	function verificarbd ($tabela, $condicao){
		$conexao = conexaobd();
		if($conexao){
			$sql = "SELECT nome FROM ".$tabela." WHERE ".$condicao.";";
			$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
			$qtdelinha = mysqli_num_rows($query);

			return $qtdelinha;
		}
		else{
			echo "Conexão com o BD não estabelecida!";
			return FALSE;
		}

	}

	// Inserir no Banco De Dados
	function inserirbd ($tabela, $elementos, $conteudo, $condicao){
		$conexao = conexaobd();
		if($conexao){
			if($condicao == NULL){
				$sql = "INSERT INTO $tabela ($elementos) VALUES ($conteudo);";
				$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

				return TRUE;
			}
			else{
				$verificacao = verificarbd($tabela, $condicao);
				if($verificacao == 0){
					$sql = "INSERT INTO $tabela ($elementos) VALUES ($conteudo);";
					$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

					return TRUE;
				}
				else{
					echo "Dado igual a este já inserido!";
					return FALSE;
				}
			}
		}
		else{
			echo "Conexão com o BD não estabelecida!";
			return FALSE;
		}
	}
?>