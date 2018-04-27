<?php
  // Linka o arquivo pdao para pegar os cursos a fim de exibi-los
  require_once "../../../arquivosfixos/pdao/pdaoscript.php";

  function selectEdital ($campo, $condicao){
    $conexao = conexaobd();
    if($conexao){
      if($condicao == NULL){
        $sql = "SELECT $campo FROM Edital;";
        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        return $query;
      }
      else{
        $sql = "SELECT $campo FROM Edital $condicao";
        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        return $query;
      }
    }
    else{
      echo "Conexao com o BD nao estabelecida!";
      return FALSE;
    }
  };

  if(isset($_GET['idedital'])){
    $idEdital = $_GET['idedital'];

    $campo = "idedital, idcurso";
    $tabela = "editalcurso";
    $condicao = "idedital=$idEdital";

    $conexao = conexaobd();
    $sql = mysqli_query($conexao, "SELECT idcurso FROM editalcurso WHERE idedital=$idEdital") or die(mysqli_error($conexao));
    $arrayDadosCurso = array();

    while($row = mysqli_fetch_array($sql)){
      $idCurso = $row['idcurso'];

      $query = mysqli_query($conexao, "SELECT nome FROM curso WHERE idcurso=$idCurso") or die(mysqli_error($conexao));
      $nomeCurso = mysqli_fetch_assoc($query);
      $nomeCurso = $nomeCurso['nome'];

      $dadosCurso = array(
        0 => $idCurso,
        1 => $nomeCurso,
      );

      array_push($arrayDadosCurso, $dadosCurso);
    }

    print_r($arrayDadosCurso);
  };

?>
