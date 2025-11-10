<?php
@session_start();
require_once("../../conexao.php");

// Verifica se é admin ou professor
if (!isset($_SESSION['id']) || ($_SESSION['nivel'] != 'admin' && $_SESSION['nivel'] != 'professor')) {
    echo "<script>alert('Acesso restrito!'); window.location='../../index.php';</script>";
    exit();
}

$id_usuario = $_SESSION['id'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$nivel = $_SESSION['nivel'];

// Buscar dados do sistema
$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_sistema = $res[0]['nome_sistema'];
$icone_sistema = $res[0]['icone'];

// Buscar todos os alunos com suas aulas
$queryAlunoAula = $pdo->query("SELECT a.id AS id_aluno, a.nome AS nome_aluno, a.email AS email_aluno, au.titulo AS aula 
                      FROM alunos a
                      LEFT JOIN matriculas m ON a.id = m.id_aluno
                      LEFT JOIN aulas au ON m.id_aula = au.id
                      ORDER BY a.nome, au.titulo");
$dados = $queryAlunoAula->fetchAll(PDO::FETCH_ASSOC);

// Organizar por aluno
$alunos = [];
foreach ($dados as $linha) {
    $id = $linha['id_aluno'];
    if (!isset($alunos[$id])) {
        $alunos[$id] = [
            'nome' => $linha['nome_aluno'],
            'email' => $linha['email_aluno'],
            'aulas' => []
        ];
    }
    if ($linha['aula']) {
        $alunos[$id]['aulas'][] = $linha['aula'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_sistema ?></title>
    <link rel="shortcut icon" href="../../src/img/<?php echo $icone_sistema ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/css/index.css">
</head>

<body>

    <?php require_once("header-adm.php"); ?>

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">Olá, <?php echo $nome ?> 👋</h2>
            <p class="lead">Painel administrativo. Aqui você pode gerenciar alunos, aulas e matrículas.</p>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4 mb-3">
                    <a href="matricular.php" class="btn btn-primary w-100">Matricular Aluno</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="cadastrar-aula.php" class="btn btn-outline-secondary w-100">Cadastrar Aula</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="logout.php" class="btn btn-danger w-100">Sair</a>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-5">
    <div class="container">
        <h4 class="mb-4">Alunos e Aulas Matriculadas</h4>

        <?php if (count($alunos) > 0): ?>
            <div class="text-start mx-auto" style="max-width: 800px;">
                <?php foreach ($alunos as $aluno): ?>
                    <div class="mb-4 p-3 border rounded bg-dark text-white">
                        <h5><?php echo $aluno['nome']; ?></h5>
                        <p class="mb-1"><strong>Email:</strong> <?php echo $aluno['email']; ?></p>
                        <?php if (count($aluno['aulas']) > 0): ?>
                            <p><strong>Aulas:</strong></p>
                            <ul>
                                <?php foreach ($aluno['aulas'] as $aula): ?>
                                    <li><?php echo $aula; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p class="text-muted">Nenhuma aula matriculada.</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-muted">Nenhum aluno cadastrado.</p>
        <?php endif; ?>
    </div>
    <?php require_once("../../footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>