<?php
session_start();
require 'conexao.php';

if (!isset($_SESSION['email']) || !isset($_SESSION['nome_completo'])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $foto_nome = uniqid() . "." . $ext;

    $caminho = "../uploads/" . $foto_nome;
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho)) {
        // Atualiza o banco
        $stmt = $mysqli->prepare("UPDATE clientes SET foto = ? WHERE email = ?");
        $stmt->bind_param("ss", $foto_nome, $_SESSION['email']);
        $stmt->execute();

        // Atualiza a sessão
        $_SESSION['foto'] = $foto_nome;
        $_SESSION['upload_sucesso'] = "Foto de perfil atualizada com sucesso!";
    } else {
        $_SESSION['upload_erro'] = "Erro ao mover o arquivo.";
    }
} else {
    $_SESSION['upload_erro'] = "Nenhuma imagem enviada ou ocorreu erro no upload.";
}

header("Location: ../index.php");
exit();
?>
