<?php 
 

   $nome=$_POST['name'];
   $documento=$_POST['document'];
   $curso= $_POST['course'];
   $telefone=$_POST['phone'];
   $email=$_POST['mail'];
   $ie=$_POST['checkbox'];
   
   validar($nome, $documento, $curso, $telefone, $email, $ie);
 
   function validarnome($nome){
       if( trim($nome)=="" ){
           echo "ERRO";
       }
       
       
      $arraynome= str_split($nome);
      $lengthnome= strlen($nome);
      $erroletra=0;
      for($i=0;$i<$lengthnome;$i++){
          if(is_numeric ($arraynome[$i])){
             $erroletra++;
          }
            
          
          
        }
            if($erroletra>0){
              echo "Erro letra  ";
      }
   };
 
   
 function validar($nome, $documento, $curso, $telefone, $email, $ie) {
    validarnome($nome);
     
    
 };
 
