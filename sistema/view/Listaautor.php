<html>
    <head>
        <title>Lista de autor</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1>Lista de autor</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id</th><th> nome</th><th> nacionalidade</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/AutorDao.php");
        $dao=new AutorDao();
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