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
            <h2 class="mb-4">Aulas Disponíveis</h2>
            <p class="lead">Confira os vídeos introdutórios e mergulhe no universo da programação com PHP.</p>

            <div class="row">
                <!-- Aula 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/1ZvfvosBPjA" 
                                    title="&quot;lastInsertId SEM execute?! Como isso e possível? Tutorial Banco de Dados&quot;" 
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 1: Introdução ao PHP</h5>
                            <p class="card-text">Entenda os fundamentos da linguagem PHP e como ela é usada no desenvolvimento web.</p>
                            <a href="https://www.youtube.com/embed/1ZvfvosBPjA" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>

                <!-- Aula 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/b0-Y3YNxFw8" 
                                    title="🚀Facilitando Gestão Financeira: Nosso Sistema Calcula Pagamentos por Você!" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 2: Variáveis e Tipos</h5>
                            <p class="card-text">Aprenda como declarar variáveis, entender tipos de dados e boas práticas iniciais.</p>
                            <a href="https://www.youtube.com/embed/b0-Y3YNxFw8" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>

                <!-- Aula 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/X1Fk69jcRcE" 
                                    title="Como tá ficando Sistema Gerenciamento de Restaurantes" 
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 3: Condicionais e Loops</h5>
                            <p class="card-text">Explore estruturas de decisão e repetição para criar lógica nos seus scripts.</p>
                            <a href="https://www.youtube.com/embed/X1Fk69jcRcE" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
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