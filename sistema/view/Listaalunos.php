<html>
    <head>
        <title>Lista de alunos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1>Lista de alunos</h1>
        <?php
        require_once("../dao/AlunosDao.php");
        $dao=new AlunosDao();
        $dados=$dao->listaGeral();
        foreach($dados as $dado){
            echo $dado['id'];echo $dado['nome'];echo $dado['idade'];echo $dado['estrangeiro'];echo $dado['id_curso'];
        }
        ?>
    </body>
</html>