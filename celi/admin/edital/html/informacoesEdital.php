<?php 
    $idEdital = 2 /* $_POST['idEdital'] */;
    
 // conexão com o Banco de Dados.   
    $conexao = mysqli_connect("localhost", "root", "", "celi");
    mysqli_set_charset($conexao, "utf8");
    if (!$conexao){
        echo "ERROR! failure to connect to the database.";
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }
    
    else{
        $sql = "SELECT * FROM edital WHERE idedital= 2" /*.$idEdital*/.";";
        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 
    } 
    
?>
<!DOCTYPE html>

<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>Informações Edital</title>
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
					<h1 class="main-title">Informações do Edital</h1>
					<div class='tabela'>
    					<table class="tabela-informacoes">
    						<tr>
    							<th class="tabela-informacoes-celula" > ID deste Edital: </th> 
    							<td class="tabela-informacoes-celula"> <?php echo "exemplo" ?> </td>
    						</tr>
    						<tr>
    							<th class="tabela-informacoes-celula"> Data de início: </th> 
    							<td class="tabela-informacoes-celula">  <?php echo "exemplo" ?></td>
    						</tr>	
    						<tr>
    							<th class="tabela-informacoes-celula"> Data de encerramento:</th> 
    							<td class="tabela-informacoes-celula"> <?php echo "exemplo" ?> </td>
    						</tr>	
    						<tr>
    							<th class="tabela-informacoes-celula"> Horário de abertura: </th> 
    							<td class="tabela-informacoes-celula"> <?php echo $query ?> </td>
    						</tr>	
    						<tr>
    							<th class="tabela-informacoes-celula"> Horário de encerramento: </th> 
    							<td class="tabela-informacoes-celula"> <?php echo "exemplo" ?> </td>
    						</tr>
    						<tr>
    							<th class="tabela-informacoes-celula"> Cursos presentes neste Edital: </th> 
    							<td class="tabela-informacoes-celula"> <?php echo "exemplo" ?> </td>
    						</tr>
    						<tr>
    							<th class="tabela-informacoes-celula"> Condições de participação: </th> 
    							<td class="tabela-informacoes-celula"> <?php echo "exemplo  exemplo  exemplo  exemplo  exemplo  exemplo  exemplo exemplo  exemplo  exemplo  exemplo  exemplo  exemplo  exemplo exemplo  exemplo  exemplo  exemplo  exemplo  exemplo  exemplo echo exemplo" ?> </td>
    						</tr>						
    					</table>
					</div>
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