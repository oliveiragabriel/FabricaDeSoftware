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
		<link rel="stylesheet" type="text/css" href="./css/edital.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/footer/style.css">
		<script src="../../../arquivosfixos/js/jquery.min.js"></script>
		<script src="./js/script.js"></script>
	</head>
	<body>
		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../../arquivosfixos/midia/logo.png" alt="logotipo">
					</div>
					<div class="header-menu">
						<nav class="header-nav">
							<ul class="header-list">
								<a class="header-menuItem" href="#">Início</a>
								<a class="header-menuItem" href="#">Projetos</a>
								<a class="header-menuItem" href="#">Eventos</a>
								<a class="header-menuItem" href="#">Atividades</a>
								<a class="header-menuItem" href="#">Publicações</a>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<main id="main">
				<div class="main-content">
					<h1 class="main-title">Informações de Edital</h1>
					<form class="main-form" action="../control/inserteditalbd.php" method="post">
						<div class="main-form-box">
							<div class="main-form-box-dataAbert">
								<label class="main-form-label main-form-labelDataAbert">Data de abertura</label>
								<input class="main-form-input main-form-inputDataAbert" type="date" name="dataabertura">
							</div>
							<div class="main-form-box-horaAbert">
								<label class="main-form-label main-form-labelHoraAbert">Horário de abertura</label>
								<input class="main-form-input main-form-inputHoraAbert" type="time" name="horaabertura">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-box">
							<div class="main-form-box-dataAbert">
								<label class="main-form-label main-form-labelDataEncer">Data de encerramento</label>
								<input class="main-form-input main-form-inputDataEncer" type="date" name="dataencerramento">
							</div>
							<div class="main-form-box-horaEncer">
								<label class="main-form-label main-form-labelHoraEncer">Horário de encerramento</label>
								<input class="main-form-input main-form-inputHoraEncer" type="time" name="horaencerramento">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-box">
							<table class="main-form-box-cursos">
								<tr class="main-form-box-head">
									<td class="main-form-label main-form-labelCurso">Curso</td>
									<td class="main-form-label main-form-labelVagas" colspan="2">Quantidade de vagas (Interno/Externo)</td>
								</tr>
								<?php
								while($curso = mysqli_fetch_array($sql)){
								?>
								<tr class="main-form-box-body">
									<td class="main-form-box-col1">
										<input id="input-check" class="main-form-checkbox main-form-inputCurso" type="checkbox" name="<?php echo "curso".$curso['idcurso']; ?>" value="<?php echo $curso['idcurso']; ?>">
										<?php echo $curso['nome']; ?>
									</td>
									<td class="main-form-box-col2">
										<input class="main-form-input main-form-inputVagasInt" id="input-vagas" type="number" name="vagainterno[<?php echo $curso['idcurso']; ?>]" min="0" placeholder="Interno" disabled>
									</td>
									<td class="main-form-box-col3">
										<input class="main-form-input main-form-inputVagasExt" id="input-vagas" type="number" name="vagaexterno[<?php echo $curso['idcurso']; ?>]" min="0" placeholder="Externo" disabled>
									</td>
								</tr>
								<?php
								}
								?>
							</table>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-boxCondicao">
							<label class="main-form-label main-form-labelCondicoes">Condições de Participação</label>
							<input class="main-form-input main-form-inputCondicoes" type="text" name="condicao">
							<div style="clear:both;"></div>
						</div>

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
