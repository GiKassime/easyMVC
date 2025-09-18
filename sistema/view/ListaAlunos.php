
<html>
    <head>
        <title>Lista de Alunos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <?php
        require_once("../dao/AlunosDao.php");
        $dao=new alunosDAO();
        $dados=$dao->listaGeral();
        echo "<table border=1>";
        foreach($dados as $dado){
            echo "<tr>";
        echo " <td>{$dado['id']}</td>";
echo " <td>{$dado['nome']}</td>";
echo " <td>{$dado['idade']}</td>";
echo " <td>{$dado['estrangeiro']}</td>";
echo " <td>{$dado['id_curso']}</td>";

        echo "<td><a href='../control/alunosControl.php?a=2&id={$dado['id']}'>Excluir</a></td>";
        echo "<td>Alterar</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>  
    </body>
</html>