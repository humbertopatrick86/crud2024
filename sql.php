<?php
include_once "Banco.php";

function listarProfessores()
{
    $bd = new Banco();

    $sql = "SELECT idprofessor,nome FROM professores";
    $rows = $bd->query($sql, []);

    return $rows;
}

function buscarProfessorId($id){
    $bd = new Banco();

    $sql = "SELECT idprofessor,nome FROM professores where idprofessor=:professor";
    $param = [];
    $param[] = new BD("professor", $id);
    $row = $bd->query($sql, $param);

    return $row;
}
