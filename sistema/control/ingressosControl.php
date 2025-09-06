<?php
require_once("../model/Ingressos.php");
require_once("../dao/IngressosDao.php");
class IngressosControl {
    private $ingressos;
    private $acao;
    private $dao;
    public function __construct(){
       $this->ingressos=new Ingressos();
      $this->dao=new IngressosDao();
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
        $this->ingressos->setId_ingresso($_POST['id_ingresso']);
		$this->ingressos->setId_sessao($_POST['id_sessao']);
		$this->ingressos->setId_cliente($_POST['id_cliente']);
		$this->ingressos->setQuantidade($_POST['quantidade']);
		$this->ingressos->setData_compra($_POST['data_compra']);
		
        $this->dao->inserir($this->ingressos);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Ingressos $ingressos){}
    function buscaTodos(){}

}
new IngressosControl();
?>