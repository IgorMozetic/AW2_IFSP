<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "../PJ01/conexao.php";  

$create = "create table Vendedor
(
vend_codigo		int not null primary key,
vend_nome		varchar (45),
vend_data_nasc		date,
vend_idade		int,
vend_sexo		char (1),
vend_salario		decimal (10,2)
);	";

$result = mysqli_query($conexao, $create);

    if($result == null)
        echo "Erro : " . $create;
    else
        header("location: selectVendedor.php");
?>