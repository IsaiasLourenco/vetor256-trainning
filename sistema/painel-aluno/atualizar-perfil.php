<?php
@session_start();
require_once("../../conexao.php");

if (!isset($_SESSION['id_aluno'])) {
    echo "<script>alert('Você precisa estar logado para atualizar o perfil!'); window.location='index.php';</script>";
    exit();
}

$id = $_SESSION['id_aluno'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

// Verifica se as senhas foram preenchidas e são iguais
if (!empty($senha)) {
    if ($senha !== $confirma) {
        echo "<script>alert('As senhas não coincidem!'); history.back();</script>";
        exit();
    }
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
}

// Atualiza na tabela alunos
if (!empty($senha)) {
    $query = $pdo->prepare("UPDATE alunos SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $query->bindValue(":senha", $senha_cripto);
} else {
    $query = $pdo->prepare("UPDATE alunos SET nome = :nome, email = :email WHERE id = :id");
}

$query->bindValue(":nome", $nome);
$query->bindValue(":email", $email);
$query->bindValue(":id", $id);
$query->execute();

// Atualiza também na tabela usuarios
if (!empty($senha)) {
    $query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id_usuario");
    $query->bindValue(":senha", $senha_cripto);
} else {
    $query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id_usuario");
}

$query->bindValue(":nome", $nome);
$query->bindValue(":email", $email);
$query->bindValue(":id_usuario", $_SESSION['id']);
$query->execute();

echo "<script>alert('Perfil atualizado com sucesso!'); window.location='painel.php';</script>";
