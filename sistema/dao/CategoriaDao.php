<?php
require_once("../model/conexao.php");
class CategoriaDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO categoria (id, descricao) VALUES (?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$descricao=$obj->getDescricao();

    $stmt->execute([$id,$descricao]);
}
function listaGeral(){
    $sql = "SELECT * FROM categoria";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>