<?php
    require_once('../dao/autorDao.php');
    $obj=null;
    if(isset($_GET['id']))
        $obj=(new autorDao())->buscaPorId($_GET['id']);

    $acao=$obj? 3:1; 
    $nome = $acao == 1 ? "Cadastrar" : "Editar";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $nome ?> de autor</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="container">
            <form id="form-autor" class="form-moderno" action="../control/autorControl.php?a=<?php echo $acao ?><?php if(isset($_GET['id'])) {echo '&id='.$_GET['id'];} ?>" method="post">
                <h2><?= $nome ?> autor</h2>
                
<input type='hidden' id='id' name='id' value='<?php echo $obj?$obj['id']:''; ?>'>

<div class="campo-grupo">
<label for='nome'>Nome</label>
<input type='text' id='nome' name='nome' value='<?php echo $obj?$obj['nome']:''; ?>' required>
 </div>

<div class="campo-grupo">
<label for='nacionalidade'>Nacionalidade</label>
<input type='text' id='nacionalidade' name='nacionalidade' value='<?php echo $obj?$obj['nacionalidade']:''; ?>' required>
 </div>

                <button type="submit" class="btn-submit"><?= $acao == 1 ? 'Cadastrar' : 'Atualizar' ?></button>
            </form>
        </div>
    </body>
</html>