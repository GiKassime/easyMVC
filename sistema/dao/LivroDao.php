<?php
require_once("../model/conexao.php");
class LivroDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO livro (id, titulo, ano_publicacao, id_autor, id_categoria, preco) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$titulo=$obj->getTitulo();
$ano_publicacao=$obj->getAno_publicacao();
$id_autor=$obj->getId_autor();
$id_categoria=$obj->getId_categoria();
$preco=$obj->getPreco();

    $stmt->execute([$id,$titulo,$ano_publicacao,$id_autor,$id_categoria,$preco]);
}
function listaGeral(){
    $sql = "SELECT * FROM livro";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>