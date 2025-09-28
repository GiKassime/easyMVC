<?php
require_once("../model/conexao.php");
class AutorDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO autor (nome, nacionalidade) VALUES (?, ?)";
    $stmt = $this->con->prepare($sql);
    $nome=$obj->getNome();
$nacionalidade=$obj->getNacionalidade();

    $stmt->execute([$nome,$nacionalidade]);
    header("Location:../view/listaAutor.php");
}
function listaGeral(){
    $sql = "select * from autor";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from autor where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaAutor.php");
}
function buscaPorId($id){
    $sql = "select * from autor where id=$id";
    $query = $this->con->query($sql);
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    return $dados;
}
function alterar($obj, $idValue){
    $sql = "UPDATE autor SET nome=?, nacionalidade=? WHERE id=?";
    $stmt = $this->con->prepare($sql);
    $nome=$obj->getNome();
$nacionalidade=$obj->getNacionalidade();

    $stmt->execute([$nome,$nacionalidade, $idValue]);
    header("Location:../view/listaAutor.php");
}
}
?>