<html>
    <head>
        <title>Cadastro de filmes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/filmesControl.php?a=1" method="post">
        <h1>Cadastro de filmes</h1>
            <label for='id_filme'>id_filme</label>
<input type='text' name='id_filme'><br>
<label for='titulo'>titulo</label>
<input type='text' name='titulo'><br>
<label for='genero'>genero</label>
<input type='text' name='genero'><br>
<label for='duracao'>duracao</label>
<input type='text' name='duracao'><br>
<label for='classificacao'>classificacao</label>
<input type='text' name='classificacao'><br>
<label for='sinopse'>sinopse</label>
<input type='text' name='sinopse'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>