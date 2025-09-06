<html>
    <head>
        <title>Lista de salas</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de salas</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_sala</th><th> nome</th><th> capacidade</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/SalasDao.php");
        $dao=new SalasDao();
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