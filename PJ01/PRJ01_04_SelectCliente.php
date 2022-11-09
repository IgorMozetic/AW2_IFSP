<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "conexao.php";
 
$sql = "SELECT * FROM cliente";

$res = mysqli_query($conexao, $sql);

if ($res != null)
{
	echo "<br>";
	while ($registro = mysqli_fetch_object( $res ))	//mostra os campos da tabela que estao no objeto registro
	{
		echo $registro->cliente_id . " | ";
		echo $registro->cliente_nome . " | ";
		echo $registro->cliente_endereco;
	}
}

$lin = mysqli_num_rows($res);
echo "<br> <br>";
echo "$lin registros encontrados na tabela Cliente";

mysqli_close($conexao);
?>
