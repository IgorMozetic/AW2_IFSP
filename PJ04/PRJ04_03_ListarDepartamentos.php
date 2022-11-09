<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$sql = "SELECT * FROM Departamento";

$res = mysqli_query($conexao, $sql);

echo "<br>";
while ($row = mysqli_fetch_array($res)) {
  print $row[0] . " -- " . $row[1] . " -- " . $row[2];
  echo "<br>";
}

$lin = mysqli_num_rows($res);
echo "<br>$lin registros encontrados na tabela Departamento";

mysqli_close($conexao);
