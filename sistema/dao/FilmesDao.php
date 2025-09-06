<?php
require_once("../model/conexao.php");
class FilmesDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO filmes (id_filme, titulo, genero, duracao, classificacao, sinopse) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_filme=$obj->getId_filme();
$titulo=$obj->getTitulo();
$genero=$obj->getGenero();
$duracao=$obj->getDuracao();
$classificacao=$obj->getClassificacao();
$sinopse=$obj->getSinopse();

    $stmt->execute([$id_filme,$titulo,$genero,$duracao,$classificacao,$sinopse]);
}
function listaGeral(){
    $sql = "SELECT * FROM filmes";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>