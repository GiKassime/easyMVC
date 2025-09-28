<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de autor</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="tabela-container">
            <h2>Lista de autor</h2>
            <a href="../view/autor.php" class="btn">+ Novo autor</a>
            
            <?php
            require_once("../dao/autorDao.php");
            $dao = new autorDAO();
            $dados = $dao->listaGeral();
            
            if (!empty($dados)) {
                echo "<table>";
                echo "<tr>";
                        echo "<th>Id</th>";
        echo "<th>Nome</th>";
        echo "<th>Nacionalidade</th>";

                echo "<th>Ações</th>";
                echo "</tr>";
                
                foreach($dados as $dado) {
                    echo "<tr>";
                        echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['nome']}</td>";
echo "<td>{$dado['nacionalidade']}</td>";

                    echo "<td>";
                    echo "<a href='../view/autor.php?id={$dado['id']}'>✏️ Editar</a> ";
                    echo "<a href='../control/autorControl.php?id={$dado['id']}&a=2' onclick='return confirm(\"Tem certeza que deseja excluir?\")' style='color: #ff4757;'>🗑️ Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='text-align: center; color: #666; margin-top: 2rem;'>Nenhum registro encontrado.</p>";
            }
            ?>
        </div>
    </body>
</html>