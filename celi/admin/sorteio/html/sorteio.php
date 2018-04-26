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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sorteio</title>
  </head>
  <body>
  	<form method="get" action="#" name="sorteio">
  		<select name="edital">
  			<?php
  			$selectEdital = selectEdital("data_ini, hora_ini, data_fim, hora_fim", NULL);
  			$numEdital = selectEdital("idEdital", "ORDER BY idedital DESC LIMIT 1");
  			$qtdeEdital = mysqli_fetch_assoc($numEdital);
  			$dadosEdital = mysqli_fetch_assoc($selectEdital);
  			$editalMax = $dadosEdital['idEdital'];
  			for($i = 1; $i <= $editalMax; $i++){
  			?>
  			<option value="<?php echo 'edital'.$i ?>"><?php echo "Edital ".$i." | inicio: ".$dadosEdital['data_ini'].", ".$dadosEdital['hora_ini']." Fim: ".$dadosEdital['data_fim'].", ".$dadosEdital['hora_fim'] ?><option/>
  			<?php 
  			}
  			?>
  		</select>
  	</form>
   
  </body>
</html>
