<?php
@session_start();
require_once("../../conexao.php");

if (!isset($_SESSION['id_aluno'])) {
    echo "<script>alert('Você precisa estar logado para acessar as aulas!'); window.location='index.php';</script>";
    exit();
}

$id_aluno = $_SESSION['id_aluno'];

// Buscar nome do aluno
$queryAluno = $pdo->query("SELECT nome FROM alunos WHERE id = '$id_aluno'");
$nome_aluno = $queryAluno->fetchColumn();

// Buscar aulas em que o aluno está matriculado
$query = $pdo->query("SELECT a.* FROM aulas a
    INNER JOIN matriculas m ON a.id = m.id_aula
    WHERE m.id_aluno = '$id_aluno'
    ORDER BY a.id DESC");
$aulas = $query->fetchAll(PDO::FETCH_ASSOC);

// Buscar configurações do sistema
$queryCon = $pdo->query("SELECT * FROM config");
$res = $queryCon->fetchAll(PDO::FETCH_ASSOC);
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
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("head-aluno.php") ?>

<body>

    <?php require_once("header-painel.php"); ?>

    <section class="section">
        <div class="container">
            <h2 class="text-center mb-4">Minhas Aulas</h2>
            <p class="text-center text-muted">Olá, <?php echo $nome_aluno; ?>! Aqui estão suas aulas:</p>

            <div class="row">
                <?php foreach ($aulas as $aula): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $aula['titulo']; ?></h5>
                                <p class="card-text"><?php echo $aula['descricao']; ?></p>
                                <a href="<?php echo $aula['link']; ?>" target="_blank" class="btn btn-primary w-100">Assistir Aula</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (count($aulas) == 0): ?>
                <p class="text-center text-muted">Nenhuma aula disponível no momento.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php require_once("../../footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>