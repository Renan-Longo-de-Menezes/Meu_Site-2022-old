<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembrar Senha</title>
    <link rel="shortcut icon" href="../img/estrela.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos-exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="ex-header">
        <h1>Lembrar Senha</h1>
        <p>Recuperação de acesso</p>
    </header>

    <main class="ex-main">
        <div class="ex-card login-card">
            <div class="login-icon">🔑</div>
            <h2>Esqueceu sua senha?</h2>
            <p class="subtitle">Digite seu login para verificarmos sua pergunta secreta</p>

            <form action="pergunta_secreta.php" method="post" enctype="multipart/form-data" name="formlembrar" class="ex-form">
                <div class="form-group">
                    <label for="login">Digite seu login</label>
                    <input type="text" id="login" name="login" size="35" maxlength="200" placeholder="Seu usuário" required>
                </div>

                <div class="form-actions">
                    <input type="submit" name="Verificar" value="VERIFICAR" class="btn btn-primary">
                </div>

                <div class="login-links">
                    <a href="../sistema.html" class="login-link">← Voltar ao login</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="ex-footer">
        <p>Desenvolvido por <strong>Renan Longo de Menezes</strong> — Nº24 — 2EMCC</p>
    </footer>
</body>
</html>
