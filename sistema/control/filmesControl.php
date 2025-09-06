<?php
require_once("../model/Filmes.php");
require_once("../dao/FilmesDao.php");
class FilmesControl {
    private $filmes;
    private $acao;
    private $dao;
    public function __construct(){
       $this->filmes=new Filmes();
      $this->dao=new FilmesDao();
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
        $this->filmes->setId_filme($_POST['id_filme']);
		$this->filmes->setTitulo($_POST['titulo']);
		$this->filmes->setGenero($_POST['genero']);
		$this->filmes->setDuracao($_POST['duracao']);
		$this->filmes->setClassificacao($_POST['classificacao']);
		$this->filmes->setSinopse($_POST['sinopse']);
		
        $this->dao->inserir($this->filmes);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Filmes $filmes){}
    function buscaTodos(){}

}
new FilmesControl();
?>