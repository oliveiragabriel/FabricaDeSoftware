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
           $erroCpf = 0;
           if( trim($CPF)=="" ){
               $erroCpf = 1;
               echo "ERRO: campo 'CPF' está vazio<br/>";
       };
       
       function validarOrgCPF($orgCPF){
           $orgCPF= 0;
           if( trim($orgCPF)=="" ){
               $errodoOrgCPF = 1;
               echo "ERRO: campo 'Orgão emissor do CPF' está vazio<br/>";
           }
           else{
               $arraydoOrgCPF= str_split($orgCPF);
               $lengthOrgCPF= strlen($orgCPF);
               $erroespecial=0;
               for($i=0;$i<$lengthOrgCPF;$i++){
                   $caracasciicode=ord($arrayOrgCPF[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=45 && $caracasciicode<=46) ||  ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroespecial==1){
                   $erroOrgCPF = 1;
                   echo "ERRO: contém caractere especial no campo 'Orgão emissor do CPF'<br/>";
               }
           }
           return $erroOrgCPF;
       };
       function validarRg($RG)
       {
           $RG = preg_replace('/[^0-9]/', '', (string) $RG);
           // Valida tamanho
           if (strlen($RG) != 9)
               return false;
               // Calcula e confere primeiro d�gito verificador
               for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
                   $soma += $RG{$i} * $j;
                   $resto = $soma % 11;
                   if ($RG{9} != ($resto < 2 ? 0 : 11 - $resto))
                       return false;
                       // Calcula e confere segundo d�gito verificador
                       for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
                           $soma += $RG{$i} * $j;
                           $resto = $soma % 11;
                           return $RG{10} == ($resto < 2 ? 0 : 11 - $resto);
       };
       
       function validarOrgRG($orgRG){
           $orgRG= 0;
           if( trim($orgRG)=="" ){
               $errodoOrgRG = 1;
               echo "ERRO: campo 'Orgão emissor do Rg' está vazio<br/>";
           }
           else{
               $arraydoOrgRG= str_split($orgRG);
               $lengthOrgRG= strlen($orgRG);
               $erroespecial=0;
               for($i=0;$i<$lengthOrgRG;$i++){
                   $caracasciicode=ord($arrayOrgRG[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=45 && $caracasciicode<=46) ||  ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroespecial==1){
                   $erroOrgRG = 1;
                   echo "ERRO: contém caractere especial no campo 'Orgão emissor do RG'<br/>";
               }
           }
           return $erroOrgRG;
       };
       
       function validarUF($UF){
        $erroUF=0;
        if( trim($UF)=="" ){
            $erroUF = 1;
            echo "ERRO: campo 'UF' está vazio<br/>";
        }
        else{
            $arraydoUF= str_split($UF);
            $lengthUF= strlen($UF);
            if($lengthUF>1){
                $erroUF = 1;
                echo "ERRO: campo 'UF' está como mais de um campo preenchido<br/>";
                }
            }
       }
        
        
       }
       
       function validarCidade($cidade){
           $erroCidade = 0;
           if( trim($cidade)=="" ){
               $erroCidade = 1;
               echo "ERRO: campo 'cidade' está vazio<br/>";
           }
           else{
               $arrayCidade= str_split($cidade);
               $lengthcidade= strlen($cidade);
               $erroespecial=0;
               $erroletra=0;
               for($i=0;$i<$lengthcidade;$i++){
                   if(is_numeric ($arrayCidade[$i])){
                       $erroletra=1;
                   }
               }
               for($i=0;$i<$lengthcidade;$i++){
                   $caracasciicode=ord($arrayCidade[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroletra==1){
                   $erroCidade = 1;
                   echo "ERRO: contém números no campo 'cidade'<br/>";
               }
               if($erroespecial==1){
                   $erronome = 1;
                   echo "ERRO: contém caractere especial no campo 'cidade'<br/>";
               }
           }
           return $erroCidade;
       };
       function validarBairro($bairro){
           $erroBairro = 0;
           if( trim($nome)=="" ){
               $erroBairro = 1;
               echo "ERRO: campo 'bairro' está vazio<br/>";
           }
           else{
               $arrayBairro= str_split($bairro);
               $lengthBairro= strlen($bairro);
               $erroespecial=0;
               $erroletra=0;
               for($i=0;$i<$lengthnome;$i++){
                   if(is_numeric ($arrayBairro[$i])){
                       $erroletra=1;
                   }
               }
               for($i=0;$i<$lengthBairro;$i++){
                   $caracasciicode=ord($arrayBairro[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroletra==1){
                   $erronome = 1;
                   echo "ERRO: contém números no campo 'bairro'<br/>";
               }
               if($erroespecial==1){
                   $erronome = 1;
                   echo "ERRO: contém caractere especial no campo 'bairro'<br/>";
               }
           }
           return $erroBairro;
       };//verrifica se esta vazio, e se nao tem nenhum caracter especial 
       function validarLogradouro($logradouro){
           $erroLogradouro = 0;
           if( trim($logradouro)=="" ){
               $erroLogradouro = 1;
               echo "ERRO: campo 'logradouro' está vazio<br/>";
           }
           else{
               $arrayLogradouro= str_split($logradouro);
               $lengthLogradouro= strlen($logradouro);
               $erroespecial=0;
               $erroletra=0;
               for($i=0;$i<$lengthLogradouro;$i++){
                   if(is_numeric ($arrayLogradouro[$i])){
                       $erroletra=1;
                   }
               }
               for($i=0;$i<$lengthLogradouro;$i++){
                   $caracasciicode=ord($array[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=48 && $caracasciicode<=57) || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroletra==1){
                   $erroLogradouro = 1;
                   echo "ERRO: contém números no campo 'logradouro'<br/>";
               }
               if($erroespecial==1){
                   $erronome = 1;
                   echo "ERRO: contém caractere especial no campo 'logradouro'<br/>";
               }
           }
           return $erroLogradoro;
       };
       function validarComplemento($complemento){
           $erroComplemento = 0;
           if( trim($complemento)=="" ){
               $erroComplemento = 1;
               echo "ERRO: campo 'complemento' está vazio<br/>";
           }
           else{
               $arrayComplemento= str_split($complemento);
               $lengthComplemento= strlen($complemento);
               $erroespecial=0;
               $erroletra=0;
               for($i=0;$i<$lengthComplemento;$i++){
                   if(is_numeric ($arrayComplemento[$i])){
                       $erroletra=1;
                   }
               }
               for($i=0;$i<$lengthComplemento;$i++){
                   $caracasciicode=ord($array[$i]);
                   if($caracasciicode==32 || ($caracasciicode>=48 && $caracasciicode<=57) || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){}
                   else{
                       $erroespecial=1;
                   }
               }
               if($erroletra==1){
                   $erroComplemento = 1;
                   echo "ERRO: contém números no campo 'complemento'<br/>";
               }
               if($erroespecial==1){
                   $erroComplemento = 1;
                   echo "ERRO: contém caractere especial no campo 'complemento'<br/>";
               }
           }
           return $erroComplemento;
       };
       
       function validarCurso($curso){
           $erroCursoF=0;
           if( trim($curso)=="" ){
               $erroCurso = 1;
               echo "ERRO: campo 'UF' está vazio<br/>";
           }
           else{
               $arraydoCurso= str_split($curso);
               $lengthCurso= strlen($curso);
               if($lengthCurso>1){
                   $erroCurso = 1;
                   echo "ERRO: campo 'Curso' está como mais de um campo preenchido<br/>";
               }
           }
       }

       // Função que dispara todas as outras funções e, estando tudo certo, inseri no BD
       function validar($nome, $telefone1, $telefone2, $email, $ie, $CPF, $orgCPF, $RG, $orgRG, $uf, $cidade, $bairro, $logradouro, $complemento, $curso) {
              $validnome = validarnome($nome);
              $validtelefone1 = validartelefone1($telefone1);
              $validtelefone2 = validartelefone2($telefone2);
              $validemail = validaremail($email);
              $validsituacao = validarie($ie);
              $validCPF = validarCPF($CPF);
              $validOrgCPF = validarOrgCPF($orgCPF);
              $validRG = validarRg($RG);
              $validOrgRG =  validarOrgRG($orgRG);
              $validUf = validarUF($UF);
              $validCidade =  validarCidade($cidade);
              $validBairro =  validarBairro($bairro);
              $validLogradouro = validarLogradouro($logradouro);
              $validComplemento = validarComplemento($complemento);
              $validCurso = validarCurso($curso);
              
              
              
              if($validnome == 0 && $validdocumento == 0 && $validtelefone1 == 0 && $validtelefone2 == 0 && $validemail == 0 && $validsituacao == 0){

                     insert($nome, $documento, $telefone, $email, $ie, $curso);

              }

       };

?>
