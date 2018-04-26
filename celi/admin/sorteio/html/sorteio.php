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
    <p>teste</p>
  </body>
</html>
