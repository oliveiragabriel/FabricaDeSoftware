<?php
  // Inicia a sessão
  session_start();

  // Linka o arquivo pdao para pegar os cursos a fim de exibi-los
  require "../../../arquivosfixos/pdao/pdaoscript.php";
  require "../control/pdaosorteio.php";

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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sorteio</title>
		<!-- ESTILO da páginas -->
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="./css/master.css">
    <!-- ESTILO do header e do footer -->
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../../arquivosfixos/css/footer/style.css">
    <!-- SCRIPT do jquery -->
		<script type="text/javascript" src="../../../arquivosfixos/js/jquery.min.js"></script>
    <!-- SCRIPT do ajax -->
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
        	<form method="get" action="#" name="sorteio">
        		<select class="editalInput" name="edital">
        			<?php
          			$selectEdital = selectEdital("idedital, data_ini, hora_ini, data_fim, hora_fim", NULL);
          			while($row = mysqli_fetch_array($selectEdital)){
        			?>
        			   <option value="<?php echo $row[0] ?>"><?php echo "Edital ".$row[0]." | inicio: ".$row[1].", ".$row[2]." Fim: ".$row[3].", ".$row[4] ?></option>
        			<?php
                }
        			?>
        		</select>
            <select name="curso">

            </select>
        	</form>
          <p class="teste"></p>
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
  </body>
</html>
