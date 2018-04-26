<?php
if(empty($_GET['pagina']))
    $_GET['pagina'] = 0;

$pagina = $_GET['pagina'];
$total = $pagina * 20;

require "../../../arquivosfixos/pdao/pdaoscript.php";

$campo = "idedital, date_format(data_ini, '%d/%m/%Y') as 'inicio', date_format(data_fim, '%d/%m/%Y') as 'fim', time_format(hora_ini, '%h:%i') as 'hora_inicio', time_format(hora_fim, '%h:%i') as 'hora_final'";
$tabela = "edital";
$condicao = "LIMIT 20 OFFSET $total";
$result = selecionarbd($campo, $tabela, $condicao);

$campo1 = "count(*) as conta";
$condicao = NULL;
$conta = selecionarbd($campo, $tabela, $condicao);

$div = $conta->num_rows/20;