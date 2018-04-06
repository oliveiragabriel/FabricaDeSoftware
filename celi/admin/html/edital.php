<?php include('../control/itensedital.php'); ?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>Registrar Edital</title>
		<script src="./js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/edital.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/footer/style.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/reset.css">
		<script src="../../arquivosfixos/js/jquery.min.js"></script>
	</head>
	<body>
		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../arquivosfixos/midia/logo.png" alt="logotipo">
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
					<form class="main-form" action="../control/inserirdados.php" method="post">
						<div class="main-form-informations">
							<div class="main-form-informations-nome">
								<label class="main-form-label main-form-labelNome">Data de abertura</label>
								<input class="main-form-input main-form-inputNome" type="date" name="dataabertura">
							</div>
							<div class="main-form-contact-email">
								<label class="main-form-label main-form-labelTelefone2">Horário de abertura</label>
								<input class="main-form-input main-form-inputTelefone2" type="time" name="horaabertura">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-informations">
							<div class="main-form-informations-nome">
								<label class="main-form-label main-form-labelNome">Data de encerramento</label>
								<input class="main-form-input main-form-inputNome" type="date" name="dataencerramento">
							</div>
							<div class="main-form-contact-email">
								<label class="main-form-label main-form-labelTelefone2">Horário de encerramento</label>
								<input class="main-form-input main-form-inputTelefone2" type="time" name="horaencerramento">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-informations">
							<table>
							
								<tr >
									<td class="main-form-labelNome">Curso</td>
									<td colspan="2" class="main-form-labelNome vagas">Quantidade de vagas (Interno/Externo)</td>
								</tr>
								<?php while($curso = mysqli_fetch_array($sql)){ ?>
								<tr>
									<td class="main-form-text2"><input id="input-check" type="checkbox" name="curso" value="<?php echo $curso['idcurso']; ?>"> <?php echo $curso['nome']; ?></td>
									<td class="main-form-td"><input class="main-form-inputMenor " id="input-vagas" type="number" name="vagainterno[<?php echo $curso['idcurso']; ?>]" min="0" placeholder="Interno"></td> 
									<td><input class="main-form-inputMenor" id="input-vagas" type="number" name="vagaexterno[<?php echo $curso['idcurso']; ?>]" min="0" placeholder="Externo"></td>
								</tr> <?php } ?>
							</table>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-situation">
							<label class="main-form-label main-form-situation-label">Condições de Participação</label>
							<div class="main-form-radiobutton-interno">
								<input class="main-form-inputRadio" type="text" name="condicao">
							</div>
							<div style="clear:both;"></div>
						</div>
						<button class="main-form-inputButton" type="submit">Inserir</button>
					</form>
				</div>
			</main>
			<footer id="footer">
				<div class="footer-content">
					<div class="footer-content-logotipo footer-content-cefet">
						<img class="footer-content-cefet-img" src="#" alt="CEFET/RJ">	
					</div>
					<div class="footer-content-logotipo  footer-content-fabricadesoftware">
						<img class="footer-content-fabricadesoftware-img" src="#" alt="CEFET/RJ">	
					</div>
					<div class="footer-content-logotipo footer-content-wordpress">
						<img class="footer-content-wordpress-img" src="#" alt="CEFET/RJ">	
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
