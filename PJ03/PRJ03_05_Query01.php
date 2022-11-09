<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";
$consulta = "select * from NovosClientes ";
$res = mysqli_query($conexao, $consulta);
if ($res != null) {
    $qtd_linhas = mysqli_num_rows($res);
    echo "<br> $qtd_linhas Clientes existentes na tabela Clientes32";
} else
    echo "Erro na query";
