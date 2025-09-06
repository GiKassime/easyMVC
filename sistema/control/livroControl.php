<?php
require_once("../model/Livro.php");
require_once("../dao/LivroDao.php");
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
       }
    }
    function inserir(){
        $this->livro->setId($_POST['id']);
		$this->livro->setTitulo($_POST['titulo']);
		$this->livro->setAno_publicacao($_POST['ano_publicacao']);
		$this->livro->setId_autor($_POST['id_autor']);
		$this->livro->setId_categoria($_POST['id_categoria']);
		$this->livro->setPreco($_POST['preco']);
		
        $this->dao->inserir($this->livro);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Livro $livro){}
    function buscaTodos(){}

}
new LivroControl();
?>