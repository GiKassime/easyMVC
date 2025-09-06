<html>
    <head>
        <title>Lista de clientes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de clientes</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_cliente</th><th> nome</th><th> email</th><th> telefone</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/ClientesDao.php");
        $dao=new ClientesDao();
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