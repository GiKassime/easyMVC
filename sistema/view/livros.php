<html>
    <head>
        <title>Cadastro de livros</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/livrosControl.php?a=1" method="post">
        <h1>Cadastro de livros</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='titulo'>titulo</label>
<input type='text' name='titulo'><br>
<label for='genero'>genero</label>
<input type='text' name='genero'><br>
<label for='qtd_paginas'>qtd_paginas</label>
<input type='text' name='qtd_paginas'><br>
<label for='autor'>autor</label>
<input type='text' name='autor'><br>
<label for='link_img'>link_img</label>
<input type='text' name='link_img'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>