<html>
    <head>
        <title>Cadastro de clientes</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/clientesControl.php?a=1" method="post">
        <h1>Cadastro de clientes</h1>
            <label for='id_cliente'>id_cliente</label>
<input type='text' name='id_cliente'><br>
<label for='nome'>nome</label>
<input type='text' name='nome'><br>
<label for='email'>email</label>
<input type='text' name='email'><br>
<label for='telefone'>telefone</label>
<input type='text' name='telefone'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>