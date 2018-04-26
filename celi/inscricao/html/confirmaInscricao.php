<?php
include("../control/extrairvalidar.php");
session_start();
if((!isset ($_SESSION['nascimento']) == true) && (!isset ($_SESSION['course']) == true) && (!isset ($_SESSION['radio']) == true) && (!isset ($_SESSION['logradouro']) == true) && (!isset ($_SESSION['bairro']) == true) && (!isset ($_SESSION['cidade']) == true) && (!isset ($_SESSION['uf']) == true) && (!isset ($_SESSION['phone1']) == true) && (!isset ($_SESSION['name']) == true))
{
    unset($_SESSION['name']);
    unset($_SESSION['phone1']);
    unset($_SESSION['phone2']);
    unset($_SESSION['email']);
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

    header('location:inscricao.php');
}
$nome = $_SESSION['name'];
$telefone1 = $_SESSION['phone1'];
$telefone2 = $_SESSION['phone2'];
$email = $_SESSION['email'];
$rg = $_SESSION['document1'];
$orgaoEmissor = $_SESSION['OrgEmiRg'];
$cpf = $_SESSION['document2'];
$datNascimento = $_SESSION['nascimento'];
$uf = $_SESSION['uf'];
$cidade = $_SESSION['cidade'];
$bairro = $_SESSION['bairro'];
$logradouro = $_SESSION['logradouro'];
$complemento = $_SESSION['complemento'];
$situacao = $_SESSION['radio'];
$curso = $_SESSION['course'];

$arrayNascimento = explode("-","$datNascimento");
$y = $arrayNascimento[0];
$m = $arrayNascimento[1];
$d = $arrayNascimento[2];
$datNascimento="$d/$m/$y";

if($email == null){
    $email = '-';
}if($telefone2 == null){
    $telefone2 = '-';
}if($cpf == null){
    $cpf = '-';
}if($orgaoEmissor == null){
    $orgaoEmissor = '-';
}if($rg == null){
    $rg = '-';
}
if($orgaoEmissor == null){
    $orgaoEmissor = '-';
}
if($situacao =="i"){
    $situacao="Interno";
}elseif($situacao =="e"){
    $situacao="Externo";
}

$conexao = mysqli_connect("localhost", "root", "", "celi");
if (!$conexao){
    echo "ERROR! failure to connect to the database.";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}
$sql = "SELECT curso.nome FROM editalcurso JOIN curso ON editalcurso.idcurso=curso.idcurso WHERE editalcurso.ideditalcurso = $curso ";
$query = mysqli_query($conexao, $sql);
$nomeCurso= mysqli_fetch_assoc($query);

?>
<!DOCTYPE HTML>
<html>
	<head></head>
	<body>
		<header></header>
		<!-- colocar classe -->
		<p>Confirmação de Inscrição </p>
		<div>
			<h1>Dados</h1>
			<p>Nome: <?php echo $nome; ?> </p>
			<p>Telefone 1: <?php echo$telefone1; ?> </p>
			<p>Telefone 2: <?php echo$telefone2; ?> </p>
			<p>Email: <?php echo$email; ?></p>
			<p>RG: <?php echo $rg; ?> </p>
			<p>Órgão: <?php echo $orgaoEmissor; ?> </p>
			<p>CPF: <?php echo $cpf; ?> </p>
			<p>Data de Nascimento: <?php echo $datNascimento; ?> </p>
			<p>UF: <?php echo $uf; ?> </p>
			<p>Cidade: <?php echo $cidade; ?> </p>
			<p>Bairro: <?php echo $bairro; ?> </p>
			<p>Logradouro: <?php echo $logradouro; ?> </p>
			<p>Complemento: <?php echo $complemento; ?> </p>
			<p>Situação: <?php echo $situacao; ?> </p>
			<p>Curso: <?php echo $nomeCurso['nome']; ?> </p>


			<a href = "inscricao.php" ><input type="button" value="Voltar"></a>
			<a href = "inscricaoConfirmada.php" ><input type="button" value="Concluir"></a>

		</div>
		<footer></footer>
	</body>
</html>
