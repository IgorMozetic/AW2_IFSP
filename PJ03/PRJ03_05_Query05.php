<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$sql = "SELECT * FROM NovosClientes
		where Codigo_cliente = 12
";

$res = mysqli_query($conexao, $sql);

echo "<br>";
while ($row = mysqli_fetch_array($res)) {
	print $row[0] . " -- " . $row[1] . " -- " . $row[2] . " -- " . $row[3] . " -- " . $row[4] . " -- " . $row[5];
	echo "<br>";
}

$consulta = "UPDATE NovosClientes
		SET Data_nascimento = '1980-11-15'
		WHERE Codigo_cliente = 12;
";
$res = mysqli_query($conexao, $consulta);

$sql = "SELECT * FROM NovosClientes
		where Codigo_cliente = 12
";

$res = mysqli_query($conexao, $sql);

echo "<br>";
while ($row = mysqli_fetch_array($res)) {
	print $row[0] . " -- " . $row[1] . " -- " . $row[2] . " -- " . $row[3] . " -- " . $row[4] . " -- " . $row[5];
	echo "<br>";
}

mysqli_close($conexao);
