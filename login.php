<?php
@session_start();
require_once("conexao.php");

// Receber dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Buscar aluno pelo e-mail
$query = $pdo->prepare("SELECT * FROM alunos WHERE email = :email");
$query->bindValue(":email", $email);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    $senha_bd = $res[0]['senha'];
    $nome = $res[0]['nome'];
    $id = $res[0]['id'];

    // Verificar senha
    if (password_verify($senha, $senha_bd)) {
        $_SESSION['id_aluno'] = $id;
        $_SESSION['nome_aluno'] = $nome;
        $_SESSION['email_aluno'] = $email;

        echo "<script>window.location='painel.php';</script>";
        exit();
    } else {
        echo "<script>alert('Senha incorreta!'); window.location='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('E-mail não encontrado!'); window.location='index.php';</script>";
    exit();
}
