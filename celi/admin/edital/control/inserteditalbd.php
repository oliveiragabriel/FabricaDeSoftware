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
    $validDataHora = validarDataCoerencia($dataAbert, $dataEncer, $horaAbert, $horaEncer);
    if($validDataHora == 0){
      // Data coerente (correto!)
      $tabela = "edital";
      $elementos = "data_ini, data_fim, hora_ini, hora_fim, condicao";
      $conteudo = "'$dataAbert', '$dataEncer', '$horaAbert', '$horaEncer', '$condicao'";

      // Inseri na tabela "edital" do Banco de Dados
      $insert = inserirbd($tabela, $elementos, $conteudo, NULL);

      // Pegando a quantidade de cursos registradas
      $qtdeCursos = verificarbd("idcurso", "curso", "idcurso > 0");

      // Cria um array de arrays com o curso e as vagas estabelecidas para cada curso selecionado
      $arrayCursosDados = array();
      for($i = 1; $i <= $qtdeCursos; $i++){
        if(isset($_POST['curso'.$i]) && isset($_POST['interno'.$i]) && isset($_POST['externo'.$i])){

          $idCurso = $_POST['curso'.$i];
          $vagasInt = $_POST['interno'.$i];
          $vagasExt = $_POST['externo'.$i];

          $vagasInt = validarVagas($vagasInt);
          $vagasExt = validarVagas($vagasExt);

          if($vagasInt == NULL){
            echo "Vaga Interna Inválida!!";
            exit();
          }
          if($vagasExt == NULL){
            echo "Vaga Externa Inválida!!";
            exit();
          }

          $result = $idCurso."-".$vagasInt."-".$vagasExt;

          array_push($arrayCursosDados, $result);
        }
      };

      // Pegando o id do último edital adicionado
      $campo = "idedital";
      $tabela = "edital";
      $condicao = "ORDER BY idedital DESC LIMIT 1";
      $select = selecionarbd($campo, $tabela, $condicao);
      $idEdital = mysqli_fetch_assoc($select);

      if($vagasInt == NULL || $vagasExt == NULL){
        // Inserindo os dados na tabela editalcurso no Banco de dados
        $tabela = "editalcurso";
        $elementos = "idedital, idcurso, vagainterna, vagaexterna";
        $condicao = NULL;
        for($i = 0; $i < count($arrayCursosDados); $i++){
          $arrayContent = explode("-", $arrayCursosDados[$i]);
          $conteudo = $idEdital['idedital'].", ".$arrayContent[0].", ".$arrayContent[1].", ".$arrayContent[2];
          $insert += inserirbd($tabela, $elementos, $conteudo, $condicao);
        }
      }

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
