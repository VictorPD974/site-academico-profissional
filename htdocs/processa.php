<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $assunto = $_POST['assunto'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Inclui o campo assunto na query de inserção
        $stmt = $pdo->prepare("INSERT INTO contactos (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $assunto, $mensagem]);
        
        // Redireciona de volta para a página de contacto com o aviso de sucesso
        header("Location: contato.php?status=sucesso");
        exit();
    } else {
        // Redireciona de volta com erro se faltarem campos obrigatórios
        header("Location: contato.php?status=erro");
        exit();
    }
}
?>