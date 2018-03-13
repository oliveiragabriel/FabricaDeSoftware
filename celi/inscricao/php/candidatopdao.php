<?php

       // FunÃ§Ã£o para estabelecer conexÃ£o com o BD
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

       // FunÃ§Ã£o para adicionar candidato no BD
       function insert ($conexao, $nome, $documento, $telefone, $email, $ie, $idcurso){
           $conexao= conexao();
           $sql="SELECT * FROM candidato where documento=$documento";
           $queryy=mysqli_query( $conexao,$sql );
           $qtd=mysql_affected_rows($queryy);
           if($qtd==0){
           $query = mysqli_query($conexao, "INSERT INTO candidato (nome, documento, telefone, email, ie, idcurso) VALUES ( '$nome', '$documento' ,  '$telefone', '$email', '$ie' , '$idcurso');") or die("ERRO: Insert nÃ£o concluido (".mysqli_error($conexao).")");
           }
           else{
               echo "já existe este documento";
           }
       };

?>
