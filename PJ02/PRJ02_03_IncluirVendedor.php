<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

include "../PJ01/conexao.php";  

$vend_codigo	= $_POST['vend_codigo'];
$vend_nome	= $_POST['vend_nome'];
$vend_data_nasc	= $_POST['vend_data_nasc'];
$vend_idade	= $_POST['vend_idade'];
$vend_sexo	= $_POST['vend_sexo'];
$vend_salario	= $_POST['vend_salario'];

$insert = "insert into Vendedor values ($vend_codigo, '$vend_nome', '$vend_data_nasc', '$vend_idade', '$vend_sexo', '$vend_salario')";

$result = mysqli_query($conexao, $insert);

if($result == null)
	echo "Erro: " . $insert;
else
	header("location: PRJ02_04_SelectVendedor.php"); 
?>
