<html>
    <head>
        <title>Lista de ingressos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de ingressos</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_ingresso</th><th> id_sessao</th><th> id_cliente</th><th> quantidade</th><th> data_compra</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/IngressosDao.php");
        $dao=new IngressosDao();
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