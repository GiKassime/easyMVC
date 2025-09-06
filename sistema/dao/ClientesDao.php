<?php
require_once("../model/conexao.php");
class ClientesDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO clientes (id_cliente, nome, email, telefone) VALUES (?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_cliente=$obj->getId_cliente();
$nome=$obj->getNome();
$email=$obj->getEmail();
$telefone=$obj->getTelefone();

    $stmt->execute([$id_cliente,$nome,$email,$telefone]);
}
function listaGeral(){
    $sql = "SELECT * FROM clientes";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>