<?php
include_once "../autenticar.php";
include_once "../sql.php";
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
    <div class="container">
        <h1>Lista de Professores</h1>
        <?php
        $listaProf = listarProfessores();

        ?>
        <?php
        if (isset($_GET["acao"])) {
            if ($_GET["acao"] == 1) {
        ?>
                <div class="alert alert-success">
                    Inserido com Sucesso!
                </div>

            <?php
            } else  if ($_GET["acao"] == 2) {
            ?>
                <div class="alert alert-success">
                    Alterado com Sucesso!
                </div>

        <?php
            }else  if ($_GET["acao"] == 3) {
                ?>
                    <div class="alert alert-success">
                       Excluído com Sucesso!
                    </div>
    
            <?php
                }
        }
        ?>
        <div>
            <a class="btn btn-primary" href="inserir.php">Cadastrar</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2" style="text-align: center;">Ações</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($listaProf as $lista) {
                ?>
                    <tr>
                        <td><?php echo $lista["idprofessor"] ?></td>
                        <td><?= $lista["nome"] ?></td>

                        <td><a class="btn btn-primary" href="inserir.php?acao=2&id=<?= $lista['idprofessor'] ?>">Alterar</a></td>
                        <td>
                            <form method="POST" action="processar.php">
                                <input type="hidden" name="acao" value="3" />
                                <input type="hidden" name="id" value="<?= $lista['idprofessor'] ?>" />
                                <input class="btn btn-primary" type="submit" value="Excluir" />
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>