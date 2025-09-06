<?php
require_once("../model/conexao.php");
class SalasDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO salas (id_sala, nome, capacidade) VALUES (?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_sala=$obj->getId_sala();
$nome=$obj->getNome();
$capacidade=$obj->getCapacidade();

    $stmt->execute([$id_sala,$nome,$capacidade]);
}
function listaGeral(){
    $sql = "SELECT * FROM salas";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>