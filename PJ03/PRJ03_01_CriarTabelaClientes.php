<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$create = "create table NovosClientes
(

 Codigo_cliente		int		NOT NULL,
 RG_mae			int		NOT NULL,
 Nome_dependente	varchar(40)	NOT NULL,
 Data_nascimento	date,
 Relacao		varchar(20)	NOT NULL,
 Sexo			varchar(9)	CHECK (sexo IN ('Masculino', 'Feminino'))

);";

$result = mysqli_query($conexao, $create);

if ($result == null)
    echo "Erro : " . $create;
else
    header("location: PRJ03_03_ListarClientes.php");
