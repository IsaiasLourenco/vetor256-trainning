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
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="painel.php">
                    <h5 class="m-0">
                        <img src="src/img/<?php echo $logo_sistema ?>" width="60px" alt="Logo Vetor256." />
                        <?php echo $nome_sistema ?>
                    </h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="aulas-aluno.php">Minhas Aulas</a></li>
                        <li class="nav-item"><a class="nav-link" href="editar-perfil.php">Editar Perfil</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>