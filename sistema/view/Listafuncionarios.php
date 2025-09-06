<html>
    <head>
        <title>Lista de funcionarios</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <div class="tabela-container">
        <h1>Lista de funcionarios</h1>
        <table border='1'>
            <thead>
                <tr>
                <th> id_funcionario</th><th> nome</th><th> cargo</th><th> salario</th><th>Excluir</th><th>Alterar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../dao/FuncionariosDao.php");
        $dao=new FuncionariosDao();
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