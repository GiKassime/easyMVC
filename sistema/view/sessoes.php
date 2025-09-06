<html>
    <head>
        <title>Cadastro de sessoes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/sessoesControl.php?a=1" method="post">
        <h1>Cadastro de sessoes</h1>
            <label for='id_sessao'>id_sessao</label>
<input type='text' name='id_sessao'><br>
<label for='id_filme'>id_filme</label>
<input type='text' name='id_filme'><br>
<label for='id_sala'>id_sala</label>
<input type='text' name='id_sala'><br>
<label for='data'>data</label>
<input type='text' name='data'><br>
<label for='horario'>horario</label>
<input type='text' name='horario'><br>
<label for='preco'>preco</label>
<input type='text' name='preco'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>