<?php
require_once("../model/conexao.php");
class CursosDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO cursos (id, nome, turno) VALUES (?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$nome=$obj->getNome();
$turno=$obj->getTurno();

    $stmt->execute([$id,$nome,$turno]);
}
function listaGeral(){
    $sql = "SELECT * FROM cursos";
    $query = $this->con->query($sql);    
    $dados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

}
?>