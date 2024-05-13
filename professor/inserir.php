<?php
include_once "../autenticar.php";
include_once "../sql.php";

$acao="1";
$nome="";
if(isset($_GET["acao"])){
    $acao=$_GET["acao"];
}

if($acao==2){
    $id = $_GET["id"];
    $row=buscarProfessorId($id);
    $nome = (sizeof($row)>0)? $row[0]["nome"]  : ""; 
}


?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
    <div class="container">
        <h1>Inserir Professores</h1>
        <form method="post" action="processar.php">
            <div class="mb-3">
                <label class="form-label">Nome do Professor</label>
                <input class="form-control" type="text" name="nome" value="<?= $nome  ?>" />
            </div>
            <?php
                if($acao == 2){
                    ?>
                    <input type="hidden" name="id" value="<?= $id?>"/>
                    <?php
                }
            ?>
            <input type="hidden" name="acao" value="<?= $acao?>"/>
            <button class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

</html>