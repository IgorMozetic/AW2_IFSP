<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$create = "create table Departamento
(
 dept_nro_depto     int             NOT NULL primary key,
 dept_nome_depto    varchar(45)     NOT NULL,
 dept_localizacao   varchar(45)     NOT NULL
);";

$result = mysqli_query($conexao, $create);

if ($result == null)
    echo "Erro : " . $create;
else
    header("location: PRJ04_03_ListarDepartamentos.php");
