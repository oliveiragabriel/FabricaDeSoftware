<?php
session_start();
if((!isset ($_SESSION['name']) == true) && (!isset ($_SESSION['phone1']) == true) && (!isset ($_SESSION['phone2']) == true) && (!isset ($_SESSION['document1']) == true) && (!isset ($_SESSION['OrgEmiRg']) == true) && (!isset ($_SESSION['document2']) == true) && (!isset ($_SESSION['nascimento']) == true) && (!isset ($_SESSION['uf']) == true) && (!isset ($_SESSION['cidade']) == true) && (!isset ($_SESSION['bairro']) == true) && (!isset ($_SESSION['logradouro']) == true) && (!isset ($_SESSION['complemento']) == true) && (!isset ($_SESSION['radio']) == true) && (!isset ($_SESSION['course']) == true) && (!isset ($_SESSION['radioDeficiencia']) == true))//fazer isso com todos os campos obrigatórios
{
    unset($_SESSION['name']);// fazer com todas os campos
    unset($_SESSION['phone1']);
    unset($_SESSION['phone2']);
    unset($_SESSION['document1']);
    unset($_SESSION['OrgEmiRg']);
    unset($_SESSION['document2']);
    unset($_SESSION['nascimento']);
    unset($_SESSION['uf']);
    unset($_SESSION['cidade']);
    unset($_SESSION['bairro']);
    unset($_SESSION['logradouro']);
    unset($_SESSION['complemento']);
    unset($_SESSION['radio']);
    unset($_SESSION['course']);
    unset($_SESSION['radioSim']);
    unset($_SESSION['radioNao']);
    
    
    header('location:index.php');
}
$nome = $_SESSION['name'];//fazer com todas os campos - botar email e nascimento
$telefone1 = $_SESSION['phone1'];
$telefone2 = $_SESSION['phone2'];
$rg = $_SESSION['document1'];
$orgaoEmissor = $_SESSION['OrgEmiRg'];
$cpf = $_SESSION['document2'];
$datNascimento = $_SESSION['nascimento']
$uf = $_SESSION['uf'];
$cidade = $_SESSION['cidade'];
$bairro = $_SESSION['bairro'];
$logradouro = $_SESSION['logradouro'];
$complemento = $_SESSION['complemento'];
$situacao = $_SESSION['radio'];
$curso = $_SESSION['course'];
$deficiencia = $_SESSION['radioDeficiencia'];

?>
<!DOCTYPE HTML>
<html>
	<head></head>
	<body>
		<header></header>
		<!-- colocar classe -->
		<p>Confirção de Inscrição </p>
		<div>
			<h1>Dados</h1>
			<p>Nome: <?php $nome; ?> </p> <!-- fazer  com todos os campos-->
			<p>Telefone 1: <?php $telefone1; ?> </p>
			<p>Telefone 2: <?php $telefone2; ?> </p>
			<p>RG: <?php $rg; ?> </p>
			<p>Órgão: <?php $orgaoEmissor; ?> </p>
			<p>CPF: <?php $cpf; ?> </p>
			<p>Data de Nascimento: <?php $datNascimento; ?> </p>
			<p>UF: <?php $uf; ?> </p>
			<p>Cidade: <?php $cidade; ?> </p>
			<p>Bairro: <?php $bairro; ?> </p>
			<p>Logradouro: <?php $logradouro; ?> </p>
			<p>Complemento: <?php $complemento; ?> </p>
			<p>Situação: <?php $situacao; ?> </p>
			<p>Curso: <?php $curso; ?> </p>
			<p>Deficiência: <?php $deficiencia ?> </p>
			
			<a href = "inscricao.html" ><input type="button" value="Voltar"></a>
			<a href = "inscricaoConfirmada.php" ><input type="button" value="Concluir"></a>
			
		</div>
		<footer></footer>		
	</body>
</html>