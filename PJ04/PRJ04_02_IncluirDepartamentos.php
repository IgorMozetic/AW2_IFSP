<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../PJ01/conexao.php";

$insert = "INSERT INTO Departamento (dept_nro_depto, dept_nome_depto, dept_localizacao)
VALUES
(10, 'Presidencia',	 	'Sao Paulo'),
(20, 'Compras', 	'Campinas'),
(30, 'Vendas',	'Rio de Janeiro')
";

$result = mysqli_query($conexao, $insert);

if ($result == null)
	echo "Erro: " . $insert;
else
	header("location: PRJ04_03_ListarDepartamentos.php");
