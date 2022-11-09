<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "conexao.php";  

$create = "create table Cliente
(
cliente_id		int not null auto_increment primary key,
cliente_nome		varchar (45),
cliente_endereco	varchar (45)
);	";

$result = mysqli_query($conexao, $create);

    if($result == null)
        echo "Erro : " . $create;
    else
        header("location: PRJ01_04_SelectCliente.php");
?>
