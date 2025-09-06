<html>
    <head>
        <title>Cadastro de ingressos</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <form action="../control/ingressosControl.php?a=1" method="post">
        <h1>Cadastro de ingressos</h1>
            <label for='id_ingresso'>id_ingresso</label>
<input type='text' name='id_ingresso'><br>
<label for='id_sessao'>id_sessao</label>
<input type='text' name='id_sessao'><br>
<label for='id_cliente'>id_cliente</label>
<input type='text' name='id_cliente'><br>
<label for='quantidade'>quantidade</label>
<input type='text' name='quantidade'><br>
<label for='data_compra'>data_compra</label>
<input type='text' name='data_compra'><br>

             <button type="submit">Enviar</button>
        </form>
    </body>
</html>