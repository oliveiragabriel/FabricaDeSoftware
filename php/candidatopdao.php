<?php
$conexao = null;

function conexao(&$conexao){
    $conexao = mysqli_connect("localhost", "root", "", "dbceli");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
};

function insert($nome, $documento, $telefone, $email, $ie, $idcurso){
    conexao($conexao);
    $query = mysqli_query($conexao, "INSERT INTO candidato(nome,documento,telefone, email, ie, idcurso) 
  VALUES('$nome', '$documento' ,  '$telefone', '$email', '$ie' , '$idcurso')") or die("Erro ao tentar cadastrar");
    
}; 
