<?php
require_once("../model/conexao.php");
class AutorDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO autor (id, nome, nacionalidade) VALUES (?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$nome=$obj->getNome();
$nacionalidade=$obj->getNacionalidade();

    $stmt->execute([$id,$nome,$nacionalidade]);
}
function listaGeral(){
    $sql = "SELECT * FROM autor";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>