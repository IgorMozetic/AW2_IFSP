<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";
$consulta = "select COUNT(*) as TOTAL from NovosClientes
where sexo = 'Feminino'; ";
$res = mysqli_query($conexao, $consulta);
if ($res != null) {
    $qtd_linhas = $res->fetch_object()->TOTAL;
    echo "<BR>" . $qtd_linhas . " Clientes existentes na tabela NovosClientes ";
} else
    echo "Erro na query";
