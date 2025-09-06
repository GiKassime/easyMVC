<?php
require_once("../model/conexao.php");
class SessoesDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO sessoes (id_sessao, id_filme, id_sala, data, horario, preco) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_sessao=$obj->getId_sessao();
$id_filme=$obj->getId_filme();
$id_sala=$obj->getId_sala();
$data=$obj->getData();
$horario=$obj->getHorario();
$preco=$obj->getPreco();

    $stmt->execute([$id_sessao,$id_filme,$id_sala,$data,$horario,$preco]);
}
function listaGeral(){
    $sql = "SELECT * FROM sessoes";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>