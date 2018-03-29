<?php
       // Chamando o arquivo .php pdao
       require_once 'candidatopdao.php';

       // Pegando os dados do form
       $nome=$_POST['name'];
       $documento=$_POST['document'];
       $curso= $_POST['course'];
       $telefone=$_POST['phone'];
       $email=$_POST['email'];
       $ie=$_POST['radio'];

       // Chamando a função que validar (ela chama todas as outras funções validadoras)
       validar($nome, $documento, $curso, $telefone, $email, $ie);

       // Função para validar o nome
       function validarnome($nome){
              $erronome = 0;
              if( trim($nome)=="" ){
                     $erronome = 1;
                     echo "ERRO: campo 'nome' está vazio<br/>";
              }
              else{
                     $arraynome= str_split($nome);
                     $lengthnome= strlen($nome);
                     $erroespecial=0;
                     $erroletra=0;
                     for($i=0;$i<$lengthnome;$i++){
                            if(is_numeric ($arraynome[$i])){
                                   $erroletra=1;
                            }
                     }
                     for($i=0;$i<$lengthnome;$i++){
                            $caracasciicode=ord($arraynome[$i]);
                            if($caracasciicode==32 || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                            else{
                                   $erroespecial=1;
                            }
                     }
                     if($erroletra==1){
                            $erronome = 1;
                            echo "ERRO: contém números no campo 'nome'<br/>";
                     }
                     if($erroespecial==1){
                            $erronome = 1;
                            echo "ERRO: contém caractere especial no campo 'nome'<br/>";
                     }
              }
              return $erronome;
       };

       // Função para validar o documento
       function validardocumento($documento){
              $errodocumento = 0;
              if( trim($documento)=="" ){
                     $errodocumento = 1;
                     echo "ERRO: campo 'documento' está vazio<br/>";
              }
              else{
                     $arraydocumento= str_split($documento);
                     $lengthdocumento= strlen($documento);
                     $erroespecial=0;
                     for($i=0;$i<$lengthdocumento;$i++){
                            $caracasciicode=ord($arraydocumento[$i]);
                            if($caracasciicode==32 || ($caracasciicode>=45 && $caracasciicode<=46) || ($caracasciicode>=48 && $caracasciicode<=57) || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                            else{
                                   $erroespecial=1;
                            }
                     }
                     if($erroespecial==1){
                            $errodocumento = 1;
                            echo "ERRO: contém caractere especial no campo 'documento'<br/>";
                     }
              }
              return $errodocumento;
       };

       // Função para validar o telefone
       function validartelefone($telefone){
              $errotelefone = 0;
              if( trim($telefone)=="" ){
                     $errotelefone = 1;
                     echo "ERRO: campo 'telefone' está vazio<br/>";
              }
              else{
                     $arraytelefone= str_split($telefone);
                     $lengthtelefone= strlen($telefone);
                     $erroespecial=0;
                     for($i=0;$i<$lengthtelefone;$i++){
                            $caracasciicode=ord($arraytelefone[$i]);
                            if($caracasciicode==45 || $caracasciicode==32 || $caracasciicode>=40 && $caracasciicode<=41 ||$caracasciicode>=48 && $caracasciicode<=57){}
                            else{
                                   $erroespecial=1;
                            }
                     }
                     if($erroespecial==1){
                            $errotelefone = 1;
                            echo "ERRO: contém caractere especias no campo 'telefone'<br/>";
                     }
              }
              return $errotelefone;
       };

       // Função para validar o email
       function validaremail($email){
              $erroemail = 0;
              if( trim($email)=="" ){
                     $erroemail = 1;
                     echo "ERRO: campo 'email' está vazio<br/>";
              }
              if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
                     $erroemail = 1;
                     echo "ERRO: campo 'email' invalido<br/>";
              }
              return $erroemail;
       };

       // Função para validar a situação
       function validarie ($ie){
              $errosituacao = 0;
              if(!isset($ie)){
                     $errosituacao = 1;
                     echo "ERRO: campo 'situação' não marcado<br/>";
              }
              return $errosituacao;
       };

       // Função que dispara todas as outras funções e, estando tudo certo, inseri no BD
       function validar($nome, $documento, $curso, $telefone, $email, $ie) {
              $validnome = validarnome($nome);
              $validdocumento = validardocumento($documento);
              $validtelefone = validartelefone($telefone);
              $validemail = validaremail($email);
              $validsituacao = validarie($ie);

              if($validnome == 0 && $validdocumento == 0 && $validtelefone == 0 && $validemail == 0 && $validsituacao == 0){

                     insert($nome, $documento, $telefone, $email, $ie, $curso);

              }

       };

?>
