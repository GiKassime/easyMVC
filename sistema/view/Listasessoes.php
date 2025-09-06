<html>
    <head>
        <title>Lista de sessoes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de sessoes</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_sessao</th><th> id_filme</th><th> id_sala</th><th> data</th><th> horario</th><th> preco</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/SessoesDao.php");
        $dao=new SessoesDao();
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