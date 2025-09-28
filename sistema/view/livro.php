<?php
    require_once('../dao/livroDao.php');
    $obj=null;
    if(isset($_GET['id']))
        $obj=(new livroDao())->buscaPorId($_GET['id']);

    $acao=$obj? 3:1; 
    $nome = $acao == 1 ? "Cadastrar" : "Editar";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $nome ?> de livro</title>
        <link rel="stylesheet" href="../../estilos.css">
    </head>
    <body class="form-page">
        <div class="container">
            <form id="form-livro" class="form-moderno" action="../control/livroControl.php?a=<?php echo $acao ?><?php if(isset($_GET['id'])) {echo '&id='.$_GET['id'];} ?>" method="post">
                <h2><?= $nome ?> livro</h2>
                
<input type='hidden' id='id' name='id' value='<?php echo $obj?$obj['id']:''; ?>'>

<div class="campo-grupo">
<label for='titulo'>Titulo</label>
<input type='text' id='titulo' name='titulo' value='<?php echo $obj?$obj['titulo']:''; ?>' required>
 </div>

<div class="campo-grupo">
<label for='ano_publicacao'>Ano publicacao</label>
<input type='text' id='ano_publicacao' name='ano_publicacao' value='<?php echo $obj?$obj['ano_publicacao']:''; ?>' required>
 </div>

<div class="campo-grupo">
<label for='id_autor'>Id autor</label>
<input type='number' id='id_autor' name='id_autor' value='<?php echo $obj?$obj['id_autor']:''; ?>' required>
 </div>

<div class="campo-grupo">
<label for='id_categoria'>Id categoria</label>
<input type='number' id='id_categoria' name='id_categoria' value='<?php echo $obj?$obj['id_categoria']:''; ?>' required>
 </div>

<div class="campo-grupo">
<label for='preco'>Preco</label>
<input type='text' id='preco' name='preco' value='<?php echo $obj?$obj['preco']:''; ?>' required>
 </div>

                <button type="submit" class="btn-submit"><?= $acao == 1 ? 'Cadastrar' : 'Atualizar' ?></button>
            </form>
        </div>
    </body>
</html>