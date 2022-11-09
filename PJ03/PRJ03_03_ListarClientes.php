<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$sql = "SELECT * FROM NovosClientes";

$res = mysqli_query($conexao, $sql);

echo "<br>";
while ($row = mysqli_fetch_array($res)) {
  print $row[0] . " -- " . $row[1] . " -- " . $row[2] . " -- " . $row[3] . " -- " . $row[4] . " -- " . $row[5];
  echo "<br>";
}

$lin = mysqli_num_rows($res);
echo "<br>$lin registros encontrados na tabela NovosClientes";

mysqli_close($conexao);
