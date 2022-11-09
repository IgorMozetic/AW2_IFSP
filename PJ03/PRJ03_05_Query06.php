<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";
$consulta = "select Nome_dependente, Sexo, Data_nascimento from NovosClientes
		WHERE Relacao = 'Conjuge'
		ORDER BY Data_nascimento;
";
$res = mysqli_query($conexao, $consulta);
if ($res != null) {
    echo "<table border='1'>";
    echo "<tr bgcolor='#0066FF'>";
    echo "<td colspan='3'><font color='#FFFFFF'><center>Relatório de NovosClientes</font></td>";
    echo "</tr>";
    echo "<tr bgcolor='#0066FF'>";
    echo "<td><font color='#FFFFFF'><center>Nome do Dependente</font></td>";
    echo "<td><font color='#FFFFFF'><center>Sexo</font></td>";
    echo "<td><font color='#FFFFFF'>Data de Nascimento</font></td>";
    echo "</tr>";

    $i = 0;
    while ($fetch = mysqli_fetch_object($res)) {
        if ($i % 2 == 0)
            echo "<tr>";
        else
            echo "<tr bgcolor='#999999'>";

        echo "<td>" . $fetch->Nome_dependente . "</td>";
        echo "<td><center>" . $fetch->Sexo . "</td>";
        echo "<td><center>" . $fetch->Data_nascimento . "</td>";
        echo "</tr>";

        $i++;
    }
    echo "</table>";
} else
    echo "Erro no Relatório de NovosClientes";
