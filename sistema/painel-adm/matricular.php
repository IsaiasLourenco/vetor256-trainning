<?php
require_once("../../conexao.php");

// Lista de alunos
$queryAlunos = $pdo->query("SELECT * FROM alunos ORDER BY nome");
$alunos = $queryAlunos->fetchAll(PDO::FETCH_ASSOC);

// Lista de aulas
$queryAulas = $pdo->query("SELECT * FROM aulas ORDER BY titulo");
$aulas = $queryAulas->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("head-adm.php"); ?>

<body>
    <?php require_once("header-adm.php"); ?>

    <section class="section">
        <div class="container">
            <h2 class="mb-4">Matrícula de Aluno em Aula</h2>
            <form method="POST" action="matricular-salvar.php">
                <div class="mb-3">
                    <label for="id_aluno" class="form-label">Selecione o Aluno:</label>
                    <select name="id_aluno" id="id_aluno" class="form-select" required>
                        <option value="">-- Escolha --</option>
                        <?php foreach ($alunos as $aluno): ?>
                            <option value="<?php echo $aluno['id']; ?>"><?php echo $aluno['nome']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_aula" class="form-label">Selecione a Aula:</label>
                    <select name="id_aula" id="id_aula" class="form-select" required>
                        <option value="">-- Escolha --</option>
                        <?php foreach ($aulas as $aula): ?>
                            <option value="<?php echo $aula['id']; ?>"><?php echo $aula['titulo']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Matricular</button>
            </form>
        </div>
    </section>

    <?php require_once("../../footer.php"); ?>
</body>

</html>