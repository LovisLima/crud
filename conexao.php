<?php
//script de conexao

$servername = "localhost"; // padrao -server local
$username = "root"; // padrao - root
$password = ""; //senha de conexão do banco de dados.
$database = "formulario_estoque"; //alterar conforme o nome do seu banco de dados

//create connection
$conexao = mysqli_connect($servername, $username, $password, $database);

?>