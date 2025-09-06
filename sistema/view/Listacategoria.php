<html>
    <head>
        <title>Lista de categoria</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1>Lista de categoria</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id</th><th> descricao</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/CategoriaDao.php");
        $dao=new CategoriaDao();
        $dados=$dao->listaGeral();
        foreach($dados as $dado){
            echo "<tr>";
            foreach($dado as $valor){
                echo "<td>$valor</td>";
            }
            echo "<td>excluir</td><td>alterar</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
    </body>
</html>