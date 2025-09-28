<?php
require_once("../model/categoria.php");
require_once("../dao/categoriaDao.php");
class CategoriaControl {
    private $categoria;
    private $acao;
    private $dao;
    public function __construct(){
       $this->categoria=new Categoria();
      $this->dao=new CategoriaDao();
      $this->acao=$_GET["a"];
      $this->verificaAcao(); 
    }
    function verificaAcao(){
       switch($this->acao){
          case 1:
            $this->inserir();
          break;
          case 2:
            $this->excluir();
          break;
        case 3:
            $this->alterar();
          break;
       }
    }
  
    function inserir(){
        $this->categoria->setDescricao($_POST['descricao']);
		
        $this->dao->inserir($this->categoria);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->categoria->setDescricao($_POST['descricao']);
		
        $this->dao->alterar($this->categoria, $_REQUEST['id']);
    }
    function buscarId(Categoria $categoria){}

}
new CategoriaControl();
?>