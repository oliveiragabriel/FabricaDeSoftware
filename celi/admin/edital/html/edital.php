<?php
	// Inicia a sessão
	session_start();

	// Linka o arquivo pdao para pegar os cursos a fim de exibi-los
	require "../../../arquivosfixos/pdao/pdaoscript.php";

	// Instanciando as variáveis que serão utilizadas para executar a função
	$campos = "idcurso, nome";
	$tabela = "curso";
	$sql =  selecionarbd($campos, $tabela, NULL);

	// Verificando se já tem sessão estabelecida
	if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])){
		header('location: ../../login/html/loginAdmin.html');
	}
?>

<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>Registrar Edital</title>
		<!-- ESTILO da páginas -->
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<!-- ESTILO do header e do footer -->
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/footer/style.css">
		<!-- SCRIPT do jquery -->
		<script type="text/javascript" src="../../../arquivosfixos/js/jquery.min.js"></script>
		<!-- SCRIPT da mascara dos inputs -->
		<script type="text/javascript" src="../../../arquivosfixos/js/jquerymask/dist/jquery.mask.min.js"></script>
		<!-- SCRIPT da validação js -->
		<script type="text/javascript" src="./js/script.js"></script>
		<!-- SCRIPT do submenu -->
		<script src="../../../arquivosfixos/js/headersubmenu.js"></script>
	</head>
	<body>

		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../../arquivosfixos/midia/logo-white.png" alt="logotipo">
					</div>
          <div class="header-menu">
  					<nav class="header-nav">
  						<ul class="header-list">
  							<a class="header-menuItem" href="#">
  								<p class="header-menuItem-content">Início</p>
  							</a>
  							<li class="header-menuItem menuItem-edital">
  								<p class="header-menuItem-content">Edital</p>
									<div class="header-subMenu header-subMenu-edital">
										<ul class="header-subList">
											<a class="header-subItem" href="../../edital/html/edital.php">
												<p class="header-subItem-content">Registrar edital</p>
											</a>
											<a class="header-subItem" href="#">
												<p class="header-subItem-content">Alterar edital</p>
											</a>
											<a class="header-subItem" href="#">
												<p class="header-subItem-content">Apagar edital</p>
											</a>
										</ul>
									</div>
  							</li>
  							<li class="header-menuItem menuItem-curso">
  								<p class="header-menuItem-content">Cursos</p>
									<div class="header-subMenu header-subMenu-curso">
										<ul class="header-subList">
											<a class="header-subItem" href="../../cadastrarcurso/html/cadastrarcurso.php">
												<p class="header-subItem-content">Registrar curso</p>
											</a>
											<a class="header-subItem" href="#">
												<p class="header-subItem-content">Alterar curso</p>
											</a>
											<a class="header-subItem" href="#">
												<p class="header-subItem-content">Apagar curso</p>
											</a>
										</ul>
									</div>
  							</li>
  							<a class="header-menuItem" href="../../../inscricao/html/inscricao.html">
  								<p class="header-menuItem-content">Inscrições</p>
  							</a>
  							<a class="header-menuItem" href="#">
  								<p class="header-menuItem-content">Sorteio</p>
  							</a>
  						</ul>
  					</nav>
  				</div>
				</div>
			</header>
			<main id="main">
				<div class="main-content">
					<h1 class="main-title">Registrar Edital</h1>
					<form class="main-form" action="../control/inserteditalbd.php" method="post">
						<table class="main-form-content-dataHora">
							<tr class="main-form-dataLabel">
								<td class="main-form-abertLabel-data" colspan="2">
									<label class="main-form-abertLabel-data-text">data de abertura</label>
								</td>
								<td class="main-form-separador-horaData"></td>
								<td class="main-form-encerLabel-data" colspan="2">
									<label class="main-form-encerLabel-data-text">data de encerramento</label>
								</td>
							</tr> 
							<tr class="main-form-dataInput">
								<td class="main-form-abertInput-data"colspan="2">
									<input class="main-form-abertInput-data-text" type="date" name="dataabertura">
								</td>
								<td class="main-form-separador-horaData"></td>
								<td class="main-form-encerInput-data" colspan="2">
									<input class="main-form-encerInput-data-text" type="date" name="dataencerramento">
								</td>
							</tr>
							<tr class="main-form-horaLabel">
								<td class="main-form-abertLabel-hora" colspan="2">
									<label class="main-form-abertLabel-hora-text">hora de abertura</label>
								</td>
								<td class="main-form-separador-horaData"></td>
								<td class="main-form-encerLabel-hora" colspan="2">
									<label class="main-form-encerLabel-hora-text">hora de encerramento</label>
								</td>
							</tr>
							<tr class="main-form-horaInput">
								<td class="main-form-abertInput-hora" colspan="2">
									<input class="main-form-abertInput-hora-text" type="time" name="horaabertura">
								</td>
								<td class="main-form-separador-horaData"></td>
								<td class="main-form-encerInput-hora" colspan="2">
									<input class="main-form-encerInput-hora-text" type="time" name="horaencerramento">
								</td>
							</tr>
						</table>
						<table class="main-form-content-curso">
							<tr class="main-form-cursoTitle">
								<td class="main-form-checkLabel">
									<span class="main-form-checkLabel-ctt"> </span>
								</td>
								<td class="main-form-cursoLabel">
									<p class="main-form-cursoLabel-ctt">Cursos</p>
								</td>
								<td class="main-form-vagasLabel">
									<p class="main-form-vagasLabel-ctt">Vagas interna</p>
								</td>
								<td class="main-form-vagasLabel">
									<p class="main-form-vagasLabel-ctt">Vagas externa</p>
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
						</table>
						<table class="main-form-content-condicao">
							<tr class="main-form-condicaoLabel">
								<td class="main-form-condicaoLabel-ctt" colspan="4">
									<label class="main-form-condicaoLabel-ctt-text">Condições de Participação</label>
								</td>
							</tr>
							<tr class="main-form-condicaoInput">
								<td class="main-form-condicaoInput-ctt" colspan="4">
									<textarea class="main-form-condicaoInput-ctt-element" type="text" name="condicao"></textarea>
								</td>
							</tr>
						</table>

						<button class="main-form-inputButton" type="submit">Registrar</button>
					</form>
				</div>
			</main>
			<!-- FOOTER -->
			<footer id="footer">
				<div class="footer-developer">
					<div class="footer-content">
						<div class="footer-content-cefet">
							<div class="footer-content-cefet-container">
								<div class="footer-content-cefet-imagotipo">
									<img class="footer-content-cefet-imagotipo-isotipo" src="../../../arquivosfixos/midia/logocefet.png" alt="logotipo do cefet">
								</div>
								<div class="footer-content-cefet-contato">
									<div class="footer-content-cefet-contato-endereco">
										<div class="footer-content-cefet-contato-endereco-icon">
											<img class="footer-content-cefet-contato-endereco-icon-ctt" src="../../../arquivosfixos/midia/endereço-icon.png" alt="icon">
										</div>
										<div class="footer-content-cefet-contato-endereco-text">
											<p class="footer-content-cefet-contato-endereco-text-ctt">Av. Gov. Roberto Silveira, 1900 - Prado, Nova Friburgo - RJ, 28635-080</p>
										</div>
										<div style="clear:both;"></div>
									</div>
									<div class="footer-content-cefet-contato-telefone">
										<div class="footer-content-cefet-contato-telefone-icon">
											<img class="footer-content-cefet-contato-telefone-icon-ctt" src="../../../arquivosfixos/midia/telefone-icon.png" alt="icon">
										</div>
										<div class="footer-content-cefet-contato-telefone-text">
											<p class="footer-content-cefet-contato-telefone-text-ctt">(22) 2519-8905</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer-content-fabricadesoftware">
							<div class="footer-content-fabricadesoftware-container">
								<div class="footer-content-fabricadesoftware-imagotipo">
									<img class="footer-content-fabricadesoftware-imagotipo-isotipo" src="../../../../docs/midia/FabricaDeSoftware-completo-(Light).png" alt="logotipo da fábrica de software">
									<div style="clear:both;"></div>
								</div>
								<div class="footer-content-fabricadesoftware-descricao">
									<div class="footer-content-fabricadesoftware-descricao-text">
										<p class="footer-content-fabricadesoftware-descricao-text-ctt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
									</div>
								</div>
								<div style="clear:both;"></div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				<div class="creditosWP">
						<p class="creditosWP-text">Créditos do Wordpress</p>
				</div>
			</footer>
		</div>
	</body>
</html>
