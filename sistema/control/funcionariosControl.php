<?php
require_once("../model/Funcionarios.php");
require_once("../dao/FuncionariosDao.php");
class FuncionariosControl {
    private $funcionarios;
    private $acao;
    private $dao;
    public function __construct(){
       $this->funcionarios=new Funcionarios();
      $this->dao=new FuncionariosDao();
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
        $this->funcionarios->setId_funcionario($_POST['id_funcionario']);
		$this->funcionarios->setNome($_POST['nome']);
		$this->funcionarios->setCargo($_POST['cargo']);
		$this->funcionarios->setSalario($_POST['salario']);
		
        $this->dao->inserir($this->funcionarios);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Funcionarios $funcionarios){}
    function buscaTodos(){}

}
new FuncionariosControl();
?>