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
                                    src="https://www.youtube.com/embed/HRQEo4DVxFM" 
                                    title="Aula 1: Introdução ao PHP — Fundamentos da linguagem e primeiros passos no desenvolvimento web" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 1: Introdução ao PHP</h5>
                            <p class="card-text">Entenda os fundamentos da linguagem PHP e como ela é usada no desenvolvimento web.</p>
                            <a href="https://www.youtube.com/embed/HRQEo4DVxFM" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>

                <!-- Aula 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/E0WFIopLdMY" 
                                    title="Aula 2 - Variáveis e Tipos em PHP: Domine a base da linguagem!" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 2: Variáveis e Tipos</h5>
                            <p class="card-text">Aprenda como declarar variáveis, entender tipos de dados e boas práticas iniciais.</p>
                            <a href="https://www.youtube.com/embed/E0WFIopLdMY" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>

                <!-- Aula 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/k3kaUNYmY2c" 
                                    title="Aula 3 - Condicionais e Loops em PHP: Crie lógica nos seus scripts!" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula 3: Condicionais e Loops</h5>
                            <p class="card-text">Explore estruturas de decisão e repetição para criar lógica nos seus scripts.</p>
                            <a href="https://www.youtube.com/embed/k3kaUNYmY2c" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>                    
                </div>.
                <!-- Dicas -->
                <p class="lead">Confira os vídeos sobre dicas de programação.</p>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/HN47gswQ5r0" 
                                    title="Entrevista Técnica Full Stack: A Verdade Que Ninguém Conta!" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dicas: Aprenda como se preparar para uma entrevista técnica</h5>
                            <p class="card-text">Pare de ouvir pessoas que dizem que basta copiar código. Saiba como se portar na frente do gestor da vaga.</p>
                            <a href="https://www.youtube.com/embed/HN47gswQ5r0" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/16zyikwO8j8" 
                                    title="Por que focar em uma stack pode acelerar sua carreira dev?" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dicas: Foque em apenas uma linguagem no início da sua carreira!</h5>
                            <p class="card-text">Não se deixem levar pelas várias oportunidades que o mercado oferece e não fique pulando de galho em galho, foque em uma!!.</p>
                            <a href="https://www.youtube.com/embed/16zyikwO8j8" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>
                <!-- Aula Antigas -->
                 <p class="lead">Confira os vídeos mais antigos sobre dicas de programação.</p>
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
                            <h5 class="card-title">Facilitando Gestão Financeira: Nosso Sistema Calcula Pagamentos por Você!</h5>
                            <p class="card-text">Calculando prazo de entrega e pagamento de compras automaticamente para sistema PDV.</p>
                            <a href="https://www.youtube.com/embed/b0-Y3YNxFw8" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/I4JDVAoD4g0" 
                                    title="LastInsertId SEM execute?! Como isso e possível? Tutorial Banco de Dados" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">LastInsertId SEM execute?! Como isso e possível? Tutorial Banco de Dados.</h5>
                            <p class="card-text">Você já parou para pensar se o lastInsertId() pode funcionar antes do execute() em PDO? 🤔 Pois é, muita 
                                gente acredita que sempre precisa chamar o execute() antes de recuperar o ID da última inserção... mas será que isso é verdade?</p>
                            <a href="https://www.youtube.com/embed/I4JDVAoD4g0" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe width="670" 
                                    height="377" 
                                    src="https://www.youtube.com/embed/NegQGc0Y0QY" 
                                    title="Pare de repetir código! foreach é seu amigo no PHP, não use mais de um For no mesmo arquivo." 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pare de repetir código! foreach é seu amigo no PHP, não use mais de um For no mesmo arquivo.</h5>
                            <p class="card-text">Está na dúvida sobre quando usar foreach em vez de for no PHP? 🤔 Neste vídeo, eu explico a diferença entre esses dois loops e 
                                mostro quando e por que foreach pode ser a melhor escolha, especialmente quando já temos um for logo acima no código!</p>
                            <a href="https://www.youtube.com/embed/NegQGc0Y0QY" target="_blank" class="btn btn-primary">Assistir no YouTube</a>
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