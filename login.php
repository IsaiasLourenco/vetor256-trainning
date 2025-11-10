<?php
@session_start();
require_once("conexao.php");

// Receber dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Buscar usuário pelo e-mail
$query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND ativo = 1");
$query->bindValue(":email", $email);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    $usuario = $res[0];
    $senha_bd = $usuario['senha'];

    if (password_verify($senha, $senha_bd)) {
        // Salvar dados na sessão
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['nivel'] = $usuario['nivel'];

        if ($usuario['nivel'] == 'aluno') {
            // Buscar ID do aluno vinculado
            $queryAluno = $pdo->prepare("SELECT id FROM alunos WHERE id_usuario = :id_usuario");
            $queryAluno->bindValue(":id_usuario", $usuario['id']);
            $queryAluno->execute();
            $aluno = $queryAluno->fetch(PDO::FETCH_ASSOC);

            if ($aluno) {
                $_SESSION['id_aluno'] = $aluno['id'];
                echo "<script>window.location='sistema/painel-aluno/painel.php';</script>";
                exit();
            } else {
                echo "<script>alert('Aluno não vinculado ao usuário!'); window.location='index.php';</script>";
                exit();
            }
        } elseif ($usuario['nivel'] == 'admin' || $usuario['nivel'] == 'professor') {
            echo "<script>window.location='sistema/painel-adm/painel.php';</script>";
            exit();
        } else {
            echo "<script>alert('Nível de acesso desconhecido!'); window.location='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Senha incorreta!'); window.location='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Usuário não encontrado!'); window.location='index.php';</script>";
    exit();
}
