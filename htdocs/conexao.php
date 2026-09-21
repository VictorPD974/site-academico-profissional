<?php
$host = '****'; // Insira o Host aqui
$dbname = '****'; // Insira o DBname aqui
$username = '***'; // Insira o username aqui
$password = '****'; // Insira a senha aqui

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Regista o erro num log interno do servidor e mostra uma mensagem genérica e segura
    error_log("Erro na ligação à base de dados: " . $e->getMessage());
    die("Ocorreu um erro interno ao ligar à base de dados. Por favor, tente novamente mais tarde.");
}
?>
