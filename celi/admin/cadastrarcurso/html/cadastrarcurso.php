<?php 

if(isset($_SESSION['usuario']) && isset($_SESSION['senha'])){
    exit();
}
else{
    header('location: ../../login/html/loginAdmin.html');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar Curso | CELi</title>
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/footer/style.css">
		<script src="../../../arquivosfixos/js/jquery.min.js"></script>
		<script src="../../../arquivosfixos/js/headerslidebar.js"></script>
		<script src="./js/script.js"></script>
	</head>
	<body class="fadeIn">
		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../../arquivosfixos/midia/logo-white2.png" alt="logotipo">
					</div>
					<div class="header-menuIcon">
						<span class="header-menuIcon-content"></span>
						<p class="header-menuIcon-legenda">menu</p>
					</div>
				</div>
				<div class="header-menu">
					<nav class="header-nav">
						<ul class="header-list">
							<a class="header-menuItem" href="#">
								<span class="header-menuItem-content header-menuItem-icon">+</span>
								<p class="header-menuItem-content header-menuItem-text">Início</p>
							</a>
							<a class="header-menuItem" href="../../edital/html/edital.php">
								<span class="header-menuItem-content header-menuItem-icon">+</span>
								<p class="header-menuItem-content header-menuItem-text">Edital</p>
							</a>
							<a class="header-menuItem" href="../../../cadastrarcurso/html/cadastrarcurso.html">
								<span class="header-menuItem-content header-menuItem-icon">+</span>
								<p class="header-menuItem-content header-menuItem-text">Cursos</p>
							</a>
							<a class="header-menuItem" href="../../../inscricao/html/inscricao.html">
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
			</header>
			<div id="main">
				<div class="main-content">
					<div class="main-content-title">
						<h1 class="main-content-title-content">cadastrar um novo curso</h1>
					</div>
					<div class="main-content-form">
						<form class="main-content-form-content" action="../control/insertcursobd.php" method="get">
							<label class="main-content-form-content-label">Nome</label>
							<input class="main-content-form-content-input" type="text" name="nomecurso" placeholder="Digite o nome do curso novo aqui...">
							<input class="main-content-form-content-send" type="submit" name="registro" value="cadastrar">
						</form>
					</div>
				</div>
			</div>
			<footer id="footer">
				<div class="footer-developer">
					<div class="footer-content">
						<div class="footer-content-cefet">
							<div class="footer-content-cefet-container">
								<div class="footer-content-cefet-imagotipo">
									<img class="footer-content-cefet-imagotipo-isotipo" src="../../../arquivosfixos/midia/logocefet.png" alt="logotipo do cefet">
									<div style="clear:both;"></div>
								</div>
								<div class="footer-content-cefet-contato">
									<div class="footer-content-cefet-contato-endereco">
										<div class="footer-content-cefet-contato-endereco-icon">
											<img class="footer-content-cefet-contato-endereco-icon-ctt" src="../../../arquivosfixos/midia/endereço-icon.png" alt="icon">
										</div>
										<div class="footer-content-cefet-contato-endereco-text">
											<p class="footer-content-cefet-contato-endereco-text-ctt">Av. Gov. Roberto Silveira, 1900 - Prado, Nova Friburgo</p>
										</div>
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
