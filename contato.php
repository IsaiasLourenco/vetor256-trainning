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
            <h2 class="mb-4">Fale com a gente</h2>
            <p class="lead">Tem dúvidas, sugestões ou quer colaborar com o projeto? Envie uma mensagem ou conecte-se pelas redes sociais.</p>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="post" action="enviar-contato.php">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>

                    <hr class="my-4">

                    <h5>Redes sociais</h5>
                    <p>
                        <a href="<?php echo $instagram ?>" target="_blank" class="btn btn-outline-primary me-2">
                            <i class="bi bi-instagram"></i>
                            Instagram
                        </a>
                        <a href="<?php echo $linkedin ?>" target="_blank" class="btn btn-outline-primary me-2">
                            <i class="bi bi-linkedin"></i>
                            LinkedIn
                        </a>
                        <a href="<?php echo $youtube ?>" target="_blank" class="btn btn-outline-primary">
                            <i class="bi bi-youtube"></i>
                            YouTube
                        </a>
                    </p>

                    <h5 class="mt-4">WhatsApp</h5>
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $telefone_url; ?>
                                 &text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20seus%20cursos%20e%20treinamentos."
                           target="_blank" 
                           class="btn btn-success">
                            <i class="bi bi-whatsapp"></i>
                            Enviar mensagem
                        </a>
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