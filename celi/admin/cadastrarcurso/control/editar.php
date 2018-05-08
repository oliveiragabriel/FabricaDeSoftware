<?php

$conexao = mysqli_connect("localhost", "root", "", "celi");
mysqli_set_charset($conexao,"utf8");
if (!$conexao){
    echo "ERROR! failure to connect to the database.";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

$selecionar = "SELECT nome FROM curso WHERE idcurso=" . $curso;
$query = mysqli_query($conexao, $selecionar);
$nome = mysqli_fetch_assoc($query);

if(isset($_POST['nomecurso'])){
    $editar = "UPDATE curso SET nome ='". $_POST['nomecurso'] . "' WHERE idcurso=" . $curso;
    if(mysqli_query($conexao, $editar))
    {
        header('location: ../html/editado.html');
    }
    
}