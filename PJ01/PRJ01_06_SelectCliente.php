<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "conexao.php";
 
$sql = "SELECT * FROM cliente";

$res = mysqli_query($conexao, $sql);

while($registro = mysqli_fetch_row($res))	//mostra os registros da tabela que estao no vetor registro
{
	$codigo   = $registro[0];
	$nome     = $registro[1];
	$endereco = $registro[2];

	echo $codigo   . " -- ";
	echo $nome     . " -- ";
	echo $endereco . "<br><br>";
}

$lin = mysqli_num_rows($res);
echo "$lin registros encontrados na tabela Cliente";

mysqli_close($conexao);
?>
