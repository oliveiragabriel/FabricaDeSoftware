<?php

	$curso = $_GET['nomecurso'];
	$validacaocurso = validarnomecurso($curso);
	if($validacaocurso == 0){
		echo "Nome do curso válido!";
	}
	else{
		echo "Nome do curso inválido!";	
	}

	function validarnomecurso ($curso){
		$curso = trim($curso);
		$arraycurso = str_split($curso, 1);
		$erro = 0;
		for ($i=0; $i < strlen($curso); $i++){ 
			$caractere = ord($arraycurso[$i]);
			if(($caractere > 32 && $caractere < 47 && $caractere != 45 && $caractere != 41 && $caractere != 40) || ($caractere > 57 && $caractere < 65) || ($caractere > 90 && $caractere < 97) || ($caractere > 122 && $caractere < 128)){
				$erro++;
			}
		}
		return $erro;
	}
?>
