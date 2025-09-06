<html>
    <head>
        <title>Cadastro de salas</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/salasControl.php?a=1" method="post">
        <h1>Cadastro de salas</h1>
            <label for='id_sala'>id_sala</label>
<input type='text' name='id_sala'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='capacidade'>capacidade</label>
<input type='text' name='capacidade'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>