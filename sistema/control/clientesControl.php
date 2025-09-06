<?php
require_once("../model/Clientes.php");
require_once("../dao/ClientesDao.php");
class ClientesControl {
    private $clientes;
    private $acao;
    private $dao;
    public function __construct(){
       $this->clientes=new Clientes();
      $this->dao=new ClientesDao();
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
        $this->clientes->setId_cliente($_POST['id_cliente']);
		$this->clientes->setNome($_POST['nome']);
		$this->clientes->setEmail($_POST['email']);
		$this->clientes->setTelefone($_POST['telefone']);
		
        $this->dao->inserir($this->clientes);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Clientes $clientes){}
    function buscaTodos(){}

}
new ClientesControl();
?>