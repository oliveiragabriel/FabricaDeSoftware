<?php

function selecionaCandidato(){
    $conexao = conexao();
    $sql = "SELECT idcandidato FROM candidato ORDER BY DESC limit 1";
    $query = mysqli_query($conexao, $sql);
    $candidato = mysqli_fetch_assoc($query);
    return $candidato['idcandidato'];
};

function inserirCandidatocurso($idEditalcurso){
    $conexao = conexao();
    $idCandidato = selecionaCandidato();
    $sql = "INSERT INTO candidatocurso (idcandidato, ideditalcurso) VALUES ( '$idCandidato', '$idEditalCandidato');";
    $query = mysqli_query($conexao, $sql) or die("ERRO: Insert não concluido (".mysqli_error($conexao).")");

};

?>
