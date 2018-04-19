<?php
  // Linkando o arquivo pdao
  require "../../../arquivosfixos/pdao/pdaoscript.php";
  // Linkando o arquivo de validação
  require "./validacaoedital.php";

  // Verifica se os dados do formulário foi setado
  if(isset($_POST['dataabertura']) && isset($_POST['horaabertura']) && isset($_POST['dataencerramento']) && isset($_POST['horaencerramento']) && isset($_POST['condicao'])){
    // Sendo setado, pega os dados do formulário e armazena em variáveis
    $dataAbert = $_POST['dataabertura'];
    $horaAbert = $_POST['horaabertura'];
    $dataEncer = $_POST['dataencerramento'];
    $horaEncer = $_POST['horaencerramento'];
    $condicao = $_POST['condicao'];

    // validando as datas
    $valid = validarDataCoerencia($dataAbert, $dataEncer, $horaAbert, $horaEncer);
    if($valid == 0){
      // Data coerente (correto!)
      $tabela = "edital";
      $elementos = "data_ini, data_fim, hora_ini, hora_fim, condicao";
      $conteudo = "'$dataAbert', '$dataEncer', '$horaAbert', '$horaEncer', '$condicao'";

      // Inseri do Banco de Dados
      $insert = inserirbd($tabela, $elementos, $conteudo, NULL);

      // Verifica o insert...
      if($insert){
        // Deu Certo. Inseriu!
        echo "Inseriu!";
      }
      else{
        // Deu Errado. Não inseriu!
        echo "não inseriu!";
      }
    }
    else{
      // Data incoerente (incorreto!)
      echo "Data Incoerente!";
    }

  }

?>
