<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyMVC - Gerador de Sistema</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="js/funcoes.js"></script>
</head>
<body class="form-page">
    <div class="container">
        <form id="form-config" class="form-moderno" action="creator.php" method="POST">
            <?php
            include 'mensagens.php';
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                $classe = $msg == 2 ? 'mensagem' : 'mensagem_erro';
                echo "<div class=\"$classe\">" . ($mensagens[$msg] ?? "Erro desconhecido") . "</div>";
            }
            ?>
            
            <h2>🚀 EasyMVC</h2>
         

            <div class="campo-grupo">
                <label for="servidor">🖥️ Servidor MySQL</label>
                <input type="text" id="servidor" name="servidor" placeholder="localhost" required>
            </div>

            <div class="campo-grupo">
                <label for="nome">📝 Nome do Sistema</label>
                <input type="text" id="nome" name="nome" placeholder="Meu Sistema" required>
            </div>

            <div class="campo-grupo">
                <label for="usuario">👤 Usuário do Banco</label>
                <input type="text" id="usuario" name="usuario" placeholder="root" required>
            </div>

            <div class="campo-grupo">
                <label for="senha">🔑 Senha</label>
                <input type="password" id="senha" name="senha" placeholder="••••••••" onblur="carregarBanco()">
            </div>

            <div class="campo-grupo">
                <label for="banco">🗄️ Banco de Dados</label>
                <select id="banco" name="banco" required>
                    <option value="">Selecione um banco de dados</option>
                </select>
            </div>

            <div id="carregando" style="text-align: center; color: #667eea; font-size: 14px; margin: 10px 0;"></div>

            <button type="submit" class="btn-submit">✨ Gerar Sistema MVC</button>
    
        </form>
    </div>
</body>
</html>
