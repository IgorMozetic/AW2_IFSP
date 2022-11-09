<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "../PJ01/conexao.php";

$create = "create table Empregado
(
 empr_nro_empregado     int             NOT NULL primary key,
 empr_nome_empregado    varchar(45)     NOT NULL,
 empr_cargo             varchar(45)     NOT NULL,
 empr_data_nasc         date            NOT NULL,
 empr_salario           float           NOT NULL,
 empr_nro_depto         int             NOT NULL,
 constraint fk_nro_depto foreign key (empr_nro_depto) references Departamento (dept_nro_depto)
);";

$result = mysqli_query($conexao, $create);

if ($result == null)
    echo "Erro : " . $create;
else
    header("location: PRJ04_03_ListarEmpregados.php");
