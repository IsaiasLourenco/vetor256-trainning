<?php
require_once("conexao.php");

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Criptografar a senha
$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

// Verificar se o e-mail já está cadastrado
$query = $pdo->prepare("SELECT * FROM alunos WHERE email = :email");
$query->bindValue(":email", $email);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    echo "<script>alert('E-mail já cadastrado!'); window.location='index.php';</script>";
    exit();
}

// Inserir no banco
$query = $pdo->prepare("INSERT INTO alunos (nome, email, senha) VALUES (:nome, :email, :senha)");
$query->bindValue(":nome", $nome);
$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha_cripto);
$query->execute();

echo "<script>alert('Cadastro realizado com sucesso!'); window.location='index.php';</script>";
