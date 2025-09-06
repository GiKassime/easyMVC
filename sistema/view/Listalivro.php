<html>
    <head>
        <title>Lista de livro</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <h1>Lista de livro</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id</th><th> titulo</th><th> ano_publicacao</th><th> id_autor</th><th> id_categoria</th><th> preco</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/LivroDao.php");
        $dao=new LivroDao();
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