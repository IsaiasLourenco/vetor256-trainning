<?php
require_once("../../conexao.php");

$id_aluno = $_POST['id_aluno'];
$id_aula = $_POST['id_aula'];

// Verifica se já existe matrícula
$query = $pdo->prepare("SELECT * FROM matriculas WHERE id_aluno = :id_aluno AND id_aula = :id_aula");
$query->execute(['id_aluno' => $id_aluno, 'id_aula' => $id_aula]);

if ($query->rowCount() > 0) {
    echo "<script>alert('Este aluno já está matriculado nesta aula.'); history.back();</script>";
    exit();
}

// Insere matrícula
$query = $pdo->prepare("INSERT INTO matriculas (id_aluno, id_aula) VALUES (:id_aluno, :id_aula)");
$query->execute(['id_aluno' => $id_aluno, 'id_aula' => $id_aula]);

echo "<script>alert('Matrícula realizada com sucesso!'); window.location='matricular.php';</script>";
