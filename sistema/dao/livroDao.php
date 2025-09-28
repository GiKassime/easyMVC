<?php
require_once("../model/conexao.php");
class LivroDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO livro (titulo, ano_publicacao, id_autor, id_categoria, preco) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $titulo=$obj->getTitulo();
$ano_publicacao=$obj->getAno_publicacao();
$id_autor=$obj->getId_autor();
$id_categoria=$obj->getId_categoria();
$preco=$obj->getPreco();

    $stmt->execute([$titulo,$ano_publicacao,$id_autor,$id_categoria,$preco]);
    header("Location:../view/listaLivro.php");
}
function listaGeral(){
    $sql = "select * from livro";
    $query = $this->con->query($sql);
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
function excluir($id){
    $sql = "delete from livro where id=$id";
    $query = $this->con->query($sql);
    header("Location:../view/listaLivro.php");
}
function buscaPorId($id){
    $sql = "select * from livro where id=$id";
    $query = $this->con->query($sql);
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    return $dados;
}
function alterar($obj, $idValue){
    $sql = "UPDATE livro SET titulo=?, ano_publicacao=?, id_autor=?, id_categoria=?, preco=? WHERE id=?";
    $stmt = $this->con->prepare($sql);
    $titulo=$obj->getTitulo();
$ano_publicacao=$obj->getAno_publicacao();
$id_autor=$obj->getId_autor();
$id_categoria=$obj->getId_categoria();
$preco=$obj->getPreco();

    $stmt->execute([$titulo,$ano_publicacao,$id_autor,$id_categoria,$preco, $idValue]);
    header("Location:../view/listaLivro.php");
}
}
?>