<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "COFFEE_SHOP";

$conn = new mysqli($host, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro na conexao: " . $conn->connect_error);
}
?>