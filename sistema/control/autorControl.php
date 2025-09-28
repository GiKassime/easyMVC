<?php
require_once("../model/autor.php");
require_once("../dao/autorDao.php");
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
          case 2:
            $this->excluir();
          break;
        case 3:
            $this->alterar();
          break;
       }
    }
  
    function inserir(){
        $this->autor->setNome($_POST['nome']);
		$this->autor->setNacionalidade($_POST['nacionalidade']);
		
        $this->dao->inserir($this->autor);
    }
    function excluir(){
        $this->dao->excluir($_REQUEST['id']);
    }
    function alterar(){
        $this->autor->setNome($_POST['nome']);
		$this->autor->setNacionalidade($_POST['nacionalidade']);
		
        $this->dao->alterar($this->autor, $_REQUEST['id']);
    }
    function buscarId(Autor $autor){}

}
new AutorControl();
?>