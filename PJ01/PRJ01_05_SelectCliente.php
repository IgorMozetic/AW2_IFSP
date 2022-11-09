<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "conexao.php";
 
$sql = "SELECT * FROM cliente";

$res = mysqli_query($conexao, $sql);

echo "<br>";
while ($array = mysqli_fetch_array( $res ))	//mostra os campos da tabela que estao no vetor array
{
	print $array[0] . " -- " . $array[1] . " -- " . $array[2];
	echo "<br>";
}

$lin = mysqli_num_rows($res);
echo "<br> $lin registros encontrados na tabela Cliente";

mysqli_close($conexao);
?>
