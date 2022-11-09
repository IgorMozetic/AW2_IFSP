<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";
$consulta = "select * from Empregado";
$res = mysqli_query($conexao, $consulta);
if ($res != null) {
    $qtd_linhas = mysqli_num_rows($res);
    echo "<br> $qtd_linhas Empregados existentes na tabela Empregado";
} else
    echo "Erro na query";
