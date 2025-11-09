<?php
require_once("conexao.php");
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
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("head.php")?>

<body>

    <?php require_once("header.php"); ?>

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">Sobre o Projeto</h2>
            <p class="lead">Conheça a história por trás do Vetor256 Training e a jornada de transformação digital que estamos construindo juntos.</p>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-start">
                        O <strong>Vetor256 Training</strong> nasceu do desejo de transformar vidas por meio da educação em tecnologia. Criado por <?php echo $dev ?>, o projeto foi impulsionado pela participação na <strong>Rocketseat Influencers Academy</strong>, um programa de aceleração para criadores de conteúdo tech.
                    </p>
                    <p class="text-start">
                        Nossa missão é democratizar o acesso ao conhecimento técnico, oferecendo cursos práticos, acessíveis e com propósito. Acreditamos que a tecnologia é uma ferramenta poderosa de inclusão, inovação e evolução pessoal.
                    </p>
                    <p class="text-start">
                        A parceria com a <strong>Rocketseat</strong> fortalece nossa base educacional e nos conecta a uma comunidade vibrante de desenvolvedores e criadores. Juntos, queremos inspirar a próxima geração de apaixonados por programação, IA, UX e dados.
                    </p>
                    <p class="text-start">
                        Este portal é apenas o começo. Em breve, você terá acesso a trilhas completas, certificações, fóruns de discussão e muito mais.
                    </p>
                    <p class="text-start">
                        Desenvolvido por <a href="<?php echo $site_dev ?>" target="_blank"><?php echo $dev ?></a> com apoio da Rocketseat <img src="src/img/<?php echo $logo_par ?>" width="20px" alt="Logo Rocketseat">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php require_once("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php require_once("modal-config.php"); ?>

<!-- BUSCA CEP -->
<script type="text/javascript" src="src/js/buscaCep.js"></script>
<!-- MÁSCARA -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Plugin de máscara -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- Seu script -->
<script src="src/js/mascaras.js"></script>

<!-- Chama Modal Configurações -->
<script src="src/js/modalConfig.js"></script>

<!-- Chama Modal Configurações e Sobe Fotos -->
<script src="src/js/carregarImagens.js"></script>