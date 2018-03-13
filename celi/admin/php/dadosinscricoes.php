<?php
$user = "celi";
$password = "celi";
$database = "dbceli"; 
$hostname = "localhost";

require_once '../../inscricao/php/candidatopdao.php';

$conexao = conexao();
$result_query = procurarWhile();


?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> ADMIN PAGE </title>
		<link rel="stylesheet" type="text/css" href="../html/css/style.css">
	</head>
	<body>	
		<header id="header">
				<div class="header-content">
					<div class="header-logotipo">
						<img class="header-logotipo-img" src="./midia/logo.png" alt="logotipo">
					</div>
					<div class="header-menu">
						<nav class="header-nav">
							<ul class="header-list">
								<a class="header-menuItem" href="#">início</a>
								<a class="header-menuItem" href="#">projetos</a>
								<a class="header-menuItem" href="#">eventos</a>
								<a class="header-menuItem" href="#">atividades</a>
								<a class="header-menuItem" href="#">publicações</a>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		<table>
			<tr>
				<th>ID </th>
				<th>Nome </th>
				<th>Documento </th>
				<th>Telefone </th>
				<th>E-mail </th>
				<th>Interno/externo </th>
				<th>Idcurso </th>
			</tr>
			<?php
				while($array = mysqli_fetch_array($result_query)){
					?><tr><td><?php echo $array['id'];?></td>
					<td><?php echo $array['nome'];?></td>
					<td><?php echo $array['documento'];?></td>
					<td><?php echo $array['telefone'];?></td>
					<td><?php echo $array['email'];?></td>
					<td><?php echo $array['ie'];?></td>
					<td><?php echo $array['idcurso'];?></td>
					</tr>
			<?php
				}
			?>
		</table>
				
	</body>
</html>