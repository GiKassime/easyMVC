<html>
    <head>
        <title>Cadastro de cursos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/cursosControl.php?a=1" method="post">
        <h1>Cadastro de cursos</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='turno'>turno</label>
<input type='text' name='turno'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>