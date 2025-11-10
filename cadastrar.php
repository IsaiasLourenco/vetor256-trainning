<?php
require_once("conexao.php");

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel']; // aluno, professor ou admin

// Criptografar a senha
$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

// Verificar se o e-mail já está cadastrado
$query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$query->bindValue(":email", $email);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    echo "<script>alert('E-mail já cadastrado!'); window.location='index.php';</script>";
    exit();
}

// Inserir na tabela usuarios
$query = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, nivel) VALUES (:nome, :email, :senha, :nivel)");
$query->bindValue(":nome", $nome);
$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha_cripto);
$query->bindValue(":nivel", $nivel);
$query->execute();

$id_usuario = $pdo->lastInsertId();

// Inserir na tabela correspondente
if ($nivel == 'aluno') {
    $query = $pdo->prepare("INSERT INTO alunos (id_usuario, nome, email, senha) VALUES (:id_usuario, :nome, :email, :senha)");
    $query->bindValue(":id_usuario", $id_usuario);
    $query->bindValue(":nome", $nome);
    $query->bindValue(":email", $email);
    $query->bindValue(":senha", $senha_cripto);
    $query->execute();
} else {
    $query = $pdo->prepare("INSERT INTO funcionarios (id_usuario, cargo, telefone) VALUES (:id_usuario, :cargo, :telefone)");
    $query->bindValue(":id_usuario", $id_usuario);
    $query->bindValue(":cargo", "Professor");
    $query->bindValue(":telefone", "");
    $query->execute();
}

echo "<script>alert('Cadastro realizado com sucesso!'); window.location='index.php';</script>";
