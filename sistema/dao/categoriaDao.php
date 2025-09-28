<?php
require_once("../model/conexao.php");
class CategoriaDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO categoria (descricao) VALUES (?)";
    $stmt = $this->con->prepare($sql);
    $descricao=$obj->getDescricao();

    $stmt->execute([$descricao]);
    header("Location:../view/listaCategoria.php");
}
function listaGeral(){
    $sql = "select * from categoria";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from categoria where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaCategoria.php");
}
function buscaPorId($id){
    $sql = "select * from categoria where id=$id";
    $query = $this->con->query($sql);
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    return $dados;
}
function alterar($obj, $idValue){
    $sql = "UPDATE categoria SET descricao=? WHERE id=?";
    $stmt = $this->con->prepare($sql);
    $descricao=$obj->getDescricao();

    $stmt->execute([$descricao, $idValue]);
    header("Location:../view/listaCategoria.php");
}
}
?>