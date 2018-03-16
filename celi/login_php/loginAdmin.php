 <?php
   
    $usuarioDigitado=$_POST['nameUsuario'];
    $senhaDigitado=$_POST['nameSenha'];
    $conexao='';
    
    require_once'cripAdmin.php';
    criptografar ($senhaDigitado);
    
  conexao($conexao);
   $sql="SELECT * FROM admin";
   $query=mysqli_query($conexao, $sql);
   
   $array=mysqli_fetch_array($result_query);
   $usuarioBd=$array['usuario'];
   $senhaBd=$array['senha'];

   if(($senhaBd==$senhaDigitado) && ($usuarioBd==$usuarioDigitado)){
     header('paginaAdmin.html');
   }
?>