<html>
    <head>
        <title>Lista de livros</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de livros</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id</th><th> titulo</th><th> genero</th><th> qtd_paginas</th><th> autor</th><th> link_img</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/LivrosDao.php");
        $dao=new LivrosDao();
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