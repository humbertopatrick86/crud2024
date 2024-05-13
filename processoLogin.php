<?php
include_once "Banco.php";


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$bd = new Banco();
$param = [];
$param[] = new BD("xuxa", $usuario);
$param[] = new BD("senha", $senha);
$sql = "SELECT ra,nome FROM alunos WHERE ra=:xuxa and senha=:senha";

$rows = $bd->query($sql, $param);

if(sizeof($rows)>0){
    // criar a autenticacao da pagina
    session_start();
    $ra = $rows[0]['ra'];
    $nome = $rows[0]['nome'];
    $_SESSION["RA"]=$ra;
    $_SESSION["nome"]=$nome;

    //autenticou, a pagina é redirecionada para o ava.
    header("Location: AVA.php");
}else{
    //redirecionar a pagina para o login
    header("location: login.php?erro=1");
}