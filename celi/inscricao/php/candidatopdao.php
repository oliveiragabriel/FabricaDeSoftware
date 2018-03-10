<?php

       // Função para estabelecer conexão com o BD
       function conexao(){
              $conexao = mysqli_connect("localhost", "root", "", "dbceli");
              if (!$conexao){
                     echo "ERROR! failure to connect to the database.";
                     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                     exit();
              }
              return $conexao;
       };

       // Função para adicionar candidato no BD
       function insert ($conexao, $nome, $documento, $telefone, $email, $ie, $idcurso){
              $query = mysqli_query($conexao, "INSERT INTO candidato (nome, documento, telefone, email, ie, idcurso) VALUES ( '$nome', '$documento' ,  '$telefone', '$email', '$ie' , '$idcurso');") or die("ERRO: Insert não concluido (".mysqli_error($conexao).")");
       };

?>
