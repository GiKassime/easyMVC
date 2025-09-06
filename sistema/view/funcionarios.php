<html>
    <head>
        <title>Cadastro de funcionarios</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/funcionariosControl.php?a=1" method="post">
        <h1>Cadastro de funcionarios</h1>
            <label for='id_funcionario'>id_funcionario</label>
<input type='text' name='id_funcionario'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='cargo'>cargo</label>
<input type='text' name='cargo'><br>
<label for='salario'>salario</label>
<input type='text' name='salario'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>