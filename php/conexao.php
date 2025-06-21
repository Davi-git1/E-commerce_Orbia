<?php
// conexao.php

$servername = "143.106.241.3";
$username = "cl203362";
$password = "cl*12122003";
$database = "cl203362";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
