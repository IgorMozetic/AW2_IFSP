<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
$servidor = "localhost";
$login = "root";
$senha = "";
$banco = "aula-aw2";

// Create connection
$conexao = mysqli_connect($servidor, $login, $senha, $banco);

// Check connection
if (!$conexao)
{
      die("Falha na conexao: " . mysqli_connect_error());
}
echo "<br>Conexao executada com sucesso<br><br>";
