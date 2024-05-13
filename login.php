<?php
session_start();
session_destroy();
?>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
    <div class="container">
        <div class="d-flex">
            <div class="justify-content-center">
                <h1>Sistema de escolas - Login</h1>
                <form method="POST" action="processoLogin.php">
                    <label>Registro Acadêmico - (RA)</label>
                    <br />
                    <input type="text" name="usuario" />
                    <br />
                    <label>Senha</label>
                    <br />
                    <input type="password" name="senha" />
                    <br />
                    <input type="submit" value="Entrar" />
                </form>
                <?php
                if (isset($_GET["erro"]) && $_GET['erro'] == 1) {
                ?>
                    <div class="alert alert-danger">
                        RA ou senha inválido!
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>