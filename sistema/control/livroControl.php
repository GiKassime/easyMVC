<?php
require_once("../model/livro.php");
require_once("../dao/livroDao.php");
class LivroControl {
    private $livro;
    private $acao;
    private $dao;
    public function __construct(){
       $this->livro=new Livro();
      $this->dao=new LivroDao();
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
        $this->livro->setTitulo($_POST['titulo']);
		$this->livro->setAno_publicacao($_POST['ano_publicacao']);
		$this->livro->setId_autor($_POST['id_autor']);
		$this->livro->setId_categoria($_POST['id_categoria']);
		$this->livro->setPreco($_POST['preco']);
		
        $this->dao->inserir($this->livro);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->livro->setTitulo($_POST['titulo']);
		$this->livro->setAno_publicacao($_POST['ano_publicacao']);
		$this->livro->setId_autor($_POST['id_autor']);
		$this->livro->setId_categoria($_POST['id_categoria']);
		$this->livro->setPreco($_POST['preco']);
		
        $this->dao->alterar($this->livro, $_REQUEST['id']);
    }
    function buscarId(Livro $livro){}

}
new LivroControl();
?>