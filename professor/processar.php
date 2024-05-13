<?php
include_once "../Banco.php";

$acao = $_POST["acao"];

switch ($acao) {
    case 1: // inserir

        $nome = $_POST["nome"];

        $bd = new Banco();
        $sql = "insert into professores (nome) values(:nome)";
        $param = [];
        $param[] = new BD("nome", $nome);

        $bd->query($sql,$param);
        header("Location: lista.php?acao=1");
        break;
        case 2: // alterar

            $nome = $_POST["nome"];
            $id = $_POST["id"];
    
            $bd = new Banco();
            $sql = "update professores  set nome=:nome where idprofessor = :id";
            $param = [];
            $param[] = new BD("nome", $nome);
            $param[] = new BD("id", $id);
    
            $bd->query($sql,$param);
            header("Location: lista.php?acao=2");
            break;
            case 3: // excluir

                $id = $_POST["id"];
        
                $bd = new Banco();
                $sql = "delete from professores   where idprofessor = :id";
                $param = [];
                $param[] = new BD("id", $id);
        
                $bd->query($sql,$param);
                header("Location: lista.php?acao=3");
                break;
}
