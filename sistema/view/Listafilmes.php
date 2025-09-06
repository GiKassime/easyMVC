<html>
    <head>
        <title>Lista de filmes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de filmes</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_filme</th><th> titulo</th><th> genero</th><th> duracao</th><th> classificacao</th><th> sinopse</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/FilmesDao.php");
        $dao=new FilmesDao();
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
</div>
    </body>
</html>