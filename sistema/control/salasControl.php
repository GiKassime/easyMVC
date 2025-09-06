<?php
require_once("../model/Salas.php");
require_once("../dao/SalasDao.php");
class SalasControl {
    private $salas;
    private $acao;
    private $dao;
    public function __construct(){
       $this->salas=new Salas();
      $this->dao=new SalasDao();
      $this->acao=$_GET["a"];
      $this->verificaAcao(); 
    }
    function verificaAcao(){
       switch($this->acao){
          case 1:
            $this->inserir();
          break;
       }
    }
    function inserir(){
        $this->salas->setId_sala($_POST['id_sala']);
		$this->salas->setNome($_POST['nome']);
		$this->salas->setCapacidade($_POST['capacidade']);
		
        $this->dao->inserir($this->salas);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Salas $salas){}
    function buscaTodos(){}

}
new SalasControl();
?>