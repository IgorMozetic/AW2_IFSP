<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$sql = "SELECT empr_nome_empregado, empr_data_nasc, empr_cargo, dept_nome_depto 
        FROM Empregado
        LEFT JOIN Departamento
        ON empr_nro_depto = dept_nro_depto 
        ORDER BY empr_nome_empregado";
$res = mysqli_query($conexao, $sql);
if ($res != null) {
  echo "<table border='1'>";
  echo "<tr bgcolor='#0066FF'>";
  echo "<td colspan='6'><font color='#FFFFFF'><center>Relatório de Empregados</font></td>";
  echo "</tr>";
  echo "<tr bgcolor='#0066FF'>";
  echo "<td><font color='#FFFFFF'><center>Nome do Departamento</font></td>";
  echo "<td><font color='#FFFFFF'><center>Nome do Empregado</font></td>";
  echo "<td><font color='#FFFFFF'><center>Data de Nascimento</font></td>";
  echo "<td><font color='#FFFFFF'><center>Cargo</font></td>";
  echo "</tr>";

  $i = 0;
  while ($fetch = mysqli_fetch_object($res)) {
    if ($i % 2 == 0)
      echo "<tr>";
    else
      echo "<tr bgcolor='#999999'>";

    echo "<td><center>" . $fetch->dept_nome_depto . "</td>";
    echo "<td><center>" . $fetch->empr_nome_empregado . "</td>";
    echo "<td><center>" . $fetch->empr_data_nasc . "</td>";
    echo "<td><center>" . $fetch->empr_cargo . "</td>";
    echo "</tr>";

    $i++;
  }
  echo "</table>";
} else
  echo "Erro no Relatório de Empregados";
