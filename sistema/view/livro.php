<html>
    <head>
        <title>Cadastro de livro</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/livroControl.php?a=1" method="post">
        <h1>Cadastro de livro</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='titulo'>titulo</label>
<input type='text' name='titulo'><br>
<label for='ano_publicacao'>ano_publicacao</label>
<input type='text' name='ano_publicacao'><br>
<label for='id_autor'>id_autor</label>
<input type='text' name='id_autor'><br>
<label for='id_categoria'>id_categoria</label>
<input type='text' name='id_categoria'><br>
<label for='preco'>preco</label>
<input type='text' name='preco'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>