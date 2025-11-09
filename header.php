<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <h5 class="m-0"><img src="src/img/<?php echo $logo_sistema ?>" width="60px" alt="Logo Vetor256." />
                <?php echo $nome_sistema ?>
            </h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="aulas.php">Aulas</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalConfig">Configurações</a>
            </ul>
        </div>
    </div>
</nav>

<?php require_once("modal-boas-vindas.php"); ?>

<header class="section text-center">
    <div class="container">
        <h1>Bem-vindo ao Portal <?php echo $dev ?></h1>
        <p class="lead">Aprenda tecnologia com propósito — em parceria com a Rocketseat
            <img src="src/img/<?php echo $logo_par ?>" width="20px" alt="Logo Rocketseat">
        </p>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBoasVindas">Comece agora</a>
    </div>
</header>