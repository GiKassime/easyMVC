<?php
    require_once('../dao/categoriaDao.php');
    $obj=null;
    if(isset($_GET['id']))
        $obj=(new categoriaDao())->buscaPorId($_GET['id']);

    $acao=$obj? 3:1; 
    $nome = $acao == 1 ? "Cadastrar" : "Editar";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $nome ?> de categoria</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="container">
            <form id="form-categoria" class="form-moderno" action="../control/categoriaControl.php?a=<?php echo $acao ?><?php if(isset($_GET['id'])) {echo '&id='.$_GET['id'];} ?>" method="post">
                <h2><?= $nome ?> categoria</h2>
                
<input type='hidden' id='id' name='id' value='<?php echo $obj?$obj['id']:''; ?>'>

<div class="campo-grupo">
<label for='descricao'>Descricao</label>
<input type='text' id='descricao' name='descricao' value='<?php echo $obj?$obj['descricao']:''; ?>' required>
 </div>

                <button type="submit" class="btn-submit"><?= $acao == 1 ? 'Cadastrar' : 'Atualizar' ?></button>
            </form>
        </div>
    </body>
</html>