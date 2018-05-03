<?php
	include "./validacaocurso.php";
	include "../../../arquivosfixos/pdao/pdaoscript.php";

	// Pegando os dados do formulário e validando
	$nomecurso = $_GET['nomecurso'];
	$validacaocurso = validarnomecurso($nomecurso);
	if($validacaocurso == 0){
		// Instanciando as variáveis que será enviadas a função
		$tabela = "curso";
		$elementos = "nome";
		$conteudo = "'$nomecurso'";
		$condicao = NULL;
		// Chamando a função de insert no BD
		$insert = inserirbd($tabela, $elementos, $conteudo, $condicao);
		// Feedback do insert
		if($insert){
			
			header('location: ../html/registrado.html');
		}
		else{
			
			header('location: ../html/naoInseriu.html');
		}
	}
	else{
		
		header('location: ../html/invalido.html');
	}




?>
