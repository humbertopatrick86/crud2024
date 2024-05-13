<?php
include_once "BD.php";
class Banco{
    private $host="mysql:host=localhost;dbname=escola";
    private $usuario="root";
    private $senha="";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO($this->host,$this->usuario,$this->senha);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql,$parametros){
       $sth= $this->pdo->prepare($sql);
       foreach($parametros as $v){
        $sth->bindParam($v->nome,$v->valor);
       }
       $sth->execute();
       return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>