 <?php
 
    require_once './cripAdmin.php';
    include_once "../html/loginAdmin.html";
    include_once "../../arquivosfixos/pdao/pdaoscript.php";
    
    $usuarioDigitado = $_POST['nameUsuario'];
    $senhaDigitado = $_POST['nameSenha'];
    
    criptografar($senhaDigitado);
    
    $select = selecionarbd("*", "admin", null);
    $array = mysqli_fetch_array($result_query);
    
    $usuarioBd = $array['usuario'];
    $senhaBd = $array['senha'];

    if( $senhaBd == $senhaDigitado && $usuarioBd == $usuarioDigitado){
       session_start();
       
       $_SESSION['usuario'] = $usuarioBd;
       $_SESSION['senha'] = $senhaBd;
       
       
       header('location: paginaAdmin.html');
    }
    else{
       echo "Nome de usuário ou senha incorretos!";
    }
?>