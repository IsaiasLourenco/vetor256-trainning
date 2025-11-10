<?php
require_once("../../conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$link = $_POST['link'];

$query = $pdo->prepare("INSERT INTO aulas (titulo, descricao, link) VALUES (:titulo, :descricao, :link)");
$query->execute([
    'titulo' => $titulo,
    'descricao' => $descricao,
    'link' => $link
]);

echo "<script>alert('Aula cadastrada com sucesso!'); window.location='cadastrar-aula.php';</script>";
