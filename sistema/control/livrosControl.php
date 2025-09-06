<?php
require_once("../model/Livros.php");
require_once("../dao/LivrosDao.php");
class LivrosControl {
    private $livros;
    private $acao;
    private $dao;
    public function __construct(){
       $this->livros=new Livros();
      $this->dao=new LivrosDao();
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
        $this->livros->setId($_POST['id']);
		$this->livros->setTitulo($_POST['titulo']);
		$this->livros->setGenero($_POST['genero']);
		$this->livros->setQtd_paginas($_POST['qtd_paginas']);
		$this->livros->setAutor($_POST['autor']);
		$this->livros->setLink_img($_POST['link_img']);
		
        $this->dao->inserir($this->livros);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Livros $livros){}
    function buscaTodos(){}

}
new LivrosControl();
?>