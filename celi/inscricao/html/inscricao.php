
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscrição</title>
		<script src="./js/script.js"></script>
		<script src="./js/validaCpf.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/header/style.css">
		<link rel="stylesheet" type="text/css" href="../../arquivosfixos/css/footer/style.css">
		<script src="../../arquivosfixos/js/jquery.min.js"></script>
    <!-- SCRIPT do submenu -->
		<script src="../../arquivosfixos/js/headersubmenu.js"></script>
	</head>
	<body>
		<div class="content">
			<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="../../arquivosfixos/midia/logo-white.png" alt="logotipo">
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
											<a class="header-subItem" href="../../admin/edital/html/edital.php">
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
											<a class="header-subItem" href="../../admin/cadastrarcurso/html/cadastrarcurso.php">
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
  							<a class="header-menuItem" href="../../inscricao/html/inscricao.php">
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
					<h1 class="main-title">Inscrição no CELi</h1>
					<form class="main-form" name="formulario" method="POST" action="../control/extrairvalidar.php">
						<div class="main-form-informations">
							<div class="main-form-informations-nome">
								<label class="main-form-label main-form-labelNome">Nome</label>
								<input  class="main-form-input main-form-inputNome" type="text" name="name" placeholder="Nome">
							</div>
							<div class="main-form-contact-email">
								<label  class="main-form-label main-form-labelEmail">E-mail</label>
								<input  class="main-form-input main-form-inputEmail" type="text" name="email" placeholder="Email (opcional)">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-contact">
							<div class="main-form-informations-documento">
								<label class="main-form-label main-form-labelRG">RG</label>
								<input class="main-form-input main-form-inputRG" type="text" name="document1" placeholder="RG">
							</div>
							<div class="main-form-informations-documento">
								<label  class="main-form-label main-form-labelOrgEmiRg">Órgão Emissor do RG</label>
								<input  class="main-form-input main-form-inputOrgRG" type="text" name="OrgEmiRg" placeholder="Órgão Emissor do RG">
							</div>
							<div class="main-form-informations-documento">
								<label  class="main-form-label main-form-labelCPF">CPF</label>
								<input  class="main-form-input main-form-inputCPF" type="text" name="document2" placeholder="CPF">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-nascimento">
							<div class="main-form-nascimento-data">
								<label  class="main-form-label main-form-labelNacimento">Nascimento</label>
								<input  class="main-form-input main-form-inputNascimento" type="date" name="nascimento" placeholder="Data de Nascimento">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-contact">
							<div class="main-form-contact-telefone1">
								<label class="main-form-label main-form-labelTelefone1">Telefone 1</label>
								<input class="main-form-input main-form-inputTelefone1" type="text" name="phone1" placeholder="Telefone">
							</div>
							<div class="main-form-contact-telefone2">
								<label  class="main-form-label main-form-labelTelefone2">Telefone 2</label>
								<input  class="main-form-input main-form-inputTelefone2" type="text" name="phone2" placeholder="Telefone (opcional)">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-endereco">
							<div class="main-form-endereco-uf">
								<label  class="main-form-label main-form-labelUf">UF</label>
								<select class="main-form-input main-form-inputUf" name="uf">
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AM">AM</option>
									<option value="AP">AP</option>
									<option value="BA">BA</option>
									<option value="CE">CE</option>
									<option value="DF">DF</option>
									<option value="ES">ES</option>
									<option value="GO">GO</option>
									<option value="MA">MA</option>
									<option value="MG">MG</option>
									<option value="MS">MS</option>
									<option value="MT">MT</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="PR">PR</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RO">RO</option>
									<option value="RR">RR</option>
									<option value="RS">RS</option>
									<option value="SC">SC</option>
									<option value="SE">SE</option>
									<option value="SP">SP</option>
									<option value="TO">TO</option>
								</select>
							</div>
							<div class="main-form-endereco-cidade">
								<label  class="main-form-label main-form-labelCidade">Cidade</label>
								<input  class="main-form-input main-form-inputCidade" type="text" name="cidade" placeholder="Cidade">
							</div>
							<div class="main-form-endereco-bairro">
								<label  class="main-form-label main-form-labelBairro">Bairro</label>
								<input  class="main-form-input main-form-inputBairro" type="text" name="bairro" placeholder="Bairro">
							</div>
							<div class="main-form-endereco-rua">
								<label  class="main-form-label main-form-labelLogradouro">Nome do logradouro</label>
								<input  class="main-form-input main-form-inputLogradouro" type="text" name="logradouro" placeholder="Rua">
							</div>
							<div class="main-form-endereco-complemento">
								<label  class="main-form-label main-form-labelComplemento">Complemento</label>
								<input  class="main-form-input main-form-inputComplemento" type="text" name="complemento" placeholder="Complemento">
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-situation">
							<label class="main-form-label main-form-situation-label">Situação</label>
							<div class="main-form-radiobutton-interno">
								<p class="main-form-labelRadio">Interno</p>
								<input class="main-form-inputRadio inputButtonInterno" type="radio" name="radio" value="i">
							</div>
							<div class="main-form-radiobutton-externo">
								<input  class="main-form-inputRadio inputButtonExterno" type="radio" name="radio" value="e">
								<p class="main-form-labelRadio">Externo</p>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="main-form-course">
							<label  class="main-form-label main-form-labelCurso">Cursos</label>
							<select class="main-form-input main-form-selectCurso" name="course">
							<?php
							$conexao = mysqli_connect("localhost", "root", "", "celi");
							mysqli_set_charset($conexao,"utf8");
							if (!$conexao){
							    echo "ERROR! failure to connect to the database.";
							    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
							    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
							    exit();
							}

							$sql1 = "SELECT idedital FROM edital ORDER BY idedital DESC LIMIT 1";
							$query1 = mysqli_query($conexao, $sql1);
							$idEdital = mysqli_fetch_assoc($query1);
							$id=$idEdital['idedital'];
							$sql = "SELECT editalcurso.ideditalcurso, curso.nome FROM editalcurso JOIN curso ON editalcurso.idcurso=curso.idcurso JOIN edital ON editalcurso.idedital=edital.idedital WHERE editalcurso.idedital = 2";
							$query = mysqli_query($conexao, $sql);
							while($curso = mysqli_fetch_array($query)){
							?>
								<option class="selectCurso-option" value="<?php echo $curso['ideditalcurso'];?>"><?php echo $curso['nome'];?></option>
							<?php
							}
							?>
							</select>
						</div>
						<div class="main-form-dificiencia">
							<label class="main-form-label main-form-dificiencia-label">Deficiência</label>
							<div class="main-form-radiobutton-sim">
								<p class="main-form-labelRadio">Sim</p>
								<input class="main-form-inputRadio inputButtonSim" type="radio" name="radioDeficiencia" value="s">
							</div>
							<div class="main-form-radiobutton-nao">
								<input  class="main-form-inputRadio inputButtonNao" type="radio" name="radioDeficiencia" value="n">
								<p class="main-form-labelRadio">Não</p>
							</div>
							<div style="clear:both;"></div>
							<div>
								<textarea rows="12" cols="65" placeholder = "Qual? Tem necessidades?"></textarea>
							</div>
						<button class="main-form-inputButton" type="submit" >Inscrever-se</button>
					</form>
				</div>
			</main>
			<footer id="footer">
				<div class="footer-developer">
					<div class="footer-content">
						<div class="footer-content-cefet">
							<div class="footer-content-cefet-container">
								<div class="footer-content-cefet-imagotipo">
									<img class="footer-content-cefet-imagotipo-isotipo" src="../../arquivosfixos/midia/logocefet.png" alt="logotipo do cefet">
									<div style="clear:both;"></div>
								</div>
								<div class="footer-content-cefet-contato">
									<div class="footer-content-cefet-contato-endereco">
										<div class="footer-content-cefet-contato-endereco-icon">
											<img class="footer-content-cefet-contato-endereco-icon-ctt" src="../../arquivosfixos/midia/endereço-icon.png" alt="icon">
										</div>
										<div class="footer-content-cefet-contato-endereco-text">
											<p class="footer-content-cefet-contato-endereco-text-ctt">Av. Gov. Roberto Silveira, 1900 - Prado, Nova Friburgo</p>
										</div>
									</div>
									<div class="footer-content-cefet-contato-telefone">
										<div class="footer-content-cefet-contato-telefone-icon">
											<img class="footer-content-cefet-contato-telefone-icon-ctt" src="../../arquivosfixos/midia/telefone-icon.png" alt="icon">
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
									<img class="footer-content-fabricadesoftware-imagotipo-isotipo" src="../../../docs/midia/FabricaDeSoftware-completo-(Light).png" alt="logotipo da fábrica de software">
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
