<html>
    <head>
        <title>Cadastro de alunos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/alunosControl.php?a=1" method="post">
        <h1>Cadastro de alunos</h1>
            <label for='id'>id</label>
<input type='text' name='id'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='idade'>idade</label>
<input type='text' name='idade'><br>
<label for='estrangeiro'>estrangeiro</label>
<input type='text' name='estrangeiro'><br>
<label for='id_curso'>id_curso</label>
<input type='text' name='id_curso'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>