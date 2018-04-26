<?php
    // Linka o arquivo pdao para pegar os cursos a fim de exibi-los
    require "../../../arquivosfixos/pdao/pdaoscript.php";
    
    function selectEdital ($campo, $condição){
        $conexao = conexaobd();
        if($conexao){
            if($condicao == NULL){
                $sql = "SELECT $campo FROM Edital;";
                $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
                
                return $query;
            }
            else{
                $sql = "SELECT $campo FROM Edital $condicao";
                $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
                
                return $query;
            }
        }
        else{
            echo "Conexao com o BD nao estabelecida!";
            return FALSE;
    }

?>
