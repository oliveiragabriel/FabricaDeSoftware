<?php

// require_once'candidato.php';
//
// $tabelaDesejada1= "curso";
// $colunaDesejada1= "idCurso";
// $contaCursos = contaCursos($tabelaDesejada1, $colunaDesejada1)
//
// function contaCursos ($tabelaDesejada1, $colunaDesejada1){
//     $conexao = conexaobd();
//     $sql = " SELECT COUNT" . "(" . $colunaDesejada1 .") FROM" . $tabelaDesejada1 . ";";
//     $query = mysqli_query($conexao, $sql);
//     $qtdCursos = msql_affected_rows($query);
//
//
//
//     return $qtdelinha;
// };

  // Função para validar a data
  function validarData($data){
    // tranformar a string em um array, onde se tem o dia, mês e ano nas posições 0, 1 e 2, respectivamente, do array
    $dataDividida = explode("-", $data);
    $ano = $dataDividida[0];
    $mes = $dataDividida[1];
    $dia = $dataDividida[2];
    // verifica se a data é valida
    $resultValidData = checkdate($mes, $dia, $ano);
    // verificação...
    if($resultValidData == 1){
      // Data válida!
      $erro = 0;
    }
    else{
      // Data Inválida!
      $erro = 1;
    }
    return $erro;
  }

  // Função para validar a hora
  function validarHora($hora){
    // tranformar a string em um array, onde se tem a hora e o minuto nas posições 0 e 1, respectivamente, do array
    $horaDividida = explode(":", $hora);
    $hora = $horaDividida[0];
    $min = $horaDividida[1];
    // verifica se a hora é valida
    if(($hora >= 0 && $hora <= 23) && ($min >= 0 && $min <= 59)){
      // Hora válida!
      $erro = 0;
    }
    else{
      // Hora inválida!
      $erro = 1;
    }
    return $erro;
  }

  function validaQtdVagas(){

  }

  /* ----------------------------> A ARRUMAR <------------------------------------
  function validaQtdVagas(){
      if($(".main-form-cursoLine-checkbox-element").is(":checked")){
          var vagasInterno = $(".main-form-cursoLine-vagas-interno").val().trim();
          var vagasExterno = $(".main-form-cursoLine-vagas-externo").val().trim();
          if(vagasInterno == ""){
              vagasInterno = 0;
          }
          if(vagasExterno ==""){
              vagasExterno = 0;
          }
      }
  }
*/
  // Função para validar a coerência das datas e horas inseridas
  function validarDataCoerencia($dataAbert, $dataEncer, $tempoAbert, $tempoEncer){
    // Validação das datas e Horas
    $validDataAbert = validarData($dataAbert);
    $validDataEncer = validarData($dataEncer);
    $validHoraAbert = validarHora($tempoAbert);
    $validHoraEncer = validarHora($tempoEncer);
    $validQtdVagas =  validaQtdVagas();
    // Verificação da validação
    if($validDataAbert == 0 && $validDataEncer == 0 && $validHoraAbert == 0 && $validHoraEncer == 0){
      // Separando as datas e horas em variáveis individualizadas
      $abertData = explode("-", $dataAbert);
      $anoAbert = $abertData[0];
      $mesAbert = $abertData[1];
      $diaAbert = $abertData[2];
      $abertHora = explode(":", $tempoAbert);
      $horaAbert = $abertHora[0];
      $minAbert = $abertHora[1];
      $encer = explode("-", $dataEncer);
      $anoEncer = $encer[0];
      $mesEncer = $encer[1];
      $diaEncer = $encer[2];
      $encerHora = explode(":", $tempoEncer);
      $horaEncer = $encerHora[0];
      $minEncer = $encerHora[1];
      // Comparações par ver se a data de abertura é antes da data de encerramento
      if($anoAbert < $anoEncer){
        // Datas coerentes!
        $erro = 0;
      }
      else if($anoAbert == $anoEncer){
        if($mesAbert < $mesEncer){
          // Datas coerentes!
          $erro = 0;
        }
        else if($mesAbert == $mesEncer){
          if($diaAbert < $diaEncer){
            // Datas coerentes!
            $erro = 0;
          }
          else if($diaAbert == $diaEncer){
            if($horaAbert < $horaEncer){
              // Datas coerentes!
              $erro = 0;
            }
            else if($horaAbert == $horaEncer){
              if($minAbert < $minEncer){
                // Datas coerentes!
                $erro = 0;
              }
              else{
                // Datas incoerentes!
                $erro = 1;
              }
            }
            else{
              // Datas incoerentes!
              $erro = 1;
            }
          }
          else{
            // Datas incoerentes!
            $erro = 1;
          }
        }
        else{
          // Datas incoerentes!
          $erro = 1;
        }
      }
      else{
        // Datas incoerentes!
        $erro = 1;
      }
      return $erro;
    }
  }

  // Função para validar o curso e quantidade de vagas disponibilizadas
  // function FunctionName(){

  // }

  // Função para validar a condição inseridas
  // function FunctionName(){

  // }
?>
