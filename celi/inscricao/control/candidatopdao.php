<?php
// Funчуo para estabelecer conexуo com o BD
function conexao(){
    $conexao = mysqli_connect("localhost", "root", "", "celi");
    if (!$conexao){
        echo "ERROR! failure to connect to the database.";
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit();
    }
    return $conexao;
};

// Funчуo para adicionar candidato no BD
function insert ($nome,$email,$telefone1,$telefone2,$rg,$orgaoemissor,$CPF,$nascimento,$uf,$cidade,$bairro,$logradouro,$situacao){
    $conexao = conexao();
    $qtd1 = procurar("CPF",$CPF);
    $qtd2 = procurar("rg",$rg);
    $qtd= $qtd1+$qtd2;
    if($qtd==0){
        $sql = "INSERT INTO candidato (nome, email, telefone1, telefone2, rg, orgaoemissor, CPF, nascimento, uf, cidade, bairro, logradouro, situacao) VALUES ( '$nome', '$email', '$telefone1', '$telefone2', '$rg', '$orgaoemissor', '$CPF', '$nascimento', '$uf', '$cidade', '$bairro', '$logradouro', '$situacao');";
        $query = mysqli_query($conexao, $sql) or die("ERRO: Insert nУЃo concluido (".mysqli_error($conexao).")");
    }
    else{
        echo "Jс existe este RG ou CPF";
    }
};
function procurar ($indice, $obj){
  
    $conexao = conexao();
    $sql = "SELECT * FROM candidato WHERE ".$indice." = ".$obj.";";
    $query = mysqli_query($conexao, $sql);
    $qtdelinha = mysqli_fetch_row($query);
    
    return $qtdelinha;
};
function procurarWhile (){
    $conexao = conexao();
    $sql = "SELECT * FROM candidato;";
    $query = mysqli_query($conexao, $sql);
    
    return $query;
}