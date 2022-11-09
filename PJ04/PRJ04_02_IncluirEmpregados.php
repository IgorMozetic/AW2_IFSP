<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../PJ01/conexao.php";

$insert = "INSERT INTO Empregado (empr_nro_empregado, empr_nome_empregado, empr_cargo, empr_data_nasc, empr_salario, empr_nro_depto)
VALUES
(100, 'Vasco Dias',	 	'Presidente',		'1956-05-07', 40000, 10),
(200, 'H. Ramos Leitão', 	'Gerente de compras',	'1960-05-25', 20000, 10),
(300, 'Pedro Alvares Cabral',	'Gerente de vendas',	'1980-12-25', 20000, 10),
(400, 'Rolando Lero',		'Analista de sistemas',	'1980-01-18', 11111, 10),
(500, 'Chacrinha',		'Analista de sistemas', '1980-04-08', 22222, 20),
(600, 'Amado Mestre',		'Líder de Projeto',	'1990-12-08', 25000, 30)
";

$result = mysqli_query($conexao, $insert);

if ($result == null)
	echo "Erro: " . $insert;
else
	header("location: PRJ04_03_ListarEmpregados.php");
