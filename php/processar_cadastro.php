<?php
// processar_cadastro.php

// Inclui a conexão com o banco
include 'conexao.php';

// Coleta os dados do formulário
$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$email = strtolower($_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$conheceu_orbia = $_POST['conheceu'] ?? '';
$receber_ofertas = isset($_POST['ofertas']) ? 1 : 0;
$aceita_politicas = isset($_POST['politicas']) ? 1 : 0;

// Verifica se confirmou senha corretamente
if ($_POST['senha'] !== $_POST['confirmar_senha']) {
    die("As senhas não coincidem!");
}

// Inserção no banco
$sql = "INSERT INTO clientes (nome_completo,cpf,genero,data_nascimento,telefone, email, senha, conheceu_orbia, receber_ofertas,aceita_politicas) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssii", $nome_completo,$cpf,$genero,$data_nascimento,$telefone, $email, $senha, $conheceu_orbia, $receber_ofertas,$aceita_politicas); // Aqui CPF vai para 'endereco'

header("Location: ../login.php");
exit();

if ($stmt->execute()) {
    header("Location: ../login.php");
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$conn->close();
?>
