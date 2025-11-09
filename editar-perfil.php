<?php
@session_start();
if (!isset($_SESSION['id_aluno'])) {
    echo "<script>alert('Você precisa estar logado para editar o perfil!'); window.location='index.php';</script>";
    exit();
}

require_once("conexao.php");

$id = $_SESSION['id_aluno'];
$query = $pdo->prepare("SELECT * FROM alunos WHERE id = :id");
$query->bindValue(":id", $id);
$query->execute();
$aluno = $query->fetch(PDO::FETCH_ASSOC);

$nome = $aluno['nome'];
$email = $aluno['email'];

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

<?php require_once("head.php")?>

<body>

    <?php require_once("header-painel.php"); ?>

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">Editar Perfil</h2>

            <form method="post" action="atualizar-perfil.php" class="text-start mx-auto" style="max-width: 500px;">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Nova senha (opcional)</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <div class="mb-3">
                    <label for="confirma" class="form-label">Confirmar nova senha</label>
                    <input type="password" class="form-control" id="confirma" name="confirma">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <a href="painel.php" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar alterações</button>
                </div>
            </form>
        </div>
    </section>

    <?php require_once("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>