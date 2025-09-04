<html>
    <head>
        <title>Lista de cursos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1>Lista de cursos</h1>
        <?php
        require_once("../dao/CursosDao.php");
        $dao=new CursosDao();
        $dados=$dao->listaGeral();
        foreach($dados as $dado){
            echo $dado['id'];echo $dado['nome'];echo $dado['turno'];
        }
        ?>
    </body>
</html>