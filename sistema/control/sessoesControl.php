<?php
require_once("../model/Sessoes.php");
require_once("../dao/SessoesDao.php");
class SessoesControl {
    private $sessoes;
    private $acao;
    private $dao;
    public function __construct(){
       $this->sessoes=new Sessoes();
      $this->dao=new SessoesDao();
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
        $this->sessoes->setId_sessao($_POST['id_sessao']);
		$this->sessoes->setId_filme($_POST['id_filme']);
		$this->sessoes->setId_sala($_POST['id_sala']);
		$this->sessoes->setData($_POST['data']);
		$this->sessoes->setHorario($_POST['horario']);
		$this->sessoes->setPreco($_POST['preco']);
		
        $this->dao->inserir($this->sessoes);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Sessoes $sessoes){}
    function buscaTodos(){}

}
new SessoesControl();
?>