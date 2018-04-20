<?php
	// include('../control/itensedital.php');
	require "../../../arquivosfixos/pdao/pdaoscript.php";

	$campos = "idcurso, nome";
	$tabela = "curso";
	$sql =  selecionarbd($campos, $tabela, NULL);
?>

<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>Registrar Edital</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<!-- <link rel="stylesheet" type="text/css" href="./css/edital.css"> -->
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/footer/style.css">
		<script src="../../../arquivosfixos/js/jquery.min.js"></script>
		<script src="../../../arquivosfixos/js/headerslidebar.js"></script>
		<script src="./js/script.js"></script>
	</head>
	<body>
		<div class="header-menu">
			<nav class="header-nav">
				<ul class="header-list">
					<a class="header-menuItem header-menuItemLogotipo" href="#">
						<img class="header-menuItem-content header-menuItem-logotipo" src="../../../arquivosfixos/midia/logo2.png" alt="logotipo">
					</a>
					<a class="header-menuItem" href="#">
						<span class="header-menuItem-content header-menuItem-icon">+</span>
						<p class="header-menuItem-content header-menuItem-text">Início</p>
					</a>
					<a class="header-menuItem" href="#">
						<span class="header-menuItem-content header-menuItem-icon">+</span>
						<p class="header-menuItem-content header-menuItem-text">Edital</p>
					</a>
					<a class="header-menuItem" href="../../../cadastrarcurso/html/cadastrarcurso.html">
						<span class="header-menuItem-content header-menuItem-icon">+</span>
						<p class="header-menuItem-content header-menuItem-text">Cursos</p>
					</a>
					<a class="header-menuItem" href="#">
						<span class="header-menuItem-content header-menuItem-icon">+</span>
						<p class="header-menuItem-content header-menuItem-text">Inscrições</p>
					</a>
					<a class="header-menuItem" href="#">
						<span class="header-menuItem-content header-menuItem-icon">+</span>
						<p class="header-menuItem-content header-menuItem-text">Sorteio</p>
					</a>
				</ul>
			</nav>
		</div>
		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../../arquivosfixos/midia/logo-white2.png" alt="logotipo">
					</div>
					<div class="header-menuIcon">
						<span class="header-menuIcon-content"></span>
					</div>
				</div>
			</header>
			<main id="main">
				<div class="main-content">
					<h1 class="main-title">Registrar Edital</h1>
					<form class="main-form" action="../control/inserteditalbd.php" method="post">
						<table class="main-form-content">
							<tr class="main-form-abertTitle">
								<td class="main-form-abertTitle-ctt" colspan="4">
									<p class="main-form-abertTitle-ctt-text">abertura</p>
								</td>
							</tr>
							<tr class="main-form-abertLabel">
								<td class="main-form-abertLabel-data" colspan="2">
									<label class="main-form-abertLabel-data-text">Data de abertura</label>
								</td>
								<td class="main-form-abertLabel-hora" colspan="2">
									<label class="main-form-abertLabel-hora-text">Hora de abertura</label>
								</td>
							</tr>
							<tr class="main-form-abertInput">
								<td class="main-form-abertInput-data"colspan="2">
									<input class="main-form-abertInput-data-text" type="date" name="dataabertura">
								</td>
								<td class="main-form-abertInput-hora" colspan="2">
									<input class="main-form-abertInput-hora-text" type="time" name="horaabertura">
								</td>
							</tr>
							<tr class="main-form-encerTitle">
								<td class="main-form-encerTitle-ctt" colspan="4">
									<p class="main-form-encerTitle-ctt-text">encerramento</p>
								</td>
							</tr>
							<tr class="main-form-encerLabel">
								<td class="main-form-encerLabel-data" colspan="2">
									<label class="main-form-encerLabel-data-text">Data de encerramento</label>
								</td>
								<td class="main-form-encerLabel-hora" colspan="2">
									<label class="main-form-encerLabel-hora-text">Hora de encerramento</label>
								</td>
							</tr>
							<tr class="main-form-encerInput">
								<td class="main-form-encerInput-data" colspan="2">
									<input class="main-form-encerInput-data-text" type="date" name="dataencerramento">
								</td>
								<td class="main-form-encerInput-hora" colspan="2">
									<input class="main-form-encerInput-hora-text" type="time" name="horaencerramento">
								</td>
							</tr>
							<tr class="main-form-cursoTitle">
								<td class="main-form-check-ctt">
									<span class="main-form-check-ctt-text"> </span>
								</td>
								<td class="main-form-cursoTitle-ctt">
									<p class="main-form-cursoTitle-ctt-text">Cursos</p>
								</td>
								<td class="main-form-vagasTitle-ctt">
									<p class="main-form-vagasTitle-ctt-text">Vagas interna</p>
								</td>
								<td class="main-form-vagasTitle-ctt">
									<p class="main-form-vagasTitle-ctt-text">Vagas externa</p>
								</td>
							</tr>
							<?php
							while($curso = mysqli_fetch_array($sql)){
							?>
							<tr class="main-form-cursoLine">
								<td class="main-form-cursoLine-checkbox">
									<input class="main-form-cursoLine-checkbox-element" type="checkbox" name="<?php echo "curso".$curso['idcurso']; ?>" value="<?php echo $curso['idcurso']; ?>">
								</td>
								<td class="main-form-cursoLine-nome">
									<p class="main-form-cursoLine-nome-text"><?php echo $curso['nome']; ?></p>
								</td>
								<td class="main-form-cursoLine-vagas vagas-interno">
									<input class="main-form-cursoLine-vagas-interno" type="number" name="<?php echo "interno".$curso['idcurso']; ?>" min="0" placeholder="Interno" disabled>
								</td>
								<td class="main-form-cursoLine-vagas vagas-externo">
									<input class="main-form-cursoLine-vagas-externo" type="number" name="<?php echo "externo".$curso['idcurso']; ?>" min="0" placeholder="Externo" disabled>
								</td>
							</tr>
							<?php
							}
							?>
							<tr class="main-form-condicao">
								<td class="main-form-condicao-title" colspan="4">
									<label class="main-form-condicao-title-text">Condições de Participação</label>
								</td>
							</tr>
							<tr>
								<td class="main-form-condicao-input" colspan="4">
									<textarea class="main-form-condicao-input-element" type="text" name="condicao"></textarea>
								</td>
							</tr>
						</table>

						<button class="main-form-inputButton" type="submit">Inserir</button>
					</form>
				</div>
			</main>
			<footer id="footer">
				<div class="footer-content">
					<div class="footer-content-logotipo footer-content-cefet">
						<img class="footer-content-cefet-img" src="#" alt="Logotipo do CEFET/RJ">
					</div>
					<div class="footer-content-logotipo  footer-content-fabricadesoftware">
						<img class="footer-content-fabricadesoftware-img" src="#" alt="Logotipo da Fábrica de Software">
					</div>
					<div class="footer-content-logotipo footer-content-wordpress">
						<img class="footer-content-wordpress-img" src="#" alt="Créditos do Wordpress">
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
