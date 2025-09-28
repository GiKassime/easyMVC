<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de livro</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="tabela-container">
            <h2>Lista de livro</h2>
            <a href="../view/livro.php" class="btn">+ Novo livro</a>
            
            <?php
            require_once("../dao/livroDao.php");
            $dao = new livroDAO();
            $dados = $dao->listaGeral();
            
            if (!empty($dados)) {
                echo "<table>";
                echo "<tr>";
                        echo "<th>Id</th>";
        echo "<th>Titulo</th>";
        echo "<th>Ano publicacao</th>";
        echo "<th>Id autor</th>";
        echo "<th>Id categoria</th>";
        echo "<th>Preco</th>";

                echo "<th>Ações</th>";
                echo "</tr>";
                
                foreach($dados as $dado) {
                    echo "<tr>";
                        echo "<td>{$dado['id']}</td>";
echo "<td>{$dado['titulo']}</td>";
echo "<td>{$dado['ano_publicacao']}</td>";
echo "<td>{$dado['id_autor']}</td>";
echo "<td>{$dado['id_categoria']}</td>";
echo "<td>{$dado['preco']}</td>";

                    echo "<td>";
                    echo "<a href='../view/livro.php?id={$dado['id']}'>✏️ Editar</a> ";
                    echo "<a href='../control/livroControl.php?id={$dado['id']}&a=2' onclick='return confirm(\"Tem certeza que deseja excluir?\")' style='color: #ff4757;'>🗑️ Excluir</a>";
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