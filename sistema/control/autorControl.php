<?php
require_once("../model/Autor.php");
require_once("../dao/AutorDao.php");
class AutorControl {
    private $autor;
    private $acao;
    private $dao;
    public function __construct(){
       $this->autor=new Autor();
      $this->dao=new AutorDao();
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
        $this->autor->setId($_POST['id']);
		$this->autor->setNome($_POST['nome']);
		$this->autor->setNacionalidade($_POST['nacionalidade']);
		
        $this->dao->inserir($this->autor);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Autor $autor){}
    function buscaTodos(){}

}
new AutorControl();
?>