<html>
    <head>
        <title>Cadastro de autor</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/autorControl.php?a=1" method="post">
        <h1>Cadastro de autor</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='nacionalidade'>nacionalidade</label>
<input type='text' name='nacionalidade'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>