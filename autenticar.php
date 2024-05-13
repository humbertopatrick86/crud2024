<?php
session_start();

if(!isset($_SESSION["RA"])){
    echo "Você não está autorizado ao entrar nesta página!";
    ?>
    <br/>
    <a href="login.php">Voltar para a página de login</a>
    <?
    die;
}

?>