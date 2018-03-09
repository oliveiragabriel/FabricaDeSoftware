<?php 
   $nome=$_POST['name'];
   $documento=$_POST['document'];
   $curso= $_POST['course'];
   $telefone=$_POST['phone'];
   $email=$_POST['email'];
   $ie=$_POST['radio'];
   
   validar($nome, $documento, $curso, $telefone, $email, $ie);
 
   function validarnome($nome){
       if( trim($nome)=="" ){
           echo "ERRO vazio nome";
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
                if($caracasciicode==32 || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){
                    
                }
                    else{
                           $erroespecial=1;                 
                    }
                }
                
                if($erroletra==1){
                    echo "Erro número  ";
                }
                if($erroespecial==1){
                    echo "Caractere inválido nome";
                }
            }
            
       
   };
   function validardocumento($documento){
       if( trim($documento)=="" ){
           echo "Campo documento está vazio";
       }
       else{
           $arraydocumento= str_split($documento);
           $lengthdocumento= strlen($documento);
           $erroespecial=0;
           for($i=0;$i<$lengthdocumento;$i++){
               $caracasciicode=ord($arraydocumento[$i]);
               if($caracasciicode==32 || ($caracasciicode>=45 && $caracasciicode<=46) || ($caracasciicode>=48 && $caracasciicode<=57) || ($caracasciicode>=65 && $caracasciicode<=90) || ($caracasciicode>=97 && $caracasciicode<=122) || ($caracasciicode>=128 && $caracasciicode<=155) || $caracasciicode>=157 || ($caracasciicode>=160 && $caracasciicode<=165)){
                   
               }
               else{
                   $erroespecial=1;
               }
           }
           if($erroespecial==1){
               echo "Caractere inválido documento";
           }
       }
   };
   
   function validartelefone($telefone){
       if( trim($telefone)=="" ){
           echo "ERRO vazio telefone";
       }
           else{
               $arraytelefone= str_split($telefone);
               $lengthtelefone= strlen($telefone);
               $erroespecial=0;
               for($i=0;$i<$lengthtelefone;$i++){
                   $caracasciicode=ord($arraytelefone[$i]);
                   if($caracasciicode==45 || $caracasciicode==32 || $caracasciicode>=40 && $caracasciicode<=41 ||$caracasciicode>=48 && $caracasciicode<=57){
                       
                   }
                   else{
                       $erroespecial=1;
                   }
               
               }
               if($erroespecial==1){
                   echo "Caractere inválido telefone";
               }
           }
   };
   
   function validaremail($email){
       if( trim($email)=="" ){
           echo "ERRO vazio email";
       }
      if(!(filter_var($email, FILTER_VALIDATE_EMAIL)))
       {
        echo 'Email incorreto';
       }
   };
   
   function validarie ($ie){
       if(!isset($ie)){

        echo "ERRO vazio checkbox";
       }
   };
   
 function validar($nome, $documento, $curso, $telefone, $email, $ie) {
    validarnome($nome);
    validardocumento($documento);
    validartelefone($telefone);
    validaremail($email);
    validarie($ie);
    
    require_once 'candidatopdao.php';
    insert($nome, $documento, $telefone, $email, $ie, $curso);
    
 };
 
?>
