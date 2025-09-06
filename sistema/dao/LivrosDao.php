<?php
require_once("../model/conexao.php");
class LivrosDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO livros (id, titulo, genero, qtd_paginas, autor, link_img) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$titulo=$obj->getTitulo();
$genero=$obj->getGenero();
$qtd_paginas=$obj->getQtd_paginas();
$autor=$obj->getAutor();
$link_img=$obj->getLink_img();

    $stmt->execute([$id,$titulo,$genero,$qtd_paginas,$autor,$link_img]);
}
function listaGeral(){
    $sql = "SELECT * FROM livros";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>