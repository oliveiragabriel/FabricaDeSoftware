<?php
$conexao = mysqli_connect("localhost", "root", "","celi");
mysqli_set_charset($conexao,"utf8");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = mysqli_query($conexao, "SELECT idcurso, nome FROM curso");