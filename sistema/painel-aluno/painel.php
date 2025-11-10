<?php
@session_start();
require_once("../../conexao.php");

if (!isset($_SESSION['id_aluno'])) {
    echo "<script>alert('Você precisa estar logado para acessar o painel!'); window.location='index.php';</script>";
    exit();
}

$id_usuario = $_SESSION['id'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$nivel = $_SESSION['nivel'];

// Buscar ID do aluno vinculado ao usuário
$queryAluno = $pdo->query("SELECT id FROM alunos WHERE id_usuario = '$id_usuario'");
$id_aluno = $queryAluno->fetchColumn();

// Buscar aulas matriculadas
$queryMat = $pdo->query("SELECT a.titulo FROM aulas a
    INNER JOIN matriculas m ON a.id = m.id_aula
    WHERE m.id_aluno = '$id_aluno'");
$matriculas = $queryMat->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_sistema = $res[0]['id'];
$nome_sistema = $res[0]['nome_sistema'];
$email_sistema = $res[0]['email_sistema'];
$telefone_sistema = $res[0]['telefone_sistema'];
$telefone_fixo = $res[0]['telefone_fixo'];
$cnpj_sistema = $res[0]['cnpj_sistema'];
$cep_sistema = $res[0]['cep_sistema'];
$rua_sistema = $res[0]['rua_sistema'];
$numero_sistema = $res[0]['numero_sistema'];
$bairro_sistema = $res[0]['bairro_sistema'];
$cidade_sistema = $res[0]['cidade_sistema'];
$estado_sistema = $res[0]['estado_sistema'];
$instagram = $res[0]['instagram_sistema'];
$linkedin = $res[0]['linkedin_sistema'];
$youtube = $res[0]['youtube_sistema'];
$tipo_rel = $res[0]['tipo_relatorio'];
$dev = $res[0]['desenvolvedor'];
$site_dev = $res[0]['site_dev'];
$logo_sistema = $res[0]['logotipo'];
$logo_par = $res[0]['logo_parceiro'];
$icone_sistema = $res[0]['icone'];
$logo_rel = $res[0]['logo_rel'];
$url_sistema = $res[0]['url_sistema'];
// Monta endereço completo
$endereco_sistema = $rua_sistema . ', ' . $numero_sistema . ' - ' . $bairro_sistema . ' - ' . $cidade_sistema . '/' . $estado_sistema;
// Tira caracteres para whatsapp link
$telefone_url = '55' . preg_replace('/[()-]+/', '', $telefone_sistema);

// Buscar matrículas do aluno
$queryMat = $pdo->query("SELECT a.titulo FROM aulas a
    INNER JOIN matriculas m ON a.id = m.id_aula
    WHERE m.id_aluno = '$id_aluno'");
$matriculas = $queryMat->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("head-aluno.php") ?>

<body>

    <?php require_once("header-painel.php"); ?>

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">Olá, <?php echo $nome ?> 👋</h2>
            <p class="lead">Seja bem-vindo ao seu painel de aluno. Aqui você pode acessar suas aulas e acompanhar seu progresso.</p>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4 mb-3">
                    <a href="aulas-aluno.php" class="btn btn-primary w-100">Minhas Aulas</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="editar-perfil.php" class="btn btn-outline-secondary w-100">Editar Perfil</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="logout.php" class="btn btn-danger w-100">Sair</a>
                </div>
                
            </div>
            
            <hr class="my-5">

            <h4 class="mb-3">Treinamentos e Cursos Matriculados</h4>
            <?php if (count($matriculas) > 0): ?>
                <ul class="list-group">
                    <?php foreach ($matriculas as $mat): ?>
                        <li class="list-group-item"><?php echo $mat['titulo']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="texto-1">Você ainda não está matriculado em nenhum curso.</p>
            <?php endif; ?>

        </div>
    </section>

    <?php require_once("../../footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>