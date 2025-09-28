<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de categoria</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="tabela-container">
            <h2>Lista de categoria</h2>
            <a href="../view/categoria.php" class="btn">+ Novo categoria</a>
            
            <?php
            require_once("../dao/categoriaDao.php");
            $dao = new categoriaDAO();
            $dados = $dao->listaGeral();
            
            if (!empty($dados)) {
                echo "<table>";
                echo "<tr>";
                        echo "<th>Id</th>";
        echo "<th>Descricao</th>";

                echo "<th>Ações</th>";
                echo "</tr>";
                
                foreach($dados as $dado) {
                    echo "<tr>";
                        echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['descricao']}</td>";

                    echo "<td>";
                    echo "<a href='../view/categoria.php?id={$dado['id']}'>✏️ Editar</a> ";
                    echo "<a href='../control/categoriaControl.php?id={$dado['id']}&a=2' onclick='return confirm(\"Tem certeza que deseja excluir?\")' style='color: #ff4757;'>🗑️ Excluir</a>";
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