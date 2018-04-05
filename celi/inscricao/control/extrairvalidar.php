<?php
       // Chamando o arquivo .php pdao
       require_once 'inscricao.html';

       // Pegando os dados do form
       $nome=$_POST['name'];
       $RG=$_POST['document1'];
       $OrgRG=$_POST['OrgEmiRg'];
       $CPF=$_POST['document2'];
       $OrgCPF=$_POST['OrgEmiCPF'];
       $curso= $_POST['course'];
       $telefone1=$_POST['phone1'];
       $telefone2=$_POST['phone2'];
       $UF=$_POST['uf'];
       $cidade=$_POST['cidade'];
       $bairro=$_POST['bairro'];
       $logradouro=$_POST['logradouro'];
       $complemento=$_POST['complemento'];
       $email=$_POST['email'];
       $ie=$_POST['radio'];
       $curso= $_POST['course'];

       // Chamando a função que validar (ela chama todas as outras funções validadoras)
       validar($nome, $documento, $curso, $telefone1, $telefone2, $email, $ie);

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
       function validartelefone1($telefone1){
              $errotelefone1 = 0;
              if( trim($telefone1)=="" ){
                     $errotelefone1 = 1;
                     echo "ERRO: campo 'telefone' está vazio<br/>";
              }
              else{
                     $arraytelefone1= str_split($telefone1);
                     $lengthtelefone1= strlen($telefone1);
                     $erroespecial=0;
                     for($i=0;$i<$lengthtelefone1;$i++){
                            $caracasciicode=ord($arraytelefone1[$i]);
                            if($caracasciicode==45 || $caracasciicode==32 || $caracasciicode>=40 && $caracasciicode<=41 ||$caracasciicode>=48 && $caracasciicode<=57){}
                            else{
                                   $erroespecial=1;
                            }
                     }
                     if($erroespecial==1){
                            $errotelefone1 = 1;
                            echo "ERRO: contém caractere especias no campo 'telefone'<br/>";
                     }
              }
              return $errotelefone1;
       };
       function validartelefone2($telefone2){
           $errotelefone2 = 0;
           if( trim($telefone2)=="" ){
               $errotelefone2 = 1;
               echo "ERRO: campo 'telefone' está vazio<br/>";
           }
           else{
               $arraytelefone2= str_split($telefone2);
               $lengthtelefone2= strlen($telefone2);
               $erroespecial=0;
               for($i=0;$i<$lengthtelefone2;$i++){
                   $caracasciicode=ord($arraytelefone2[$i]);
                   if($caracasciicode==45 || $caracasciicode==32 || $caracasciicode>=40 && $caracasciicode<=41 ||$caracasciicode>=48 && $caracasciicode<=57){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroespecial==1){
                   $errotelefone2 = 1;
                   echo "ERRO: contém caractere especias no campo 'telefone'<br/>";
               }
           }
           return $errotelefone2;
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

       // Fun��o para validar a situa��o
       function validarie ($ie){
              $errosituacao = 0;
              if(!isset($ie)){
                     $errosituacao = 1;
                     echo "ERRO: campo 'situação' não marcado<br/>";
              }
              return $errosituacao;
       };
       function validarCpf($CPF)
       {
           $CPF = preg_replace('/[^0-9]/', '', (string) $CPF);
           // Valida tamanho
           if (strlen($CPF) != 11)
               return false;
               // Calcula e confere primeiro d�gito verificador
               for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
                   $soma += $CPF{$i} * $j;
                   $resto = $soma % 11;
                   if ($CPF{9} != ($resto < 2 ? 0 : 11 - $resto))
                       return false;
                       // Calcula e confere segundo d�gito verificador
                       for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
                           $soma += $CPF{$i} * $j;
                           $resto = $soma % 11;
                           return $CPF{10} == ($resto < 2 ? 0 : 11 - $resto);
       };
       
       function validarOrgCPF($orgCPF){
           $orgCPF= 
       };
       

       // Função que dispara todas as outras funções e, estando tudo certo, inseri no BD
       function validar($nome, $documento, $curso, $telefone1, $telefone2, $email, $ie) {
              $validnome = validarnome($nome);
              $validdocumento = validardocumento($documento);
              $validtelefone1 = validartelefone1($telefone1);
              $validtelefone2 = validartelefone2($telefone2);
              $validemail = validaremail($email);
              $validsituacao = validarie($ie);
              

              if($validnome == 0 && $validdocumento == 0 && $validtelefone1 == 0 && $validtelefone2 == 0 && $validemail == 0 && $validsituacao == 0){

                     insert($nome, $documento, $telefone, $email, $ie, $curso);

              }

       };

?>
