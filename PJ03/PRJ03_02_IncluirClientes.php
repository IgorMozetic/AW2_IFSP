<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../PJ01/conexao.php";

$insert = "INSERT INTO NovosClientes  (Codigo_cliente, RG_mae, Nome_dependente, Data_nascimento, Relacao, Sexo) VALUES
(2,10101012,	'Edson',	'1946-12-27',	'Filho',	'Masculino'),
(3,10105710, 	'Luiz',		'1949-11-18',	'Filho',	'Masculino'),
(4,20232020,	'Flavia',	'1989-12-14',	'Conjuge',	'Feminino'),
(5, 20232020,	'Angelo',	'1945-02-10',	'Filho',	'Masculino'),
(6,30333030,	'Fernanda',	'1980-06-01',	'Filho',	'Feminino'),
(7,10101010,	'Jorge',	'1976-12-27',	'Filho',	'Masculino'),
(8, 10101010,	'Mauro',	'1972-11-18',	'Filho',	'Masculino'),
(9, 10101010,	'Larissa',	'1979-02-14',	'Conjuge',	'Feminino'),
(10,23202020,	'Antunes',	'1945-01-10',	'Filho',	'Masculino'),
(11,30341030,	'Maria',	'1970-05-01',	'Filho',	'Feminino'),
(12,10101341,	'João',		'1976-12-27',	'Filho',	'Masculino'),
(13,30101010,	'Mario',	'1989-11-18',	'Filho',	'Masculino'),
(14,10101010,	'Gisele',	'1978-02-14',	'Conjuge',	'Feminino'),
(15,34202020,	'Arnaldo',	'1985-02-10',	'Filho',	'Masculino'),
(16, 10101010,	'Katia',	'1970-05-10',	'Filho',	'Feminino'),
(17, 10105710,	'Jose',		'1946-12-27',	'Conjuge',	'Masculino'),
(18, 79501010,	'Luis',		'1975-11-18',	'Filho',	'Masculino'),
(19, 20202032,	'Fabiana',	'1989-02-14',	'Conjuge',	'Feminino'),
(20, 79501010,	'Anisio',	'1994-02-10',	'Filho',	'Masculino'),
(21,76503030,	'Marcela',	'1997-06-01',	'Filho',	'Feminino');";

$result = mysqli_query($conexao, $insert);

if ($result == null)
	echo "Erro: " . $insert;
else
	header("location: PRJ03_04_ListarClientes.php");
