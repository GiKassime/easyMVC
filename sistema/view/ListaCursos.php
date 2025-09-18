
<html>
    <head>
        <title>Lista de Cursos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        require_once("../dao/CursosDao.php");
        $dao=new cursosDAO();
        $dados=$dao->listaGeral();
        echo "<table border=1>";
        foreach($dados as $dado){
            echo "<tr>";
        echo " <td>{$dado['id']}</td>";
echo " <td>{$dado['nome']}</td>";
echo " <td>{$dado['turno']}</td>";

        echo "<td><a href='../control/cursosControl.php?a=2&id={$dado['id']}'>Excluir</a></td>";
        echo "<td>Alterar</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>  
    </body>
</html>