<?php require_once("../../conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("head-adm.php"); ?>

<body>
    <?php require_once("header-adm.php"); ?>

    <section class="section">
        <div class="container">
            <h2 class="mb-4">Cadastrar Nova Aula</h2>
            <form method="POST" action="cadastrar-aula-salvar.php">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da Aula:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link da Aula (YouTube, Vimeo, etc):</label>
                    <input type="url" name="link" id="link" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar Aula</button>
            </form>
        </div>
    </section>

    <?php require_once("../../footer.php"); ?>
</body>

</html>