<?php 
	include "./validacaocurso.php";
	include "../../arquivosfixos/pdaoscript.php";

	// Pegando os dados do formulário e validando
	$nomecurso = $_GET['nomecurso'];
	$validacaocurso = validarnomecurso($nomecurso);
	if($validacaocurso == 0){
		// Estabelecendo e verificando conexão com o BD
		$conexao = conexaobd();
		if($conexao){
			// Instanciando as variáveis que será enviadas a função
			$tabela = "curso";
			$elementos = "nome";
			$conteudo = "'$nomecurso'";
			$condicao = NULL;
			// Chamando a função de insert no BD
			$insert = inserirbd($tabela, $elementos, $conteudo, $condicao);
			// Feedback do insert
			if($insert){
				echo "Inseriu!";
			}
			else{
				echo "Não inseriu!";
			}
		}
	}
	else{
		echo "nome inválido!";
	}

	


?>