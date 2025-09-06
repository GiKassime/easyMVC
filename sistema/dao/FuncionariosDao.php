<?php
require_once("../model/conexao.php");
class FuncionariosDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO funcionarios (id_funcionario, nome, cargo, salario) VALUES (?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id_funcionario=$obj->getId_funcionario();
$nome=$obj->getNome();
$cargo=$obj->getCargo();
$salario=$obj->getSalario();

    $stmt->execute([$id_funcionario,$nome,$cargo,$salario]);
}
function listaGeral(){
    $sql = "SELECT * FROM funcionarios";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>