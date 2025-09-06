<?php
require_once("../model/conexao.php");
class IngressosDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO ingressos (id_ingresso, id_sessao, id_cliente, quantidade, data_compra) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_ingresso=$obj->getId_ingresso();
$id_sessao=$obj->getId_sessao();
$id_cliente=$obj->getId_cliente();
$quantidade=$obj->getQuantidade();
$data_compra=$obj->getData_compra();

    $stmt->execute([$id_ingresso,$id_sessao,$id_cliente,$quantidade,$data_compra]);
}
function listaGeral(){
    $sql = "SELECT * FROM ingressos";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>