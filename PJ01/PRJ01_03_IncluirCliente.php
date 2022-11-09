<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "conexao.php";  

$cliente_nome		= $_POST['cliente_nome'];
$cliente_endereco	= $_POST['cliente_endereco'];

$insert = "insert into cliente values (null, '$cliente_nome', '$cliente_endereco')";

$result = mysqli_query($conexao, $insert);

if($result == null)
	echo "Erro: " . $insert;
else
	header("location: PRJ01_04_SelectCliente.php"); 
?>
