<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cadastro</title>
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos-exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="ex-header">
        <h1>Cadastro Recebido</h1>
        <p>Dados do formulário</p>
    </header>

    <main class="ex-main">
        <div class="ex-card">
            <h2>✅ Dados enviados</h2>
            <p class="subtitle">Confira as informações recebidas do formulário</p>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nome   = $_POST['nome']   ?? '—';
                $ender  = $_POST['ender']  ?? '—';
                $telef  = $_POST['telef']  ?? '—';
                $cidad  = $_POST['cidad']  ?? '—';
            ?>
                <div class="result-box" style="padding:0;overflow:hidden;">
                    <table class="data-table">
                        <tr>
                            <td class="data-label">👤 Nome</td>
                            <td class="data-value"><?= htmlspecialchars($nome) ?></td>
                        </tr>
                        <tr>
                            <td class="data-label">📍 Endereço</td>
                            <td class="data-value"><?= htmlspecialchars($ender) ?></td>
                        </tr>
                        <tr>
                            <td class="data-label">📞 Telefone</td>
                            <td class="data-value"><?= htmlspecialchars($telef) ?></td>
                        </tr>
                        <tr>
                            <td class="data-label">🏙️ Cidade</td>
                            <td class="data-value"><?= htmlspecialchars($cidad) ?></td>
                        </tr>
                    </table>
                </div>

                <div style="text-align:center;margin-top:24px;">
                    <a href="ex1.html" class="btn btn-primary">← Voltar ao formulário</a>
                </div>
            <?php
            } else {
                echo "<div class='result-box' style='border-left-color:#DC143C;'>
                        ⚠️ Nenhum dado recebido. <a href='ex1.html' style='color:#48d1cc;'>Volte ao formulário</a>.
                      </div>";
            }
            ?>
        </div>
    </main>

    <footer class="ex-footer">
        <p>Desenvolvido por <strong>Renan Longo de Menezes</strong> — Nº24 — 2EMCC</p>
    </footer>
</body>
</html>
