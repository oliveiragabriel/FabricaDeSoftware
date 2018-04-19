<?php
// $conexao = mysqli_connect("localhost", "root", "","celi");
// mysqli_set_charset($conexao,"utf8");

// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }

// $sql = mysqli_query($conexao, "");

$dataabertura = $_POST['dataabertura'];
$horaabertura = $_POST['horaabertura'];
$dataencerramento = $_POST['dataencerramento'];
$horaencerramento = $_POST['horaencerramento'];

echo "$dataabertura | $horaabertura | $dataencerramento | $horaencerramento";

?>
