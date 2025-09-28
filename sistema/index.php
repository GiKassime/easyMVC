        <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body class="sistema-principal">
    <div class="header">
        <div >
            <div class="logo">Biblioteca</div>
            
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link">📋 Inserir</a>
                        <div class="dropdown">
                            <a href='./view/Autor.php'  class='dropdown-link' target='iframe' >Autor</a>
<a href='./view/Categoria.php'  class='dropdown-link' target='iframe' >Categoria</a>
<a href='./view/Livro.php'  class='dropdown-link' target='iframe' >Livro</a>
                           
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">📊 Listar</a>
                        <div class="dropdown">
                            <a href='./view/listaAutor.php' class='dropdown-link' target='iframe'>Autor</a>
<a href='./view/listaCategoria.php' class='dropdown-link' target='iframe'>Categoria</a>
<a href='./view/listaLivro.php' class='dropdown-link' target='iframe'>Livro</a>

                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="main-content">
        <div >
            <div class="iframe-container">
                <iframe id="contentFrame" name="iframe" src="inicio.html"  seamless>
                    Seu navegador não suporta iframes.
                </iframe>
            </div>
        </div>
    </div>

</body>
</html>